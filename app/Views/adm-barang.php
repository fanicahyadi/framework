<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Admin barang</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap CSS -->
 <!-- <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>" /> -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container py-4">

<!-- batas awal modals -->
<form action="<?= base_url('public/Admin/tambahData')?>" method="post">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data
    </button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" arialabelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Masukkan Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

 <div class="modal-body">

    <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" class="form-control" name="input_nama">
    </div>

    <div class="form-group">
    <label>Harga per pcs</label>
    <input type="text" class="form-control" name="input_harga">
    </div>

    <div class="form-group">
    <label>Jumlah Barang</label>
    <input type="text" class="form-control" name="input_jumlah">
    </div>

 </div>

 <div class="modal-footer">

 <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>

    </div>
    </div>
    </div>
</div>
</form>
<!-- batas akhir modals -->

    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            </tr>
        </thead>
            <tbody>
                
                <?php
                foreach ($d as $row) {
                ?>
                <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                </tr>
                <?php
                }
                ?>

            </tbody>
    </table>

<footer class="jumbotron jumbotron-fluid mt-5 mb-0">

<div class="container text-center">Copyright &copy <?= Date('Y') ?> UCIC MI 2021</div>
</footer>
</div>

<!-- Jquery dan Bootsrap JS -->
<script src="<?= base_url('public/js/jquery-3.6.0.min') ?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>

</body>
</html>