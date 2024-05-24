
    <?php
    function bar_menu($n)
    {
      if($n==1)
      {
    	echo '<nav class="navbar navbar-default" id="nav"><ul style= " 
  
  text-transform:uppercase;
  letter-spacing:5px; " class="nav nav-pills nav-stacked span2" align="center">
    <h4 align="center" ><strong>Menu</strong></h4>
            <li style="margin-bottom:20px; margin-TOP:30px;" class="active"><a href="../acceuil/home.php?SID">Acceuil</a></li>
		   <li style="margin-bottom:20px;"><a href="../gestion transactionnelle/client.php?SID">CLIS</a></li>
		   <li style="margin-bottom:20px;"><a href="../gestion transactionnelle/fournisseur.php?SID">FSEUR</a></li>  
			<li style="margin-bottom:20px;"><a href="../gestion transactionnelle/index.php?SID">STOK</a></li>   
			<li style="margin-bottom:20px;"><a href="../gestion transactionnelle/mouvement.php">MOVS</a></li>			 
            
             <li style="margin-bottom:20px;"><a href="../chartjs/index.php">Tabdbord</a></li>
             
    </ul> </nav>';
  }
  else
      {
    	echo '<nav class="navbar navbar-default" id="nav"><ul style= " 
  
  text-transform:uppercase;
  letter-spacing:5px; " class="nav nav-pills nav-stacked span2" align="center">
    <h4 align="center" ><strong>Menu</strong></h4>
           <li style="margin-bottom:20px; margin-TOP:45px;" class="active"><a href="../acceuil/home.php?SID">ACCEUIL</a></li>
            <li style="margin-bottom:20px;"><a href="../gestion poussée/qteeco.php?SID">QECONO</a></li>
             <li style="margin-bottom:20px;"><a href="../gestion poussée/CGS.php?SID">COUTGS</a></li>
             <li style="margin-bottom:20px;"><a href="../gestion poussée/nbreoptimalcomnd.php?SID">NBOCMD</a></li>
             <li style="margin-bottom:20px;"><a href="../gestion poussée/periodedappro.php?SID">PERODAPRO</a></li>
			   <li style="margin-bottom:20px;"><a href="../chartjs/index.php">TABDBORD</a></li>
             
             
    </ul> </nav>';
  }
  // elseif($n==2)
  // {
     // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Menu</strong></h4>
           // <li ><a href="menu.php?SID"><p class="glyphicon glyphicon-home"></p>&nbsp;&nbsp;&nbsp;&nbsp;Acceuil</a></li>
            // <li class="active"><a href="administrer.php?SID"><p class="glyphicon glyphicon-cog"></p>&nbsp;&nbsp;&nbsp;&nbsp;Administrer</a></li>
             // <li><a href="fournisseur.php?SID"><p class="glyphicon glyphicon-user"></p>&nbsp;&nbsp;&nbsp;&nbsp;Fournisseur</a></li>
             // <li><a href="client.php?SID"><p class="glyphicon glyphicon-user"></p>&nbsp;&nbsp;&nbsp;&nbsp;Client</a></li>
             // <li><a href="stock.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Stock</a></li>
             // <li><a href="entree.php?SID"><p class="glyphicon glyphicon-log-in"></p>&nbsp;&nbsp;&nbsp;&nbsp;Entrée </a></li>
             // <li><a href="sortie.php?SID"><p class="glyphicon glyphicon-log-out"></p>&nbsp;&nbsp;&nbsp;&nbsp;Sortie</a></li>
    // </ul> </nav>';
	
	
	
	
  // }
  // elseif($n==3)
  // {
    // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Menu</strong></h4>
           // <li ><a href="menu.php?SID">Acceuil</a></li>
            // <li ><a href="administrer.php?SID">Administrer</a></li>
             // <li class="active"><a href="fournisseur.php?SID">Fournisseur</a></li>
             // <li><a href="client.php?SID">Client</a></li>
    // </ul> </nav>';
  // }
  // elseif($n==4)
  // {
    // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Menu</strong></h4>
           // <li ><a href="menu.php?SID">Acceuil</a></li>
            // <li ><a href="administrer.php?SID">Administrer</a></li>
             // <li ><a href="fournisseur.php?SID">Fournisseur</a></li>
             // <li class="active"><a href="client.php?SID">Client</a></li>
    // </ul> </nav>';
  // }
    // }
/////////////////////////: BAR ADMINISTRATION /////////////////////////////////////////////////////////////////
     // function bar_administration($n)
     // {
     	// if($n==0)
     	// {
     	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li ><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
              // <li><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
    // </ul> </nav>';
       // }
       // elseif($n==1)
     	// {
     	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li class="active"><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
              // <li><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
     // </ul> </nav>';
       // }
        // elseif($n==2)
     	// {
     	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li ><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li class="active"><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
              // <li><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
    // </ul> </nav>';
       // }
       // elseif($n==3)
     	// {
     	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li ><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li ><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li class="active"><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
              // <li><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
    // </ul> </nav>';
       // }
       // elseif($n==4)
       // {

       	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li ><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li ><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li ><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li class="active"><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
            // <li><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
    // </ul> </nav>';
       // }
   // else
    // {

        // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Administration</strong></h4>
           // <li ><a href="listeutilisateur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste utilisateur</a></li>
            // <li ><a href="ajoututilisateur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter utilisateur</a></li>
             // <li ><a href="supprimer_utilisateur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer utilisateur</a></li>
              // <li "><a href="modificationUti1.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier utilisateur</a></li>
              // <li class="active"><a href="RechercheUtilisateur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;Rechercher Utilisateur</a></li>
    // </ul> </nav>';
       // }
       
     // }
/////////////////////////: BAR FOURNISSEUR /////////////////////////////////////////////////////////////////

     // function bar_fournisseur($n)
     // {
// if($n==0)
// {
     	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter Fournisseur</a></li>
             // <li><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
// elseif($n==1)
// {
	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li class="active"><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter Fournisseur</a></li>
             // <li><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
// elseif($n==2)
// {
	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li class="active"><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter Fournisseur</a></li>
             // <li><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
// elseif($n==3)
// {
	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li ><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter un Fournisseur</a></li>
             // <li class="active"><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
// elseif($n==4)
// {
	// echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li ><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter Fournisseur</a></li>
             // <li ><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li class="active"><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
// else
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listefournisseur.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;Liste Fournisseur</a></li>
            // <li ><a href="ajoutfournisseur.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;Ajouter Fournisseur</a></li>
             // <li ><a href="supprimer_fournisseur.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;Supprimer Fournisseur</a></li>
              // <li ><a href="modificationFour.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;Modifier Fournisseur</a></li>
              // <li class="active"><a href="RechercheFournisseur.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Fournisseur</a></li>
    // </ul> </nav>';
// }
     // }

     /////////////////////////: BAR CLIENT /////////////////////////////////////////////////////////////////
// function bar_client($n)
     // {
// if($n==0)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Client</strong></h4>
           // <li ><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
    // <li><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }
// elseif($n==1)
// {
   // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Client</strong></h4>
           // <li class="active"><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
              // <li><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }
// elseif($n==2)
// {
   // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Client</strong></h4>
           // <li ><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li class="active"><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
            // <li><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }
// elseif($n==3)
// {
   // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Client</strong></h4>
           // <li ><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li class="active"><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
           // <li><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }
// elseif($n==4)
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li ><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li ><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li class="active"><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
            // <li><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }
// else
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Fournisseur</strong></h4>
           // <li ><a href="listeclient.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Client</a></li>
            // <li ><a href="ajoutclient.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Client</a></li>
             // <li ><a href="supprimer_client.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Client</a></li>
              // <li><a href="modification_client.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Client</a></li>
            // <li class="active"><a href="RechercheClient.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Client</a></li>
    // </ul> </nav>';
// }

     // }
////////////////////////////////////// BAR STOCK //////////////////////////////////////////
    // function bar_stock($n)
     // {
// if($n==0)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li ><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
   // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// elseif($n==1)
// {
    // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li class="active"><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
    // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
     // </ul> </nav>';
// }
// elseif($n==2)
// {
    // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li class="active"><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
    // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// elseif($n==3)
// {
   // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li class="active"><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
   // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// elseif($n==4)
// {
   // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li class="active"><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
   // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// elseif($n==5)
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li ><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li class="active"><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
  // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// elseif($n==6)
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li ><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li ><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li class="active"><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
   // <li><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
// else
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Stock</strong></h4>
           // <li><a href="listearticle.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Liste Article</a></li>
            // <li ><a href="ajoutarticle.php?SID"><p class="glyphicon glyphicon-plus"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un Article</a></li>
             // <li><a href="supprimer_article.php?SID"><p class="glyphicon glyphicon-trash"></p>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un Article</a></li>
              // <li ><a href="modification_article.php?SID"><p class="glyphicon glyphicon-refresh"></p>&nbsp;&nbsp;&nbsp;&nbsp;Modifier un Article</a></li>
              // <li ><a href="stockmini.php?SID"><p class="glyphicon glyphicon-minus-sign"></p>&nbsp;&nbsp;&nbsp;&nbsp;Article en Stock mini</a></li>
     // <li ><a href="rupturestock.php?SID"><p class="glyphicon glyphicon-ban-circle"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rupture de Stock</a></li>
   // <li class="active"><a href="RechercheStock.php?SID"><p class="glyphicon glyphicon-search"></p>&nbsp;&nbsp;&nbsp;&nbsp;Rechercher Article</a></li>
    // </ul> </nav>';
// }
     // }

     // function bar_entree($n)
     // {
// if($n==0)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Entrée</strong></h4>
           // <li ><a href="commande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li><a href="ligneCommande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="livraison_entree1.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              
    // </ul> </nav>';
// }
// else if($n==1)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Entrée</strong></h4>
           // <li class="active"><a href="commande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li><a href="ligneCommande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="livraison_entree1.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              
    // </ul> </nav>';
// }

// else if($n==2)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Entrée</strong></h4>
           // <li ><a href="commande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li class="active"><a href="ligneCommande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="livraison_entree1.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              
    // </ul> </nav>';
// }
// else
// {
  // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Entrée</strong></h4>
           // <li ><a href="commande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li ><a href="ligneCommande_entree.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li class="active"><a href="livraison_entree1.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              
    // </ul> </nav>';
// }
// }



 // function bar_sortie($n)
     // {
// if($n==0)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Sortie</strong></h4>
           // <li ><a href="commande_sortie.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li><a href="SortieLigneCommande.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="SortieLivraison.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              // <li><a href="SortieFacture.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Facturation</a></li>
    // </ul> </nav>';
// }
// else if($n==1)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Sortie</strong></h4>
           // <li class="active"><a href="commande_sortie.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li><a href="SortieLigneCommande.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="SortieLivraison.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              // <li><a href="SortieFacture.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Facturation</a></li>
    // </ul> </nav>';
// }
// else if($n==2)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Sortie</strong></h4>
           // <li ><a href="commande_sortie.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li class="active"><a href="SortieLigneCommande.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li><a href="SortieLivraison.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              // <li><a href="SortieFacture.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Facturation</a></li>
    // </ul> </nav>';
// }
// else if($n==3)
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Sortie</strong></h4>
           // <li ><a href="commande_sortie.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li ><a href="SortieLigneCommande.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li class="active"><a href="SortieLivraison.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              // <li><a href="SortieFacture.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Facturation</a></li>
    // </ul> </nav>';
// }

// else 
// {
      // echo '<nav class="navbar navbar-default"><ul class="nav nav-pills nav-stacked span2">
    // <h4 align="center" ><strong>Gestion Sortie</strong></h4>
           // <li ><a href="commande_sortie.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Commande</a></li>
            // <li ><a href="SortieLigneCommande.php?SID"><p class="glyphicon glyphicon-shopping-cart"></p>&nbsp;&nbsp;&nbsp;&nbsp;Ligne Commande</a></li>
             // <li ><a href="SortieLivraison.php?SID"><p class="glyphicon glyphicon-briefcase"></p>&nbsp;&nbsp;&nbsp;&nbsp;Livraison</a></li>
              // <li class="active"><a href="SortieFacture.php?SID"><p class="glyphicon glyphicon-list-alt"></p>&nbsp;&nbsp;&nbsp;&nbsp;Facturation</a></li>
    // </ul> </nav>';
// }
}
    ?>