
<!DOCTYPE html>
<html lang="en">
<!--
        NAMA dan NIM  : Zaky Prasetya Syahputra(10121263),Raehan Gadha R,M(10121250), Azril Ahdiyat(10121246)
                        Dicky Mahendra(10121258), Ridwan Sugiharto(10121280)
        KELAS : IF-7
        created by : Zaky
        logs: - v1.0 Zaky - Making Web Desing on Figma
        [Link Figma = https://www.figma.com/file/nUcdzWV5WB3nHVGNrk42hP/Travel-Site?node-id=0%3A1]
        logs: - v2.0 Zaky - Making Nav Bar and Under Nav
        logs: - v2.1 Ridwan - Linking Register And Log In 
        logs: - v2.2 Zaky - Making Side Bar
        logs: - v2.3 Zaky - Making My Booking Page
        logs: - v2.4 Ridwan - Adding DownBar
        logs: - v3.0 Azril - Making Menu 
        logs: - v3.1 Raehan - Helping Making Menu
        logs: - v4.0 Zaky - Making need help button
        logs: - v4.5 Dicky - Making Why Menu 
        logs: - v5.0 Zaky - Making Visit Again Tab and Finishing
    -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelSite</title>
    <link rel="icon" href="images/plane.png" type="image/icon type">
    <script src="https://kit.fontawesome.com/39a70a2a8f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/source.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <!-- Contact Us Button-->
    <div class="mybutton">
        <a href="pages/help.html">
            <button class="help-btn">
                <img src="images/ep_question-filled.png">
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
        <a href="#logo" class="active">
            <img src="images/clarity_home-solid.png">
            <span>Dashboard</span>
        </a>
        <a href="pages/booking.html">
            <img src="images/clarity_list-line.png">
            <span>My Booking</span>
        </a>
        <a href="pages/help.html">
            <img src="images/ant-design_question-circle-outlined.png">
            <span>Help Center</span>
        </a>
        <a href="pages/contact.html">
            <img src="images/ant-design_phone-outlined.png">
            <span>Contact Us</span>
        </a>
        <a href="pages/booking.html">
            <img src="images/clarity_plane-solid.png">
            <span>Flights</span>
        </a>
        <a href="pages/booking.html#hotel">
            <img src="images/fa6-solid_hotel.png">
            <span>Hotels</span>
        </a>
        <a href="pages/booking.html#eat">
            <img src="images/icon-park-solid_fork-spoon.png">
            <span>Eats</span>
        </a>
        <a href="pages/booking.html#train">
            <img src="images/bxs_train.png">
            <span>Trains</span>
        </a>
    </div>
    <!-- Side Bar -->

    <!-- Nav Bar -->
    <div class="nav-bar">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <img src="images/logo.png" height="70" width="230">
                </div>
                <ul class="nav-item">
                    <li>
                        <img src="images/clarity_list-line.png">
                    </li>
                    <li>
                        <a href="pages/booking.html">My Booking</a>
                    </li>
                    <li>
                        <img src="images/Vector.png">
                    </li>
                    <li>
                        <a href="pages/login.php">Log In</a>
                    </li>
                    <li>
                        <a href="pages/register.php"><input type="submit" value="Register"></a>
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
                        <li><a href="#">Transports<img src="images/bxs_down-arrow.png" height="15"></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="pages/booking.html">
                                        <img src="images/clarity_plane-solid.png" height="25px">
                                        <span>Flights</span>
                                    </a>
                                </li>
                                <li><a href="pages/booking.html">
                                        <img src="images/bxs_train.png" height="25px">
                                        <span>Trains</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Accomodations<img src="images/bxs_down-arrow.png" height="15"></a>
                            <ul class="dropdown">
                                <li>
                                    </a>
                                    <a href="pages/booking.html">
                                        <img src="images/fa6-solid_hotel.png" height="25px">
                                        <span>Hotels</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Travel Add-ons<img src="images/bxs_down-arrow.png" height="15"></a>
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

    <!-- Menu -->
    <div class="image">
        <div class="hero">
            <img src="images/travel promo.jpg">
            <img src="images/travel promo.jpg">
            <img src="images/travel promo.jpg">
        </div>
        <p>More Promo Soon!</p>
    </div>
    <div class="menubar">
        <div class="tab">
        <div class="container">
            <div class="topic"></div>
            <div class="content">
                <input type="radio" name="slider" checked id="flights" />
                <input type="radio" name="slider" id="hotels" />
                <input type="radio" name="slider" id="eats" />
                <input type="radio" name="slider" id="trains" />
                <div class="list">
                    <label for="flights" class="flights">
                        <i class="fas fa-plane"></i>
                        <span class="title">Flights</span>
                    </label>
                    <label for="hotels" class="hotels">
                        <span class="icon"><i class="fas fa-hotel"></i></span>
                        <span class="title">Hotels</span>
                    </label>
                    <label for="eats" class="eats">
                        <span class="icon"><i class="fas fa-bread-slice"></i></span>
                        <span class="title">Eats</span>
                    </label>
                    <label for="trains" class="trains">
                        <span class="icon"><i class="fas fa-bus"></i></span>
                        <span class="title">Trains</span>
                    </label>
                    <div class="slider"></div>
                </div>

                <div class="text-content">
                <div class="home text">
                    <form action="" method="POST" class="row g-3 needs-validation">
                        <div class="col-md-4">
                            <label for="validationfrom" class="form-label">From</label>
                            <input id="from" name="from" type="text" class="form-control" required />
                        </div>
                        <div class="col-md-4">
                            <label for="validationto" class="form-label">To</label>
                            <input id="to" name="to" type="text" class="form-control" required />
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomNo" class="form-label">No. Of Passengers</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="no-passengers"></span>
                                <input id="jumlah_penumpang" name="jumlah_penumpang" type="text" class="form-control"required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationdepature" class="form-label">Departure Date</label>
                            <input id="tanggal_berangkat" name="tanggal_berangkat" type="date" class="form-control"
                                required />
                        </div>
                        <div class="col-md-4">
                            <label for="validationseat" class="form-label">Seat Class</label>
                            <select id="class" name="class" class="form-select" required aria-label="select example">
                                <option value="">...</option>
                                <option value="Economic Class">Economic Class</option>
                                <option value="Business Class">Business Class</option>
                                <option value="VIP Class">VIP Class</option>
                            </select>
                            <div class="invalid-feedback">Example invalid select feedback</div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationbookflights" class="form-label">Book Flights</label>
                            <input type="submit" value="Book Flights" onclick="loginFirst()">
                        </div>
                    </form>
                </div>
                <div class="hotels text">
                <form action="" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-4">
                        <label for="validationnamahotel" class="form-label">Hotel Name</label>
                        <input id="namahotel" name="namahotel" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationcity" class="form-label">City</label>
                        <input id="city" name="city" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationpemesan" class="form-label">Guests</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="namapemesan"></span>
                            <input id="namapemesan" name="namapemesan" type="text" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationtanggal" class="form-label">Check In</label>
                        <input id="checkin" name="checkin" type="date" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationduration" class="form-label">Duration</label>
                        <input id="duration" name="duration" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationbookhotels" class="form-label">Book Hotels</label>s
                        <input type="submit"value="Book Hotels" onclick="loginFirst()">
                    </div>
                    </form>
                </div>
                <div class="eats text">
                <form action="" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-4">
                        <label for="validationdish" class="form-label">Cuisine,dish/Restaurant</label>
                        <input id="dish" name="dish" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationarea" class="form-label">Mall, area, region or city</label>
                        <input id="area" name="area" type="text" class="form-control" required />
                        <div class="invalid-feedback">Example invalid select feedback</div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <label for="validationbookeats" class="form-label">Book Eats</label>
                        <input type="submit"value="Book Eats" onclick="loginFirst()">
                    </div>
                </form>
                </div>
                <div class="trains text">
                <form action="" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-4">
                        <label for="validationorigin" class="form-label">Origin</label>
                        <input id="origin" name="origin" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationdestination" class="form-label">Destination</label>
                        <input id="destination" name="destination" type="text" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationberangkat" class="form-label">Departure Date</label>
                        <input id="tanggal_berangkat" name="tanggal_berangkat" type="date" class="form-control" required />
                    </div>
                    <div class="col-md-4">
                        <label for="validationnopenumpang" class="form-label">No. Of Passengers</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="no-passengers"></span>
                            <input id="no_penumpang" name="no_penumpang" type="text" class="form-control"required />
                        </div>
                    </div>    
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <label for="validationbooktrains" class="form-label">Book Trains</label>
                        <input type="submit" value="Book Trains" onclick="loginFirst()">
                    </div>
                </form>
                </div>
                </div>
            </div>   
        </div>
        </div>
    </div>
    <!-- Menu -->

    <!-- Visit Again -->
    <div class="explore">
        <span>Explore The World again</span>
        <h4>International destination are ready to welcome you</h4>
    </div>
    <div class="container1" >
        <div class="image-boxs">
            <div class="images">
                <img class="img1" src="images/bali.jpg" alt="">
            </div>
            <div class="images">
                <img class="img2" src="images/malay.jpg" alt="">
            </div>
            <div class="images">
                <img class="img3" src="images/singa.jpg" alt="">
            </div>
            <div class="images">
                <img class="img4" src="images/new-york-city-evening-NYCTG0221.jpg" alt="">
            </div>
            <div class="images">
                <img class="img5" src="images/venice.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Visit Again -->

    <!-- Why Menu -->
    <div class="nama">
        <p>Why Book With TravelSite?</p>
    </div>
    <div class="hassle">
        <img src="images/hassle.png">
        <p>Hassle-Free</p>
    </div>
    <div class="service">
        <img src="images/service.png">
        <p>Service You Can Trust</p>
    </div>
    <div class="payment">
        <img src="images/various.png">
        <p>Various Payment Option</p>
    </div>
    <div class="secure">
        <img src="images/secure.png">
        <p>Secure Transaction Guaranteed</p>
    </div>
    <!-- Why Menu -->

    <script>
    function loginFirst() {
     if (confirm("Login First!")){
         location.href = "./pages/login.php"
     }
    }
    </script>
</body>

</html>