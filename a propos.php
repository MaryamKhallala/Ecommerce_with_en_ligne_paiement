<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
    	<p class="login-box-msg">A Propos de PROVAC Shopify</p>

    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
        		<h1><center><i><b style="color: black;">PROVAC Shopify</b></i> est un site ecommerce permet aux clients d'acheter des produits électroniques avec un simple clique </center></h1>

            <h4 style="color: #0B69B0"><center><b>Soiyez les bienvenue</b></center></h4>
      		</div>
    	</form>
      <br>
      
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>