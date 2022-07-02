<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Css Aku -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Unix Express</title>
  </head>
  <body>

    <!-- Navbar Ea -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
		<div class="container">
            
            <!-- Logo -->
		   	<a class="navbar-brand" href="index.php">
    			<img src="img/Asset 1.svg" width="130" alt="Logo Unix Express">
  			</a>

            <!-- Button -->
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    	<div class="navbar-nav ml-auto">
					<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#service">Services</a>
					<a class="nav-link" href="#career">Career</a>
					<a class="nav-link" href="#about">About Us</a>
					<a class="btn btn-primary btnme mycolor" href="formlogin.php">Let's Try</a>
		    	</div>
		  	</div>
		</div>
	</nav>

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4"><b>Let's Using <br> Unix Express</b></h1>
	    <p class="lead">Unix Express is a new logistics service by ensuring <br>the safety of your goods and sending them quickly <br>so that they become a trusted logistics service <br>throughout Indonesia.</p>
	  </div>
	</div>

    <!-- Isinya Ini -->
    <div class="container">
        <!-- Info Panel -->
        <div id="service" class="row justify-content-center">
            <div class="col-10 infopanel">
                <div class="row">
                    <div class="col-lg justify-content-center btn">
                        <img src="img/ICON/asset 12.svg" class="float-left">
                        <h4>Trace and Track</h4>
                    </div>
                    <div class="col-lg justify-content-center btn">
                        <img src="img/ICON/asset 13.svg" class="float-left">
                        <h4>Shipping Detail</h4>
                    </div>
                    <div class="col-lg justify-content-center btn">
                        <img src="img/ICON/asset 11.svg" class="float-left">
                        <h4>Deliver Now</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cek Jalur Shipping -->
        <div class="row justify-content-center subtitle">
            <h3>Shipping Detail</h3>
        </div>
        <div class="row-lg shipping">
            <form method="post">
                <h5>From</h5>
                <div class="form-row justify-content-center">
                    <div class="form-group col-lg-4" >
                        <select class="form-control" name="nama_provinsi_from">
                            <!-- Ajax Prov -->
                        </select>
                    </div>
                    <div class="form-group col-lg-4" >
                        <select class="form-control" name="nama_distrik_from">
                            <!-- Ajax Distrik -->
                        </select>
                    </div>
                </div>
                <h5>To</h5>
                <div class="form-row justify-content-center">
                    <div class="form-group col-lg-4" >
                        <select class="form-control" name="nama_provinsi_to">
                            <!-- AJax Prov -->
                        </select>
                    </div>
                    <div class="form-group col-lg-4" >
                        <select class="form-control" name="nama_distrik_to">
                            <!-- Ajax Distrik -->
                        </select>
                    </div>
                </div>
                <h5>Data</h5>
                <div class="form-row justify-content-center">
                    <div class="form-group col-lg-4" >
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Weight" aria-label="Recipient's username" aria-describedby="basic-addon2" name="weight">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">gram</span>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-4" >
                        <a name="btn-check"class="btn btn-primary btn-block mycolor">Automatic Check</a>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-lg-8">
                        <div class="list-group output" name="output-ongkir">
                            <!-- Ajax Output Ongkir -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Career -->
    <div id="career">
        <div class="container">
            <div class="row justify-content-center subtitle">
                <h3>Career</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center mascot">
                    <img src="img/mascot.png" alt="Mascot">
                </div>
                <div class="col-lg-6">
                    <h5>Join With Us To Become The Best Logistics Service</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row justify-content-center subtitle">
                <h3>About Us</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center">
                    <h5>Information</h5>
                    <ul>
                        <li>FAQ</li>
                        <li>Term of Delivery Service</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center">
                    <h5>Other From Unix</h5>
                    <ul>
                        <li>FAQ</li>
                        <li>Term of Delivery Service</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center">
                    <h5>Social Media</h5>
                    <ul>
                        <li>FAQ</li>
                        <li>Term of Delivery Service</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script>   
        $(document).ready(function() {
		    $.ajax({
		        type: 'post',
		        url: 'dataprovinsi.php',
		        success:function(hasil_provinsi){
		            $("select[name=nama_provinsi_from]").html(hasil_provinsi);
		            $("select[name=nama_provinsi_to]").html(hasil_provinsi);
		        }
		    })

		    $("select[name=nama_provinsi_from]").on("change",function () {
		        var id_prov_terpilih = $("option:selected",this).attr("id_provinsi");
		        $.ajax({
		            type: 'post',
		            url: 'datadistrik.php',
		            data: {id_provinsi : id_prov_terpilih},
		            success:function(hasil_distrik){
		                $("select[name=nama_distrik_from]").html(hasil_distrik);
		            }
		        })
		    })

		    $("select[name=nama_provinsi_to]").on("change",function () {
		        var id_prov_terpilih = $("option:selected",this).attr("id_provinsi");
		        $.ajax({
		            type: 'post',
		            url: 'datadistrik.php',
		            data: {id_provinsi : id_prov_terpilih},
		            success:function(hasil_distrik){
		                $("select[name=nama_distrik_to]").html(hasil_distrik);
		            }
		        })
		    })
            
            $("a[name=btn-check]").on("click",function () {
                var distrik_from_terpilih = $("option:selected","select[name=nama_distrik_from]").attr("id_distrik");
                var distrik_to_terpilih = $("option:selected","select[name=nama_distrik_to]").attr("id_distrik");
                var berat_total = $("input[name=weight]").val();
                $.ajax({
                    type: 'post',
                    url: 'datacost.php',
                    data: {distrik_from : distrik_from_terpilih, distrik_to : distrik_to_terpilih, berat : berat_total},
                    success:function(hasil_cost){
                        //$("ul[name=output-ongkir]").html(hasil_cost);
                        $("div[name=output-ongkir]").html(hasil_cost);
                    }
                })
            })
		})

        $(window).on("scroll", function () {
                if ($(window).scrollTop()) {
                    $("nav").addClass("scrolled");
                    $("img").addClass("hitam");
                }
                else {
                    $("nav").removeClass("scrolled");
                    $("img").removeClass("hitam");
                }
            })
    </script>
  </body>
</html>