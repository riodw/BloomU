<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Light Red - #A30247 : Dark Red - #7A0035 -->

  <!-- SERVER ROOT -->
	<?php $path = $_SERVER['DOCUMENT_ROOT'].'/'; ?>

  <!-- ALL CSS -->
  <?php
  // $output = include($path.'includes/head.php');
  ?>

  <!-- HIGHLIGHT CURRENT TAB -->
  <?php echo '<style type="text/css">'.'.'.$Class.' { background-color: #7A0035; color:#FFF; }'.'</style>'; ?>
  <!-- Font -->
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800,300italic,400italic">
   <!-- Icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
   <link rel="stylesheet" type="text/css" href="css/BloomU.css">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
   <link rel="stylesheet" type="text/css" href="css/portal_styles.css">
   <link rel="stylesheet" type="text/css" href="css/myStyles4Class-php.css">
   <link rel="stylesheet" type="text/css" href="css/animate.css">
   <link rel="stylesheet" type="text/css" href="css/custome.css">
   <link rel="stylesheet" type="text/css" href="css/topNavBar.css">

   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   
   <!--Google Analytics-->
   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-98218033-1', 'auto');
     ga('send', 'pageview');
   </script>
</head>
<body>
	<nav class="navbar navbar-static">
    <!-- LINK TO ALL OTHER CLASSES -->
		<?php
		//include_once($path.'includes/navbar.php');
		?>
	</nav>
	
   <style>
      table { font-size: .85em; background-color: #eee; }
      table.table-hover>tbody>tr:hover,
      table.table-hover>tbody>tr:hover td { background-color: #FFF; }
      
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
     
      th.rotate {
         height: 175px;
         white-space: nowrap;
         min-width: 16px;
         max-width: 25px;
      }
      /* 45 is really 360 - 45 */
      th.rotate > div {
         
         -webkit-transform-origin: left;
         -webkit-transform: translate(50%, 50%) rotate(270deg);
         -ms-transform-origin: left;
         -ms-transform: translate(50%, 50%) rotate(270deg);
         transform-origin: left;
         transform: translate(12px, 80px) rotate(270deg);
         width: 25px;
      }
      th.rotate > div > span {
         /*border-bottom: 1px solid #ccc;*/
         padding: 0px 0px;
         vertical-align: middle;
         text-align: center;
      }
      
      /* Hover to click checkbox */
      table tbody tr td:nth-child(3),
      table tbody tr td:nth-child(3) input {
         cursor: pointer;
      }
      
      /*table thead tr:nth-child(2) > th:nth-child(4), table tr > td:nth-child(4)*/
      
      table thead tr:nth-child(1) th:nth-child(n+2),
      table tr > td:nth-child(n+3) { text-align: center; }
      
      /* TOTAL Credits */
      .T { background-color: #ddd; }
      .hide_tr_T { display: none; }
      /* Communication */
      .Co { background-color: #fde9d9; }
      .hide_tr_Co { display: none; }
      /* Information Literacy */
      .I { background-color: #daeef3; }
      .hide_tr_I { display: none; }
      /* Analytical/Quantitative */
      .AQ { background-color: #e4dfec; }
      .hide_tr_AQ { display: none; }
      /* Culture/History */
      .CH { background-color: #ebf1de; }
      .hide_tr_CH { display: none; }
      /* Natural Sciences */
      .NS { background-color: #f2dcdb; }
      .hide_tr_NS { display: none; }
      /* Social Sciences */
      .SS { background-color: #dce6f1; }
      .hide_tr_SS { display: none; }
      /* Arts and Humanities */
      .AH { background-color: #ddd9c4; }
      .hide_tr_AH { display: none; }
      /* Second Language */
      .SL { background-color: #99ffcc; }
      .hide_tr_SL { display: none; }
      /* Health */
      .H { background-color: #c5d9f1; }
      .hide_tr_H { display: none; }
      /* Citizenship */
      .Ci { background-color: #ffffcc; }
      .hide_tr_Ci { display: none; }
      
      .noColor { background-color: #FFF; }
      .hide_tr_select { display: none; }
      .hide_tr_check { display: none; }
	</style>
	
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
         
      $color = array('Co', 'I', 'AQ', 'CH', 'NS', 'SS', 'AH', 'SL', 'H', 'Ci');
      // print(". Your password is: ". $_GET['password']);
   ?>
    
   <div class="container">
      <div class="">
         <table id="GEP_Table" class="table table-bordered table-hover">
            <thead>
               <tr>
                  <th colspan="3">SHOW &nbsp;ONLY &nbsp;COURSES &nbsp;THAT &nbsp;HAVE:</th>
                  <th>
                     <select id="totalCredits_select" class="">
                        <option>&#8704;</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                     </select>
                  </th>
                  <?php
                     for ($i=0; $i < count($LearningOutcomes); $i++) {
                        echo '<th><input type="checkbox" onchange="toggleCheckbox(this, \''. $color[$i] .'\')"></th>';
                     }
                  ?>
                  <th></th>
               </tr>
               <tr>
                  <th>Course Prefix</th>
                  <th>Course Name</th>
                  <th class="rotate"><div><button id="remove_selected" class="btn btn-primary btn-xs" style="padding:0px 8px;" type="button">Remove Selected</button></div></th>
                  <th class="rotate T"><div><span>TOTAL Credits</span></div></th>
                  <?php
                     for ($i=0; $i < count($LearningOutcomes); $i++) {
                        echo '<th class="rotate '. $color[$i] .'"><div><span>'. ($i+1) .'. '. $LearningOutcomes[$i] .'</span></div></th>';
                     }
                  ?>
                  <th class="rotate"><div><span>TOTAL GEP's</span></div></th>
               </tr>
            </thead>
            <tbody>
               
               <?php
                  $row = 1;
                  if (($handle = fopen("GEP_Tracking.csv", "r")) !== FALSE) {
                     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo '<tr>';
                        $num = count($data);
                           // echo $row;
                           $row++;
                           for ($c=0; $c < $num; $c++) {
                              if($c == 2) {
                                 echo '<td><input type="checkbox"></td>';
                                 echo '<td class="'. $color[$c-3] .'">'. $data[$c] . '</td>';
                              }
                              else if($c >= 3) {
                                 echo '<td class="'. $color[$c-3] .'">'. $data[$c] . '</td>';
                              }
                              else {
                                 echo '<td>'. $data[$c] . '</td>';
                              }
                           }
                        echo '</tr>';
                     }
                     fclose($handle);
                  }
               ?>
               <tr>
                  <td colspan="15">&nbsp;</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

   <script>
      var index;
      function toggleCheckbox(element, color) {
         if (element.checked) {
            index = $(element).parent().index() + 3;
            
            $( 'table thead tr:last-of-type > th:nth-child(' + index + ')' ).css('background-color', '#FFF');
            $( 'table tr > td:nth-child(' + index + ')' ).addClass( 'noColor' );
            
            removeEmpty(index, color);
         } else {
            index = $(element).parent().index() + 3;
            
            $( 'table thead tr:last-of-type > th:nth-child(' + index + ')' ).removeAttr( 'style' );
            $( 'table tr > td:nth-child(' + index + ')' ).removeClass( 'noColor' );
            
            addBack(index, color);
         }
      }
      // Add BACK All Classes that have been removed from the unchecked Learning Outcome
      function addBack(index, color) {
         $( 'table tr > td:nth-child(' + index + ')' ).each(function() {
               if($( this ).text() == '') {
                  $( this ).parent().removeClass('hide_tr_' + color);
               }
         });
      }
      // Remove All Classes that do not have a GEP for the Learning Outcome that is checked
      function removeEmpty(index, color) {
         $( 'table tr > td:nth-child(' + index + ')' ).each(function() {
            if($( this ).text() == '') {
               $( this ).parent().addClass('hide_tr_' + color);
            }
         });
      }
      
      // TOTAL Credits drop down select
      var selected;
      $('#totalCredits_select').change(function() {
         selected = $( "#totalCredits_select option:selected" ).text();
         
         if(selected == '∀') {
            console.log(true);
            $( 'table tbody tr' ).removeClass('hide_tr_select');
            return;
         } else {
            $( 'table tr > td:nth-child(4)' ).each(function() {
               if($( this ).text() != selected) {
                  $( this ).parent().addClass('hide_tr_select');
               } else {
                  $( this ).parent().removeClass('hide_tr_select');
               }
            });
         }
      });
      
      
      // Click box to make checked
      $('table tbody tr td:nth-child(3)').click(function() {
         if($(this).children('input').is(':checked'))
            $(this).children('input').prop('checked', false);
         else
            $(this).children('input').prop('checked', true);
      });
      
      // REMOVE
      $('#remove_selected').click(function() {
         $( 'table tbody tr > td:nth-child(3) input:checked' ).parent().parent().addClass('hide_tr_check');
      });
   </script>
   
</body>
</html>



