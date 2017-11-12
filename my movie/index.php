<?php
 $db='mymovie';
 $error='couldnt connect';
 $sqlhost='localhost';
 $sqluser='root';
 $sqlpw='';
 @mysql_connect( $sqlhost, $sqluser, $sqlpw) or die($error);
 @mysql_select_db($db) or die($error);
 
 
if(isset($_POST['search_movie']))
{
$search_movie=$_POST['search_movie'];
if(!empty($search_movie))
{
$query="SELECT name,id FROM lists WHERE name LIKE '%".mysql_real_escape_string($search_movie)."%'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)>=1)
{
$query_row=mysql_fetch_assoc($query_run);

$name=$query_row['name'];
$id=$query_row['id'];
$link="";
$link.= "http://localhost/my%20movie/";
$link.=$id;
$link.=".html";
header("Location: $link"); 
    exit(); 
}
else echo 'no results';
}
}
?>


<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
<link rel="stylesheet" type="text.css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text.css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text.css" href="css/css.index.css"/>
</head> 

<body>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Theater</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		<li class="divider-vertical"></li>
        <li><a href="#">Movie Time</a></li>
		<li class="divider-vertical"></li>
        <li><a href="#">Critics & Articles</a></li>
        <li class="divider-vertical"></li>		
        <li><a href="#">News & Community</a></li>
        <li class="divider-vertical"></li>
		<li><a href="#">Media World</a></li>		
      </ul>
	  
	  <form class="navbar-form navbar-left" role="search"  action="index.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search_movie">
        </div>
        <button type="submit" class="btn btn-default" name="search">Search</button>
      </form>
	  
	  
	  <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
<div class="col-sm-9">
<div class="carousel slide" id="my-carousel" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#my-carousel" data-slide-to="0"></li>
<li data-target="#my-carousel" data-slide-to="1"></li>
<li data-target="#my-carousel" data-slide-to="2"></li>
<li data-target="#my-carousel" data-slide-to="3"></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<img src="pic/blackmass.jpg"/ alt="Demo">
</div>
<div class="item">
<img src="pic/everest.jpg" alt="Demo"/>
</div>
<div class="item">
<img src="pic/insideout.jpg" alt="Demo"/>
</div>
<div class="item">
<img src="pic/themartian.jpg" alt="Demo"/>
</div>
</div>
<a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="col-sm-3">

<div class="panel-group" id="genre">
  <div class="panel panel-success">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c1" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Adventure</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c1">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-warning">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c2" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Science Fiction</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c2">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-info">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c3" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Action</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c3">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-success">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c4" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Crime</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c4">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-warning">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c5" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Comedy</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c5">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-info">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c6" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Historical</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c6">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-success">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c7" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Romance</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c7">
  <div class="panel-body"></div>
  </div>
  </div>
  
  <div class="panel panel-warning">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#c8" data-toggle="collapse" data-parent="#genre" class="accordion-toggle">Drama</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="c8">
  <div class="panel-body"></div>
  </div>
  </div>
  
  </div>

</div>
</div>


<div class="row">
  <div class="col-sm-9">
  <div class="panel-group" id="my-accordion">
  <div class="panel panel-warning">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#1" data-toggle="collapse" data-parent="#my-accordion" class="accordion-toggle">Latest Movies</a>
  </h4>
  </div>
  <div class="panel-collapse collapse in" id="1">
  <div class="panel-body">
  <div class="row">
  <div class="col-sm-9">
  <iframe width="600" height="338" src="http://www.youtube.com/embed/Ue4PCI0NamI" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="col-sm-3">
  <h3><a href="">The Martian</a></h3>
  <p><strong>(2015)</strong></p>
  <p>Rating : 8.9</p>
  <p>Genre : <strong>Adventure,Comedy,Animation</strong></p>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-9">
  <iframe width="600" height="338" src="http://www.youtube.com/embed/Yr3tv1hW1gg" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="col-sm-3">
  <h3><a href="">The Martian</a></h3>
  <p><strong>(2015)</strong></p>
  <p>Rating : <strong>8.9</strong></p>
  <p>Genre : <strong>Adventure,Comedy,Animation</strong></p>
  
  </div>
  </div>
  </div>
  </div>
  </div>
   <div class="panel panel-success">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#2" data-toggle="collapse" data-parent="#my-accordion" class="accordion-toggle">Top News</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="2">
  <div class="panel-body">this is body2</div>
  </div>
  </div>
   <div class="panel panel-info">
  <div class="panel-heading">
  <h4 class="panel-title">
  <a href="#3" data-toggle="collapse" data-parent="#my-accordion" class="accordion-toggle">Critics & Articles</a>
  </h4>
  </div>
  <div class="panel-collapse collapse" id="3">
  <div class="panel-body">this is body3</div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-3">
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="#"><strong>Top Movies</strong></a>
	</div>
	</div>
	</nav>
  
  <table class="table table-bordered table-striped">
<thead>
<tr  class="success">
<th>#</th>
<th>Movie Name</th>
<th>Rating</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>John Wick</td>
<td>9.8</td>
</tr>
<tr>
<td>2</td>
<td>Daisey</td>
<td>9.3</td>
</tr>
<tr>
<td>3</td>
<td>50 Shades of Gray</td>
<td>6.5</td>
</tr>
<tr>
<td>4</td>
<td>Most Wanted</td>
<td>7.8</td>
</tr>
</tbody>
</table>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="#"><strong>Box Office</strong></a>
	</div>
	</div>
	</nav>

 <table class="table table-bordered table-striped">
<thead>
<tr  class="success">
<th>#</th>
<th>Movie Name</th>
<th>Gross</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>John Wick</td>
<td>9.8</td>
</tr>
<tr>
<td>2</td>
<td>Daisey</td>
<td>9.3</td>
</tr>
<tr>
<td>3</td>
<td>50 Shades of Gray</td>
<td>6.5</td>
</tr>
<tr>
<td>4</td>
<td>Most Wanted</td>
<td>7.8</td>
</tr>
</tbody>
</table>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="#"><strong>Coming Soon</strong></a>
	</div>
	</div>
	</nav>

 <table class="table table-bordered table-striped">
<thead>
<tr class="success">
<th>#</th>
<th>Movie Name</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>John Wick</td>
<td>9.8</td>
</tr>
<tr>
<td>2</td>
<td>Daisey</td>
<td>9.3</td>
</tr>
<tr>
<td>3</td>
<td>50 Shades of Gray</td>
<td>6.5</td>
</tr>
<tr>
<td>4</td>
<td>Most Wanted</td>
<td>7.8</td>
</tr>
</tbody>
</table>
  </div>
</div>

<div class="row">
<p><strong><center>Follow Us On:</center></strong></p>
<ul class="list-inline text-center">
<li><a href="">Twitter</a></li>
<li><a href="">Facebook</a></li>
<li><a href="">LinkedIn</a><li>
</ul>
</div>

<div class="row">
<ul class="list-inline text-center">
<li><a href="">About Us</a></li>
<li><a href="">Terms & Policy</a></li>
<li><a href="">Contact Us</a><li>
</ul>
<p class="text-center muted">&copy;The Theater Co-orporation</p>
</div>

</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>




