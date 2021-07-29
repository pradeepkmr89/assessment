<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        DB::connection()->enableQueryLog();

        $user = Auth::user();

        $partner_occupation = explode(',',$user->partner_occupation);
        $partner_income_from = $user->partner_income_from;
        $partner_income_to = $user->partner_income_to;
        $partner_manglik = $user->partner_manglik;
        $partner_fam_type = explode(',',$user->partner_fam_type);

         $data = User::where(['manglik'=>$partner_manglik, ['id', '<>', $user->id] ])
                            ->whereIn('fam_type', $partner_fam_type)
                            ->whereIn('occupation', $partner_occupation)
                            ->whereBetween('income',[$partner_income_from ,$partner_income_to])
                            ->get();
 
                       
 
                // dd(DB::getQueryLog());
         return view('home', compact('data'));
    }
}
