<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
  	
  	<div class="register-box-body">
    	<p class="login-box-msg">Register a new membership</p>

    	<form action="" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="file" class="form-control" name="image" placeholder="Image" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
         
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php">I already have a membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>

      <?php 
    if(isset($_POST['signup']))
    {
     
      try { 
      $conn = new PDO ('mysql:host=localhost;dbname=ecomm','root','');

      $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
                      
}catch (PDOException $e){
      echo $e->getMessage(); 

  }
     try { 
     
      $sql = $conn ->prepare(" SELECT * FROM client");
      $sql->execute();
      if ( isset($_POST['signup'])) {  
              $sql1 = $conn ->prepare(" INSERT into client value ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['image']."','".$_POST['password']."')");
              $sql1 ->execute();
                        
                      } 
               
                  }
              

        
      

catch (PDOException $e){
      echo $e->getMessage(); 

  }



   } 


  ?>

  	</div>
</div>
	

<?php include 'includes/scripts.php' ?>
</body>
</html>