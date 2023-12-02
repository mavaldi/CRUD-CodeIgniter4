<div class="container p-5">
    <a href="<?= base_url('karyawan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Tambah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('karyawan/add');?>">
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jam Kerja</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Upah Minimum</label>
                    <input type="number" name="beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Upah Maksimum</label>
                    <input type="number" name="jual" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>