<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <img src="" alt="">
                <a class="navbar-brand" href="#">Posyandu Nusa Indah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('admin'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('balita'); ?>">Data Kader</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('bayi'); ?>">Data bayi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kader'); ?>">Data balita</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ibu hamil'); ?>">Data ibu Hamil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>