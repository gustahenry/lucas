<?php
session_start();
?>
<?php require_once('header.php') ?>
  <body>
    
    <div style="width: 30%; margin:10% 35%; border: 2px solid #555555; border-radius: 5px; padding: 20px">
      <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>
      <form method="post" action="valida.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
        </div>
          <input type="submit" name="btnLogin" class="btn btn-primary" value="Acessar">
        <a href="cadastro.php" class="my-auto">Cadastre-se</a>
        
      </form>
    </div>
    

   <?php require_once('../footer.php') ?>