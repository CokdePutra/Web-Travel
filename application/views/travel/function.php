<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "ci3");


   mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$username', '$password')");

   return mysqli_affected_rows($conn);


   function registrasi($data) {
       global $conn;

       $username = mysqli_real_escape_string($conn, $data["email"]);
       $username = strtolower(stripslashes($data["username"]));
       $password = mysqli_real_escape_string($conn, $data["password"]);
       $password2 = mysqli_real_escape_string($conn, $data["password2"]);



       if( $password !== $password2) {
           echo "<script>
                    alert('konfirmasi tidak sesuai');
           </script>";

        return false;
        
       }
   }

?>