<!DOCTYPE html>
<html>
<head>
	<title>Landing Page Hayu Dagang</title>
  <!-- CSS Offline -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link href="assets/css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
  <style type="text/css">
    #bg-grey{
      padding-top: 20px;
      background: #efefef;
      width: 100%;
    }
    #bg-grey2{
      padding-top: 100px;
      background: #d7d7d7;
      height: 700px;
      width: 100%;
    }
  </style>
  <!-- CSS Online -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: #fff;">
        <a class="navbar-brand" href="#" style="color: #19ea32">Hayu Dagang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: black;">Hubungi Kami <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: black;">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"style="color: black;">Tentang Kami</a>
            </li>
          </ul>
          <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button></a>	
        </div>
      </nav>
    </header>

<!-- Main Content -->
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	          <li data-target="#myCarousel" data-slide-to="1"></li>
	          <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>
	        <div class="carousel-inner">
	          <div class="carousel-item active">
	            <img class="first-slide" src="img/kebun2.jpg" alt="First slide">
	            <div class="container">
	              <div class="carousel-caption" style="padding-top: 0px;">
	                <h1 align="center">Hayu Dagang</h1>
	                <p align="center">K I T A  D A G A N G  K I T A  S E N E N A N G</p>
	                <div class="form-group">
	                	<input type="search" name="" class="form-control" placeholder="Cari barang....">
	                </div>
	              </div>
	            </div>
	          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <h1 align="center" style="font-size: 50px;">Fitur Kami</h1><br>
        <div class="row">
          <div class="col-lg-4">
            <i class="fas fa-american-sign-language-interpreting fa-7x"  style="color: #4cd137;"></i><br>
            <h2>Mudah</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-shipping-fast fa-7x"  style="color: #4cd137;"></i><br>
            <h2>Cepat</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <i class="fas fa-check-circle fa-7x" style="color: #4cd137;"></i><br>
            <h2>Akurat</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div>
    </main>

        <div class="container-fluid" id="bg-grey">
          <div class="container" id="bg-grey">
            <div class="row">
              <div class="col-md-12">
                <div>
                  <h1 align="center">DISCOUNT AND PROMO</h1>
                  <hr style="background: #80dd44;size: 200px;height: 10px;" width="40%"><br>
                </div>
              </div>
            </div>
            <style type="text/css">
              img{
                width: 300px;
                height: 400px;
              }
            </style>
              <div class="owl-carousel owl-theme">
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail" ><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
                <div class="item"><img src="https://source.unsplash.com/random/200x300" class="img-thumbnail"><p align="center"><b>Diskon Besar!</b></p></div>
              </div>
          </div>
        </div>
        

        <div id="bg-grey2">
          <h1 align="center">KATEGORI</h1>
          <hr style="background: #80dd44;size: 100px;height: 10px;" width="20%">
          <br>
          <br>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                
              </div>
              <div class="col-md-3" style="height: 300px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                <p align="center"><i class="fas fa-paw fa-7x" style="padding-top: 50px;color: white;"></i></p>
                <p align="center" style="font-size: 30px;">Hewani</p>
              </div>
              <div class="col-md-3" style="height: 300px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                <p align="center"><i class="fab fa-pagelines fa-7x" style="padding-top: 50px;color: white;"></i></p>
                <p align="center" style="font-size: 30px;">Nabati</p>
              </div>
              <div class="col-md-3">
                
              </div>
              <!-- <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div>
              <div class="col-md-2" style="height: 200px;background: #80dd46;border: 10px solid #d7d7d7;border-radius: 20px;">
                
              </div> -->
            </div>
          </div>
        </div>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
  </script>
</body>
</html>