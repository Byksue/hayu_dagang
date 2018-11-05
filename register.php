<?php  
  include 'Connection.php';
  if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);
    $jabatan = 'member';

    if ($password != $repassword) {
      echo "<script>";
      echo "alert('Password Tidak Sama!')";
      echo "</script>";
    }else{
      $query = mysqli_query($con,"INSERT INTO user (username, password, jabatan) VALUES ('$username', '$password', '$jabatan')");
      if ($query) {
        echo "<script>";
        echo "alert('Data berhasil ditambahkan!');";
        echo "document.location.href='login.php';";
        echo "</script>";
      }else{
        echo "gagal input";
      }
    }
  }
?>
<html>
<head>
  <title>
    Register Form | Hayu Dagang!
  </title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/register.css" type="text/css">
</head>
<body>
  <div class="wrapper">
    <h2> Daftar </h2>
    <form method="post" action="">
      <div class="input-field">
        <input type="text" name="username" required="">
        <label> Username </label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required="">
        <!-- <textarea rows="5"></textarea> -->
        <label> Password </label>
      </div>
      <div class="input-field">
        <input type="password" name="repassword" required="">
        <!-- <textarea rows="5"></textarea> -->
        <label> Re-type Password </label>
      </div>
      <input type="submit" name="kirim" value="Daftar" class="btn">
    </form>
  </div>
</body>
</html>
