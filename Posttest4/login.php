<?php 
// require 'koneksi.php';
session_start();
if (isset($_POST["login"]))
{
    // global $email;
    $email = $_POST["email"];
    $password = $_POST["password"];
    $discord = $_POST["discord"];

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['discord'] = $discord;
    
    header("location:./berhasil.php");
}

    // echo $email;
// $result = mysqli_query ($conn,"insert into akun (email, password, discord)
// values ('$email', '$password', '$discord')");

// if ($result) 
//     {
//     echo "
//             <script>
//             alert('Data Berhasil Ditambahkan!');
//             document.location.href = 'berhasil.php';
//             </script>
//         ";
//     } else {
//     echo "
//         <script>
//         alert('Data Gagal Ditambahkan!');
//         document.location.href = 'login.php';
//         </script>
//     ";

//     }
?>