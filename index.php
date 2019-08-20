<!DOCTYPE html>
<?php
session_start();
if(isset($_GET['out'])){
    session_unset();
}
?>
<html>
    <head> 
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>hệ thống login jquery không load trang</title> 
        <link rel="stylesheet" href="css/index.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script> 
        <script src="js/index.js" type="text/javascript" charset="utf-8"></script>
  
    </head>
    <body>
        <div class="load"> 
   <canvas id="c"></canvas>
    <img class="" src="https://icon-library.net//images/spinner-icon-gif/spinner-icon-gif-26.jpg" alt="" />
</div> 
<A class="giua" Id="error"></A>
     <div class="container content giua" id="load">
         <?php include_once("load.php")?>
     </div>
     <a href="http://facebook.com/ic.wo.de.tian" class="giua">facebook mình</a>
    </body>
</html>