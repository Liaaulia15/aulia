<div class="container">
    <form action="" method="post">
        <legend>Tambah Data Bayi</legend>
        <div class="mb-3">
            <label for="bayi" class="form-label">Nama bayi</label>
            <input type="text" class="form-control" id="bayi" name="bayi" style="width : 300px;">
            <div class="form-text text-danger"><?= form_error('bayi'); ?></div>
        </div>
        <input type="submit" value="submit" class="btn btn-primary"></input>
    </form>
</div>