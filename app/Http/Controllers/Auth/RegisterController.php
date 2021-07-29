<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $partner_incomeArr = explode(',', $data['partner_income']);
        return User::create([
            'name' => $data['fname'].' '.$data['lname'] ,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
             'dob' => date("Y-m-d", strtotime($data['dob'])),
              'gender' => $data['gender'],
              'occupation' => $data['occupation'],
              'fam_type' => $data['fam_type'],
              'manglik' => $data['manglik'],
              'income' => $data['income'],
              'partner_occupation' => implode(',',$data['partner_occupation']),
              'partner_income_from' => $partner_incomeArr[0],
              'partner_income_to' => $partner_incomeArr[1],
              'partner_fam_type' => implode(',',$data['partner_fam_type']),
              'partner_manglik' => $data['partner_manglik']
        ]);
    }
}
