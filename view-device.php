<?php
include 'connection.php';

$querySelectName = 'SELECT * FROM device';
$result = mysqli_query($conn, $querySelectName) OR die('Query Failed');

/*
$queryColor = 'SELECT DeviceColor FROM deviceattributes';
$resultColor = mysqli_query($conn, $queryColor) OR die('Query Failed');*/

$conn -> close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTech</title>
    <link rel="icon" href="favicon_io/favicon.ico">
    <link rel="stylesheet" href="device-page-style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!--<div id="preloader"></div>-->
    <header>
        <!-- Search Box -->
        <div class="search-container" id="scontain">
            <form action="" id="searchForm">
                <div class="search-box">
                    <input type="search" class="search" placeholder="Search">
                    <img src="icon/icons8-close-100(1).png" id="close" alt="" onclick="toggleSearch()">
                </div>
            </form>

            <div class="search-result" id="sresult">
                <div class="result">

                </div>
                <div class="result">

                </div>
                <div class="result">

                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav id="nav-bar">
            <!-- Home -->
            <a href="main.html"><img src="icon/logo.png" alt="" class="left" style="height: 55px;
            padding: 5px;"></a>

            <!-- Device Category -->
            <div class="center">
                <div class="view-iPhone" onclick="viewiPhone()">
                    View iPhone
                </div>
            </div>

            <!-- Right Icon -->
            <div class="right">
                <a class="search-logo" onclick="toggleSearch()"><img src="icon/icons8-search-96.png" alt=""
                        style="position: relative; right: 36px;"></a>
                <a onclick="viewCart()" style="cursor: pointer;"><img src="icon/icons8-cart-96.png" alt=""
                        style="position: relative; right: 36px;"></a>
                <a href="login.html"><img src="icon/icons8-account-96 (1).png" alt=""
                        style="position: relative; right: 36px;"></a>
            </div>

        </nav>
        <div class="view-blur" id="viewBlur" onclick="viewiPhone()">
            <div class="iPhone-container" id="view">
                <a href="view-device.php">View All</a>
                <a href="view-device.php?series=iPhone14">iPhone 14</a>
                <a href="view-device.php?series=iPhone13">iPhone 13</a>
                <a href="view-device.php?series=iPhone12">iPhone 12</a>
                <a href="view-device.php?series=iPhone11">iPhone 11</a>
                <a href="view-device.php?series=iPhoneX">iPhone X</a>
            </div>
        </div>

        <div class="view-blur" id="viewBlur">
            <div class="cart-sidebar" id="cart-sbar">
                <h2>Cart</h2>
                <div class="cart-item">

                </div>
                <div class="cart-link">
                    <a href="bag.html">View Cart</a>
                    <a href="checkout.html">Checkout</a>

                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="big-title">All Series</div>

        </div>
        <div class="iPhone" id="iPhone14">
            <h1>iPhone 14 Series</h1>
            <div class="device-box">
                <a href="" onclick="iPhone('XIV')" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIV/14/iphone-14-Midnight.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(48, 60, 85);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(255, 59, 59);"> a</div>
                        <div style="background-color: rgb(228, 247, 87);"> a</div>
                    </div>
                    <h2>iPhone 14</h2>
                    <p>From RM2,799</p>
                </a>
                <a href="" onclick="iPhone('XIVPlus')" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIV/14/iphone-14-Red.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(48, 60, 85);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(255, 59, 59);"> a</div>
                        <div style="background-color: rgb(228, 247, 87);"> a</div>
                    </div>
                    <h2>iPhone 14 Plus</h2>
                    <p>From RM3,299</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIV/14 Pro/iphone-14-pro-Space-Black.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(84, 66, 100);"> a</div>
                        <div style="background-color: rgb(241, 227, 148);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(59, 59, 59);"> a</div>
                    </div>
                    <h2>iPhone 14 Pro</h2>
                    <p>From RM3,699</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIV/14 Pro/iphone-14-pro-Deep-Purple.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(84, 66, 100);"> a</div>
                        <div style="background-color: rgb(241, 227, 148);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(59, 59, 59);"> a</div>
                    </div>
                    <h2>iPhone 14 Pro Max</h2>
                    <p>From RM3,899</p>
                </a>
            </div>
        </div>

        <div class="iPhone" id="iPhone13">
            <h1>iPhone 13 Series</h1>
            <div class="device-box">
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIII/13/ip13_Midnight.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(49, 49, 49);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(251, 197, 197);"> a</div>
                        <div style="background-color: rgb(87, 170, 247);"> a</div>
                    </div>
                    <h2>iPhone 13</h2>
                    <p>From RM2,299</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIII/13/ip13_Starlight.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(49, 49, 49);"> a</div>
                        <div style="background-color: rgb(255, 255, 255)"> a</div>
                        <div style="background-color: rgb(251, 197, 197);"> a</div>
                        <div style="background-color: rgb(87, 170, 247);"> a</div>
                    </div>
                    <h2>iPhone 13 Mini</h2>
                    <p>From RM1,899</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIII/13 Pro/ip13Pro_Graphite.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(25, 100, 112);"> a</div>
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: gray"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 13 Pro</h2>
                    <p>From RM2,799</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XIII/13 Pro/ip13Pro_Gold.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(25, 100, 112);"> a</div>
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: gray"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 13 Pro Max</h2>
                    <p>From RM2,999</p>
                </a>
            </div>
        </div>

        <div class="iPhone" id="iPhone12">
            <h1>iPhone 12 Series</h1>
            <div class="device-box">
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XII/12/ip12_Blue.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(61, 61, 61);"> a</div>
                        <div style="background-color: rgb(146, 198, 146)"> a</div>
                        <div style="background-color: red;"> a</div>
                        <div style="background-color: rgb(59, 59, 254);"> a</div>
                    </div>
                    <h2>iPhone 12</h2>
                    <p>From RM1,499</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XII/12/ip12_Green.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(61, 61, 61);"> a</div>
                        <div style="background-color: rgb(146, 198, 146)"> a</div>
                        <div style="background-color: red;"> a</div>
                        <div style="background-color: rgb(59, 59, 254);"> a</div>
                    </div>
                    <h2>iPhone 12 Mini</h2>
                    <p>From RM1,199</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XII/12 Pro/ip12Pro_Gold.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(25, 100, 112);"> a</div>
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: gray"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 12 Pro</h2>
                    <p>From RM1,999</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XII/12 Pro/ip12Pro_Graphite.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(25, 100, 112);"> a</div>
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: gray"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 12 Pro Max</h2>
                    <p>From RM2,399</p>
                </a>
            </div>
        </div>

        <div class="iPhone" id="iPhone11">
            <h1>iPhone 11 Series</h1>
            <div class="device-box">
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XI/11/ip11_Red.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(61, 61, 61);"> a</div>
                        <div style="background-color: rgb(146, 198, 146)"> a</div>
                        <div style="background-color: red;"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 11</h2>
                    <p>From RM1,099</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XI/11 Pro/ip11Pro_Gold.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: rgb(146, 198, 146)"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 11 Pro</h2>
                    <p>From RM1,399</p>
                </a>
                <a href="" class="X-box" style="text-decoration: none;">
                    <div class="preview">
                        <img src="image/XI/11 Pro/ip11Pro_Green.png" alt="">
                        <div class="view-box">View</div>
                    </div>
                    <div class="color-preview">
                        <div style="background-color: rgb(237, 218, 111);"> a</div>
                        <div style="background-color: rgb(146, 198, 146)"> a</div>
                        <div style="background-color: white;"> a</div>
                    </div>
                    <h2>iPhone 11 Pro Max</h2>
                    <p>From RM1,799</p>
                </a>
            </div>
        </div>

        <div class="iPhone" id="iPhoneX">
            <h1>iPhone X Series</h1>
            <div class="device-box">
                <?php
                    foreach($result as $row){
                        include 'connection.php';
                        echo '<a href="device-page.php?id='. $row['DeviceID'].'" class="X-box" style="text-decoration: none;">
                        <div class="preview">
                            <img src="'. $row['image'] .'" alt="">
                            <div class="view-box">View</div>
                        </div>
                        
                        <div class="color-preview">';  
                        $queryColor = "SELECT DeviceColor FROM deviceattributes WHERE DeviceID =". $row['DeviceID'];
                        $resultColor = mysqli_query($conn, $queryColor);
                            while($rowColor = $resultColor -> fetch_assoc()){
                                echo '<div style="background-color: '. $rowColor['DeviceColor'] .';">a</div>';
                            }  
                
                        echo '</div>
                        <h2>'. $row['Name'] . '</h2>
                        <p> RM '. $row['price'] . '</p>
                        </a>';
                        
                        $conn->close();
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="ftup">
            <div class="aboutft">
                <h4>About us</h4>
                <a href="about.html" class="ftlink">About VTech</a>
            </div>
            <div class="csft">
                <h4>Customer Service</h4>
                <p>Email: support@vtech.com</p>
            </div>
            <div class="contactft">
                <h4>Contact Us</h4>
                <a href=""><img src="icon/icons8-whatsapp-100.png" alt=""><img src="" alt=""></a>

            </div>
            <div class="flwft">
                <h4>Follow Us</h4>
                <a href=""><img src="icon/icons8-twitter-100.png" alt=""></a>
                <a href=""><img src="icon/icons8-instagram-100.png" alt=""></a>
            </div>

        </div>
        <hr>
        <p class="copyright">Copyright 2023 - VTech Studio</p>



    </footer>

    <script src="script.js"></script>
    <script src="script2.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Parse the query parameter to get the selected series
            const urlParams = new URLSearchParams(window.location.search);
            const selectedSeries = urlParams.get('series');

            // Get the corresponding iPhone section
            let selectedSection = document.getElementById(selectedSeries);

            // Display only the selected iPhone section
            if (selectedSection) {
                showOnlyiPhone(selectedSection);
            }
        });

        let iPhone14 = document.getElementById('iPhone14');
        let iPhone13 = document.getElementById('iPhone13');
        let iPhone12 = document.getElementById('iPhone12');
        let iPhone11 = document.getElementById('iPhone11');
        let iPhoneX = document.getElementById('iPhoneX');
        let bigTitle = document.querySelector('.big-title');

        function showOnlyiPhone(section) {
            // Set all iPhone sections to be initially hidden
            iPhone14.style.display = 'none';
            iPhone13.style.display = 'none';
            iPhone12.style.display = 'none';
            iPhone11.style.display = 'none';
            iPhoneX.style.display = 'none';
            bigTitle.style.display = 'none'

            // Display only the selected iPhone section
            section.style.display = 'block';

            // Move the selected section to the top of the page
            section.parentNode.insertBefore(section, section.parentNode.firstChild);

            // Move the box-title to the top
            boxTitle.parentNode.insertBefore(boxTitle, boxTitle.parentNode.firstChild);
        }
    </script>

</body>

</html>