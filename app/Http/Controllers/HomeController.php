<?php

namespace App\Http\Controllers;

use App\db_bills;
use App\db_close_day;
use App\db_credit;
use App\db_summary;
use App\db_supervisor_has_agent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $valorIngresado=0;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $valorIngresado= null;
        $data_summary = db_summary::whereDate('summary.created_at',
            Carbon::now()->toDateString())
            ->where('credit.id_agent', Auth::id())
            ->join('credit', 'summary.id_credit', '=', 'credit.id')
            ->join('users', 'credit.id_user', '=', 'users.id')
            ->select(
                'users.name',
                'users.last_name',
                'credit.payment_number',
                'credit.utility',
                'credit.amount_neto',
                'credit.id as id_credit',
                'summary.number_index',
                'summary.amount',
                'summary.created_at'
            )
            ->groupBy('summary.id')
            ->get(); 

        $close_day = db_close_day::whereDate('created_at', Carbon::now()->toDateString())
            ->where('id_agent', Auth::id())
            ->first();

        $base = db_supervisor_has_agent::where('id_user_agent', Auth::id())->first()->base ?? 0;
        $base_credit = db_credit::whereDate('created_at', Carbon::now()->toDateString())
            ->where('id_agent', Auth::id())
            ->sum('amount_neto');
        $base -= $base_credit;

        $total_summary = $data_summary->sum('amount');

        $sql = array(
            ['id_agent', '=', Auth::id()]
        );
        $sql[] = ['bills.created_at', '>=', Carbon::now()->startOfDay()];
        $sql[] = ['bills.created_at', '<=', Carbon::now()->endOfDay()];

        $today_sell = db_credit::whereDate('created_at','=',Carbon::now()->toDateString())
                ->where('id_agent', '=', Auth::id())
                ->sum('amount_neto');

        $bill = db_bills::where($sql)
            ->join('wallet', 'bills.id_wallet', '=', 'wallet.id')
            ->select('bills.*', 'wallet.name as wallet_name')
            ->get();

        $dato = json_decode($data_summary, true);
        if (!empty($dato)) 
        {
            $ultimaFila = end($dato);
            if (is_array($ultimaFila)) {
                $valorIngresado = $ultimaFila['amount'];
            }
        }

        $data = [
            'base_agent' => $base,
            'total_bill' => $bill->sum('amount'),
            'total_summary' => $total_summary,
            'close_day' => $close_day,
            'today_sell'=> $today_sell,
            'valorIngresado' => $valorIngresado
        ];

        

        return view('home',$data);
    }
}
