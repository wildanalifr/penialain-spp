<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use App\Siswa;
use App\Bobot;
use App\Skala;
use App\Kriteria;
use App\HasilV;
use App\HasilS;
use DB;

class PenilaianController extends Controller
{
    public function index(){
    	$nilai = Penilaian::join('siswa', 'siswa.id_siswa', '=', 'penilaian.id_siswa')
    	->join('bobot', 'bobot.id_bobot', '=', 'penilaian.id_bobot')
    	->join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
    	->join('kriteria', 'kriteria.id_kriteria', '=', 'bobot.id_kriteria')
    	->select('penilaian.*', 'siswa.nm_siswa', 'skala.nm_skala', 'kriteria.nm_kriteria')
    	->get();
    	$siswa = Siswa::get();
    	$bobot = Bobot::join('kriteria', 'kriteria.id_kriteria', '=', 'bobot.id_kriteria')
    	->select('bobot.id_bobot', 'kriteria.nm_kriteria')
    	->get();
        DB::statement(DB::raw('set @row:=0'));
        $datas = Penilaian::join('penilaian as penilaians', 'penilaians.id_siswa', '=', 'penilaian.id_siswa')
        ->join('siswa', 'siswa.id_siswa', '=', 'penilaian.id_siswa')
        ->join('bobot', 'bobot.id_bobot', '=', 'penilaian.id_bobot')
        ->join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->join('kriteria', 'kriteria.id_kriteria', '=', 'bobot.id_kriteria')
        ->select('penilaian.*', 'siswa.nm_siswa', 'skala.nm_skala', 'kriteria.nm_kriteria')
        ->selectRaw('@row:=@row+1 as row')
        ->limit(5)->get();
        $skala = Skala::get();
        $angka = [1,2,3,4,5];
        return view('penilaian', ['nilais' => $nilai, 'siswas' => $siswa, 'bobots' => $bobot, 'skalas' => $skala, 'datas' => $datas, 'angkas' => $angka]);
    }

    public function store(Request $request){
        $data = [
            ['id_siswa'=>$request->siswa1, 'id_bobot'=> $request->bobot1, 'id_skala' => $request->skala1],
            ['id_siswa'=>$request->siswa2, 'id_bobot'=> $request->bobot2, 'id_skala' => $request->skala2],
            ['id_siswa'=>$request->siswa3, 'id_bobot'=> $request->bobot3, 'id_skala' => $request->skala3],
            ['id_siswa'=>$request->siswa4, 'id_bobot'=> $request->bobot4, 'id_skala' => $request->skala4],
            ['id_siswa'=>$request->siswa5, 'id_bobot'=> $request->bobot5, 'id_skala' => $request->skala5],
        ];
        if($request->siswa1 == $request->siswa2 && $request->siswa2 == $request->siswa3 && $request->siswa3 == $request->siswa4 && $request->siswa4 == $request->siswa5){
            Penilaian::insert($data);
            $nilai11 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_siswa');
            $nilai11 = str_replace('[', '', $nilai11);
            $nilai11 = str_replace(']', '', $nilai11);
            $nilai12 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_bobot');
            $nilai12 = str_replace('[', '', $nilai12);
            $nilai12 = str_replace(']', '', $nilai12);
            $nilai13 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_skala');
            $nilai13 = str_replace('[', '', $nilai13);
            $nilai13 = str_replace(']', '', $nilai13);

            $nilai21 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_siswa');
            $nilai21 = str_replace('[', '', $nilai21);
            $nilai21 = str_replace(']', '', $nilai21);
            $nilai22 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_bobot');
            $nilai22 = str_replace('[', '', $nilai22);
            $nilai22 = str_replace(']', '', $nilai22);
            $nilai23 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_skala');
            $nilai23 = str_replace('[', '', $nilai23);
            $nilai23 = str_replace(']', '', $nilai23);

            $nilai31 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_siswa');
            $nilai31 = str_replace('[', '', $nilai31);
            $nilai31 = str_replace(']', '', $nilai31);
            $nilai32 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_bobot');
            $nilai32 = str_replace('[', '', $nilai32);
            $nilai32 = str_replace(']', '', $nilai32);
            $nilai33 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_skala');
            $nilai33 = str_replace('[', '', $nilai33);
            $nilai33 = str_replace(']', '', $nilai33);

            $nilai41 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_siswa');
            $nilai41 = str_replace('[', '', $nilai41);
            $nilai41 = str_replace(']', '', $nilai41);
            $nilai42 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_bobot');
            $nilai42 = str_replace('[', '', $nilai42);
            $nilai42 = str_replace(']', '', $nilai42);
            $nilai43 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_skala');
            $nilai43 = str_replace('[', '', $nilai43);
            $nilai43 = str_replace(']', '', $nilai43);

            $nilai51 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_siswa');
            $nilai51 = str_replace('[', '', $nilai51);
            $nilai51 = str_replace(']', '', $nilai51);
            $nilai52 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_bobot');
            $nilai52 = str_replace('[', '', $nilai52);
            $nilai52 = str_replace(']', '', $nilai52);
            $nilai53 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_skala');
            $nilai53 = str_replace('[', '', $nilai53);
            $nilai53 = str_replace(']', '', $nilai53);

            $value1 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
            ->where('id_bobot', $nilai12)
            ->where('penilaian.id_skala', $nilai13)
            ->limit(1)
            ->pluck('value');
            $value1 = str_replace('[', '', $value1);
            $value1 = str_replace(']', '', $value1);
            $value1 = (int)$value1;

            $value2 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
            ->where('id_bobot', $nilai22)
            ->where('penilaian.id_skala', $nilai23)
            ->limit(1)
            ->pluck('value');   
            $value2 = str_replace('[', '', $value2);
            $value2 = str_replace(']', '', $value2);
            $value2 = (int)$value2;

            $value3 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
            ->where('id_bobot', $nilai32)
            ->where('penilaian.id_skala', $nilai33)
            ->limit(1)
            ->pluck('value');   
            $value3 = str_replace('[', '', $value3);
            $value3 = str_replace(']', '', $value3);
            $value3 = (int)$value3;

            $value4 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
            ->where('id_bobot', $nilai42)
            ->where('penilaian.id_skala', $nilai43)
            ->limit(1)
            ->pluck('value');   
            $value4 = str_replace('[', '', $value4);
            $value4 = str_replace(']', '', $value4);
            $value4 = (int)$value4;

            $value5 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
            ->where('id_bobot', $nilai52)
            ->where('penilaian.id_skala', $nilai53)
            ->limit(1)
            ->pluck('value');   
            $value5 = str_replace('[', '', $value5);
            $value5 = str_replace(']', '', $value5);
            $value5 = (int)$value5;

            $sum = Bobot::join('skala', 'skala.id_skala', '=', 'bobot.id_skala')->sum('value');
            $sum = str_replace('[', '', $sum);
            $sum = str_replace(']', '', $sum);
            $sum = (int)$sum;

            $perbaikan1 = 5/$sum;
            $perbaikan2 = 4/$sum;
            $perbaikan3 = 3/$sum;
            $perbaikan4 = 2/$sum;
            $perbaikan5 = 1/$sum;

            $get = pow($value1, $perbaikan1)*pow($value2, $perbaikan2)*pow($value3, $perbaikan3)*pow($value4, $perbaikan4)*pow($value5, $perbaikan5);
            HasilS::insert([
                'id_siswa' => $request->siswa1,
                'nilai_s' => $get,
            ]);

            $hasils = HasilS::orderBy('id_hasil_s','desc')->limit(1)->pluck('nilai_s');
            $hasils = str_replace('[', '', $hasils);
            $hasils = str_replace(']', '', $hasils);
            $hasils = (int)$hasils;
            $sums = HasilS::sum('nilai_s');
            $sums = str_replace('[', '', $sums);
            $sums = str_replace(']', '', $sums);
            $sums = (int)$sums;
            $values = $hasils/$sums;

            HasilV::insert([
                'id_siswa' => $request->siswa1,
                'nilai_v' => $values,
            ]);
        }else {
            return back();
        }
        return back();
    }

    public function update(Request $request){
        Penilaian::where('id_nilai', $request->nilai1)->update([
            'id_skala' => $request->skala1,
            'id_bobot' => $request->bobot1
        ]);
        Penilaian::where('id_nilai', $request->nilai2)->update([
            'id_skala' => $request->skala2,
            'id_bobot' => $request->bobot2
        ]);
        Penilaian::where('id_nilai', $request->nilai3)->update([
            'id_skala' => $request->skala3,
            'id_bobot' => $request->bobot3
        ]);
        Penilaian::where('id_nilai', $request->nilai4)->update([
            'id_skala' => $request->skala4,
            'id_bobot' => $request->bobot4
        ]);
        Penilaian::where('id_nilai', $request->nilai5)->update([
            'id_skala' => $request->skala5,
            'id_bobot' => $request->bobot5
        ]);
        $nilai11 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_siswa');
        $nilai11 = str_replace('[', '', $nilai11);
        $nilai11 = str_replace(']', '', $nilai11);
        $nilai12 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_bobot');
        $nilai12 = str_replace('[', '', $nilai12);
        $nilai12 = str_replace(']', '', $nilai12);
        $nilai13 = Penilaian::where('id_siswa', $request->siswa1)->where('id_bobot', $request->bobot1)->where('id_skala', $request->skala1)->pluck('id_skala');
        $nilai13 = str_replace('[', '', $nilai13);
        $nilai13 = str_replace(']', '', $nilai13);

        $nilai21 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_siswa');
        $nilai21 = str_replace('[', '', $nilai21);
        $nilai21 = str_replace(']', '', $nilai21);
        $nilai22 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_bobot');
        $nilai22 = str_replace('[', '', $nilai22);
        $nilai22 = str_replace(']', '', $nilai22);
        $nilai23 = Penilaian::where('id_siswa', $request->siswa2)->where('id_bobot', $request->bobot2)->where('id_skala', $request->skala2)->pluck('id_skala');
        $nilai23 = str_replace('[', '', $nilai23);
        $nilai23 = str_replace(']', '', $nilai23);

        $nilai31 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_siswa');
        $nilai31 = str_replace('[', '', $nilai31);
        $nilai31 = str_replace(']', '', $nilai31);
        $nilai32 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_bobot');
        $nilai32 = str_replace('[', '', $nilai32);
        $nilai32 = str_replace(']', '', $nilai32);
        $nilai33 = Penilaian::where('id_siswa', $request->siswa3)->where('id_bobot', $request->bobot3)->where('id_skala', $request->skala3)->pluck('id_skala');
        $nilai33 = str_replace('[', '', $nilai33);
        $nilai33 = str_replace(']', '', $nilai33);

        $nilai41 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_siswa');
        $nilai41 = str_replace('[', '', $nilai41);
        $nilai41 = str_replace(']', '', $nilai41);
        $nilai42 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_bobot');
        $nilai42 = str_replace('[', '', $nilai42);
        $nilai42 = str_replace(']', '', $nilai42);
        $nilai43 = Penilaian::where('id_siswa', $request->siswa4)->where('id_bobot', $request->bobot4)->where('id_skala', $request->skala4)->pluck('id_skala');
        $nilai43 = str_replace('[', '', $nilai43);
        $nilai43 = str_replace(']', '', $nilai43);

        $nilai51 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_siswa');
        $nilai51 = str_replace('[', '', $nilai51);
        $nilai51 = str_replace(']', '', $nilai51);
        $nilai52 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_bobot');
        $nilai52 = str_replace('[', '', $nilai52);
        $nilai52 = str_replace(']', '', $nilai52);
        $nilai53 = Penilaian::where('id_siswa', $request->siswa5)->where('id_bobot', $request->bobot5)->where('id_skala', $request->skala5)->pluck('id_skala');
        $nilai53 = str_replace('[', '', $nilai53);
        $nilai53 = str_replace(']', '', $nilai53);        

        $value1 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->where('id_siswa', $request->siswa1)
        ->where('id_bobot', $nilai12)
        ->where('penilaian.id_skala', $nilai13)
        ->limit(1)
        ->pluck('value');
        $value1 = str_replace('[', '', $value1);
        $value1 = str_replace(']', '', $value1);
        $value1 = (int)$value1;

        $value2 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->where('id_siswa', $request->siswa1)
        ->where('id_bobot', $nilai22)
        ->where('penilaian.id_skala', $nilai23)
        ->limit(1)
        ->pluck('value');   
        $value2 = str_replace('[', '', $value2);
        $value2 = str_replace(']', '', $value2);
        $value2 = (int)$value2;

        $value3 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->where('id_siswa', $request->siswa1)
        ->where('id_bobot', $nilai32)
        ->where('penilaian.id_skala', $nilai33)
        ->limit(1)
        ->pluck('value');   
        $value3 = str_replace('[', '', $value3);
        $value3 = str_replace(']', '', $value3);
        $value3 = (int)$value3;

        $value4 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->where('id_siswa', $request->siswa1)
        ->where('id_bobot', $nilai42)
        ->where('penilaian.id_skala', $nilai43)
        ->limit(1)
        ->pluck('value');   
        $value4 = str_replace('[', '', $value4);
        $value4 = str_replace(']', '', $value4);
        $value4 = (int)$value4;

        $value5 = Penilaian::join('skala', 'skala.id_skala', '=', 'penilaian.id_skala')
        ->where('id_siswa', $request->siswa1)
        ->where('id_bobot', $nilai52)
        ->where('penilaian.id_skala', $nilai53)
        ->limit(1)
        ->pluck('value');   
        $value5 = str_replace('[', '', $value5);
        $value5 = str_replace(']', '', $value5);
        $value5 = (int)$value5;

        $sum = Bobot::join('skala', 'skala.id_skala', '=', 'bobot.id_skala')->sum('value');
        $sum = str_replace('[', '', $sum);
        $sum = str_replace(']', '', $sum);
        $sum = (int)$sum;

        $perbaikan1 = 5/$sum;
        $perbaikan2 = 4/$sum;
        $perbaikan3 = 3/$sum;
        $perbaikan4 = 2/$sum;
        $perbaikan5 = 1/$sum;

        $get = pow($value1, $perbaikan1)*pow($value2, $perbaikan2)*pow($value3, $perbaikan3)*pow($value4, $perbaikan4)*pow($value5, $perbaikan5);
        HasilS::where('id_siswa', $request->siswa1)->update([
            'nilai_s' => $get,
        ]);

        $hasils = HasilS::orderBy('id_hasil_s','desc')->limit(1)->pluck('nilai_s');
        $hasils = str_replace('[', '', $hasils);
        $hasils = str_replace(']', '', $hasils);
        $hasils = (int)$hasils;
        $sums = HasilS::sum('nilai_s');
        $sums = str_replace('[', '', $sums);
        $sums = str_replace(']', '', $sums);
        $sums = (int)$sums;
        $values = $hasils/$sums;

        HasilV::where('id_siswa', $request->siswa1)->update([
            'nilai_v' => $values,
        ]);
        return back();
    }

    public function delete($id){
        Penilaian::where('id_siswa', $id)->delete();
        HasilS::where('id_siswa', $id)->delete();
        HasilV::where('id_siswa', $id)->delete();
        return back();
    }

    public function refresh(){
        DB::enableQueryLog();
        $hasils = $datas = HasilS::join('hasil_s as hasils', 'hasils.id_siswa', '=', 'hasil_s.id_siswa')
        ->select('hasil_s.nilai_s')->pluck('hasil_s.nilai_s');

        $hasilids = HasilS::join('hasil_s as hasils', 'hasils.id_siswa', '=', 'hasil_s.id_siswa')
        ->select('hasil_s.nilai_s', 'hasil_s.id_hasil_s')->pluck('hasil_s.id_hasil_s');

        $sums = HasilS::sum('nilai_s');
        $sums = str_replace('[', '', $sums);
        $sums = str_replace(']', '', $sums);
        $sums = (int)$sums;

        $n = count($hasils);

        for ($i=0; $i < $n; $i++) {
            $values = $hasils[$i]/$sums;
            $query = HasilV::where('id_hasil_v', $hasilids[$i])->update([                
                'nilai_v' => $values,
            ]);            
        }

        $getHasilS = HasilS::join('siswa', 'siswa.id_siswa' , '=', 'hasil_s.id_siswa')->select('hasil_s.*', 'siswa.nm_siswa')->get();
        $getHasilV = HasilV::join('siswa', 'siswa.id_siswa' , '=', 'hasil_v.id_siswa')->select('hasil_v.*', 'siswa.nm_siswa')->get();

        $getgolongan1HasilS = DB::table('hasil_s')->get()->max('nilai_s');
        $getgolongan1S = HasilS::where('nilai_s', $getgolongan1HasilS)->get();

        $getgolongan1HasilV = DB::table('hasil_v')->get()->max('nilai_v');
        $getgolongan1V = HasilV::where('nilai_v', $getgolongan1HasilV)->get();

        $getgolongan2HasilS = DB::table('hasil_s')->get()->min('nilai_s');
        $getgolongan2S = HasilS::where('nilai_s', $getgolongan2HasilS)->get();

        $getgolongan2HasilV = DB::table('hasil_v')->get()->min('nilai_v');
        $getgolongan2V = HasilV::where('nilai_v', $getgolongan2HasilV)->get();

        return view('alternatif', ['hasils' => $getHasilS, 'hasilv' => $getHasilV, 'golongan1s' => $getgolongan1S, 'golongan1v' => $getgolongan1V, 'golongan2s' => $getgolongan2S, 'golongan2v' => $getgolongan2V]);
    }


}
