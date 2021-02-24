<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store_loc";

    $s_code = $_POST['s_code'];
    $lan = $_POST['lan'];
    $lon = $_POST['lon'];
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO stores (s_code, lan, lon)
    VALUES ('$s_code', '$lan', '$lon')";
    
    if (mysqli_query($conn, $sql)) {
      echo "<script> alert('Thank yor for sharing data'); </script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>