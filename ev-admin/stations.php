<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>stations</title>
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
    <div id="blurDiv"></div>

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
      <aside id="sidebar" data-aos="fade-right">
        <svg
          id="close"
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 0 24 24"
          width="24px"
          fill="#000000"
        >
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path
            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
          />
        </svg>
        <!-- sidebar links -->
        <ul>
          <li><a href="index.php">dashboard</a></li>
          <li><a href="charNetizens.php">users</a></li>
          <li><a href="oems.php">manufacturers</a></li>
          <li><a href="models.php">models</a></li>
          <li><a href="evs.php">evs</a></li>
          <li><a href="offers.php">offers</a></li>
          <li><a href="stations.php">stations</a></li>
          <li><a href="logs.php">logs</a></li>
          <li><a href="favorites.php">favorites</a></li>
          <li><a href="amenities.php">amenities</a></li>
          <li><a href="chargers.php">chargers</a></li>
          <li><a href="chargers.php">charging history</a></li>
          <li><a href="walletHistory.php">wallet history</a></li>
          <li><a href="transaction.php">transactions</a></li>
          <li><a href="kyc.php">kyc</a></li>
        </ul>

        <!-- logout button -->
        <button id="logoutBtn">logout</button>
      </aside>
      <!-- sidebarEnd -->

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
              /><span>/Stations</span>
            </div>

            <!-- pi chart -->
            <!-- pi chartEnd -->
          </div>
          <!-- top contentEnd -->

          <table>
            <thead>
              <th>Name</th>
              <th>Address</th>
              <th>longitude</th>
              <th>latitude</th>
              <th>amenities</th>
              <th>Open Time</th>
              <th>Close Time</th>
              <th>Chargers</th>
              <th>price</th>
              <th>access</th>
              <th>station image</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td>Tarun Raj</td>
                <td>H-102 Shivalik</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>Water, Air</td>
                <td>9:00 AM</td>
                <td>9:00 PM</td>
                <td>CSS, Type2</td>
                <td>123.45</td>
                <td>access</td>
                <td>station.png</td>
                <td class="flex justify-evenly">
                  <!-- eye icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="watchicon"
                  >
                    <path
                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"
                    />
                  </svg>
                  <!-- pencil icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="editicon"
                  >
                    <path
                      d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"
                    />
                  </svg>
                  <!-- delete icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="deleteicon"
                  >
                    <path
                      d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"
                    />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Tarun Raj</td>
                <td>H-102 Shivalik</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>Water, Air</td>
                <td>9:00 AM</td>
                <td>9:00 PM</td>
                <td>CSS, Type2</td>
                <td>123.45</td>
                <td>access</td>
                <td>station.png</td>
                <td class="flex justify-evenly">
                  <!-- eye icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="watchicon"
                  >
                    <path
                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"
                    />
                  </svg>
                  <!-- pencil icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="editicon"
                  >
                    <path
                      d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"
                    />
                  </svg>
                  <!-- delete icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="deleteicon"
                  >
                    <path
                      d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"
                    />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Tarun Raj</td>
                <td>H-102 Shivalik</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>Water, Air</td>
                <td>9:00 AM</td>
                <td>9:00 PM</td>
                <td>CSS, Type2</td>
                <td>123.45</td>
                <td>access</td>
                <td>station.png</td>
                <td class="flex justify-evenly">
                  <!-- eye icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="watchicon"
                  >
                    <path
                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"
                    />
                  </svg>
                  <!-- pencil icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="editicon"
                  >
                    <path
                      d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"
                    />
                  </svg>
                  <!-- delete icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="deleteicon"
                  >
                    <path
                      d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"
                    />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Tarun Raj</td>
                <td>H-102 Shivalik</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>Water, Air</td>
                <td>9:00 AM</td>
                <td>9:00 PM</td>
                <td>CSS, Type2</td>
                <td>123.45</td>
                <td>access</td>
                <td>station.png</td>
                <td class="flex justify-evenly">
                  <!-- eye icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="watchicon"
                  >
                    <path
                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"
                    />
                  </svg>
                  <!-- pencil icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="editicon"
                  >
                    <path
                      d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"
                    />
                  </svg>
                  <!-- delete icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="deleteicon"
                  >
                    <path
                      d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"
                    />
                  </svg>
                </td>
              </tr>
              <tr>
                <td>Tarun Raj</td>
                <td>H-102 Shivalik</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>8.6367° N,77.1021° E%</td>
                <td>Water, Air</td>
                <td>9:00 AM</td>
                <td>9:00 PM</td>
                <td>CSS, Type2</td>
                <td>123.45</td>
                <td>access</td>
                <td>station.png</td>
                <td class="flex justify-evenly">
                  <!-- eye icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="watchicon"
                  >
                    <path
                      d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"
                    />
                  </svg>
                  <!-- pencil icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="editicon"
                  >
                    <path
                      d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"
                    />
                  </svg>
                  <!-- delete icon -->
                  <xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="deleteicon"
                  >
                    <path
                      d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"
                    />
                  </svg>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- wrapperEnd -->
      </main>
      <!-- main contentEnd -->
    </div>
    <!-- edit delete watch data section here -->
    <section id="watchbox" class="chargersRead stationRead">
      <svg
        id="closewatch"
        xmlns="http://www.w3.org/2000/svg"
        height="24px"
        viewBox="0 0 24 24"
        width="24px"
        fill="#000000"
        class="bg-white"
      >
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path
          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
        />
      </svg>
      <form class="watchDataForm m-auto mt-16 w-2/3">
        <div class="row1">
          <div class="Name">
            <label for="Namestat">Name:</label>
            <input type="text" value="Tarun Raj" id="Namestat"  disabled/>
          </div>
          <div class="Address">
            <label for="Addressstat">Address:</label>
            <input type="text" value="H-102 Shivalik" id="Addressstat"  disabled/>
          </div>
        </div>
        <div class="row2">
          <div class="Longitude">
            <label for="Longitudestat">Longitude:</label>
            <input type="text" value="8.6367° N,77.1021° E%" id="Longitudestat"  disabled/>
          </div>
          <div class="Latitude">
            <label for="Latitudestat">Latitude:</label>
            <input type="text" id="Latitudestat" value="8.6367° N,77.1021° E%"  disabled/>
          </div>
        </div>
        <div class="row3">
          <div class="Amenities">
            <label for="Amenitiesstat">Amenities:</label>
            <input type="text" id="Amenitiesstat" value="Water, Air"  disabled/>
          </div>
          <div class="OpenTime">
            <label for="OpenTimestat">Open Time:</label>
            <input type="text" id="OpenTimestat" value="9:00 AM"  disabled/>
          </div>
        </div>
        <div class="row4">
          <div class="CloseTime	">
            <label for="CloseTimestat	">Close Time:</label>
            <input type="text" id="CloseTimestat" value="9:00 PM"  disabled/>
          </div>
          <div class="Chargers">
            <label for="Chargersstat">Chargers:</label>
            <input type="text" id="Chargersstat" value="CSS, Type2"  disabled/>
          </div>
        </div>
        <div class="row5">
          <div class="Price">
            <label for="Pricestat">Price:</label>
            <input type="text" id="Pricestat" value="123.45"  disabled/>
          </div>
          <div class="Access">
            <label for="Accessstat">Access:</label>
            <input type="text" id="Accessstat" value="access"  disabled/>
          </div>
        </div>
        <div class="row6">
          <div class="StationImage">
            <label for="StationImagestat">Station Image:</label>
            <input type="text" id="StationImagestat" value="station.png"  disabled/>
          </div>
        </div>
        <div id="okBtn">ok</div>
      </form>
    </section>

    <section id="editbox" class="chargersEdit  stationEdit">
      <svg
        id="closeedit"
        xmlns="http://www.w3.org/2000/svg"
        height="24px"
        viewBox="0 0 24 24"
        width="24px"
        fill="#000000"
        class="bg-white"
      >
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path
          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
        />
      </svg>
      <!-- error -->
      <div id="error">
        
      </div>
      <!-- error-end -->
      <form class="watchDataForm m-auto mt-16 w-2/3" onsubmit="return validate()">
        <div class="row1">
          <div class="Name">
            <label for="Name1stat">Name:</label>
            <input type="text" value="Tarun Raj" id="Name1stat"/>
          </div>
          <div class="Address">
            <label for="Address1stat">Address:</label>
            <input type="text" value="H-102 Shivalik" id="Address1stat"/>
          </div>
        </div>
        <div class="row2">
          <div class="Longitude">
            <label for="Longitude1stat">Longitude:</label>
            <input type="text" value="8.6367° N,77.1021° E%" id="Longitude1stat"/>
          </div>
          <div class="Latitude">
            <label for="Latitude1stat">Latitude:</label>
            <input type="text" id="Latitude1stat" value="8.6367° N,77.1021° E%"/>
          </div>
        </div>
        <div class="row3">
          <div class="Amenities">
            <label for="Amenities1stat">Amenities:</label>
            <input type="text" id="Amenities1stat" value="Water, Air"/>
          </div>
          <div class="OpenTime">
            <label for="OpenTime1stat">Open Time:</label>
            <input type="time" name="opentime" id="OpenTime1stat">
            <!-- <input type="text" id="OpenTime1stat" value="9:00 AM"/> -->
          </div>
        </div>
        <div class="row4">
          <div class="CloseTime">
            <label for="CloseTime1stat">Close Time:</label>
            <input type="time" name="closetime" id="CloseTime1stat">
            <!-- <input type="text" id="CloseTime1stat" value="9:00 PM"/> -->
          </div>
          <div class="Chargers">
            <label for="Chargers1stat">Chargers:</label>
            <input type="text" id="Chargers1stat" value="CSS, Type2"/>
          </div>
        </div>
        <div class="row5">
          <div class="Price">
            <label for="Price1stat">Price:</label>
            <input type="text" id="Price1stat" value="123.45"/>
          </div>
          <div class="Access">
            <label for="Access1stat">Access:</label>
            <input type="text" id="Access1stat" value="access"/>
          </div>
        </div>
        <div class="row6">
          <div class="StationImage">
            <label for="StationImage1stat">Station Image:</label>
            <input type="file" accept="image/*" id="StationImage1stat" style="border: none;">
          </div>
        </div>
        <button id="submit">submit</div>
      </form>
    </section>
    <section id="deletebox">
      <svg
        id="closedelete"
        xmlns="http://www.w3.org/2000/svg"
        height="24px"
        viewBox="0 0 24 24"
        width="24px"
        fill="#000000"
        class="bg-white"
      >
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path
          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
        />
      </svg>
      <div id="confirmBox">
        <h1>Are you sure you want to permanently delete from dataBase?</h1>
        <p>if you deleted this data, it will be permanently lost.</p>
        <div class="btns">
          <button id="cancleButton">Cancle</button>
          <button id="deleteBtn">Delete</button>
        </div>
      </div>
    </section>
    <!-- edit delete watch data section end here -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./js/script.js"></script>
    <script src="./js/editdeletewatch.js"></script>
    <script src="./js/validateForms.js/stationsvalidate.js"></script>
  </body>
</php>
