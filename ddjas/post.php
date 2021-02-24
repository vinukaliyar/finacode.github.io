<?php
error_reporting(0);
    $servername = "localhost";
    $username = "id16238619_admin";
    $password = "l@J33!%*gWN|G]wn";
    $dbname = "id16238619_store_loc";

    $s_code = $_POST['s_code'];
    $lan = $_POST['lat'];
    $lon = $_POST['lon'];
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
     // die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO stores (s_code, lan, lon)
    VALUES ('$s_code', '$lan', '$lon')";
    
    if (mysqli_query($conn, $sql)) {
      echo "<h1>Thank yor for sharing data</h1>";
      alert("Thank you for sharing data.");
     echo '<script>location.replace("https://finacode.in/ddjas/thanks.html")</script>'; 
    } else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      alert("Unable to update. Please try again.");
      echo '<script>location.replace("https://finacode.in/ddjas/index.html?c=n")</script>'; 
      
    }
    
    mysqli_close($conn);
    ?>