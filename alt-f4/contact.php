<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alt-F4 | Contact</title>
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
                                    <span class="hidden-xs"><?php if (isset($_SESSION['IDUSER'])){ echo $_SESSION['IDUSER']; } else { echo "INVITE"; } ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/userlogo.jpg" class="img-circle" alt="User Image">
                                        <p><?php if (isset($_SESSION['IDUSER'])){ echo $_SESSION['IDUSER']; } else { echo "INVITE"; } ?></p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <?php if (isset($_SESSION['IDUSER'])){ echo "<a href=\"deconnexion.php\" class=\"btn btn-default btn-flat\">Déconnexion</a>"; } ?>
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
                      <p><?php if (isset($_SESSION['IDUSER'])){ echo $_SESSION['IDUSER']; } else { echo "INVITE"; } ?></p>
                  </div>
              </div>
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
               <li class="header">PLAN DU SITE</li>

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
   <section class="content">
    <h2>Contact par email</h2>
    <form action="traitement-contact/traitement-contact.php" method="post">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row ">
                            <div class="form-group col-md-6">
                                <label>Nom</label>
                                <input id="firstName" class="form-control" type="text" name="nom" placeholder="Entrez votre Nom">
                            </div>

                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Entrez votre Email">
                            </div>

                            <div class="form-group col-md-6">
                                <label>ONG</label>
                                <select class="form-control" name="ONG">
                                    <option value="unicef@alt-f4-team.fr">Unicef</option>
                                    <option value="msf@alt-f4-team.fr">Médecins Sans Frontières</option>
                                    <option value="croix-rouge@alt-f4-team.fr">Croix Rouge</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <textarea id="message" class="form-control" rows="5" name="message" placeholder="Entrez votre message"></textarea> 
                            </div>

                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-default">Envoyer</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </form>

    <h2>Contact par téléphone</h2>
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>Police</h3>
                                    <p>Numéro : 17</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:17" class="small-box-footer">Appeler <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>SAMU</h3>
                                    <p>Numéro : 15</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:15" class="small-box-footer">Appeler <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>Pompiers</h3>
                                    <p>Numéro : 18</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:18" class="small-box-footer">Appeler <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-offset-2 col-lg-4 col-md-6 col-xs-12">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>Urgences U.E</h3>
                                    <p>Numéro : 112</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:112" class="small-box-footer">Appeler <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>Secours Mer</h3>
                                    <p>Numéro : 196</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:196" class="small-box-footer">Appeler <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>Liens utiles</h2>
    <div class="box box-solid">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row ">
                        <ul>
                            <li><a href="http://www.unicef.org/french/">UNICEF</a></li>
                            <li><a href="http://www.msf.fr/">Médecins Sans Frontières</a></li>
                            <li><a href="http://www.croix-rouge.fr/">Croix Rouges</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->

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

