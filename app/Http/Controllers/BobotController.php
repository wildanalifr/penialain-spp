<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bobot;
use App\Kriteria;
use App\Skala;
use App\PerbaikanBobot;

class BobotController extends Controller
{
	public function index(){
		$data = Bobot::join('kriteria', 'kriteria.id_kriteria', '=', 'bobot.id_kriteria')
		->join('skala', 'skala.id_skala', '=', 'bobot.id_skala')
		->select('bobot.*', 'kriteria.nm_kriteria', 'skala.nm_skala', 'skala.value')->get();
		$dataK = Kriteria::get();
		$dataS = Skala::get();
		$dataBobot = $bobot1 = Bobot::join('skala', 'skala.id_skala', '=', 'bobot.id_skala')->select('value')->sum('value');
		return view('bobot', ['datas' => $data, 'kriterias' => $dataK, 'skalas' => $dataS, 'sum'=> $dataBobot]);
	}

	public function store(Request $request){
		Bobot::insert([
			'id_kriteria' => $request->kriteria,
			'id_skala' => $request->skala,
		]);

		return back()->with('success', 'Bobot telah diinput');
	}

	public function update(Request $request){
		Bobot::where('id_bobot', $request->id)->update([
			'id_kriteria' => $request->kriteria,
			'id_skala' => $request->skala,
		]);
		return back()->with('success', 'Bobot telah diedit');
	}

	public function delete($id){
		Bobot::where('id_bobot', $id)->delete();
		return back()->with('success', 'Bobot telah diedit');
	}
}
