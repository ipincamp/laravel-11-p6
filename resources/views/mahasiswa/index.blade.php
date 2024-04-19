@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Data Mahasiswa') }}
                    </div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>

                        <div class="table-responsive pt-3">
                            <table class="table table-responsive table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">NIM</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Angkatan</th>
                                        <th class="text-center">Prodi</th>
                                        <th class="text-center">Fakultas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td>{{ $row->nim }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td class="text-center">{{ $row->angkatan }}</td>
                                            <td>{{ $row->prodi }}</td>
                                            <td>{{ $row->fakultas }}</td>
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('mahasiswa.modals.add')
@endsection
