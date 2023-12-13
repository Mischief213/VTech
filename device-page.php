<?php
    include 'connection.php';

    $deviceID = $_GET['id'];

    
    $sql = "SELECT Name FROM device WHERE DeviceID = $deviceID";
    $resultName = mysqli_query($conn, $sql) OR die('Query Failed');

    $queryBody = "SELECT dimension, weight, build, sim FROM device WHERE DeviceID = $deviceID";
    $resultBody = mysqli_query($conn, $queryBody) OR die('Query Failed');

    $queryPlatform = "SELECT os, chipset, cpu, gpu FROM device WHERE DeviceID = $deviceID";
    $resultPlatform = mysqli_query($conn, $queryPlatform) OR die('Query Failed');

    $queryCamera = "SELECT rear, selfie FROM device WHERE DeviceID = $deviceID";
    $resultCamera = mysqli_query($conn, $queryCamera) OR die('Query Failed');

    $queryWintb = "SELECT wintb FROM device WHERE DeviceID = $deviceID";
    $resultWintb = mysqli_query($conn, $queryWintb) OR die('Query Failed');

    $queryPrice = "SELECT price FROM device WHERE DeviceID = $deviceID";
    $resultPrice = mysqli_query($conn, $queryPrice) OR die('Query Failed');


    $queryColorText = "SELECT DeviceColorText FROM deviceattributes WHERE DeviceID = $deviceID";
    $resultColorText = mysqli_query($conn, $queryColorText) OR die('Query Failed');

    $queryColor = "SELECT DeviceColor FROM deviceattributes WHERE DeviceID = $deviceID";
    $resultColor = mysqli_query($conn, $queryColor) OR die('Query Failed');

    $queryCapacity = "SELECT DeviceCapacity FROM deviceattributes WHERE DeviceID = $deviceID";
    $resultCapacity = mysqli_query($conn, $queryCapacity) OR die('Query Failed');

    $queryImageColor = "SELECT ImageColor, AttributesID FROM deviceattributes WHERE DeviceID = $deviceID";
    $resultImageColor = mysqli_query($conn, $queryImageColor) OR die('Query Failed');

    $conn->close();
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

<style>
<?php
foreach($resultColor as $row){
    echo "#". $row["DeviceColor"] ."[type='radio']::before {
        background-color: ". $row["DeviceColor"] .";
        }";
    }
 ?>
</style>

<body>
    <div id="preloader"></div>
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
                <a href="view-device.html">View All</a>
                <a href="view-device.html?series=iPhone14">iPhone 14</a>
                <a href="view-device.html?series=iPhone13">iPhone 13</a>
                <a href="view-device.html?series=iPhone12">iPhone 12</a>
                <a href="view-device.html?series=iPhone11">iPhone 11</a>
                <a href="view-device.html?series=iPhoneX">iPhone X</a>
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
        <div class="device-preview">
            <div class="image">
                <?php
                $index = 0;
                foreach($resultImageColor as $row){
                    $index++;
                    echo'<img src="'. $row['ImageColor'] .'" alt="" id="text'. $index .'" ">';
                }
                ?>
                <img src="image/device preview/iphonex2.png" alt="" id="silver" style="opacity: 0;">
            </div>

            <div class="description">
                <form action="" style="width: 100%;">
                    <?php
                    $row = $resultName->fetch_assoc();
                    echo '<h1 id="title">'. $row['Name'] .'</h1>';
                    ?>
                    <div class="color-text">
                        <?php
                        $index = 1;
                        $row = $resultColorText->fetch_assoc();
                        echo '<div id="text'. $index .'" style="visibility: visible;">
                                <p>Color - ' . $row['DeviceColorText'] . '</p>
                            </div>';

                        /*$index++;
                        $row = $resultColorText->fetch_assoc();
                        echo '<div id="text'. $index .'">
                            <p>Color - ' . $row['DeviceColorText'] . '</p>
                            </div>';*/

                        if ($resultColorText->fetch_assoc() != null) {
                            foreach ($resultColorText as $row) {
                                $index++;
                                echo '<div id="text'. $index .'">
                                <p>Color - ' . $row['DeviceColorText'] . '</p>
                                </div>';
                            }
                        }

                        /*if ($resultColorText->fetch_assoc() != null) {
                            $index++;
                            $row = $resultColorText->fetch_assoc();
                            echo '<div id="text'. $index .'>
                            <p>Color - ' . $row['DeviceColorText'] . '</p>
                            </div>';
                        }*/
                        
                        ?>
                    </div>
                    <br><br>
                    <div class="color-box">
                        <?php
                        $index = 0;
                        foreach($resultColor as $row){
                            $index++;
                            echo '<input onclick="visibility()" type="radio" name="color" id="'. $row['DeviceColor'] .'">
                                    <span></span> <!--separartion-->';
                        }
                        mysqli_data_seek($resultColor,0);
                        ?>
                    </div>
                    <br>
                    <p>Capacity: <span id="plusCapacityText" style="font-size: 18px;"></span></p>
                    <div class="spec">
                        <?php
                            foreach ($resultCapacity as $row) {
                                if ($row['DeviceCapacity'] != null) {
                                    echo '<label class="capacity">
                                    <input type="radio" name="capacity" value="'. $row['DeviceCapacity'] .'" id="'. $row['DeviceCapacity'] .'" onclick="calculate()">
                                    '. $row['DeviceCapacity'] .'
                                    </label>
                                    <span class="divider"></span>';
                                }
                            }
                        ?>
                    </div>
                    <p>Refurbished Grading: <span id="plusGradeText" style="font-size: 18px;"></span></p>
                    <div class="spec">
                        <label class="grade">
                            <input type="radio" name="grade" id="Fair" value="Fair" onclick="calculate()">
                            Fair
                        </label>
                        <span class="divider"></span>
                        <span></span>
                        <label class="grade">
                            <input type="radio" name="grade" id="Good" value="Good" onclick="calculate()">
                            Good
                        </label>
                        <span class="divider"></span>
                        <label class="grade">
                            <input type="radio" name="grade" id="Great" value=" Great" onclick="calculate()">
                            Great
                        </label>
                    </div>
                    <p>Waranty: <span id="plusWarantyText" style="font-size: 18px;"></span></p>
                    <div class="spec">
                        <label class="waranty">
                            <input type="radio" name="waranty" id="6" value="6" onclick="calculate()">
                            6 Months
                        </label>
                        <span class="divider"></span>
                        <label class="waranty">
                            <input type="radio" name="waranty" id="12" value="12" onclick="calculate()">
                            12 Months
                        </label>
                    </div>
                    <div class="total">
                        <p id="output"></p>
                    </div>
                    <button type="submit" class="bag">Add to Bag</button>
                    <button type="submit" class="checkout">Buy Now</button>
                </form>
            </div>
        </div>
        <div class="spec-desc">
            <hr>
            <h1>Specification</h1>
            <div class="desc">
                <div class="body">
                    <h2>Body</h2>
                    <?php
                    $row = $resultBody->fetch_assoc();
                    echo '<p><b>Dimensions:</b> '. $row['dimension'] .'<br>
                        <b>Weight:</b> '. $row['weight'] .'<br>
                        <b>Build:</b> Glass front (Gorilla Glass), glass back (Gorilla Glass), stainless steel frame
                        <br>
                        <b>SIM:</b> '. $row['sim'] .'
                        </p>'
                    ?>
                </div>
                <div class="platform">
                    <h2>Platform</h2>
                    <?php
                    $row = $resultPlatform->fetch_assoc();
                    echo '<p><b>OS:</b> '. $row['os'] .'<br>
                            <b>Chipset:</b> '. $row['chipset'] .'<br>
                            <b>CPU:</b> '. $row['cpu'] .'<br>
                            <b>GPU:</b> '. $row['gpu'] .'
                        </p>'
                    ?>
                </div>
                <div class="camera">
                    <h2>Camera</h2>
                    <?php
                    $row = $resultCamera->fetch_assoc();
                    echo '<p><b>Rear Camera:</b> '. $row['rear'] .'<br>
                            <b>Selfie Camera:</b> '. $row['selfie'] .'
                        </p>'
                    ?>
                </div>
            </div>
            <hr>
            <div class="in-box">
                <h1>What's in the box: </h1>
                <?php
                $row = $resultWintb->fetch_assoc();
                echo '<p>'. $row['wintb'] .'</p>'
                ?>
            </div>
            <hr>
        </div>
    </main>
    <footer>
        <div class="ftup">
            <div class="aboutft">
                <h4>About us</h4>
                <a href="about.html" class="ftlink">about VTech</a>
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
    <script>
        <?php
        $visibilityFunction = "function visibility() {";
        $index = 0;

        foreach ($resultColor as $row) {
            $index++;
            $visibilityFunction .= "let radio = document.getElementById(" . json_encode($row['DeviceColor']) . ");
                                    let textImage = document.getElementById(" . $index . ");
                                    if (radio.checked === true) {
                                        textImage.style.visibility = 'visible';
                                    } else {
                                        textImage.style.visibility = 'hidden';
                                    }";
        }

        $visibilityFunction .= "}";
        echo $visibilityFunction;
        ?>
        

        let gray = document.getElementById('gray');
        let grayText = document.getElementById('gray-text');
        let silver = document.getElementById('silver');
        let silverText = document.getElementById('silver-text');

        function visibilityGray() {
            gray.style.opacity = '1';
            silver.style.opacity = '0';
            grayText.style.visibility = 'visible';
            silverText.style.visibility = 'collapse';
        }
        function visibilitySilver() {
            silver.style.opacity = '1';
            gray.style.opacity = '0';
            silverText.style.visibility = 'visible';
            grayText.style.visibility = 'collapse';
        }

        function calculate() {
            <?php
                $row = $resultPrice->fetch_assoc();
                echo 'let total = '. $row['price'] .';';
            ?>

            let capacity1 = document.getElementById('64GB');
            let capacity2 = document.getElementById('128GB');
            let plusCapacity = 0;

            if (capacity1.checked) {
                plusCapacity = 0;
                document.getElementById('plusCapacityText').innerHTML = '';
            } else if (capacity2.checked) {
                plusCapacity = 30;
                document.getElementById('plusCapacityText').innerHTML = '+RM' + plusCapacity;
            }
            total += plusCapacity;

            let grade1 = document.getElementById('Fair');
            let grade2 = document.getElementById('Good');
            let grade3 = document.getElementById('Great');
            let plusGrade = 0;

            if (grade1.checked) {
                plusGrade = 0
                document.getElementById('plusGradeText').innerHTML = '';
            } else if (grade2.checked) {
                plusGrade = 50;
                document.getElementById('plusGradeText').innerHTML = '+RM' + plusGrade;
            } else if (grade3.checked) {
                plusGrade = 80;
                document.getElementById('plusGradeText').innerHTML = '+RM' + plusGrade;
            }
            total += plusGrade;

            let waranty1 = document.getElementById('6');
            let waranty2 = document.getElementById('12');
            let plusWaranty = 0;

            if (waranty1.checked) {
                plusWaranty = 0;
                document.getElementById('plusWarantyText').innerHTML = '';
            } else if (waranty2.checked) {
                plusWaranty = 40;
                document.getElementById('plusWarantyText').innerHTML = '+RM' + plusWaranty;
            }
            total += plusWaranty;

            let output = document.getElementById('output');
            output.innerHTML = 'Total: RM' + total.toFixed(2);
        }

    </script>
</body>

</html>