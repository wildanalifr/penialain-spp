<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skala;
use App\Penilaian;
use App\Bobot;
use App\HasilS;


class TestController extends Controller
{	
	public function index(Request $request){
		$row = HasilS::join('hasil_s as hasils', 'hasils.id_siswa', '=', 'hasil_s.id_siswa')
		->select('hasil_s.nilai_s')->pluck('hasil_s.nilai_s');

		$col = HasilS::join('hasil_s as hasils', 'hasils.id_siswa', '=', 'hasil_s.id_siswa')
		->select('hasil_s.nilai_s', 'hasil_s.id_hasil_s')->pluck('hasil_s.id_hasil_s');

		$n = count($col);

		for ($i=0; $i < $n; $i++) {
			
		}
	}	
}
