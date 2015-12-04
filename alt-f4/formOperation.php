<?php
    session_start();
    if ((isset($_POST['CriseID'])) AND ($_POST['CriseID']!="")){
            if ((isset($_POST['nameOperation'])) AND ($_POST['nameOperation']!="")){
                $bdd = new PDO('mysql:host=localhost;dbname=rgdyprykza;charset=utf8', 'rgdyprykza', 'rRv2tVZK6P');
                $myquery = $bdd->prepare("INSERT INTO operation(ID_USER, NOM) operation VALUES(?,?);");
                $myquery->execute(array($_SESSION['IDUSER'],$_POST['nameOperation']));
                $myquery = $bdd->prepare("Select  ID_OPERATION from operation where NOM=?;");
                $myquery->execute(array($_POST['nameOperation']));
                $myquery = $bdd->prepare("INSERT INTO asso_operation_crise(ID_CRISE, ID_OPERATION)  VALUES(?,?);");
                $myquery->execute(array($_POST['CriseID'],$_POST['nameOperation']));
            }
    }
    if(isset($_SESSION['TYPEUSER']) && $_SESSION['TYPEUSER'] == 2)
    {
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank</title>
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
        <section class="content-header">
        </section>

        <section class="content">
        <div class="col-md-12 form">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter une opération</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="nameOperation" class="col-sm-2 control-label">Nom de l'opération</label>
                  <div class="col-sm-9">
                   <input type="text" class="form-control" id="nameOperation" name="nameOperation" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="criseOperation" class="col-sm-2 control-label">Crise</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="criseOperation" name="criseOperation" required>
                        <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=rgdyprykza;charset=utf8', 'rgdyprykza', 'rRv2tVZK6P');
                        $myquery = $bdd->prepare("Select ID_CRISE, NOM from crise;");
                        $myquery->execute(array());
                        while($row->fetch()){
                            ?><option name="CriseID" value="<?php echo $row['ID_CRISE']; ?>"><?php echo $row['NOM']; ?></option>
                        }
                        ?>
                    </select>
                  </div>
                </div>
              </div><!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Valider</button>
              </div><!-- /.box-footer -->
            </form>
          </div>
        </div>
        </section>
      </div><!-- /.content-wrapper -->

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
<?php
  }
  else
  {
    header("maps.php");
  }
?>