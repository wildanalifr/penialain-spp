@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-12" style="margin-top: 20px">
        <h3>Daftar Nilai S</h3>
        <table class="table">
            <tr class="text-center">
                <th>ID Hasil S</th>
                <th>Nama siswa</th>
                <th>Nilai S</th>
            </tr>
            @foreach($hasils as $s)
            <tr class="text-center">
                <td>{{ $s->id_hasil_s }}</td>
                <td>{{ $s->nm_siswa }}</td>
                <td>{{ $s->nilai_s }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="container">
    <div class="col-md-12" style="margin-top: 20px">
        <h3>Daftar Nilai V</h3>
        <table class="table">
            <tr class="text-center">
                <th>Golongan</th>
                <th>Nama siswa</th>
                <th>Nilai V</th>
            </tr>
            @foreach($hasilv as $v)
            <tr class="text-center">
                <td>{{ $v->id_hasil_v }}</td>
                <td>{{ $v->nm_siswa }}</td>
                <td>{{ $v->nilai_v }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>


<div class="container">
    <div class="col-md-12" style="margin-top: 20px">
        <h3>Jumlah Potongan</h3>
        <table class="table">
            <tr class="text-center">
                <th>Golongan</th>
                <th>Jumlah Potongan</th>
            </tr>

            <tr class="text-center">
                <td>1</td>
                <td>100000</td>
            </tr>

            <tr class="text-center">
                <td>2</td>
                <td>200000</td>
            </tr>

        </table>
    </div>
</div>

@endsection
