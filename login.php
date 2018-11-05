<?php
  include 'Connection.php';
  session_start();
  if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con,"SELECT * FROM user WHERE username = '$username' AND password= '$password'");
    if (mysqli_num_rows($query) !== 0) {
      $data = mysqli_fetch_assoc($query);


      if ($data['jabatan'] == 'admin') {
        $_SESSION['admin'] = $data['id_user'];
        echo "<script>";
        echo "alert('Anda berhasil masuk sebagai admin!');";
        echo "document.location.href='on-admin/index.php';";
        echo "</script>";
      }else{
        $_SESSION['member'] = $data['id_user'];
        echo "<script>";
        echo "alert('Anda berhasil masuk sebagai member!');";
        echo "document.location.href='on-member/index.php';";
        echo "</script>";
      }
    }else{
    echo "<script>";
    echo "alert('User Tidak Ditemukan!');";
    echo "</script>";
    }
  }
?> 
<html>
<head>
  <title>
    Login Form | Hayu Dagang!
  </title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/login.css" type="text/css">
</head>
<body class="hg">
  <div class="form">
    <form method="post">
      <h2> Sign In </h2>
      <div class="input-box">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="username" placeholder="Username" required="">
      </div>
      <div class="input-box">
        <i class="fa fa-unlock-alt" aria-hidden="true"> </i>
        <input type="password" name="password" placeholder="Password" required="">
      </div>
      <div class="input-box">
        <input type="submit" name="send" value="Login">
      </div>
      <a href="#"> Forgot Password </a><a href="register.php">Register New Account?</a>
    </form>
  </div>

</body>
</html>