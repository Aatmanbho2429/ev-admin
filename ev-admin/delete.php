<?php session_start();
require ' config.php';
$amenity_name=$_REQUEST['amenity_name'];
//$sql = "DELETE FROM amenity WHERE amenity_name='" . $_GET["amenity_name"] . "'";
$sql = "DELETE FROM amenity WHERE amenity_name='Air'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header('location:amenities.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>