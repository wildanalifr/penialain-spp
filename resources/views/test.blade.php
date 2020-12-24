@extends('layouts.app')

@section('content')


<div class="container">
	<div class="col-md-12" style="margin-top: 20px">
		<h3>Daftar Nilai S</h3>
		<table class="table">
			<tr class="text-center">
				<th>ID Hasil S</th>
				<th>Nama Karyawan</th>
				<th>Nilai S</th>
			</tr>
			@foreach($hasils as $s)
			<tr class="text-center">
				<td>{{ $s->id_hasil_s }}</td>
				<td>{{ $s->nm_karyawan }}</td>
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
				<th>ID Hasil V</th>
				<th>Nama Karyawan</th>
				<th>Nilai V</th>
			</tr>
			@foreach($hasilv as $v)
			<tr class="text-center">
				<td>{{ $v->id_hasil_v }}</td>
				<td>{{ $v->nm_karyawan }}</td>
				<td>{{ $v->nilai_v }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

<br>
<div class="container">
	<div class="col-md-12" style="margin-top: 20px">
		<h3>Karyawan Terbaik Nilai S</h3>
		<table class="table">
			<tr class="text-center">
				<th>ID Hasil V</th>
				<th>Nama Karyawan</th>
				<th>Nilai V</th>
			</tr>
			@foreach($terbaiks as $ts)
			<tr class="text-center">
				<td>{{ $ts->id_hasil_s }}</td>
				<td>{{ $ts->id_karyawan }}</td>
				<td>{{ $ts->nilai_s }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

<div class="container">
	<div class="col-md-12" style="margin-top: 20px">
		<h3>Karyawan Terbaik Nilai V</h3>
		<table class="table">
			<tr class="text-center">
				<th>ID Hasil V</th>
				<th>Nama Karyawan</th>
				<th>Nilai V</th>
			</tr>
			@foreach($terbaikv as $tv)
			<tr class="text-center">
				<td>{{ $tv->id_hasil_v }}</td>
				<td>{{ $tv->id_karyawan }}</td>
				<td>{{ $tv->nilai_v }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

<br>
<div class="container">
	<div class="col-md-12" style="margin-top: 20px">
		<h3>Karyawan Terburuk Nilai S</h3>
		<table class="table">
			<tr class="text-center">
				<th>ID Hasil V</th>
				<th>Nama Karyawan</th>
				<th>Nilai V</th>
			</tr>
			@foreach($terburuks as $ts)
			<tr class="text-center">
				<td>{{ $ts->id_hasil_s }}</td>
				<td>{{ $ts->id_karyawan }}</td>
				<td>{{ $ts->nilai_s }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

<div class="container">
	<div class="col-md-12" style="margin-top: 20px">
		<h3>Karyawan Terburuk Nilai V</h3>
		<table class="table">
			<tr class="text-center">
				<th>ID Hasil V</th>
				<th>Nama Karyawan</th>
				<th>Nilai V</th>
			</tr>
			@foreach($terburukv as $tv)
			<tr class="text-center">
				<td>{{ $tv->id_hasil_v }}</td>
				<td>{{ $tv->id_karyawan }}</td>
				<td>{{ $tv->nilai_v }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>


@endsection