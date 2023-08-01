<div class="container mt-5">
    <div class="card p-3 mx-auto" style="width: 35rem;">
        <div class="card-title">
            <h3 class="text-center mt-5 mb-3">Detail Data Barang</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                </div>
                <div class="col-md-8">
                    <!-- <span class="mb-2 border-bottom input" id="nama_barang" name="nama_barang">Kertas A4</span> -->
                    <input type="text" class="form-control mb-2 input" id="nama_barang" name="nama_barang" value="<?= $data['barang']['nama_barang'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                </div>
                <div class="col-md-8">
                    <input type="number" class="form-control mb-2 input" id="harga" name="harga" value="<?= $data['barang']['harga'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2 input" id="jumlah" name="jumlah" value="<?= $data['barang']['jumlah_barang'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2 input" id="keterangan" name="keterangan" value="<?= $data['barang']['keterangan'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Terjual</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2 input" id="terjual" name="terjual" value="<?= $data['barang']['terjual'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Stok</label>
                </div>
                <div class="col-md-8 mb-3">
                    <input type="text" class="form-control mb-2 input" id="stok" name="stok" value="<?= $data['barang']['stok'] ?>" disabled>
                </div>

                <div class="col-md-4 text-end"></div>
                <div class="col-md-8">
                    <a href="<?= BASEURL; ?>" class="btn btn-secondary px-3 ml-5">KEMBALI</a>
                    <!-- <input type="submit" value="KEMBALI" class="btn btn-secondary px-3 ml-5"> -->
                </div>
            </div>
        </div>
    </div>
</div>