<?php
   $actual_link = strval("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
   // echo $actual_link.'<br>';
   $pageURL = parse_url($actual_link, PHP_URL_PATH);
   // echo $pageURL.'<br>';

?>
  
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
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

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
   <script type="text/javascript" src="js/app.js"></script>

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
                           <a target="new" href="http://www.medtricslab.com/">Residency Managment</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                           <a target="new" href="https://itunes.apple.com/us/app/saymedicine-medical-pronunciation/id398318159?mt=8">SayMedicine App</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                           <a target="new" href="http://www.askgme.com/">AskGME</a>
                        </li>
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
                  <a href="#" class="list-group-item">2. Verify Major</a>
                  <a href="#" class="list-group-item">3. Category</a>
                  <a href="#" class="list-group-item"><i class="material-icons">stars</i> IDC. Just show the GEP's!</a>
               </div>
            </div>
            <div class="col-md-9">
	
	<?php
      $LearningOutcomes = array(
         "Communication", 
         "Information Literacy", 
         "Analytical/Quantitative",
         "Culture/History",
         "Natural Sciences",
         "Social Sciences",
         "Arts and Humanities",
         "Second Language",
         "Health",
         "Citizenship");
         
// 	echo $_GET;
   // print(". Your password is: ". $_GET['password']);
   ?>
   
   <style>
      .gepTitle {
         font-weight: 500;
      }
      
      table { font-size: .9em; background-color: #eee; }
      
      .table-bordered>tbody>tr>td,
      .table-bordered>tbody>tr>th,
      .table-bordered>tfoot>tr>td,
      .table-bordered>tfoot>tr>th,
      .table-bordered>thead>tr>td,
      .table-bordered>thead>tr>th {
         border: 1px solid #666;
      }
      .table>tbody>tr>td,
      .table>tbody>tr>th,
      .table>tfoot>tr>td,
      .table>tfoot>tr>th {
         padding: 4px;
      }
      
      table thead tr th { text-align:center; }
      table tbody tr td:first-of-type { text-align:right; }
      table tbody tr td:first-of-type span { font-weight: 800; }
      table tbody tr td input {
         text-transform: uppercase;
         text-align: center;
      }
   </style>
   
   <div class="container">
      <div style="max-width:850px">
         <table id="GEP_checklist" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th></th>
                  <th colspan="4">ENTER YOUR <u>REQUIRED</u> COURSES<br>*<span style="font-weight:500;">Spaces ignored.</span></th>
               </tr>
               <tr>
                  <th></th>
                  <th>COURSE</th>
                  <th>COURSE</th>
                  <th>COURSE</th>
                  <th>COURSE</th>
               </tr>
            </thead>
            <tbody>
               <form action="GEP_Calculate.php">
                  <?php
                     for ($i=0; $i < count($LearningOutcomes); $i++) {
                        echo '<tr>';
                        echo '   <td><span>Learning Outcome '. ($i+1) .'</span><br>'. $LearningOutcomes[$i] .'</td>';
                        echo '   <td><input type="text" class="form-control" name="1_'. ($i+1) .'" placeholder="EXAMPLE 101"></td>';
                        echo '   <td><input type="text" class="form-control" name="2_'. ($i+1) .'"></td>';
                        echo '   <td><input type="text" class="form-control" name="3_'. ($i+1) .'"></td>';
                        echo '   <td><input type="text" class="form-control" name="4_'. ($i+1) .'"></td>';
                        echo '</tr>';
                        
                        
                        // echo '<div class="form-group">';
                        // echo '   <label class="control-label">Learning Outcome '. ($i+1) .'</label>';
                        // echo '   <div class="row">';
                        // echo '      <label class="col-xs-4 gepTitle">'. $LearningOutcomes[$i] .'</label>';
                        // echo '      <div class="col-xs-4">';
                        // echo '         <input class="form-control" type="text" name="GEP_N_'. ($i+1)  .'" placeholder="GEP\'s Needed">';
                        // echo '      </div>';
                        // echo '      <div class="col-xs-4">';
                        // echo '         <input class="form-control" type="text" name="DIS_'. ($i+1)  .'" placeholder="Disciplines">';
                        // echo '</div></div></div>';
                     }
                  ?>
                  <tr>
                     <td colspan="5">
                        <input class="btn btn-default" type="reset" value="Reset">
                        <input class="btn btn-primary" type="submit" value="Submit">
                     </td>
                  </tr>
               </form>
            </tbody>
         </table>
      </div>
                        
                        
         
         
         
         
      

   </div>
   
</body>
</html>
