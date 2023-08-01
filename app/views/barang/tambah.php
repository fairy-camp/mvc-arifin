<div class="container mt-5">
        <div class="card p-3 mx-auto" style="width: 35rem;">
            <div class="card-title">
                <h3 class="text-center mt-5 mb-3">Tambah Data Barang</h3>
            </div>

            <form action="<?= BASEURL; ?>/barang/simpan" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control mb-2" id="nama_barang" name="nama_barang" placeholder="Nama barang">
                        </div>

                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control mb-2" id="harga" name="harga" placeholder="Harga">
                        </div>

                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control mb-2" id="jumlah" name="jumlah_barang" placeholder="Jumlah barang">
                        </div>

                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control mb-2" id="keterangan" name="keterangan" placeholder="Keterangan">
                        </div>

                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Terjual</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control mb-2" id="terjual" name="terjual" placeholder="Barang terjual">
                        </div>

                        <div class="col-md-4 text-end">
                            <label for="exampleFormControlInput1" class="form-label">Stok</label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <input type="text" class="form-control mb-2" id="stok" name="stok" placeholder="Stok Barang">
                        </div>

                        <div class="col-md-4 text-end"></div>
                        <div class="col-md-8">
                            <input type="submit" value="SIMPAN" class="btn btn-primary px-3 mr-5">
                            <input type="submit" value="KEMBALI" class="btn btn-secondary px-3 ml-5">
                        </div>
                    </div>
                </div>
            </form>
            
      </div>
    </div>