<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alt-F4 | Types de crise</title>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link rel="icon" type="image/ico" href="favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
       <!-- Site wrapper -->
       <div class="wrapper">

        <header class="main-header">
         <!-- Logo -->
         <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Alt</b> - F4</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </a>
       <div class="navbar-custom-menu">
           <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php if (isset($_SESSION['LOGINUSER'])){ echo $_SESSION['LOGINUSER']; } else { echo "INVITE"; } ?></span>
          </a>
          <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <img src="dist/img/userlogo.jpg" class="img-circle" alt="User Image">
               <p><?php if (isset($_SESSION['LOGINUSER'])){ echo $_SESSION['LOGINUSER']; } else { echo "INVITE"; } ?></p>
           </li>

           <!-- Menu Footer-->
           <li class="user-footer">
               <div class="pull-right">
                <?php if (isset($_SESSION['LOGINUSER'])){ echo "<a href=\"deconnexion.php\" class=\"btn btn-default btn-flat\">Déconnexion</a>"; } ?>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>

<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
   <div class="pull-left image">
    <img src="dist/img/userlogo.jpg" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
    <p><?php if (isset($_SESSION['LOGINUSER'])){ echo $_SESSION['LOGINUSER']; } else { echo "INVITE"; } ?></p>
</div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
 <li class="header">PLAN DU SITE</li>
 <?php if (!isset($_SESSION['LOGINUSER'])) { ?>
 <li><a href="Connexion.php"><i class="fa fa-lock"></i> <span>Connexion</span></a></li>
 <?php } ?>
 <li><a href="index.php"><i class="fa fa-globe"></i> <span>Carte des évènements</span></a></li>
 <li><a href="contact.php"><i class="fa fa-ambulance"></i> <span>Contacts/Lieux utiles</span></a></li>            
 <li class="treeview">
  <a href="#">
   <i class="fa fa-graduation-cap"></i> <span>S'informer pour agir</span>
   <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
   <li><a href="gesteSecour.php"><i class="fa fa-plus-square"></i>Gestes <br>premiers secours</a></li>
   <li><a href="typeCrise.php"><i class="fa fa-lightbulb-o"></i>S'informer sur <br>une catastrophe</a></li>
</ul>
</li>
<li><a href="actualites.php"><i class="fa fa-newspaper-o"></i> <span>Actualités</span></a></li>
<?php
if(isset($_SESSION['TYPEUSER']))
{
  ?>
  <li class="header">ACTIONS</li>
  <?php
  if ($_SESSION['TYPEUSER'] == 3)
  {
    ?>
    <li><a href="FormCrise.php"><i class="fa fa-plus"></i> <span>Ajouter une crise</span></a></li>
    <li><a href="ajoutChefSecour.php"><i class="fa fa-plus"></i> <span>Associer chef secours à <br>une crise</span></a></li>
    <?php
}
else if($_SESSION['TYPEUSER'] == 2)
{
    ?>
    <li><a href="formAssignation.php"><i class="fa fa-plus"></i> <span>Associer secours à <br>une opération</span></a></li>
    <li><a href="formOperation.php"><i class="fa fa-plus"></i> <span>Ajouter une opération</span></a></li>
    <li><a href="formChefEmploye.php"><i class="fa fa-plus"></i> <span>Ajouter un employé <br>à ma liste</span></a></li>
    <?php
}
else if($_SESSION['TYPEUSER'] == 1)
{
    ?>
    <li><a href="operation.php"><i class="fa fa-binoculars"></i> <span>Voir mes opérations</span></a></li>//1
    <?php
}
}
?>
</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

 <!-- Main content -->
 <section class="content-header">
     <h1>
        Types de Crises
        <small>S'informer sur une catastrophe</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
        <li class="active">Types de Crises</li>
    </ol>
</section>

<!-- Boxes -->
<section class="content">
 <div class="row">

    <!-- Incendie -->
    <div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
       <div class="box box-default collapsed-box">
          <div class="small-box bg-red">
             <div class="inner">
                <h3>Incendie</h3>
            </div>
            <div class="icon">
                <i class="fa fa-fire"></i>
            </div>
            <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
        </div>
        <div class="box-body">
         <p><b>Là où il y a de la fumée, il ne faut pas aller!</b></p>
         <p>- Les fumées libérées lors d’un incendie sont plus mortelles que les flammes car elles sont chaudes et toxiques, et provoquent des asphyxies.</p>
         <p>- Si vous êtes dans une pièce enfumée, mettez un mouchoir devant le nez et baissez-vous, l’air frais se trouve près du sol.</p>
         <p><b>Si l'incendie se déclare chez vous et que vous ne pouvez pas l'éteindre immédiatement.</b></p>
         <p>- Fermez la porte de la pièce en feu et celle de votre appartement, cela retardera la propagation du feu et des fumées.</p>
         <p>- Evacuez les lieux en sortant par l'issue la plus proche.</p>
         <p>- <a href="contact.php">Appelez les pompiers</a>.</p>
         <p><b>Si l’incendie se déclare dans un autre logement ou dans les parties communes de l’immeuble.</b></p>
         <p>- Restez chez vous, les fumées dues à l’incendie risquent d’envahir les couloirs et les escaliers (les gaz chauds montent), rendant les dégagements impraticables et dangereux.</p>
         <p>- Fermez la porte de votre appartement, mouillez-la  et calfeutrez-la avec un linge humide.</p>
         <p>- Manifestez-vous à la fenêtre, pour que les sapeurs-pompiers vous voient.</p>
         <p><b>ATTENTION, dans tous les cas :</b></p>
         <p>- Si vous devez ouvrir une porte, vérifiez la présence de fumées d’un incendie en prenant un maximum de précautions.</p>
         <p>- Commencez par une ouverture de quelques centimètres, sans chercher à passer la tête, et en vous tenant prêt, immédiatement, à bien refermer la porte. En cas de présence de fumées, celles-ci vont être visibles dès la moindre ouverture.</p>
         <p>- Ne prenez jamais l’ascenseur, prenez les escaliers.</p>
     </div>
 </div>
</div>
<!-- Tsunamies -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-aqua">
         <div class="inner">
            <h3>Tsunamie</h3>
        </div>
        <div class="icon">
            <i class="fa fa-tint"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p><b>Signes précurseurs auxquels être attentifs</b></p>
     <p>- Si on réside dans une zone côtière.</p>
     <p>- Si un tremblement de terre important, une éruption volcanique sous-marine viennent d’avoir lieu.</p>
     <p>- Si on constate une baisse importante du niveau de la mer, qui se retire et découvre la plage sur une distance inhabituellement longue, ou si on entend un grondement.</p>
     <p><b>Comment se préparer ?</b></p>
     <p>- Repérer un endroit où il sera possible de se mettre à l’abri.</p>
     <p>- Préparer l’équipement nécessaire (médicaments, papiers d’identité, lampe de poche etc.)<p>
         <p><b>Agir pendant : Si vous êtes à terre.</b></p>
         <p>- Rester à l’écoute de toutes les consignes données par les autorités compétentes.</p>
         <p>- Dès l’alerte, s’éloigner le plus loin possible des côtes ou atteindre un promontoire de quelques mètres à quelques dizaines de mètres pour être épargné (un petit tsunami en un point de la côte peut être extrêmement violent quelques kilomètres plus loin).</p>
         <p>- Emporter les équipements minimums (lampe de poche, radio portative, eau potable, nourriture, médicaments, couvertures, matériel de confinement).</p>
         <p>- Ne jamais descendre sur la plage pour observer un tsunami.</p>
         <p>- Les vagues de tsunamis ne roulent pas et ne cassent pas : il est inutile et dangereux de vouloir en profiter pour faire du surf.</p>
         <p>- Si l’on est surpris par un tsunami, grimper sur le toit d’une habitation ou la cime d’un arbre solide ; en dernier recours, s’accrocher à un objet flottant que le tsunami charrie.</p>
         <p>- Ne prendre la mer sous aucun prétexte.</p>
         <p>- Eviter de téléphoner pour laisser les secours disposer au mieux des réseaux.</p>
         <p><b>Agir pendant : Si vous êtes en mer.</b></p>
         <p>- Ne pas retourner au port si vous êtes en mer et qu’un avertissement de tsunami est publié.</p>
         <p><b>Agir après</b></p>
         <p>- Rester hors de la zone dangereuse tant qu’un avis de retour à une situation normale n’a pas été émis par les autorités. Un tsunami n’est pas une vague unique, mais une série de vagues qui peuvent venir du large pendant des heures. La plus grosse vague est rarement la première, mais plutôt l’une des vagues suivantes qui, outre sa propre énergie potentielle, récupère l’énergie d’une vague qui s’est déjà brisée et retourne vers la mer.</p>
         <p>- Si l’on est en mer, rester à l’écoute des autorités pour s’assurer que les conditions d’un retour au port sont favorables.</p>
         <p>- Avant d’utiliser l’eau du robinet pour des usages alimentaires (boisson, préparation des aliments, cuisson,…), s’assurer auprès des autorités locales  qu’elle soit potable et dans tous les cas, faire couler l’eau afin de nettoyer le réseau et d’évacuer l’eau qui a stagné.</p>
         <p>- En cas d’utilisation de l’eau d’un puits privé, se renseigner également auprès de la mairie avant de le remettre en service et de l’utiliser à nouveau pour des usages alimentaires.</p>
         <p>- Vérifier l’état des aliments congelés/réfrigérés et les jeter en cas de doute.</p>
         <p>- Afin de prévenir les intoxications au monoxyde de carbone et en cas d’utilisation de groupes électrogènes, veiller à respecter les consignes d’utilisation et à les placer à l’extérieur du bâtiment. Il est recommandé de ne pas utiliser de chauffage d’appoint en continu.</p>
     </div>
 </div>
</div>
<!-- Séisme -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-green">
         <div class="inner">
            <h3>Séisme</h3>
        </div>
        <div class="icon">
            <i class="fa fa-warning"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p><b>Que faire en cas de séisme ?</b></p>
     <p>- Le séisme est un risque où il n’y a pas d’alerte possible. Un certain nombre de consignes générales à suivre « avant, pendant et après » le phénomène sont définies. Elles sont complétées par des consignes spécifiques à chaque risque.</p>
     <p><b>Avant</b></p>
     <p>- Prévoir les équipements minimum (radio portable avec piles, lampe de poche, eau potable, papiers personnels, médicaments urgents, couvertures, vêtements de rechange, matériel de confinement).</p>
     <p>- S’informer en mairie des risques encourus, des consignes de sauvegarde.</p>
     <p>- Organiser le groupe dont on est responsable, discuter en famille des mesures à prendre si une catastrophe survient (protection, évacuation, points de ralliement).</p>
     <p>- Simulations : y participer ou les suivre, en tirer les conséquences et enseignements.</p>
     <p><b>Pendant</b></p>
     <p>- S’informer : écouter la radio, les premières consignes étant données par radio.</p>
     <p>- Informer le groupe dont on est responsable.</p>
     <p>- Ne pas aller chercher les enfants à l’école.</p>
     <p>- A l’intérieur : se mettre près d’un mur, une colonne porteuse ou sous des meubles solides, s’éloigner des fenêtres.</p>
     <p>- A l’extérieur : ne pas rester sous des fils électriques ou sous ce qui peut s’effondrer (ponts, corniches, toitures…).</p>
     <p>- En voiture : s’arrêter et ne pas descendre avant la fin des secousses.</p>
     <p>- Se protéger la tête avec les bras.</p>
     <p>- Ne pas allumer de flamme.</p>
     <p><b>Après</b></p>
     <p>- S’informer : écouter et suivre les consignes données par la radio et les autorités.</p>
     <p>- Informer les autorités de tout danger observé.</p>
     <p>- Apporter une première aide aux voisins, penser aux personnes âgées et handicapées.</p>
     <p>- Se mettre à la disposition des secours.</p>
     <p>- Ne pas téléphoner sauf en cas d’urgence absolue.</p>
     <p>- Evaluer les dégâts, les points dangereux et s’en éloigner.</p>
     <p>- Après la première secousse, se méfier des répliques : il peut y avoir d’autres secousses.</p>
     <p>- Ne pas prendre les ascenseurs pour quitter un immeuble.</p>
     <p>- Vérifier le gaz, l’eau, l’électricité : en cas de fuite, couper les alimentations, ouvrir les fenêtres et les portes, se sauver et prévenir les autorités.</p>
     <p>- S’éloigner des zones côtières, même longtemps après la fin des secousses, en raison d’éventuels raz-de-marée.</p>
 </div>
</div>
</div>
<!-- Epidémies -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-yellow">
         <div class="inner">
            <h3>Epidémie</h3>
        </div>
        <div class="icon">
            <i class="fa fa-warning"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p><b>Que faire en cas d'épidemie ?</b></p>
     <p>- Ecouter les consignes des autorités, radios.</p>
     <p>- S'équiper du matériel adéquat (masque, gants, gel hydroalcoolique, médicaments, carnets de santée, etc...)</p>
 </div>
</div>
</div>
<!-- Attentats -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-red">
         <div class="inner">
            <h3>Attentat</h3>
        </div>
        <div class="icon">
            <i class="fa fa-bomb"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p><b>En cas d'alerte</b></p>
     <p>- Ne pas fréquenter inutilement les endroits les plus à risque.</p>
     <p>- Tout peut potentiellement être un lieu sensible dès qu’il y a un regroupement de gens et / ou une symbolique particulière du point de vue des terroristes.</p>
     <p>- Etre attentif à son environnement.</p>
     <p><b>Si vous assistez à un attentat</b></p>
     <p>- S’il y a possibilité de s’enfuir, c’est la meilleure solution. Mettre de la distance et des couverts durs (béton et murs épais, acier) entre soi et les tireurs.</p>
     <p>- Pour se déplacer, le mieux est de passer de couvert à couvert (se mettre derrière un élément qui protège des balles : 20 centimètres de béton armé, une butte de terre, ou encore une grosse pièce en métal comme un bloc moteur de voiture).</p>
     <p>- Attention : se mettre derrière une table ou une chaise, une cloison en placo, ou derrière un même un mur de parpaing ne protège pas des balles de fusil d’assaut.</p>
     <p>- Ne pas prendre de risque inconsidéré (Le principe de base du secourisme est qu’un secouriste mort ne sert à rien.)</p>
     <p>- En ce qui concerne le fait d’aider les autres, cela dépend de la situation, si l’on sent que c’est possible, oui, aider les autres est forcément une excellente chose.</p>
     <p>- S'éloigner, plus vous êtes loin, moins il y a de risques d’être touché. C’est géométrique. Alors, dès qu’on peut s’éloigner, il faut le faire.</p>
     <p>- Faute d’une meilleure option, utiliser la surprise, et tout moyen à disposition, pour combattre (armes improvisées avec ce qu'on trouve sur place) est une option qui a fonctionné dans certains cas.</p>
     <p><b>Fuir, se cacher, combattre</b></p>
     <p>Je retiendrais trois mots-clés :<p>
         <p>- Fuir : si possible très tôt.</p>
         <p>- Se cacher : idéalement derrière du dur.</p>
         <p>- Combattre : en utilisant la surprise et tout ce qu’on pourra trouver.</p>
         <p>Il n’y a jamais de garanties, mais avec un peu de vigilance, de réalisme et un minimum de préparation, on peut mettre des chances de son côté.</p>
     </div>
 </div>
</div>
<!-- Guerre -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-yellow">
         <div class="inner">
            <h3>Guerre</h3>
        </div>
        <div class="icon">
            <i class="fa fa-bomb"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p><b>Que faire en cas de guerre ?</b></p>
     <p>- Ecouter les autorités</p>
     <p>- Se procurer du matériel de survie.</p>
     <p>- Respecter les éventuels couvre-feux etc...</p>
 </div>
</div>
</div>
<!-- Radioactivité -->
<div class="col-lg-4 col-md-6 col-xs-12" style="width: 100%">
   <div class="box box-default collapsed-box">
      <div class="small-box bg-green">
         <div class="inner">
            <h3>Radioactivité</h3>
        </div>
        <div class="icon">
            <i class="fa fa-warning"></i>
        </div>
        <button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
    </div>
    <div class="box-body">
     <p>Quittez la ville et rejoindre l'<a href="contact.php">hôpitale</a> le plus proche au plus vite.</p>
 </div>
</div>
</div>

</div>
</section>
</div><!-- /.content-wrapper -->
<footer class="main-footer">
 Copyright © 2015 - <strong>Alt-F4 Team</strong> - Nuit de l'Info 2015
</footer>
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
    </body>
    </html>
