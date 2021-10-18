<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Portal Berita Cirebon</title>
 <meta name="description" content="The small framework with powerful features">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap CSS -->
 <!-- <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>" /> -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 <div class="container py-4">
 <header class="pb-3 mb-4 border-bottom"> 
 <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0
0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd"
d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943
39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437
2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-
6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-
4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5
0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-
2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394
80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-
4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-
5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
 <span class="fs-4">Portal Berita Cirebon</span>
 </a>
 </header>
 <div class="p-5 mb-4 bg-light rounded-3">
 <div class="container-fluid py-5">
 <h1 class="display-5 fw-bold">Menyajikan Berita Terkini</h1>
 <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the
one in previous versions of Bootstrap. Check out the examples below for how you can remix and
restyle it to your liking.</p>

 </div>
 </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container"> 
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" href="<?= base_url('/')?>">Beranda</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="<?= base_url('/kontak')?>">Kontak</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="<?= base_url('/gallery')?>">Gallery</a>
 </li>
 </ul>
 </div>
 </div>
 </nav>

 <div class="container">

 ini halaman Kontak
 

 </div>
<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
 <div class="container text-center">Copyright &copy <?= Date('Y') ?> UCIC MI 2021</div>
 </footer>
</div>
 <!-- Jquery dan Bootsrap JS -->
 <script src="<?= base_url('public/js/jquery-3.6.0.min') ?>"></script>
 <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
</body>
</html> 