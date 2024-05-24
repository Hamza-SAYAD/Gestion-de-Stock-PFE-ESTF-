<?php
session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
	
	
	
 include('enteteAdmin.php'); ?>
 <table width="1350" border="0" cellpadding="100" cellspacing="10"  bgcolor="#ABAD68">
  <tr >
    <td height="350" valign="top">
<!--div class="row">
  <div class="col-xs-offset-2 col-xs-8">
      <h3>Système de gestion des stages</h3>
      </div>
    </div-->
	
    <div align = "center" class="row">
      <div class="col-xs-2">
      

    <?php
   //include('../scripts/connexionDB.php');
    //$c=connexion();
    include('bar_menu.php'); 
    bar_menu(1)
    
     
    ?> 
       </div>
       <div class="col-xs-offset-0 col-xs-8 menu ">

<div id="accordion6" ><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px; margin-bottom:35px;">Menu Principal</p></h5><div>

    <p> 
        <div class="row">
         
            <div class="col-xs-4 "><div id="accordion2"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Gestion Des Clients</p></h5><div><a href="../gestion transactionnelle/client.php"><p align="center"><img src="../images/clients.PNG" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
           <div class="col-xs-4 "><div id="accordion1"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Gestion Des Fournisseurs</p></h5><div><a href="../gestion transactionnelle/fournisseur.php"><p align="center"><img src="../images/fourniss.PNG" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
          
		  <div class="col-xs-4 "><div id="accordion3"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Gestion Des utilisateurs</p></h5><div><a href="../gestion transactionnelle/utilisateur.php"><p align="center"><img src="../images/utilisateurs.png"  width="100px" height="100px" class="img-circle" ></p></a></div></div></div> 
  
		  
		 

         
        </div>
        <div class="row">
                   <div class="col-xs-4 "><div id="accordion4"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Gestion Des Mouvements</p></h5><div><a href="../gestion transactionnelle/mouvement.php"><p align="center"><img src="../images/mouv.jfif" width="100px" height="100px"class="img-circle" ></p></a></div></div></div>
          
				  
				  
         <div class="col-xs-4 "><div id="accordion3"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Gestion Des produits</p></h5><div><a href="../gestion transactionnelle/index.php"><p align="center"><img src="../images/products.jfif" width="100px" height="100px" class="img-circle" ></p></a></div></div></div> 
  
  
  
        <div class="col-xs-4 "><div id="accordion5"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Tableau de bord </p></h5><div><a href="../chartjs/index.php"><p align="center"><img src="../images/bord.jfif" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
            </div>
      
      </p>
  </div>
  
</div>
      



  </div>
      
    

        </div>


 </td>

  </tr>

  

</table>
<?php 
//include('../modeles/deconnexion.php');
include('pied.php'); 
/*<h5>Démonstration</h5><div>
   <p>
    <video controls poster="../images/menu.PNG" width="800" height="400">
   <source src="../modeles/sintel.mp4" />
   <source src="../modeles/sintel.webm" />
   <source src="../modeles/sintel.avi" />
   </video>
    </p>
</div>*/
?>