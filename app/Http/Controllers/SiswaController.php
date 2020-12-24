<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(){
    	$data = Siswa::get();
    	return view('siswa', ['datas' => $data]);
    }

    public function store(Request $request){
    	Siswa::insert([
    		'nm_siswa' => $request->nama
    	]);
    	return back()->with('success', 'Siswa telah diinput');
    }

    public function update(Request $request){
    	Siswa::where('id_siswa', $request->id)->update([
    		'nm_siswa' => $request->nama
    	]);
    	return back()->with('success', 'Siswa telah diedit');
    }

	public function delete($id){
    	Siswa::where('id_siswa', $id)->delete();
    	return back()->with('success', 'Siswa telah diedit');
    }
}
