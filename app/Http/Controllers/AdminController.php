<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Buatjanji;
use App\Models\Dokter;

class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.tambah_dokter');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
    }
    public function upload(Request $request)
    {
        $dokter=new dokter;
        $foto= $request->foto;
    $namafoto=time().'.'.$foto->getClientOriginalExtension();
    $request->foto->move('fotodokter',$namafoto);
    $dokter->foto=$namafoto;
    $dokter->name= $request->name;
    $dokter->no_hp= $request->no_hp;
    $dokter->ruangan= $request->ruangan;
    $dokter->spesialisasi= $request->spesialisasi;

    $dokter->save();
    return redirect()->back()->with('message', 'Berhasil Menambahkan Dokter');
    }

    public function show_janji()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=buatjanji::all();
                return view('admin.show_janji', compact('data'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
    }

    public function approved($id)
    {
        $data=buatjanji::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data=buatjanji::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function show_dokter()
    {
        $data=dokter::all();
        return view('admin.show_dokter', compact('data'));
    }

    public function delete_dokter($id)
    {
        $data=dokter::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_dokter($id)
    {
        $data=dokter::find($id);
        return view('admin.update_dokter', compact('data'));
    }

    public function edit_dokter(Request $request, $id)
    {
        $dokter=dokter::find($id);
        $dokter->name=$request->name;
        $dokter->no_hp=$request->no_hp;
        $dokter->spesialisasi=$request->spesialisasi;
        $dokter->ruangan=$request->ruangan;

        $foto=$request->foto;
        if($foto)
        {
        $namafoto=time().'.'.$foto->getClientOriginalExtension();
        $request->foto->move('fotodokter',$namafoto);
        $dokter->foto=$namafoto;
        }
        $dokter->save();
        return redirect()->back()->with('message','Berhasil Edit Detail Dokter');
    }
}
