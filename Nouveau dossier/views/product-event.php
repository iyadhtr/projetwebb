<?php
session_start();
include "../core/categoriesc.php";
include "../entities/categories.php";
include "../entities/submenu.php";
include "../core/submenuc.php";
include"../core/remiseC.php";
include"../core/produitc.php";
$produit1c=new ProduitC();
$remise1c=new RemiseC();
$id=@$_GET['number'];
$liste=$remise1c->recupererRemiseselonevent($id);
$cat1c=new CategoryC();
$categorie=$cat1c->affichercategory();
$menu1c=new SubmenuC(); 
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Baz'art | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Baz'art | eCommerce Template">
	<meta name="keywords" content="Baz'art, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Font Awesome, Style -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="quick/css/style.css">
	<link rel="stylesheet" type="text/css" href="mimi.css">
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

					<li><a href="cat.php">Catalogue</a></li>
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


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Sale Page</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->
	<section class="category-section spad">
<?PHP
$i=0;
foreach($liste as $key){
	if($i==0)
	{
		?> 
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<?php 
	}
$num=$key['num_p'];
	?>
 <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
<div class="product-area" style="  width: 10000px">
		<div class="container" style="position:relative;left:400px;top: -640px ;width: 10000px">
			<div class="col-3" >
				<a href="#" >
	<?php 
	$listeprod=$produit1c->remplirchamps($num); 
	?>

	<?php 
	$numero=$key['num_p'];
?>
	<?php  
    $row=$produit1c->remplirchamps($numero);
    ?>

					<img src="<?PHP echo $row->img_localisation; ?>">

					<div class="caption">
                        <h4><?PHP echo $row->first_name; ?></h4>
						<button class="price"><i class="fas fa-dollar-sign"></i><s><?PHP echo $row->final_price; ?></s></button>
						<?php
							$test=$row->final_price;
						 $newprice=($row->final_price*$key['pourcentage'] )/100;
							$final=$test-$newprice;
						   ?>
						<button class="price"><i class="fas fa-dollar-sign"></i><?PHP echo $final; ?></button>
					</div>	
					<a href="?action=view&amp;num=<?php echo $row->numero; ?>"><button class="productViewBtn" name="quick">View Product</button></a>
				</a>

			</div>
						            <div class="product-item" style="position: relative;top: 390px;right: 890px">
									<div class="pi-pic">
								    <div class="tag-sale" style="height: 30px;width:20px;"><i class="fas fa-dollar-sign"></i><?PHP echo $key['pourcentage']; ?> % ON SALE</div>
									<div class="pi-links">
										<a href="../core/ajoutCart.php?product_id=<?php echo $row->numero; ?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								    </div>
								    </div>
		</div>
	</div>

		<?PHP
}
?>
</section>
	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="affpag.php"><img src="./img/logo.jpg" alt=""  style="width : 350px"></a>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3">
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
				<div class="col-lg-3">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>