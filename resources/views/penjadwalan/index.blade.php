@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Penjadwalan Mata Kuliah') }}
                    </div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>

                        <div class="table-responsive pt-3">
                            <table class="table table-responsive table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="align-middle">
                                        <th class="text-center">No</th>
                                        <th class="text-center">Hari, Tanggal</th>
                                        <th class="text-center">Mata Kuliah</th>
                                        <th class="text-center">Waktu Mulai</th>
                                        <th class="text-center">Waktu Selesai</th>
                                        <th class="text-center">Dosen Pengampu</th>
                                        <th class="text-center">Ruang</th>
                                        <th class="text-center">Jumlah Mahasiswa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td>{{ \Carbon\Carbon::parse($row->hari)->format('l, d F Y') }}</td>
                                            <td>{{ $row->mata_kuliah }}</td>
                                            <td class="text-center">{{ $row->waktu_mulai }}</td>
                                            <td class="text-center">{{ $row->waktu_selesai }}</td>
                                            <td>{{ $row->dosen_pengampu }}</td>
                                            <td class="text-center">{{ $row->ruang }}</td>
                                            <td class="text-center">{{ $row->jumlah_mahasiswa }}</td>
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

    @include('partials.modals.addJadwal')
@endsection
