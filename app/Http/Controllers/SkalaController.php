<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skala;

class SkalaController extends Controller
{
	public function index(){
		$data = Skala::get();
		$dataBobot = Skala::sum('value');
		return view('skala', ['datas' => $data, 'sum' => $dataBobot]);
	}

	public function store(Request $request){
		Skala::insert([
			'nm_skala' => $request->nama,
			'value' => $request->value
		]);
		return back()->with('success', 'Skala telah diinput');
	}

	public function update(Request $request){
		Skala::where('id_skala', $request->id)->update([
			'nm_skala' => $request->nama,
			'value' => $request->value
		]);
		return back()->with('success', 'Skala telah diedit');
	}

	public function delete($id){
		Skala::where('id_skala', $id)->delete();
		return back()->with('success', 'Skala telah diedit');
	}
}
