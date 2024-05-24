<?php
session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
	
 include('enteteAdminpoussé.php'); ?>
 <table width="1350" border="0" cellpadding="100" cellspacing="10"  bgcolor="#ABAD68">
  <tr >
    <td height="350" valign="top">
<!--div class="row">
  <div class="col-xs-offset-2 col-xs-8">
      <h3>Système de gestion des stages</h3>
      </div>
    </div-->
    <div class="row">
      <div class="col-xs-2">
      

    <?php
   //include('../scripts/connexionDB.php');
    //$c=connexion();
	
    include('bar_menu.php'); 
    bar_menu(11)
    
     
    ?> 
       </div>
       <div  class="col-xs-offset-0 col-xs-8 menu "  >

<div id="accordion6"  align = "center" ><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;margin-bottom:25px;">Menu Principal </p></h5><div>

    <p> 
        <div class="row" >
         
		 
		 


		 
		 
           <div class="col-xs-4  " ><div id="accordion"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Quantité Economique </p></h5><div><a href="../gestion poussée/qteeco.php"><p align="center"><img src="../images/QE.JPG" class="img-circle" width="100px" height="100px"></p></a></div></div></div>
		   <div class="col-xs-4 " ><div id="accordion2"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Nombre Optimal de commandes </p></h5><div><a href="../gestion poussée/nbreoptimalcomnd.php"><p align="center"><img src="../images/NBC.PNG" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
           <div class="col-xs-4 "><div id="accordion3"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Période d'approvisi- onnement </p></h5><div><a href="../gestion poussée/periodedappro.php"><p align="center"><img src="../images/PER.PNG" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
          
          

          
        </div>
        <div class="row">
           <div class="col-xs-4 " ><div id="accordion1"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Coût de Gestion de Stock </p></h5><div><a href="../gestion poussée/CGS.php"><p align="center"><img src="../images/CGS.PNG" width="100px" height="100px" class="img-circle" ></p></a></div></div></div>
		   <div class="col-xs-4 " ><div id="accordion1"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Stock De Securité </p></h5><div><a href="../gestion transactionnelle/requetes.php"><p align="center"><img src="../images/SS.PNG" width="100px" height="100px"  class="img-circle" ></p></a></div></div></div>
		  <div class="col-xs-4 " ><div id="accordion2"><h5><p style= " 
  
  text-transform:uppercase;
  letter-spacing:5px;">Tableau De bord </p></h5><div><a href="../chartjs/index.php"><p align="center"><img src="../images/bord.jfif" width="100px" height="100px"  class="img-circle" ></p></a></div></div></div>
           
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