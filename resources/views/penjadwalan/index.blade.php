@extends('layouts.app')

@section('content')
    <div class="row justify-content-center py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Penjadwalan Mata Kuliah') }}

                    <button type="button" class="bg-primary text-white rounded float-end" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="align-middle text-center">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Kuliah</th>
                                    <th>Mata Kuliah</th>
                                    <th>Dosen Pengampu</th>
                                    <th>Jumlah<br>Mahasiswa</th>
                                    <th>Ruang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $no }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->hari)->format('d F Y') }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($row->waktu_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($row->waktu_selesai)->format('H:i') }}</td>
                                        <td>{{ $row->mata_kuliah }}</td>
                                        <td>{{ $row->dosen_pengampu }}</td>
                                        <td class="text-center">{{ $row->jumlah_mahasiswa }}</td>
                                        <td class="text-center">{{ $row->ruang }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $row->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $row->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
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

    @include('penjadwalan.modals.add')
    @include('penjadwalan.modals.edit-delete')
@endsection
