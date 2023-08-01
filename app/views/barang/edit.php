<div class="container mt-5">
    <div class="card p-3 mx-auto" style="width: 35rem;">
        <div class="card-title">
            <h3 class="text-center mt-5 mb-3">Edit Data Barang</h3>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/barang/ubah" method="post">
            <div class="row">

                <input type="text" name="id" id="id" value="<?= $data['barang']['id'] ?>">
                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2" id="nama_barang" name="nama_barang" value="<?= $data['barang']['nama_barang'] ?>">
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                </div>
                <div class="col-md-8">
                    <input type="number" class="form-control mb-2" id="harga" name="harga" value="<?= $data['barang']['harga'] ?>">
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2" id="jumlah" name="jumlah_barang" value="<?= $data['barang']['jumlah_barang'] ?>">
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2" id="keterangan" name="keterangan" value="<?= $data['barang']['keterangan'] ?>">
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Terjual</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mb-2" id="terjual" name="terjual" value="<?= $data['barang']['terjual'] ?>">
                </div>

                <div class="col-md-4 text-end">
                    <label for="exampleFormControlInput1" class="form-label">Stok</label>
                </div>
                <div class="col-md-8 mb-3">
                    <input type="text" class="form-control mb-2" id="stok" name="stok" value="<?= $data['barang']['stok'] ?>">
                </div>

                <div class="col-md-4 text-end"></div>

                <div class="col-md-8">
                    <input type="submit" value="Ubah Data" class="btn btn-primary px-3 mr-5">
                    <a href="<?= BASEURL; ?>" class="btn btn-secondary px-3 ml-5">KEMBALI</a>
                    <!-- <input type="submit" value="KEMBALI" class="btn btn-secondary px-3 ml-5"> -->
                </div>
            
                
            
            </div>
            </form>
        </div>
    </div>
</div>