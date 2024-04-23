<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Jadwal Mata Kuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('jadwal-kuliah') }}">
                @csrf

                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingMatkul" name="matkul"
                            placeholder="Mata Kuliah">
                        <label for="floatingMatkul">Mata Kuliah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingDosen" name="dosen"
                            placeholder="Nama Dosen">
                        <label for="floatingDosen">Dosen</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingHari" name="hari">
                        <label for="floatingHari">Hari</label>
                    </div>
                    <div class="form-floating d-flex mb-3">
                        <div class="col-md-5">
                            <label for="floatingMulai" class="ps-2">Mulai Jam</label>
                            <input type="time" class="form-control" id="floatingMulai" name="mulai"
                                placeholder="Mulai Jam">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label for="floatingSelesai" class="ps-2">Selesai Jam</label>
                            <input type="time" class="form-control" id="floatingSelesai" name="selesai"
                                placeholder="Selesai Jam">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingRuang" name="ruang"
                            placeholder="Ruang Kelas">
                        <label for="floatingRuang">Ruang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingJumlah" name="jumlah"
                            placeholder="Jumlah Mahasiswa">
                        <label for="floatingJumlah">Jumlah Mahasiswa</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
            <!-- Form tambah data -->

        </div>
    </div>
</div>
<!-- Modal Tambah -->
