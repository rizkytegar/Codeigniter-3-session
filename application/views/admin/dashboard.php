<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
    <title>Admin</title>
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container col-lg-10 text-center mx-auto">
    <a class="navbar-brand" href="<?php echo base_url("admin")?>">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("logout/id")?>">Keluar</a></a>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
	<div class="container py-5">
		<div class="bg-dark shadow-lg text-light px-4 py-5 text-center">
			<div class="py-5">
				<h1 class="display-5 fw-bold text-light">RizkyDev Admin</h1>
				<div class="col-lg-6 mx-auto">
				<p class="fs-5 mb-4 text-muted">Selamat datang di halaman admin</p>
			    <?php echo $this->session->flashdata('pesan')?>
				</div>
			</div>
		</div>
	</div>
  <script src="<?php echo base_url("assets/js/bootstrap.bundle.js")?>"></script>
  </body>
</html>