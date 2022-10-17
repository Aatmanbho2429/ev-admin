<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>permissions</title>
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
          <li><a href="chargingHistory.php">charging history</a></li>
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
        <div class="wrapper permissionWrap">
          <!-- top content -->
          <div class="topContent">
            <!-- home icon -->
            <div class="homeLogo">
              <img
                src="./icons/ant-design_home-filled.svg"
                alt="home logo here"
              /><span>/Permissions</span>
            </div>
          </div>
          <!-- top contentEnd -->

          <!-- permissionBlock -->
          <table class="permissionBlock">
            <thead>
              <tr>
                <th class="pl-10 pr-10">Admins</th>
                <th class="pl-20 pr-20">user</th>
                <th class="pl-20 pr-20">oem</th>
                <th class="pl-20 pr-20">model</th>
                <th class="pl-20 pr-20">evs</th>
                <th class="pl-20 pr-20">offer</th>
                <th class="pl-20 pr-20">station</th>
                <th class="pl-20 pr-20">log</th>
                <th class="pl-10 pr-10">favorite</th>
                <th class="pl-10 pr-10">amenities</th>
                <th class="pl-16 pr-16">charger</th>
                <th class="pl-10 pr-10">chargingHistory</th>
                <th class="pl-10 pr-10">walletHistory</th>
                <th class="pl-10 pr-10">transaction</th>
                <th class="pl-20 pr-20">kyc</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr>
                <td>Admin 1</td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r1" id="r1" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e1" id="e1" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d1" id="d1" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r11" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e11" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d11" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r12" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e12" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d12" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r13" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e13" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d13" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r14" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e14" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d14" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r15" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e15" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d15" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r16" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e16" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d16" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r17" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e17" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d17" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r18" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e18" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d18" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r19" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e19" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d19" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r10" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e10" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d10" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r111" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e111" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d111" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r112" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e112" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d112" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="r113" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="e114" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="d115" />
                  </div>
                </td>
              </tr>
              <!-- row 1 -->

              <!-- row 2 -->
              <tr>
                <td>Admin 2</td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox1" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox2" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox3" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox4" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox5" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox6" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox7" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox8" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox9" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox0" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox11" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox22" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox33" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox44" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox55" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox66" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox77" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox88" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox99" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox00" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox111" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox222" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox333" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox444" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox555" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox666" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox777" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox888" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox999" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox000" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox12" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox23" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox34" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox45" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox56" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox67" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox78" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox89" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox90" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox01" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox02" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox03" />
                  </div>
                </td>
              </tr>
              <!-- row 2 -->

              <!-- row 3 -->
              <tr>
                <td>Admin 3</td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox13" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox23" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox33" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox43" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox53" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox63" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox73" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox83" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox93" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox03" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox113" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox223" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox333" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox443" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox553" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox663" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox773" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox883" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox993" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox003" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox1113" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox2223" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox3333" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox4443" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox5553" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox6663" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox7773" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox8883" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox9993" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox0003" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox123" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox233" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox343" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox453" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox563" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox673" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox783" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox893" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox903" />
                  </div>
                </td>
                <td>
                  <div>
                    <label>read</label>
                    <input type="checkbox" name="checkbox013" />
                  </div>
                  <div>
                    <label>edit</label>
                    <input type="checkbox" name="checkbox023" />
                  </div>
                  <div>
                    <label>delete</label>
                    <input type="checkbox" name="checkbox033" />
                  </div>
                </td>
              </tr>
              <!-- row 3 -->
            </tbody>
          </table>
          <!-- permissionBlock -->
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
</php>
