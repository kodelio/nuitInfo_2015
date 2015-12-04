<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Premiers Secours</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
    			<a href="index2.html" class="logo">
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
    						<!-- Messages: style can be found in dropdown.less-->

    						<li class="dropdown messages-menu">
    							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    								<i class="fa fa-envelope-o"></i>
    								<span class="label label-success">4</span>
    							</a>
    							<ul class="dropdown-menu">
    								<li class="header">You have 4 messages</li>
    								<li>
    									<!-- inner menu: contains the actual data -->
    									<ul class="menu">
    										<li><!-- start message -->
    											<a href="#">
    												<div class="pull-left">
    													<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    												</div>
    												<h4>
    													Support Team
    													<small><i class="fa fa-clock-o"></i> 5 mins</small>
    												</h4>
    												<p>Why not buy a new awesome theme?</p>
    											</a>
    										</li><!-- end message -->
    									</ul>
    								</li>
    								<li class="footer"><a href="#">See All Messages</a></li>
    							</ul>
    						</li>


    						<!-- User Account: style can be found in dropdown.less -->
    						<li class="dropdown user user-menu">
    							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    								<span class="hidden-xs">USERNAME</span><!-- /!\ inclu 3 times -->
    							</a>
    							<ul class="dropdown-menu">
    								<!-- User image -->
    								<li class="user-header">
    									<img src="dist/img/userLogo.jpg" class="img-circle" alt="User Image">
    									<p>
    										USERNAME <!-- /!\ inclu 3 times --> 
    									</p>
    								</li>

    								<!-- Menu Footer-->
    								<li class="user-footer">
    									<div class="pull-left">
    										<a href="#" class="btn btn-default btn-flat">Profile</a>
    									</div>
    									<div class="pull-right">
    										<a href="#" class="btn btn-default btn-flat">Sign out</a>
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
    						<p>USERNAME</p><!-- /!\ inclu 3 times -->
    						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    					</div>
    				</div>
    				<!-- sidebar menu: : style can be found in sidebar.less -->
    				<ul class="sidebar-menu">
    					<li class="header">PLAN DU SITE</li>

    					<li><a href="maps.php"><i class="fa fa-globe"></i> <span>Carte des évènements</span></a></li>
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
		<!-- Main header -->
		<section class="content-header">
			<h1>
				Gestes de premiers secours
			</h1>
			<ol class="breadcrumb">
				<li><a href="#">Accueil</a></li>
				<li class="active">Gestes de premiers secours</li>
			</ol>
		</section>
		
		<!-- Boxes -->
		<section class="content">
			<div class="row">
				<!-- Crise cardiaque -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>Crise cardiaque</h3>
								<p>Arret des battements du coeur de la victime ou battements très anormalement lent.</p><br><br>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Poursuivez la Réanimation cardio-pulmonaire jusqu'à l'arrivée du DAE.</p>
							<p>- Dès qu'il est disponible, mettez le DAE en marche et suivez les instructions de l'appareil.</p>
							<p>- Dénudez la poitrine de la victime et placez les électrodes selon les instructions figurant sur l'emballage ou sur les électrodes elles-mêmes.</p>
							<p>- Assurez-vous que personne ne touche la victime lorsque le DAE analyse le rythme cardiaque de la victime.</p>
							<p>- Si un choc électrique doit être administré, assurez-vous que personne ne touche la victime. Appuyez sur le bouton si cela vous est demandé. Un défibrillateur entièrement automatique administrera la choc sans votre intervention.</p>
							<p>- Si le DAE vous invite à entreprendre des compressions thoraciques, faites-les sans tarder. Alternez 30 compressions et 2 insufflations.</p>
							<p>- Continuez la réanimation jusqu'à ce que les secours d'urgence arrivent et poursuivent la réanimation, ou que la victime reprenne une respiration normale.</p>
							<p>- N'éteignez pas le DAE et laissez les électrodes en place sur la poitrine de la victime. Si celle-ci reste inconsciente mais respire normalement, mettez-la sur le côté, en Position latérale de sécurité (PLS)</p>
						</div>
					</div>
				</div>
				<!-- Noyade -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>4 étapes de secours</h3>
								<p>Quelle que soit la situation d'urgence, il importe d'apprécier correctement la situation et de réaliser les gestes de premiers secours de manière appropriée.</p>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Securisez les lieux de l'accident et les personnes impliquées.</p>
							<p>- Appréciez l'état de la victime.</p>
							<p>- Demandez de l'aide.</p>
							<p>- Effectuez les gestes de premiers secours</p>
						</div>
					</div>
				</div>
				<!-- Etouffement -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-green">
							<div class="inner">
								<h3>Etouffement</h3>
								<p>Chez les adultes, l'étouffement survient généralement au cours d'un repas, en présence d'autres personnes. Dans tous les cas, il faut agir vite !</p>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Donnez un maximum de 5 claques dans le dos de la victime. Après chaque claque, vérifiez si tout rentre dans l'ordre.</p>
							<p>- Si les claques dans le dos n'ont pas d'effet, effectuez un maximum de 5 compressions abdominales.</p>
							<p>- Si le problème n'est toujours pas résolu, alternez 5 claques dans le dos et 5 compressions abdominales.</p>
							<p>- Si la victime perd connaissance, posez-la délicatement au sol et alertez immédiatement les secours, puis entreprenez une réanimation cardio-pulmonaire en commençant par effectuer 30 compressions thoraciques.</p>
							<p>- Poursuivez la réanimation jusqu'à ce que les secours arrivent ou que la victime reprenne une respiration normale.</p>
						</div>
					</div>
				</div>
				<!-- Saignement -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-red">
							<div class="inner">
								<h3>Saignement</h3>
								<p>Lorsque le sang gicle ou coule de façon continue de la plaie, une pression doit être exercée directement sur celle-ci afin d'arrêter le saignement.</p><br>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Evitez, si possible, tout contact avec le sang de la victime ; demandez-lui de comprimer elle-même sa blessure.</p>
							<p>- Sinon, exercez une pression directement sur la plaie avec vos mains protégées (gants jetables, sac plastique ou linge).</p>
							<p>- Allongez la victime en position horizontale.</p>
							<p>- Demandez à une personne présente d'alerter les secours ou faites-le vous-même si vous êtes seul.</p>
							<p>- Si la plaie continue de saigner, comprimez-la encore plus fermement.</p>
							<p>- Poursuivez la compression sur la plaie jusqu'à l'arrivée des secours.</p>
							<p>- Si vous devez vous libérer (par exemple pour aller donner l'alerte), appliquez un tampon relais pour remplacer votre compression manuelle.</p>
							<p>- Lavez-vous les mains après avoir effectué ces premiers secours.</p>
						</div>
					</div>
				</div>
				<!-- Inconscience -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-green">
							<div class="inner">
								<h3>Inconscience</h3>
								<p>Si la victime est inconsciente, et si sa poitrine se soulève régulièrement, il faut libérer les voies aériennes et la placer en position latérale de sécurité.</p>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Vérifiez que la victime ne réagit pas.</p>
							<p>- Libérez les voies aériennes.</p>
							<p>- Vérifiez que la victime respire.</p>
							<p>- Tournez la victime sur le côté en position latérale de sécurité.</p>
							<p>- Demandez à quelqu'un d'appeler les secours ; allez chercher de l'aide si vous êtes seul.</p>
							<p>- Vérifiez régulièrement la respiration de la victime jusqu'à l'arrivée des secours.</p>
						</div>
					</div>
				</div>	
				<!-- Malaise cardiaque -->
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="box box-default collapsed-box">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>Malaise cardiaque</h3>
								<p>Si la victime parle, se sent mal, il est indispensable de lui poser des questions et d'alerter le Samu Centre 15 qui pourra juger du degré d'urgence.</p><br>
							</div>
							<!-- <div class="icon">
								<i class="ion ion-bag"></i>
							</div> -->
							<button class="small-box-footer btn" data-widget="collapse"><i class="fa fa-plus"></i> Plus d'info</button>
						</div>
						<div class="box-body">
							<p>- Posez des questions à la victime : depuis combien de temps dure ce malaise ? Est-ce la première fois ? La victime a-t-elle été hospitalisée ou prend-elle des médicaments pour cela ?</p>
							<p>- Demandez à une personne présente d'alerter immédiatement les secours (le Samu-Centre 15), ou faites-le vous-même si vous êtes seul.</p>
							<p>- Mettez la victime au repos dans une position confortable (allongée ou, si elle le souhaite, en position semi-assise ou assise).</p>
							<p>- Vérifiez régulièrement que la victime est consciente et respire normalement.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

            <footer class="main-footer">
               FOOTER
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
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>
