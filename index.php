<!DOCTYPE html>
<html>
<head>
 	<title>Galeria PHP</title>
 	<style type="text/css">
 		img{
 			max-width: 500px;
 		}
 		h1{
 			font-size: 20px;
 			color: #c33e55;
 		}
 		h2{
 			font-size: 20px;
 			color: #c44e55;
 		}
 	</style>
</head>
<body>
<?php 
	include('Galeria.php');
	$galeria = new Galeria();
?> 

<img src="<?php echo $galeria->getCurrentPicture(); ?>" />

<a href="<?php echo $galeria->getNextPictureIndex(); ?>"><h1>Proxima</h1></a>

<a href="<?php echo $galeria->getPrevPictureIndex(); ?>"><h2>Anterior</h2></a>
	
</body>
</html>