<?php
 require_once('include/session.php');
?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">

    <title> Madawa Pharmacy and Monitoring system</title>
    <!--bootstrap--->
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

    <!--costum css-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    

    <!--morris chart css-->
    <link  rel="stylesheet" href="assets/css/plugins/morriss.css">

    <!--custom fonts-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/dataTables.boostrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <!--navigation-->
        <nav class=" navbar navabar-inverse navbar-fixed-top" role="navigation">
            <!--brand toggle get group for better mobile display-->
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> KIMtech Inventory and Monitoring system</a>
/            </div>
            <!--Top menu Items---->
            <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Administrator<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="setting.php"><i class= "fa fa-fw fa-gear"></i>Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class=" fa fa-fw fa-power-off"></i>log out</a>
                    </li>
                </ul>
            </li>
            </ul>
            <!--siderbar menu--->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                    </li>
                    <li >
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>List item</a>
                    </li>
                    <li >
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Product profile</a>
                    </li>
                    <li >
                        <a href="stoke.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Stoke</a>
                    </li>
                    <li >
                        <a href="expire.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Expire</a>
                    </li>
                    <li >
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>Sales</a>
                    </li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <div id="page-wrapper">

        <div class="container-fluid">

            <!--page heading-->
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        </h1>
                    </div>
                 </div>
        <!--/.row-->
        <div id="sales"></div>

        </div>
        <!--/.container-fluid-->
       
    </div>
     <!--/#page wreapper-->

    </div>
    <!--wrapper-->
            <scrip type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
            <scrip type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
            <scrip type="text/javascript" src="assets/js/boostrap.min.js"></script>
            <scrip type="text/javascript" src="assets/js/jquery.dataTable.min.js"></script>
            <scrip type="text/javascript" src="assets/js/dataTable.boostrap.min.js"></script>
            <scrip type="text/javascript" src="assets/js/regis.js"></script>
</body>
</html