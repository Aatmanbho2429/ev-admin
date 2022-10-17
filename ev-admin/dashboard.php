<?php 
include 'config.php';
$user = "SELECT user_id from user";

// For total number of user

if ($user_result = mysqli_query($conn, $user)) {
    $usercount = mysqli_num_rows( $user_result );
 }
 
// For total number of ev
$ev = "SELECT ev_id from ev";

if ($ev_result = mysqli_query($conn, $ev)) {
    $evcount = mysqli_num_rows( $ev_result );
 }

// For total amount
$total_amount = "SELECT  SUM(amount) AS Total_Amount from chaging_history";

if ($total_amount_result = mysqli_query($conn, $total_amount)) {
    $total_amount = mysqli_fetch_array($total_amount_result);
    $total_amount_count = $total_amount["Total_Amount"];
    
 }
// For total number of manufacturer
$manufacturer = "SELECT manufacturer_id from manufacturer";

if ($manufacturer_result = mysqli_query($conn, $manufacturer)) {
    $manufacturercount = mysqli_num_rows( $manufacturer_result );
 }
 
// For total number of models
$models = "SELECT model_id from model";

if ($models_result = mysqli_query($conn, $models)) {
    $modelscount = mysqli_num_rows( $models_result );
 }
// For total number of stations
$stations = "SELECT station_id from station";

if ($stations_result = mysqli_query($conn, $stations)) {
    $stationscount = mysqli_num_rows( $stations_result );
 }
// For total number of offers
$offers = "SELECT offer_id from offer";

if ($offers_result = mysqli_query($conn, $offers)) {
    $offerscount = mysqli_num_rows( $offers_result );
 }

// For total number of charger
$charger = "SELECT charger_id from charger";

if ($charger_result = mysqli_query($conn, $charger)) {
    $chargercount = mysqli_num_rows( $charger_result );
 }
 
// For total number of amenity
$amenity = "SELECT amenity_id from amenity";

if ($amenity_result = mysqli_query($conn, $amenity)) {
    $amenitycount = mysqli_num_rows( $amenity_result );
 }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="ev EV Ev charnet CHARNET electricvehicle electric vehicle ELECTRICVEHICLE"
    />
    <title>Ev</title>
    <!-- external css -->
    <link rel="stylesheet" href="./scss/style.css" />
    <!-- tailwing cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <!-- ios library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <!-- header -->
    <header data-aos="fade-down">
      <!-- icon -->
      <div id="icon">
        <img src="./icons/charnet1-01 1.png" alt="logo here" class="w-12" />
      </div>

      <!-- userimage -->
      <figure id="userImage">
        <img src="./images/image 3.png" alt="user image" /><span
          >emma kohli</span
        >
      </figure>
    </header>
    <!-- headerEnd -->

    <div class="div">
      <!-- reorder icon -->
      <svg
        id="reicon"
        xmlns="http://www.w3.org/2000/svg"
        height="24px"
        viewBox="0 0 24 24"
        width="24px"
        fill="#000000"
      >
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path d="M3 15h18v-2H3v2zm0 4h18v-2H3v2zm0-8h18V9H3v2zm0-6v2h18V5H3z" />
      </svg>

      <!-- sidebar -->
<?php include 'sidebar.php'; ?>
      <!-- sidebar End -->

      <!-- main content -->
      <main class="main" data-aos="fade-left">
        <!-- wrapper -->
        <div class="wrapper">
          <!-- top content -->
          <div class="topContent">
            <!-- home icon -->
            <div class="homeLogo">
              <img
                src="./icons/ant-design_home-filled.svg"
                alt="home logo here"
              /><span>/Dashboard</span>
            </div>

            <!-- pi chart -->
            <!-- pi chartEnd -->
          </div>
          <!-- top contentEnd -->

          <!-- gridContainer -->
          <div class="gridContainer">
            <!-- row1 -->
            <div class="row1 row flex">
              <div class="item1">
                <h6>Total Users</h6>
                <span><?php echo"$usercount"; ?></span>
              </div>
              <div class="item2">
                <h6>EVs</h6>
                <span><?php echo"$evcount"; ?></span>
              </div>
              <div class="item3">
                <h6>Transaction Amount</h6>
                <span><?php echo"$total_amount_count"; ?></span>
              </div>
              <div class="item4">
                <h6>Manufacturer</h6>
                <span><?php echo"$manufacturercount"; ?></span>
              </div>
            </div>
            <!-- row1End -->

            <!-- row2 -->
            <div class="row2 row flex">
              <div class="item5">
                <h6>Models</h6>
                <span><?php echo"$modelscount"; ?></span>
              </div>
              <div class="item6">
                <h6>Stations</h6>
                <span><?php echo"$stationscount"; ?></span>
              </div>
              <div class="item7">
                <h6>Offers</h6>
                <span><?php echo"$offerscount"; ?></span>
              </div>
              <div class="item8">
                <h6>Total Charging Volume</h6>
                <span>59KV</span>
              </div>
            </div>
            <!-- row2End -->

            <!-- row3 -->
            <div class="row3 row flex">
              <div class="item9">
                <h6>Chargers</h6>
                <span><?php echo"$chargercount"; ?></span>
              </div>
              <div class="item10">
                <h6>Amenities</h6>
                <span><?php echo"$amenitycount"; ?></span>
              </div>
              <div class="item11">
                <h6>Total Wallet Balance</h6>
                <span>39000</span>
              </div>
              <div class="item12">
                <h6>Transactions</h6>
                <span>45</span>
              </div>
            </div>
            <!-- row3End -->

            <!-- row4 -->
            <div class="row4 row flex">
              <div class="item13">
                <h6>KYCs</h6>
                <span>4</span>
              </div>
            </div>
            <!-- row4End -->
          </div>
          <!-- gridContainerEnd -->
        </div>
        <!-- wrapperEnd -->
      </main>
      <!-- main contentEnd -->
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./js/script.js"></script>
  </body>
</html>
