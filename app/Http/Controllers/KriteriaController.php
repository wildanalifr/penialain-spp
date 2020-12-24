<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;

class KriteriaController extends Controller
{
	public function index(){
		$data = Kriteria::get();
		return view('kriteria', ['datas' => $data]);
	}

	public function store(Request $request){
		Kriteria::insert([
			'nm_kriteria' => $request->nama
		]);
		return back()->with('success', 'kriteria telah diinput');
	}

	public function update(Request $request){
		Kriteria::where('id_kriteria', $request->id)->update([
			'nm_kriteria' => $request->nama
		]);
		return back()->with('success', 'kriteria telah diedit');
	}

	public function delete($id){
		Kriteria::where('id_kriteria', $id)->delete();
		return back()->with('success', 'kriteria telah diedit');
	}
}
