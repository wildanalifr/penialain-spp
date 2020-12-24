@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#insertModal">
                Insert Siswa
            </button>
        </div>
    </div>

    <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Input Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/siswa/store">
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
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Opsi</th>
            </tr>
            @foreach($datas as $data)
            <tr class="text-center">
                <td>{{ $data->id_siswa }}</td>
                <td>{{ $data->nm_siswa }}</td>
                <td>
                    <button type="button" class="btn btn-primary float-center" data-toggle="modal"
                        data-target="#editModal">
                        Edit Siswa
                    </button>
                    <button type="button" class="btn btn-danger float-center" data-toggle="modal"
                        data-target="#deleteModal">
                        Hapus Siswa
                    </button>

                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/siswa/update">
                                        @csrf
                                        <input class="form-control" type="hidden" name="id"
                                            value="{{ $data->id_siswa }}">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="nama"
                                                    value="{{ $data->nm_siswa }}">
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

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control" type="hidden" name="id" value="{{ $data->id_siswa }}">
                                    <label>Ingin Menghapus Siswa?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="/siswa/delete/{{ $data->id_siswa }}" type="button"
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
