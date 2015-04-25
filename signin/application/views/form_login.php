<?php
echo form_open('auth/login');
?>

<html>
    <head>
    <meta name="author" content="Arief Aprianto">
    <title>Codeigniter 3</title>
    <link rel="shortcut icon" href="<?php echo base_url('images/ci-icon.ico');?>" type="image/ico">
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/docs.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/login.css');?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('js/ie10-viewport-bug-workaround.js');?>"></script>
    <script src="<?php echo base_url('js/ie-emulation-modes-warning.js');?>"></script>
    
    </head>
    <body>

    <div class="container">
    <center><div class="jumbotron">
        <form class="form-signin" method="post" > 
        <div class="form-signin-heading">Sign in</div>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Biarkan saya tetap masuk
          </label>
        </div>
        <button class="btn btn-outline-inverse btn-lg" type="submit" name="submit"><b>Log in</b></button>
      </form>
        </div></center>
    </div>

  </body>
</html>
