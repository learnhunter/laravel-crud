<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
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
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }


    public function PasswordChange()
    {
        return view('auth.passwords.change_password');
    }

    public function PasswordUpdate(Request $request)
    {
          $validatedData = $request->validate([
              'oldpass' => 'required|max:15|min:6',
              'password' => 'required|max:15|min:6|confirmed',
           ]);

          $currentpass=Auth::user()->password;

          $oldpass=$request->oldpass;
          $password=$request->password;
          
         if (Hash::check($oldpass, $currentpass)) {
                    
               $user=User::find(Auth::id());
               $user->password=Hash::make($password);
               $user->save();
               Auth::logout();
               $notification=array(
                        'messege'=>'Password Change Successfully',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('login')->with($notification);

         }else{
             $notification=array(
                        'messege'=>'Old password does not match',
                        'alert-type'=>'error'
                         );
            return Redirect()->back()->with($notification);
         }


    }


}
