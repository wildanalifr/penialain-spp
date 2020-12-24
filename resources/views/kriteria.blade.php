@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#insertModal">
                Insert Kriteria
            </button>
        </div>
    </div>    

    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Input Kriteria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>                    
                <div class="modal-body">                        
                    <form method="POST" action="/kriteria/store">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama">
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
                <th>ID Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Opsi</th>
            </tr>
            @foreach($datas as $data)
            <tr class="text-center">
                <td>{{ $data->id_kriteria }}</td>
                <td>{{ $data->nm_kriteria }}</td>
                <td>
                    <button type="button" class="btn btn-primary float-center" data-toggle="modal" data-target="#editModal">
                        Edit Kriteria
                    </button>
                    <button type="button" class="btn btn-danger float-center" data-toggle="modal" data-target="#deleteModal">
                        Hapus Kriteria
                    </button>
                    
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Kriteria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                    
                                <div class="modal-body">                        
                                    <form method="POST" action="/kriteria/update">
                                        @csrf
                                        <input class="form-control" type="hidden" name="id" value="{{ $data->id_kriteria }}">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="nama" value="{{ $data->nm_Kriteria }}">
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
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Kriteria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                    
                                <div class="modal-body">  
                                    <input class="form-control" type="hidden" name="id" value="{{ $data->id_Kriteria }}">
                                    <label>Ingin Menghapus Kriteria?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="/kriteria/delete/{{ $data->id_kriteria }}" type="button" class="btn btn-danger">Hapus</a>
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
