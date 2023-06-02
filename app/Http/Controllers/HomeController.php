<?php

namespace App\Http\Controllers;

use App\Models\apointments;
use App\Models\appointments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function viewusers(){
        $user = DB::table('users')->where("role",'user')->get();
       
        return view('viewusers')->with('user',$user);

        

    }

    public function sendappoinment(Request $request){
        $data=new appointments();
        
        $data->p_name=$request->p_name;
        $data->d_name=$request->select;
        $data->date=$request->date;
        $data->status=0;
        $data->save();
        return redirect('/user')->with('update','Your Appointment  successfully Placed ! ');
    }

    function deleteEmp($id){
        $data=User::find($id);
        //dd($data);
        $data->delete();
        return redirect()->back()->with('delete','data has been deleted');
    }

    function deletepatient($id){
        $data=appointments::find($id);
        $data->delete();
        return redirect()->back()->with('delete','data has been deleted');

    }




    public function viewappoinment(){
        $user=appointments::all();
        return view('viewpatient')->with('user',$user);




    }
    function confirm($id){
        $data=appointments::find($id);
        $data->status = 1;
        $data->save();
        return back()->with('success', 'User status updated!');

    }


}
