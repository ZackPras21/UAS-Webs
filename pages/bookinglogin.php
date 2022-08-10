<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../pages/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TravelSite</title>
  <link rel="icon" href="../images/plane.png" type="image/icon type">
  <script src="https://kit.fontawesome.com/39a70a2a8f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/source.css" />
</head>

<body>
   <!-- Contact Us Button-->
   <div class="mybutton">
    <a href="help.html">
        <button class="help-btn">
            <img src="../images/ep_question-filled.png">
            <p>Need Help?</p>
        </button>
    </a>
  </div>
  <!-- Contact Us Button-->

  <!-- Side Bar -->
  <input type="checkbox" id="check">
  <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
      <header>Menu</header>
      <a href="../welcome.php" class="active">
          <img src="../images/clarity_home-solid.png">
          <span>Dashboard</span>
      </a>
      <a href="pages/bookinglogin.php">
          <img src="../images/clarity_list-line.png">
          <span>My Booking</span>
      </a>
      <a href="pages/help.html">
          <img src="../images/ant-design_question-circle-outlined.png">
          <span>Help Center</span>
      </a>
      <a href="contact.html">
          <img src="../images/ant-design_phone-outlined.png">
          <span>Contact Us</span>
      </a>
      <a href="pages/bookinglogin.php">
          <img src="../images/clarity_plane-solid.png">
          <span>Flights</span>
      </a>
      <a href="pages/bookinglogin.php#hotel">
          <img src="../images/fa6-solid_hotel.png">
          <span>Hotels</span>
      </a>
      <a href="pages/bookinglogin.php#eat">
          <img src="../images/icon-park-solid_fork-spoon.png">
          <span>Eats</span>
      </a>
      <a href="pages/bookinglogin.php#train">
          <img src="../images/bxs_train.png">
          <span>Trains</span>
      </a>
  </div>
  <!-- Side Bar -->

  <!-- Nav Bar -->
  <div class="nav-bar">
    <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="../images/logo.png" height="70" width="230">
            </div>
            <ul class="nav-item">
                <li>
                    <img src="../images/clarity_list-line.png">
                </li>
                <li>
                    <a href="pages/bookinglogin.html">My Booking</a>
                </li>
                <li>
                    <img src="../images/Vector.png">
                </li>
                <li>
                <?php echo "<a>Welcome!, " . $_SESSION['username'] . "</a>"; ?>
                </li>
            </ul>
        </nav>
    </div>
  </div>
  <!-- Nav Bar -->

  <!-- Under Nav Bar -->
  <div class="nav-bar-under">
      <div class="wrappers">
          <div class="bottom_nav">
              <nav class="menu1">
                  <ul>
                      <li><a href="#">Transports<img src="../images/bxs_down-arrow.png" height="15"></a>
                          <ul class="dropdown">
                              <li>
                                  <a href="pages/bookinglogin.php">
                                      <img src="../images/clarity_plane-solid.png" height="25px">
                                      <span>Flights</span>
                                  </a>
                              </li>
                              <li><a href="pages/bookinglogin.php">
                                      <img src="../images/bxs_train.png" height="25px">
                                      <span>Trains</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li><a href="#">Accomodations<img src="../images/bxs_down-arrow.png" height="15"></a>
                          <ul class="dropdown">
                              <li>
                                  </a>
                                  <a href="pages/bookinglogin.php">
                                      <img src="../images/fa6-solid_hotel.png" height="25px">
                                      <span>Hotels</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li><a href="#">Travel Add-ons<img src="../images/bxs_down-arrow.png" height="15"></a>
                          <ul class="dropdown">
                              <li><a href="#">- Experience</a></li>
                              <li><a href="#">- Insurance</a></li>
                              <li><a href="#">- Paylater</a></li>
                              <li><a href="#">- City Guides</a></li>
                              <li><a href="#">- Gift Voucher</a></li>
                          </ul>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </div>
  <!-- Under Nav Bar -->
  <div>
    &nbsp;
  </div>
  <div>
    &nbsp;
  </div>

  <!-- Book list -->
  <div class="table_responsive">
    <table>
      <h1 >FLIGHTS</h1>
      <thead>
        <tr>
          <th>Flights</th>
          <th>From</th>
          <th>To</th>
          <th>No. Of Passangers</th>
          <th>Departure Date</th>
          <th>Seat Class</th>
          <th>Edit List</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Bandung</td>
          <td>Jakarta</td>
          <td>2</td>
          <td>2022-08-24</td>
          <td>VIP Class</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>02</td>
          <td>Jakarta</td>
          <td>Bali</td>
          <td>5</td>
          <td>2022-08-19</td>
          <td>Business Class</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>03</td>
          <td>Jakarta</td>
          <td>Bali</td>
          <td>2</td>
          <td>2022-08-18</td>
          <td>VIP Class</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>03</td>
          <td>Jakarta</td>
          <td>Medan</td>
          <td>2</td>
          <td>2022-08-11</td>
          <td>Economic Class</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div>
    &nbsp;
  </div>
  <div>
    &nbsp;
  </div>

  <div class="table_responsive">
    <table>
      <h1 >HOTEL</h1>
      <thead>
        <tr>
          <th>Hotels</th>
          <th>Hotel Name</th>
          <th>City</th>
          <th>Guests</th>
          <th>Check In</th>
          <th>Duration</th>
          <th>Edit List</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Ayana</td>
          <td>Bandung</td>
          <td>Rifki</td>
          <td>2022-08-18</td>
          <td>3 Hari</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>02</td>
          <td>Ayana</td>
          <td>Bali</td>
          <td>Tirta</td>
          <td>2022-08-31 	</td>
          <td>7 Hari</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>03</td>
          <td>Melati</td>
          <td>Bandung</td>
          <td>Agus</td>
          <td>2022-08-31</td>
          <td>2 Hari</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div>
    &nbsp;
  </div>
  <div>
    &nbsp;
  </div>

  <div class="table_responsive">
    <table>
      <h1 >EATS</h1>
      <thead>
        <tr>
          <th>Eats</th>
          <th>Cuisine,dish/Restaurant</th>
          <th>Mall, area, region or city</th>
          <th>Edit list</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Indomie</td>
          <td>Jakarta</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>              
        </tbody>
      </table>
    </div>
  </div>

  <div>
    &nbsp;
  </div>
  <div>
    &nbsp;
  </div>

  <div class="table_responsive">
    <table>
      <h1 >TRAINS</h1>
      <thead>
        <tr>
          <th>Trains</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Departure Date</th>
          <th>No. Of Passangers</th>
          <th>Edit List</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Bandung</td>
          <td>Pangandaran</td>
          <td>2022-08-18</td>
          <td>2</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>
        <tr>
          <td>02</td>
          <td>Cimahi</td>
          <td>Jakarta</td>
          <td>2022-08-08</td>
          <td>5</td>
          <td>
            <span class="action_btn">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </span>
          </td>
        </tr>       
        </tbody>
      </table>
    </div>
  </div>
  <!-- Book list -->

  <!-- Visit Again -->
  <div class="explore">
    <span>Explore The World again</span>
    <h4>International destination are ready to welcome you</h4>
  </div>
  <div class="container1" >
    <div class="image-boxs">
        <div class="../images">
            <img class="img1" src="../images/bali.jpg" alt="">
        </div>
        <div class="../images">
            <img class="img2" src="../images/malay.jpg" alt="">
        </div>
        <div class="../images">
            <img class="img3" src="../images/singa.jpg" alt="">
        </div>
        <div class="../images">
            <img class="img4" src="../images/new-york-city-evening-NYCTG0221.jpg" alt="">
        </div>
        <div class="../images">
            <img class="img5" src="../images/venice.jpg" alt="">
        </div>
    </div>
  </div>
  <!-- Visit Again -->

  <!-- Why Menu -->
  <div class="nama">
    <p>Why Book With TravelSite?</p>
  </div>
  <div class="hassle">
    <img src="../images/hassle.png">
    <p>Hassle-Free</p>
  </div>
  <div class="service">
    <img src="../images/service.png">
    <p>Service You Can Trust</p>
  </div>
  <div class="payment">
    <img src="../images/various.png">
    <p>Various Payment Option</p>
  </div>
  <div class="secure">
    <img src="../images/secure.png">
    <p>Secure Transaction Guaranteed</p>
  </div>
  <!-- Why Menu -->
</body>
</html>