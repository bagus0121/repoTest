<?php

$conn= mysqli_connect("btzpwcfdumjrpj2zypou-mysql.services.clever-cloud.com","ucsfsfw7mdnec0ff","8vKxAEnExNyZxowgb6E3","btzpwcfdumjrpj2zypou");
	
//memeriksa apakah tombol login telah ditekan
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //memeriksa apakah data username dan password cocok dengan data di tabel
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    //jika data cocok, redirect ke halaman lain
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION["username"] =  $username;
        $_SESSION['logged_in'] = 'YES';
        header("Location: ../pages/dashboard.php");
        exit();
    } else {
        echo "<script>
                    alert('password anda salah');
                    document.location='../pages/sign-in.php';
                </script>";
    }
}

?>
