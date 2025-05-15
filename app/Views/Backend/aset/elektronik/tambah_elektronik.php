<div class="container mt-5">
    <h4>Tambah Data Elektronik</h4>
    <form method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nama</label>
            <input type="text" name="instansi" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Lokasi</label>
            <input type="text" name="tipe" class="form-control" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('data-kendaraan'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>