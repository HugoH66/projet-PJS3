<html lang="fr">
	<head>
		<title>Destinations - Voyages-Exotiques.com</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	</head>

	<body id="debut" data-spy="scroll" data-target=".navbar" data-offset="50">
		
		<!-- Navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-logo" href="#myPage">Voyages-Exotiques.com</a>
	        </div>
	        <div class="collapse navbar-collapse" id="myNavbar">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.html">ACCUEIL</a></li>
	            <li class="dropdown">
	              <a class="dropdown-toggle" data-toggle="dropdown" href="#">DESTINATIONS <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="destination.php?pays=Papouasie">Papouasie</a></li>
						<li><a href="destination.php?pays=Indonesie">Indonésie</a></li>
						<li><a href="destination.php?pays=Thailande">Thaïlande</a></li>
						<li><a href="destination.php?pays=Cuba">Cuba</a></li>
						<li><a href="destination.php?pays=Seychelles">Seychelles</a></li>
						<li><a href="destination.php?pays=Madagascar">Madagascar</a></li>
						<li><a href="destination.php?pays=Tahiti">Tahiti</a></li>
						<li><a href="destination.php?pays=BoraBora">Bora Bora</a></li>
						<li><a href="destination.php?pays=Hawai">Hawaï</a></li>
						<li><a href="destination.php?pays=Fidji">Iles Fidji</a></li>
					</ul>
	            </li>
	            <li><a href="croisieres.html">CROISIERES</a></li>
	            <li><a href="envoiMail.php">CONTACT</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>
		
		<!-- Image du pays-->
		<h2 class="images text-center">
		<?php
			
				 $pays=$_GET['pays'];
				 $titre=fopen('./Textes/'.$pays.'Titre.txt', 'r');
				 while(!feof($titre)){
					 $ligne0=fgets($titre);
					 echo $ligne0;
				 }
				 fclose($titre);
		?>
		</h2>
   		  <hr>
   		 <div class ="row">
			 <div class="col-md-8 col-md-offset-2 imgs">

				 <?php
				 $pays=$_GET['pays'];
					 {print("<img src=\"./images/PhotosDesti/".$pays.".jpg\" class=\"col-md-12 b\">");}
					 {print("<img src=\"./images/PhotosDesti/".$pays."1.jpg\"class=\"col-md-4 a\">");}
					 {print("<img src=\"./images/PhotosDesti/".$pays."2.jpg\"class=\"col-md-4 a\">");}
					 {print("<img src=\"./images/PhotosDesti/".$pays."3.jpg\"class=\"col-md-4 a\">");}
				 ?>
			</div> 
			<div class ="texte col-md-8 col-md-offset-2"><br>
			 <?php
				 $pays=$_GET['pays'];
				 $texte=fopen('./Textes/'.$pays.'Texte.txt', 'r');
				 while(!feof($texte)){
					 $ligne1=fgets($texte);
					 echo $ligne1;
				 }
				 fclose($texte);
			 ?>
			 </div>
   		 </div>
   		
		
		<!-- Images des villes/endroits populaires-->
		<br>
		<div class="row rechVoy">
			<div class="col-md-3 col-md-offset-2">
				<h2>Formulaire de voyage</h2>
				<div class="form-group">
					<label>Destinations par villes</label>
					<SELECT name="villes" size="1" class="form-control">
						<OPTION selected>ville1</OPTION>
						<OPTION>ville2</OPTION>
						<OPTION>ville3</OPTION>
						<OPTION>ville4</OPTION>
						<OPTION>ville5</OPTION>
					</SELECT>
				</div>
				<div class="form-group">
					<label>Votre date de départ</label>
					<input type="date" name="calendrier" class="form-control">
					<br/>
					<label>Votre date d'arrivée</label>
					<input type="date" name="calendrier" class="form-control">	
				</div>
				<div class="form-group">
					<label>Nombre d'adultes</label>
					<input type="number" name="NbrAdultes" class="form-control">
				</div>
				<div class="form-group">
					<label>Nombre d'enfants</label>
					<input type="number" name="NbrEnfants" class="form-control">
				</div>	
				<button class="btn btn-default btn-form">Valider </button>
			</div>
		</div>

		<footer class="text-center">
	      <a class="up-arrow" href="#debut" data-toggle="tooltip" title="Retourner en haut de la page">
	        <span class="glyphicon glyphicon-chevron-up"></span>
	      </a>
	    </footer>
		<script src="scroll.js"></script>
	</body>
</html>