@foreach ($data as $i)
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal{{ $i->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Mahasiswa</h5>
                        <p class="text-muted">
                            {{ $i->nim }}
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form edit data -->
                <form method="post" action="{{ url('data-mahasiswa/' . $i->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingNama" name="nama"
                                value="{{ $i->nama }}">
                            <label for="floatingNama">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingAngkatan" name="angkatan"
                                value="{{ $i->angkatan }}">
                            <label for="floatingAngkatan">Angkatan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingProdi" name="prodi"
                                value="{{ $i->prodi }}">
                            <label for="floatingProdi">Prodi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFakultas" name="fakultas"
                                value="{{ $i->fakultas }}">
                            <label for="floatingFakultas">Fakultas</label>
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
                        <h5 class="modal-title" id="deleteModalLabel">Hapus Data Mahasiswa</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form delete data -->
                <form method="post" action="{{ url('data-mahasiswa/' . $i->id) }}">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data mahasiswa ini?</p>
                        <p class="text-muted">
                            {{ $i->nim }} - {{ $i->nama }}
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
