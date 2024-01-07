<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Dokter;
use App\Models\Buatjanji;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype== '0')
            {
                $dokter = dokter::all();
                return view('user.home',compact('dokter'));
            }
            else
            {
            return view('admin.home'); 
            }
        }
        
        else
        {
            return redirect()->back();
        }

    }
    public function index()
    {   
        if(Auth::id())
        {
            return redirect('home');
        }
        else{
        $dokter = dokter::all();
        return view ('user.home', compact('dokter'));
        }
    }
    public function buatjanji(Request $request)
    {
        $data = new buatjanji;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->no_hp=$request->no_hp;
        $data->pesan=$request->pesan;
        $data->dokter=$request->dokter;
        $data->status='In Progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Berhasil Membuat Janji. Kami Akan Memberitahu Anda Segera');
    }
    public function aboutus()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
            $dokter = dokter::all();
            return view ('user.about', compact('dokter'));
            }else{
                return redirect('login');
            }
        }
    }
    public function doctors()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
            $dokter = dokter::all();
            return view ('user.doctors', compact('dokter'));
            }else{
                return redirect('login');
            }
        }
    }
    public function myappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
            $userid=Auth::user()->id;
            $appoint=buatjanji::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
    }
    public function batalkan_janji($id)
    {
        $data=buatjanji::find($id);
        $data->delete();
        return redirect()->back();
    }
}