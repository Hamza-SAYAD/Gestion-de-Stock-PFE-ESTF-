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
			
			// <img src="../images/logoFin1.PNG" width="400" heigth="400" >
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
  letter-spacing:3.16px; "class="nav navbar-nav" id="logo">
  <li class="active" ><a id ="lo" href="menupoussé.php">GESTION poussé</a> </li>
<li > <a  id="acceuil" href="../acceuil/home.php">ACCEUIL</a> </li>
<li> <a href="../gestion poussée/qteeco.php">QTECO</a></li>
<li> <a href="../gestion poussée/CGS.php">CGS</a></li>
<li><a href="../gestion poussée/nbreoptimalcomnd.php">NBOPTCMD</a></li>
<li><a href="../gestion poussée/periodedappro.php">PERDAPR</a></li>
<li><a href="../chartjs/index.php">TABDBORD</a></li>


</ul>

</nav>
      </div>
     
	       		</div>                              
			