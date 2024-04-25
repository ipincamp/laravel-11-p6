@foreach ($prodis as $i)
    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal{{ $i->kode }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Prodi</h5>
                        <p class="text-muted">
                            {{ $i->kode }}
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form edit data -->
                <form method="post" action="{{ route('edit-prodi', $i->kode) }}">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingNama" name="nama"
                                value="{{ $i->nama }}">
                            <label for="floatingNama">Nama</label>
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
    <div class="modal fade" id="deleteModal{{ $i->kode }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex">
                        <h5 class="modal-title" id="deleteModalLabel">Hapus Data Prodi</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form delete data -->
                <form method="post" action="{{ route('delete-prodi', $i->kode) }}">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data mahasiswa ini?</p>
                        <p class="text-muted">
                            {{ $i->kode }} - {{ $i->nama }}
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
