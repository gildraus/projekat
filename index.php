<?php 
require 'php/config.php'; ?>
<!DOCTYPE html>

<html>
  <head>
    <title>Book-a-Book</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	

</head>

  <body id="main_body">
  <?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
      ?>
       <div class="login">
      <h2 style='color: #fff';>Dobro došli <?php echo $_SESSION['username'] ?> !</h2>
    </div>
    <br>  
<?php
}
else{
        ?>
    <div class="login">
      <h3><a href="Ulaz/index.php">Log in <span class="glyphicon glyphicon-log-in"></span></a></h3>
    </div>
    <br>
    <?php

	
	 
}
?>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		
		<li><img src="https://api.time.com/wp-content/uploads/2015/06/521811839-copy.jpg" alt="" title="" id="wows0_1"/></li>
		<li><img src="https://images.unsplash.com/photo-1527554677374-236d3bc88a34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="" title="" id="wows0_2"/></li>
		<li><img src="https://compote.slate.com/images/0d3b5f5e-e915-4244-ac7e-ab96cebff803.jpeg" alt="" title="" id="wows0_3"/></li>
		<li><img src="https://trojantimes.net/wp-content/uploads/2019/03/top-10-confidence-books.jpg" alt="" title="" id="wows0_4"/></li>
		<li><img src="https://content.fortune.com/wp-content/uploads/2019/08/20190814-Book-Covers.jpg" alt="" title="" id="wows0_5"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/7.jpg" alt="jquery slider" title="" id="wows0_6"/></a></li>
		<li><img src="data0/images/8.jpg" alt="" title="" id="wows0_7"/></li>
	</ul></div>
	<div class="ws_thumbs">
<div>
		
		<a href="#" title=""><img src="https://api.time.com/wp-content/uploads/2015/06/521811839-copy.jpg" alt="" /></a>
		<a href="#" title=""><img src="https://images.unsplash.com/photo-1527554677374-236d3bc88a34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="" /></a>
		<a href="#" title=""><img src="https://compote.slate.com/images/0d3b5f5e-e915-4244-ac7e-ab96cebff803.jpeg" alt="" /></a>
		<a href="#" title=""><img src="https://trojantimes.net/wp-content/uploads/2019/03/top-10-confidence-books.jpg" alt="" /></a>
		<a href="#" title=""><img src="https://content.fortune.com/wp-content/uploads/2019/08/20190814-Book-Covers.jpg" alt="" /></a>
		<a href="#" title=""><img src="https://media.npr.org/assets/img/2015/11/18/book-awards-istock_wide-a4a7c12ac40b55e1ca11447536309bdee14841ac.jpg?s=1400" alt="" /></a>
		<a href="#" title=""><img src="https://s31523.pcdn.co/wp-content/uploads/2019/09/201901_blog_bookseveryptshouldread.png" alt="" /></a>
	</div>
</div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap carousel</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	 <div class="home">
    <h1 ><a href="index2.php">Početna <span class="glyphicon glyphicon-home"></span></a></h1>
  </div>
<?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  	if($_SESSION['status']=='Admin'){
      ?>
      <div class="home">
    <h1 ><a href="index3.php">Admin panel <span class="glyphicon glyphicon-wrench"></span></a></h1>
  </div>
  	
       
<?php
}
}

?>
  



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>
