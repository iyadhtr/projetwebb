<?php 
session_start();
include "../core/produitc.php";
include "../entities/produit.php";
include "../core/categoriesc.php";
include "../entities/categories.php";
include "../entities/submenu.php";
include "../core/submenuc.php";
include "../core/ajoutCart.php" ;
include"../core/remiseC.php";
include "../core/eventC.php";
$event1C=new EventC();
$remise1c=new RemiseC();
$listeEvents=$event1C->afficherEvents();
$cat1c=new CategoryC();
$categorie=$cat1c->affichercategory();
$menu1c=new SubmenuC(); 
$produit1c=new ProduitC();

 ?>


<!DOCTYPE html>

<html lang="zxx">
<head>
<style type="text/css">
@import "compass/css3";

@import url(https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700);

body {
  text-align:center;
  @include filter-gradient(#5d4660, #f7eec7, vertical);
  $experimental-support-for-svg: true;
  font-family: 'Droid Sans', sans-serif;
}

.wrap {
  width:800px;
  margin:0 auto;
  text-align:left;
  color:#989A8F;
}

.table {
  background-color:#ffffff; 
  height:325px;
  width:100%;
  margin-top:40px;  
  position: relative;
  left: -140px;
}

.lili{
  float:left;
  width:199px;
  text-align:center;
  border-left:1px solid #DDDCD8;
}

.top {
  background-color:#EAE9E4;
  height:75px;
  h1 {
    padding-top:20px;
  }
}

.circle {
  width:60px;
  height:60px;
  border-radius:60px;
  font-size:20px;
  color:#fff;
  line-height:60px;
  text-align:center;
  background:#989A8F;
  margin-left:70px;
  margin-top:10px;
}

.bottom {
margin-top:50px;
  p {
     font-size:13px;
     font-family: 'Droid Serif', sans-serif;
     padding:5px;
    span {
     font-weight:bold; 
    }
  }
}

.sign {
  margin-top:50px;
    .button {
   border: 1px solid #989A8F;
   padding: 10px 40px;
   -webkit-border-radius: 6px;
   -moz-border-radius: 6px;
   border-radius: 6px;
   color: #989A8F;
   font-size: 14px;
   text-decoration: none;
   vertical-align: middle;
    font-size:17px;
   }
}

.purple {
  background-color:#5D4660;   
}

.white {
 color:#FFFFFF; 
}

.pink {
  background-color:#BC9B94;
}

</style>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>


	<title>Baz'art | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Baz'art | eCommerce Template">
	<meta name="keywords" content="Baz'art, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
<header class="header-section">
		<?php if( ISSET($_SESSION['mail'])) { ?>
			<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site0-logo">
							<img src="img/logo.jpg" alt="" style="width: 100px ">
						</a>
					</div>
					<div class="col-xl-5 col-lg-5">
						<form class="header-search-form" style="top: 30px">
							<input type="text" placeholder="Search on Baz'art ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5"  style="top: 35px">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="profil.php">Profile</a> -- <a href="logout.php"> Logout</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<?php }?>
			<?php if(!ISSET($_SESSION['mail'])){?>
        <div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site0-logo">
							<img src="img/logo.jpg" alt="" style="width: 100px ">
						</a>
					</div>
					<div class="col-xl-5 col-lg-5">
						<form class="header-search-form" style="top: 30px">
							<input type="text" placeholder="Search on Baz'art ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5"  style="top: 35px">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="login.html">Sign in</a> or <a href="../inscri/inscription.html">Create account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


			
		<?php }?>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
						<ul class="main-menu">
					<li><a href="#">Home</a></li>

					<li><a href="affpag.php">Catalogue</a></li>
				 <?php  
				 foreach($categorie as $cat){ ?>
					<li><a href="productcategory.php?action=category&number=<?php echo $cat['id']; ?>"  type="submit" name="categoryclicked"><?php echo $cat['category']; ?></a>
						
						<ul class="sub-menu">
							<?php 
                         $champ=$cat['id'];

                         $select=$menu1c->remplirchamps($champ);
                        while($s=$select->fetch(PDO::FETCH_OBJ))
           {  
                         foreach ($s as $row) {
                 		
						?>
							<li><a href="#"><?php echo $row; ?></a></li>
						<?PHP
					 }
					

					}
						?>
						</ul>
						<?PHP
					 }
						?>
					</li>
					<li><a href="#">events
						<span class="new">New</span>
					</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Event section -->
<table>
<div class="wrap">
<div class="table">
<ul>
  <?PHP
foreach($listeEvents as $row){
	$liste=$remise1c->recupererRemiseselonevent($row['id']);
	$i=0;
	foreach($liste as $key){
		$i++;
	}
	?>
<li class="lili">
  <div class="top">
    <h4><?php echo $row['nom'] ; ?></h4>
   <div class="circle"><?php echo $row['duree'] ; ?></div>
  <div class="bottom">
    <p><span>date de l'evennement :</span> </br> <?php echo $row['dateE'] ; ?></p>
    <p><span>Remise</span> jusqu'a 75%</p>
    <p><span>stock  </span><strong>LIMITEE</strong></p>
    <p><span>cet evennement a </span> <strong><?php echo$i ;?> produits</strong></p>
    <div class="sign">
    <a href="product-event.php?action=product&number=<?php echo $row['id']; ?>"  class='button'>consulter produit</a>
    <br> <a href="mailevent.php" class='button'> envoyer mail </a>
    </div>
  </div>
</li>
  	<?PHP
}
?>

</ul>
</div>
</div>
</br>
</br>
</br>
</br>
</table>
	<!-- Event section -->
	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="../../../index.html"><img src="../../../img/logo.jpg" alt=""  style="width : 350px"></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="../../../img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="../../../img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="../../../img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>18, Rue des Juges, Menzah 6 Tunis, Aryanah, Tunisia</p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+216 54 323 912</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
						<div class="con-info">
							<span>O.</span>
							<p>ouvert 09:00 - 20:00</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>



			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->


	</body>
</html>
