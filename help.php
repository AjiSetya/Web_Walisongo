<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Wali Songo</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="assets/css/anim/animate.css" rel="stylesheet">
    
     <style>
	
	body {
		background:url(assets/img/bg2.jpg);
		}
		
	.btn-group{
		border-radius:100px;
	}
		
	</style>
    
  </head>

  <body role="document">
  
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <a class="navbar-brand" onClick="goBack()"><span class="pull-left"><span class="glyphicon glyphicon-menu-left animated rotateIn"></span></span>Bantuan</a>
        </div>
    </nav><br><br>
  
  <!-- Animation class -->
    <div id="main" class="m-scene">
    <!-- Classes that define elment animations -->
      <div class="scene_element scene_element--fadein">
    
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Pusat Bantuan</h4>
        </div>
        <div class="panel-body">
        <p></p>
        
        <p>Agar lebih mudah dalam membaca, Anda dapat :<br></p>
        <ul>
        	<li>Menyesuaikan tingkat <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> pembesaran atau <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span> pengecilan tampilan dengan cubit dua jari bersamaan atau rentangkan jari Anda</li>
          <li>Menekan tombol zoom in/out 
            <div class="btn-group btn-group-xs" role="group" aria-label="...">
             <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span></button>
            <button type="button" class="btn btn-default">
          <li><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></button></div> setelah tombol muncul</li>
          <li><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>  Mengubah setelan rotasi layar ke mode landscape</li>
          <li><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>  Menekan gambar untuk memperbesar gambar</li>
        </ul>
        <br>
        </div>
      </div>

    </div> <!-- /container -->
  
  
  
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
	function goBack() {
    window.history.back();
	}
	</script>
    <script src="assets/js/anim/function.js"></script>
    <script src="assets/js/anim/jquery.smoothState.js"></script>
    </div>
    </div>
  </body>
</html>
