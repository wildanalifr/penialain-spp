@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/refresh" type="button" class="btn btn-success">
                Lihat Alternatif
            </a>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#insertModal">
                Insert Penilaian
            </button>
        </div>
    </div>

    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Input Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/penilaian/store">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa1" id="siswa" class="form-control">
                                    <option value="">--- Select siswa ---</option>
                                    @foreach($siswas as $siswa)
                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Bobot</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bobot1" id="bobot" class="form-control">
                                    <option value="">--- Select Bobot ---</option>
                                    @foreach($bobots as $bobot)
                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Skala</label>
                            </div>
                            <div class="col-md-8">
                                <select name="skala1" id="skala" class="form-control">
                                    <option value="">--- Select Skala ---</option>
                                    @foreach($skalas as $skala)
                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa2" id="siswa" class="form-control">
                                    <option value="">--- Select siswa ---</option>
                                    @foreach($siswas as $siswa)
                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Bobot</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bobot2" id="bobot" class="form-control">
                                    <option value="">--- Select Bobot ---</option>
                                    @foreach($bobots as $bobot)
                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Skala</label>
                            </div>
                            <div class="col-md-8">
                                <select name="skala2" id="skala" class="form-control">
                                    <option value="">--- Select Skala ---</option>
                                    @foreach($skalas as $skala)
                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa3" id="siswa" class="form-control">
                                    <option value="">--- Select siswa ---</option>
                                    @foreach($siswas as $siswa)
                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Bobot</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bobot3" id="bobot" class="form-control">
                                    <option value="">--- Select Bobot ---</option>
                                    @foreach($bobots as $bobot)
                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Skala</label>
                            </div>
                            <div class="col-md-8">
                                <select name="skala3" id="skala" class="form-control">
                                    <option value="">--- Select Skala ---</option>
                                    @foreach($skalas as $skala)
                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa4" id="siswa" class="form-control">
                                    <option value="">--- Select siswa ---</option>
                                    @foreach($siswas as $siswa)
                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Bobot</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bobot4" id="bobot" class="form-control">
                                    <option value="">--- Select Bobot ---</option>
                                    @foreach($bobots as $bobot)
                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Skala</label>
                            </div>
                            <div class="col-md-8">
                                <select name="skala4" id="skala" class="form-control">
                                    <option value="">--- Select Skala ---</option>
                                    @foreach($skalas as $skala)
                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>siswa</label>
                            </div>
                            <div class="col-md-8">
                                <select name="siswa5" id="siswa" class="form-control">
                                    <option value="">--- Select siswa ---</option>
                                    @foreach($siswas as $siswa)
                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Bobot</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bobot5" id="bobot" class="form-control">
                                    <option value="">--- Select Bobot ---</option>
                                    @foreach($bobots as $bobot)
                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Skala</label>
                            </div>
                            <div class="col-md-8">
                                <select name="skala5" id="skala" class="form-control">
                                    <option value="">--- Select Skala ---</option>
                                    @foreach($skalas as $skala)
                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        <table class="table">
            <tr class="text-center">
                <th>ID Penilaian</th>
                <th>Nama siswa</th>
                <th>Bobot Kriteria</th>
                <th>Nama Skala</th>
                <th>Opsi</th>
            </tr>
            @foreach($nilais as $nilai)
            <tr class="text-center">
                <td>{{ $nilai->id_nilai }}</td>
                <td>{{ $nilai->nm_siswa }}</td>
                <td>{{ $nilai->nm_kriteria }}</td>
                <td>{{ $nilai->nm_skala }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal"
                                style="width: 100%">
                                Edit
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                                style="width:100%">
                                Hapus
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel">Update Penilaian</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/penilaian/update">
                                        @csrf
                                        @foreach($datas as $data)
                                        <div class="form-group row">
                                            <input type="hidden" name="nilai{{$data->row}}"
                                                value="{{ $data->id_nilai }}">
                                            <div class="col-md-4">
                                                <label>siswa</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="siswa{{$data->row}}" id="siswa" class="form-control">
                                                    <option value="{{ $data->id_siswa }}">{{ $data->nm_siswa }}</option>
                                                    @foreach($siswas as $siswa)
                                                    <option value="{{ $siswa->id_siswa }}">{{ $siswa->nm_siswa }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Bobot</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="bobot{{$data->row}}" id="bobot" class="form-control">
                                                    <option value="{{ $data->id_bobot }}">{{ $data->nm_kriteria }}
                                                    </option>
                                                    @foreach($bobots as $bobot)
                                                    <option value="{{ $bobot->id_bobot }}">{{ $bobot->nm_kriteria }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Skala</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="skala{{$data->row}}" id="skala" class="form-control">
                                                    <option value="{{ $data->id_skala }}">{{ $data->nm_skala }}</option>
                                                    @foreach($skalas as $skala)
                                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        @endforeach

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Penilaian</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Ingin Menghapus data {{ $nilai->nm_siswa }}?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="/penilaian/delete/{{ $nilai->id_siswa }}" type="button"
                                        class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>

    </div>

</div>
@endsection
