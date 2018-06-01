<!DOCTYPE html>
<html>
<head>
	<title>BlogSpotter</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.fa {
	  padding: 10px;
	  font-size: 30px;
	  width: 30px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	  border-radius: 50%;
	}

	.fa:hover {
	    opacity: 0.7;
	}

	#fa1 {
	  background: #3B5998;
	  color: white;
	}
	#twi1 {
	  background: #55ACEE;
	  color: white;
	}
	#insta1 {
	  background: #125688;
	  color: white;
	}
	input[type=text]{
		margin-top: 10px;
		width: 190px;
    	height: 40px;
    	border: 1px solid blue;
    	padding: 2px 4px;
	}
	input[type=submit]
	{
		background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
	    -webkit-transition-duration: 0.4s; /* Safari */
	    transition-duration: 0.4s;
	    margin-top: 10px;
	    width: 100%;
    	height: 40px;
	}
	input[type=submit]:hover
	{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
</style>
</head>
<body class="body">

	<header class="mainHeader">
		<img src="images.jpg">

		<nav><ul>
			<li class="active"><a href="index.php">About Me</a></li>
			<li><a href="blogs.php">Latest Blog</a></li>
			<li><a href="#">Gallery</a></li>
			

		</ul></nav> 
	</header>

	<div class="maincontent">
		<div class="content1">
			
			<div class="homepage">
				<header>
					<h2><a href="#" title="First Post">About Me</a></h2>
				</header>
				<footer>
					
				</footer>
				<content >
					<form action="#" method="post">
						<textarea name="product_description" rows="28" cols="80" wrap="hard"></textarea>
						<br>
						
				</content>
			</div>	
		</div>	
		<aside class="top-sidebar">
		<article>
			<a href="#" class="fa fa-facebook" id="fa1"></a>
			<input type="text" placeholder="Enter facebook link URL">
		</article>
		</aside>	
	<aside class="top-sidebar">
		<article>
			<a href="#" class="fa fa-twitter" id="twi1"></a>
			<input type="text" placeholder="Enter twitter link URL">
		</article>
		</aside>
		<aside class="top-sidebar">
		<article>
			<a href="#" class="fa fa-instagram" id="insta1"></a>
			<input type="text" placeholder="Enter instagram link URL">
		</article>
		</aside>
		<br>		
	<input type="submit" name="insert_post" value="Submit" />
	</form>	
	<footer class="homepagemainFooter">
		<center><a href="https://www.facebook.com/anshul.gupta.9480111" class="fa fa-facebook"></a>
		<a href="https://twitter.com/AnshulG62823085" class="fa fa-twitter"></a>
		<a href="https://www.instagram.com/i_am_a_gupta.97/" class="fa fa-instagram"></a></center>
		<center><p>Copyright &copy; 2018 <a href="#" title="blogspot">blogspotter.com</a></p></center>
	</footer>	

</body>
</html>