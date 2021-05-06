<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
    <title>Login</title>
  </head>
  <body class="bg-primary">
    <div class="container col-lg-4 mx-auto py-5 bg-light shadow-lg mt-5">
    <main class="form-signin">
    <form method="post" action="<?php echo base_url("login")?>">
    
        <h1 class="h3 mb-3 fw-normal text-dark text-center">Login</h1>
    <?php echo $this->session->flashdata('pesan')?>
        <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="text-center mt-3 mb-3 text-muted">&copy; 2021 Rizky Dev</p>
    </form>
    </main>

</div>
  <script src="<?php echo base_url("assets/js/bootstrap.bundle.js")?>"></script>
  </body>
</html>