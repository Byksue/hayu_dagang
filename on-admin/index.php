<?php  
	session_start();
	include '../Connection.php';
	$id = $_SESSION['admin'];
	$query = mysqli_query($con,"SELECT * FROM user WHERE id_user = '$id'");
	$data = mysqli_fetch_assoc($query);
	$nama = $data['nama'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Hayu Dagang|Admin Page</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><h3><font color="white">Hayu Dagang Admin Page</font></h3></a>
            </div>

            <ul class="list-unstyled components">
                <p style="font-size: 25px;"><?= "Hai,". $data['username']; ?></p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Managemen Data</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="index.php?p=data_user">Data User</a>
                        </li>
                        <li>
                            <a href="index.php?p=data_lapak">Data Pelapak</a>
                        </li>
                        <li>
                            <a href="index.php?p=data_produk">Data Produk</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tentang Aplikasi</a>
                </li>
                <!-- <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="../logout.php">Keluar</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
        	<?php  
        		$pages_dir = 'pages';
        		if (!empty($_GET['p'])) {
        			$pages = scandir($pages_dir,0);
        			unset($pages[0], $pages[1]);

        			$p = $_GET['p'];
        			if (in_array($p.'.php', $pages)) {
        				include($pages_dir.'/'.$p.'.php');
        			}else{
        				echo "<script>alert('Halaman Tidak Ditemukan');</script>";
        			}
        		}
        	?>
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h1 align="center">Jangan Sia-siakan Waktu!Karena Waktu Sangat Berharga</h1>

            <div id="watch"></div><br>
            <h2 align="center"><?= date("F j,Y");?></h2> -->




            <!-- <div class="line"></div> -->
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');

            });


        });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
        function clock() {
		          var now = new Date();
		          var secs = ('0' + now.getSeconds()).slice(-2);
		          var mins = ('0' + now.getMinutes()).slice(-2);
		          var hr = now.getHours();
		          var Time = hr + ":" + mins + ":" + secs;
		          document.getElementById("watch").innerHTML = Time;
		          requestAnimationFrame(clock);
		        }

		        requestAnimationFrame(clock);
    });
</script>
</body>

</html>