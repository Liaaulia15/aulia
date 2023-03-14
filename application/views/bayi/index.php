<div class="container">
<legend>Data Bayi</legend>
<a class="btn btn-primary" href="<?= base_url('bayi/tambah'); ?>" role="button">Tambah bayi</a>
<?php if( $this->session->flashdata('flash') ) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
        Data Bayi <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
    <form action="" method="post" class="d-flex mb-2 mt-2" role="search">
        <input  class="form-control me-2" type="text" placeholder="cari" aria-label="Search" name="keyword" style="width : 500px;">
        <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">*</th>
            <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php if( empty($bayi) ) : ?>
                <tr>
                    <td colspan=2>
                        <div class="alert alert-danger" role="alert">
                            Data bayi Tidak Ditemukan
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            <?php $i=1; ?>
            <?php foreach( $bayi as $bay ) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $bay['bayi']; ?></td>
                    <td>
                        <a href="<?= base_url('bayi/ubah/'); ?><?= $bay['id']; ?>" class="badge text-bg-warning">Ubah</a>
                        <a href="<?= base_url('bayi/hapus/'); ?><?= $bay['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>