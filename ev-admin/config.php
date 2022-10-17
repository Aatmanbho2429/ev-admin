<?php
$serverName = "localhost";
$databaseName = "charnet_main";
$userName = "root";
$password = "";
$tokenKey="N43NJ4NKJ5N4K3J4NKJN5KJ4N3K4JRNFIUVO3UF4NIOJN3IJR4FNK34NFI43UFN4I3OUFH3F98HN3FGIUN3ROIUGFNI3RFN";
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
if (!$conn) {
  die(mysqli_connect_error($conn));
}
else{
    // echo "connected";
}
