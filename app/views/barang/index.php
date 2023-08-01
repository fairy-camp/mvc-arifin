<h2 class="text-center mt-4">SISTEM PENDATAAN BARANG</h2>
<h2 class="text-center">DI FOTO COPY "MAKMUR-OKE"</h2>

<div class="container mt-5">

    <a href="<?= BASEURL; ?>/barang/tambah" class="btn btn-primary my-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $data['barang'] as $brg ) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['jumlah_barang']; ?></td>
                    <td><?= $brg['keterangan']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/barang/detail/<?= $brg['id']; ?>">Detail</a>
                      | <a href="<?= BASEURL; ?>/barang/edit/<?= $brg['id']; ?>">Ubah</a>
                        | <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Apakah anda yakin akan menghapus data ini ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <a href="<?= BASEURL; ?>/barang/hapus/<?= $brg['id']; ?>" class="btn btn-primary">Hapus Data</a>
            <!-- <button type="button" class="btn btn-primary">Hapus Data</button> -->
            </div>
        </div>
        </div>
    </div>