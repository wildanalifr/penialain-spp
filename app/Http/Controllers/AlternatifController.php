<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;

class AlternatifController extends Controller
{
	public function index(){
		$data = Alternatif::get();
		return view('alternatif', ['datas' => $data]);
	}

	public function store(Request $request){
		Alternatif::insert([
			'nm_alternatif' => $request->nama
		]);
		return back()->with('success', 'Alternatif telah diinput');
	}

	public function update(Request $request){
		Alternatif::where('id_alternatif', $request->id)->update([
			'nm_alternatif' => $request->nama
		]);
		return back()->with('success', 'Alternatif telah diedit');
	}

	public function delete($id){
		Alternatif::where('id_alternatif', $id)->delete();
		return back()->with('success', 'Alternatif telah diedit');
	}
}
