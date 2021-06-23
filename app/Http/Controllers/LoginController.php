<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Admin;
use App\Customer;
use App\Vendor;
use App\Accountant;


class LoginController extends Controller
{
    public function index(){

        return view('login');

    }


    public function verify(LoginRequest $req){

        if(count($admin=DB::table('admins')
        ->where('email' , $req->email)
        ->where('password' , $req->password)
        ->get())>0){

                        $userEmail = DB::table('admins')->where('email',$req->email)->pluck('email');
                        $userUser_name = DB::table('admins')->where('email',$req->email)->pluck('user_name');
                        $userPassword = DB::table('admins')->where('email',$req->email)->pluck('password');
                                                                                        
                                                                                        

                        if($userPassword == $req->password){

                            $userDatabaseValue = Admin::find($req->email);
                            $req->session()->put('user_name', $userDatabaseValue->user_name);
                            $req->session()->put('user_type', $userDatabaseValue->user_type);
                          

                        }


                        return redirect('home');

                    
            


        }







        if(count($customer=DB::table('customers')
        ->where('email' , $req->email)
        ->where('password' , $req->password)
        ->get())>0){

                        $userEmail = DB::table('customers')->where('email',$req->email)->pluck('email');
                        $userUser_name = DB::table('customers')->where('email',$req->email)->pluck('user_name');
                        $userPassword = DB::table('customers')->where('email',$req->email)->pluck('password');
                                                                                        
                                                                                        

                        if($userPassword == $req->password){

                            $userDatabaseValue = customer::find($req->email);
                            $req->session()->put('user_name', $userDatabaseValue->user_name);
                            $req->session()->put('user_type', $userDatabaseValue->user_type);

                        }


                        return redirect('home');

                    
        
        }






        if(count($vendor=DB::table('vendors')
        ->where('email' , $req->email)
        ->where('password' , $req->password)
        ->get())>0){

                        $userEmail = DB::table('vendors')->where('email',$req->email)->pluck('email');
                        $userUser_name = DB::table('vendors')->where('email',$req->email)->pluck('user_name');
                        $userPassword = DB::table('vendors')->where('email',$req->email)->pluck('password');
                                                                                        
                                                                                        

                        if($userPassword == $req->password){

                            $userDatabaseValue = vendor::find($req->email);
                            $req->session()->put('user_name', $userDatabaseValue->user_name);
                            $req->session()->put('user_type', $userDatabaseValue->user_type);

                        }


                        return redirect('home');

                    

        }




        if(count($accountant=DB::table('accountants')
        ->where('email' , $req->email)
        ->where('password' , $req->password)
        ->get())>0){

                        $userEmail = DB::table('accountants')->where('email',$req->email)->pluck('email');
                        $userUser_name = DB::table('accountants')->where('email',$req->email)->pluck('user_name');
                        $userPassword = DB::table('accountants')->where('email',$req->email)->pluck('password');
                                                                                        
                                                                                        

                        if($userPassword == $req->password){

                            $userDatabaseValue = accountant::find($req->email);
                            $req->session()->put('user_name', $userDatabaseValue->user_name);
                            $req->session()->put('user_type', $userDatabaseValue->user_type);

                        }


                        return redirect('home');

                    

        }


        else{


            $req->session()->flash('msg', 'Type the correct email or password!');
            return redirect('login');


        }




        








    }
}
