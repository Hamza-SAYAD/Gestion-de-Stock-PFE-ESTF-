<!DOCTYPE html>
<html lang="fr">
      <head>
	       <meta charset="utf-8" />
           
		   <title>Gestion du stock</title>
          
           <link rel="shortcut icon" href="../images/finalMagaz.jpg">
		    <link rel="stylesheet" type="text/css" href="../css/cefis.css">
           <link href="../css/bootstrap.min.css" rel="stylesheet">
           <link href="../css/tuto1.css" rel="stylesheet">
            
			
            <script>
			
			<?php
			
			/*
			
			
			 <link href="../Projet Gestion de stock/Projet/bootsrap/dist/css/tuto.css" rel="stylesheet">
           
           
           <link href="../bootsrap/dist/css/tuto.css" rel="stylesheet">
           <link rel="stylesheet" href="../jquery/development-bundle/themes/base/jquery.ui.all.css">
           <link rel="stylesheet" href="../jquery/css/dark-hive/jquery-ui-1.10.4.custom.min.css">
			
			<link rel="stylesheet" href="../Projet Gestion de stock/Projet/jquery/development-bundle/themes/base/jquery.ui.all.css">
           <link rel="stylesheet" href="../Projet Gestion de stock/Projet/jquery/jquery/css/dark-hive/jquery-ui-1.10.4.custom.min.css">
           <script src="../jquery/js/jquery-1.10.2.js"></script>
	       <script src="../jquery/development-bundle/ui/jquery.ui.core.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.widget.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.accordion.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.datepicker.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.mouse.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.sortable.js"></script>
           <script src="../jquery/development-bundle/ui/jquery.ui.tabs.js"></script>
			*/
			?>
             $(function() {
   $( "#accordion" ).accordion({
      heightStyle: "content"
      
    });
   $( "#accordion1" ).accordion({
      heightStyle: "content"
    });
   $( "#accordion2" ).accordion({
      heightStyle: "content"
    });
   $( "#accordion3" ).accordion({
      heightStyle: "content"
    });
   $( "#accordion4" ).accordion({
      heightStyle: "content"
    });
   $( "#accordion5" ).accordion({
      heightStyle: "content"
    });
   $( "#accordion6" ).accordion({
      heightStyle: "content"
    });
     $( "#datepicker" ).datepicker();
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  });

  </script>
	  </head>

	  <body >
	  	
	       <div class="container">
	       	<div class="row">
	       		
	       		<div class=" col-xs-11">
	       		
                     <nav class="navbar navbar-inverse">
                     	
<ul style= " 
  
  text-transform:uppercase;
  letter-spacing:3px; " class="nav navbar-nav" id="logo" >
  <li class="active" ><a id ="lo" href="menu.php">GESTION TRANSACTIONNELLE</a> </li>
<li > <a href="../acceuil/home.php">ACCEUIL</a> </li>


<li> <a href="../gestion transactionnelle/fournisseur.php">FSEUR</a></li>
<li><a href="../gestion transactionnelle/client.php">CLIS</a></li>
<li><a href="../gestion transactionnelle/index.php">STOK</a></li>
<li><a href="../gestion transactionnelle/mouvement.php">MOVS</a></li>
<li><a href="../chartjs/index.php">TBDBORD</a><li>
	

</ul>

</nav>
      </div>
     
	       		</div>                              
			
			