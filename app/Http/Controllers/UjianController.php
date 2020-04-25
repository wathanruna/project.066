<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujian;
use Carbon\Carbon;
class UjianController extends Controller
{
    public function index(){
        $data = Ujian::all();
        return view('index',['data' => $data]);
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'namamk' => 'required',
    		'dosen' => 'required',
    		'jml' => 'required',
    		'ket' => 'required'
    	]);
 
        Ujian::create([
    		'nama_mk' => $request->namamk,
    		'dosen' => $request->dosen,
    		'jumlah_soal' => $request->jml,
    		'keterangan' => $request->ket
    		
    	]);
 
    	return redirect('/');
    }

    public function upd($id){
        $data = Ujian::find($id);
        return view('upd', ['data' => $data]);
        
    }

    public function edit ($id, Request $request){
        $this->validate($request,[
            'namamk' => 'required',
            'dosen' => 'required',
            'jml' => 'required',
            'ket' => 'required'
        ]);

        $data = Ujian::find($id);
        $data->nama_mk = $request->namamk;
        $data->dosen = $request->dosen;
        $data->jumlah_soal = $request->jml;
        $data->keterangan = $request->ket;
        $data->save();
        return redirect('/');

    }



    public function del($id){
        $data = Ujian::find($id);
        $data->delete();
        return redirect('/');
    }
}
