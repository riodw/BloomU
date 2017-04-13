<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>BloomU.info</title>

   <!-- Font -->
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800,300italic,400italic">
   <!-- Icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="css/custome.css">
   <link rel="stylesheet" type="text/css" href="css/topNavBar.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <!-- For MVC - (Underscore, Backbone) -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
   <!-- APP JS FOR BACKBONE.js -->
   <!--<script type="text/javascript" src="js/app.js"></script>-->

   <link rel="stylesheet" type="text/css" href="css/typeaheadjs.css">
</head>
<body>
   <div id="app">
      <!-- Navigation -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <a id="menu-toggle" class="navbar-brand" onclick="document.getElementById('wrapper').classList.toggle('toggled');">
                  <i class="material-icons">&#xE5D2;</i>
               </a>
               <a href="#/home" class="navbar-brand" style="padding-top:17px;">
                  <span>BLOOMU Info</span>
               </a>
               <!--<a href="#/home" class="navbar-brand company" style="">-->
               <!--   <span style="padding-right:15px;">|</span><img src="img/medtrics-logo-white.png" style="width:100px; float: right;">-->
               <!--</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbar-collapse-1" class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li uib-dropdown class="dropdown">
                     <a class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">&#xE7F4;</i></a>
                     <ul class="dropdown-menu dropdown-alerts">
                        <li ng-repeat-start="alert in alerts">
                           <a href="#">
                              <div><i class="material-icons" style="color:{{alert.iconColor}};">&#xE7F4;</i> Title<em><span class="pull-right text-muted small">Time</span></em></div>
                           </a>
                        </li>
                        <li ng-repeat-end class="divider"></li>
                        <li><a class="text-center" href="#"><strong>See All Alerts </strong><i class="material-icons">&#xE315;</i></a></li>
                     </ul>
                  </li>
                  <!--<li ng-show="isLoggedIn" uib-dropdown class="dropdown">-->
                  <!--   <a uib-dropdown-toggle class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                  <!--      <i class="material-icons">&#xE896;</i></a>-->
                  <!--   <ul uib-dropdown-menu class="dropdown-menu">-->
                  <!--      <li><a><i class="material-icons">&#xE853;</i> Profile</a></li>-->
                  <!--      <li><a><i class="material-icons">&#xE8B8;</i> Settings</a></li>-->
                  <!--      <li role="separator" class="divider"></li>-->
                  <!--      <li><a><i class="material-icons">&#xE8AC;</i> Log Out</a></li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <li class="dropdown">
                     <a class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">&#xE5C3;</i></a>
                     <ul class="medtrics_products dropdown-menu">
                        <li>
                           <a target="new" href="#">Here</a>
                        </li>
                        <li role="separator" class="divider"></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a id="profile_img_txt" class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="profile_icon"><i class="material-icons">&#xE853;</i></div>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a><i class="material-icons">&#xE853;</i> <span>email</span></a></li>
                        <li><a href="#/settings"><i class="material-icons">&#xE8B8;</i> <span>Settings</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a><i class="material-icons">&#xE8AC;</i> <span>Log Out</span></a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <!-- Page Content -->
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <h2 class="page_title">GEP Calculator</h2>
               <div class="list-group">
                  <a href="#" class="list-group-item active">1. Select Your Major</a>
                  <a href="./GEP_Create.php" class="list-group-item">2. Create Major</a>
                  <!--<a href="/GEP_Verity.php" class="list-group-item">2. Verify Major</a>-->
                  <a href="#" class="list-group-item">3. Category</a>
                  <a href="./GEP_Calculate.php" class="list-group-item"><i class="material-icons">stars</i> Idc. Just show the GEP's!</a>
               </div>
            </div>
            <div class="col-md-9">
               <div class="thumbnail">
                  <header>
                     <h1 class="title">GEP Calculator!</h1>
                     <h1>This is the Bloomsburg University *GEP<br>Graduate Education Points Calculator</h1>
                     <p>*a practical way to take more money from you.</p>
                  </header>
                  <footer class="caption-full row" style="margin:0; padding-bottom:25px;">
                     <h4 class="pull-right">3:22AM; I'm Done.</h4>
                     <h4>Welcome!</h4>
                     <p>This is what you get when I get board and my roomates leave me a case of Red Bull over a weekend.
                        <br>If it doesn't work I don't care, I'm graduating, I'm never even going to use this.</p>
                     <p><strong><a href="http://www.rioweber.com">Rioweber.com</a> </strong>
                     </p>
                     <hr>
                     <div class="col-xs-12 text-center">
                        <h4><u>Start Here</u></h4>
                        <p>Select your Major. *Be sure to select the right Year.</p>
                     </div>
                     <style>
                        .tt-menu { text-align: left; }
                     </style>
                     <div id="the-basics" class="col-xs-12" style="text-align:center;">
                        <input class="typeahead" type="text" placeholder="Select your Major">
                     </div>
                  </footer>
               </div>
               
               <div class="well" style="padding:20px 35px;">
                  <header class="CreateMajor caption-full row" style="margin:0;">
                     <a href="GEP_Create.html" class="pull-right btn btn-warning"><i class="material-icons">&#xE145;</i> Create a New One</a>
                     <h4>Don't See Your Major?</h4>
                  </header>
                  
                  <header class="VerifyMajor caption-full row" style="margin:0; display:none;">
                     <a href="GEP_Verify.php" class="pull-right btn btn-success"><i class="material-icons">&#xE876;</i> Continue</a>
                     <h4>You have selected <strong>MAJOR</strong>.<br>Do you want to continue?</h4>
                  </header>
                  <!--<footer>-->
                  <!--   <hr>-->
                  <!--   <div class="row">-->
                  <!--      <div class="col-md-12">-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star-empty"></span> Anonymous-->
                  <!--         <span class="pull-right">10 days ago</span>-->
                  <!--         <p>This product was great in terms of quality. I would definitely buy another!</p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--   <hr>-->
                  <!--   <div class="row">-->
                  <!--      <div class="col-md-12">-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star"></span>-->
                  <!--         <span class="glyphicon glyphicon-star-empty"></span> Anonymous-->
                  <!--         <span class="pull-right">12 days ago</span>-->
                  <!--         <p>I've alredy ordered another one!</p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</footer>-->
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
      
      <div class="container" style="position:relative; bottom:0;">
         <hr style="border-top: 1px solid #FFF;">
         <footer>
            <div class="row">
               <div class="col-lg-12">
                  <p>Copyright &copy; BloomU.info 2017</p>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <!-- /.app -->

   <!-- Typeahead -->
   <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
   <script src="js/typeahead.js"></script>
</body>

</html>