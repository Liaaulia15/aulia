<div class="container">
    <form action="" method="post">
        <legend>Ubah Data Bayi</legend>
        <div class="mb-3">
            <input type="hidden" name="id" value="<?= $bayi['id']; ?>">
            <label for="bayi" class="form-label">Nama bayi</label>
            <input type="text" class="form-control" id="bayi" name="bayi" value="<?= $bayi['bayi']; ?>" style="width : 300px;">
            <div class="form-text text-danger"><?= form_error('bayi'); ?></div>
        </div>
        <input type="submit" name="ubah" value="ubah" class="btn btn-primary"></input>
    </form>
</div>