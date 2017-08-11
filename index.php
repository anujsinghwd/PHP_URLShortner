<?php 
	require 'PHP/number.php';
	if (count($_POST) > 0) {
		$url = $_POST['url'];
		$name =  $random->random_num(7);
		mkdir($name);

		$newurl = 'http://localhost/short/'.$name;

		$fp=fopen($name.'/index.php','w');

		$str = "<?php header('Location: ".$url."') ?>";
		
		fwrite($fp, $str);
		fclose($fp);

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Url Shortener</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	<style>
		html {
		    font-family: GillSans, Calibri, Trebuchet, sans-serif;
		  }
		nav ul a,
		nav .brand-logo {
		  color: #444;
		}
	</style>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Url Shortener</a>
      <ul class="right hide-on-med-and-down">
        
      </ul>

      <ul id="nav-mobile" class="side-nav">
        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="container-fluid">
	<div class="row blue darken-2" style="height: 600px;">
		<div class="container">
			<br><br>
			<div class="row">
				<h3 class="white-text">Short your Links</h3>
			</div>
			<br>
			<div class="row">
				<form action="" method="POST">
					<div class="row">
			        	<div class="input-field col s12">
			          		<input name="url" type="text" class="validate white" placeholder="Paste Your link Here.." required/>
			        	</div>
			      </div>
			      <div class="row center">
			      	<input type="submit" class="waves-effect waves-light btn" value="Get Short url">
			      </div>
				</form>
			</div>
			<br>
			<div class="row">
				<!-- Shows Url HERE -->
				<?php 
					if (isset($newurl)) {
						//echo '<h5 class="white-text">'.$newurl.'</h5>';
						echo '<h5><a class="white-text hoverable" href="'.$newurl.'">'.$newurl.'</a></h5>';
					}
				 ?>
			</div>
		</div>
	</div>
</div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
</body>
</html>