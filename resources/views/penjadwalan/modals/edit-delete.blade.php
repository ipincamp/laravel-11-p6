@foreach ($data as $i)
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal{{ $i->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 class="modal-title" id="editModalLabel">Edit Jadwal Kuliah</h5>
                        <p class="text-muted">
                            {{ \Carbon\Carbon::parse($row->hari)->format('d/m/Y') }}
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form edit data -->
                <form method="post" action="{{ url('jadwal-kuliah/' . $i->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="form-floating d-flex mb-3">
                            <div class="col-md-5">
                                <label for="floatingMulai" class="ps-2">Mulai Jam</label>
                                <input type="time" class="form-control" id="floatingMulai" name="mulai" value="{{ $i->waktu_mulai }}"
                                    placeholder="Mulai Jam">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <label for="floatingSelesai" class="ps-2">Selesai Jam</label>
                                <input type="time" class="form-control" id="floatingSelesai" name="selesai" value="{{ $i->waktu_selesai }}"
                                    placeholder="Selesai Jam">
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingRuang" name="ruang" value="{{ $i->ruang }}"
                                placeholder="Ruang Kelas">
                            <label for="floatingRuang">Ruang</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                </form>
                <!-- Form edit data -->

            </div>
        </div>
    </div>
    {{-- Edit Modal --}}

    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal{{ $i->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 class="modal-title" id="deleteModalLabel">Hapus Data Jadwal Kuliah</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form delete data -->
                <form method="post" action="{{ url('jadwal-kuliah/' . $i->id) }}">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus jadwal kuliah ini?</p>
                        <p class="text-muted">
                            {{ \Carbon\Carbon::parse($row->hari)->format('l, d F Y') }} - {{ $i->mata_kuliah }}
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
                <!-- Form delete data -->

            </div>
        </div>
    </div>
    {{-- Delete Modal --}}
@endforeach
