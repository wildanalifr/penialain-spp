@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12" style="margin-top: 20px">
        <table class="table">
            <tr class="text-center">
                <th>ID Bobot</th>
                <th>Kriteria</th>
                <th>Skala</th>
                <th>Opsi</th>
            </tr>
            @foreach($datas as $data)
            <tr class="text-center">
                <td>{{ $data->id_bobot }}</td>
                <td>{{ $data->nm_kriteria }}</td>
                <td>{{ $data->nm_skala }}</td>
                <td>
                    <button type="button" class="btn btn-primary float-center" data-toggle="modal" data-target="#editModal">
                        Edit Bobot
                    </button>
                    <button type="button" class="btn btn-danger float-center" data-toggle="modal" data-target="#deleteModal">
                        Hapus Bobot
                    </button>
                    
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Bobot</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                    
                                <div class="modal-body">                        
                                    <form method="POST" action="/bobot/update">
                                        @csrf
                                        <input class="form-control" type="hidden" name="id" value="{{ $data->id_bobot }}">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Kriteria</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="kriteria" id="kriteria" class="form-control">
                                                    <option value="{{ $data->id_kriteria }}">{{ $data->nm_kriteria }}</option>
                                                    @foreach($kriterias as $kriteria)
                                                    <option value="{{ $kriteria->id_kriteria }}">{{ $kriteria->nm_kriteria }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Skala</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select name="skala" id="skala" class="form-control">
                                                    <option value="{{ $data->id_skala }}">{{ $data->nm_skala }}</option>
                                                    @foreach($skalas as $skala)
                                                    <option value="{{ $skala->id_skala }}">{{ $skala->nm_skala }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Bobot</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                    
                                <div class="modal-body">  
                                    <input class="form-control" type="hidden" name="id" value="{{ $data->id_bobot }}">
                                    <label>Ingin Menghapus Bobot?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="/bobot/delete/{{ $data->id_bobot }}" type="button" class="btn btn-danger">Hapus</a>
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
