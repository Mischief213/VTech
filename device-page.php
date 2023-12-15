<?php
    include 'connection.php';

    $deviceID = $_GET['id'];

    $sql = "SELECT * From device WHERE DeviceID = $deviceID";
    $result = mysqli_query($conn, $sql) OR die('Query Failed');

    $sqlMulti = "SELECT * FROM deviceattributes WHERE DeviceID = $deviceID";
    $resultMulti = mysqli_query($conn, $sqlMulti) OR die('Query Failed');

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
foreach($resultMulti as $row){
    echo "#". $row["DeviceColor"] ."[type='radio']::before {
        background-color: ". $row["DeviceColor"] .";
        }";
    }
mysqli_data_seek($resultMulti, 0);
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
            $row = $resultMulti->fetch_assoc();
            echo '<img src="'. $row['ImageColor'] .'" alt="" id="img'. $row['DeviceColor'] .'" class="color-image" style="visibility: visible; opacity: 1">';

            while($row = $resultMulti->fetch_assoc()){
                echo '<img src="'. $row['ImageColor'] .'" alt="" id="img'. $row['DeviceColor'] .'" class="color-image">';
            }
            mysqli_data_seek($resultMulti,0);
            ?>
            </div>

            <div class="description">
                <form action="" style="width: 100%;">
                    <?php
                    $row = $result->fetch_assoc();
                    echo '<h1 id="title">'. $row['Name'] .'</h1>';
                    mysqli_data_seek($result,0);
                    ?>
                    <div class="color-text">
                        <?php
                        $row = $resultMulti->fetch_assoc();
                        echo '<div id="text'. $row['DeviceColor'] .'" class="color-text" style="visibility: visible;">
                                <p>Color - ' . $row['DeviceColorText'] . '</p>
                            </div>';

                        while ($row = $resultMulti->fetch_assoc()) {
                            echo '<div id="text'. $row['DeviceColor'] .'" class="color-text">
                            <p>Color - ' . $row['DeviceColorText'] . '</p>
                            </div>';
                        }
                        mysqli_data_seek($resultMulti,0);
                        ?>
                    </div>
                    <br><br>
                    <div class="color-box">
                    <?php
                    $row = $resultMulti->fetch_assoc();
                    echo '<input type="radio" name="color" onclick="visibility(\''. $row['DeviceColor'] .'\')"id="'. $row['DeviceColor'] .'" checked="checked" style="visibility: visible;">
                    <span></span> <!--separartion-->';

                    while($row = $resultMulti->fetch_assoc()){
                        echo '<input type="radio" name="color" onclick="visibility(\''. $row['DeviceColor'] .'\')" id="'. $row['DeviceColor'] .'" style="visibility: visible;">
                        <span></span> <!--separartion-->';
                    }
                    mysqli_data_seek($resultMulti,0);
                    ?>
                    </div>
                    <br>
                    <p>Capacity: <span id="plusCapacityText" style="font-size: 18px;"></span></p>
                    <div class="spec">
                        <?php
                            $row = $resultMulti->fetch_assoc();
                            echo '<label class="capacity">
                            <input type="radio" name="capacity" value="'. $row['DeviceCapacity'] .'" id="'. $row['DeviceCapacity'] .'" onclick="calculate()" checked = checked >
                            '. $row['DeviceCapacity'] .'
                            </label>
                            <span class="divider"></span>';

                            while ($row = $resultMulti->fetch_assoc()) {
                                if ($row['DeviceCapacity'] != null) {
                                    echo '<label class="capacity">
                                    <input type="radio" name="capacity" value="'. $row['DeviceCapacity'] .'" id="'. $row['DeviceCapacity'] .'" onclick="calculate()">
                                    '. $row['DeviceCapacity'] .'
                                    </label>
                                    <span class="divider"></span>';
                                }
                            }
                            mysqli_data_seek($resultMulti,0);
                        ?>
                        <div class="dummy-spec" style="position: absolute; visibility: collapse; " >
                        <input type="radio" value="" id="64GB">
                        <input type="radio" value="" id="128GB">
                        <input type="radio" value="" id="256GB">
                        <input type="radio" value="" id="512GB">
                        </div>
                    </div>
                    <p>Waranty: <span id="plusWarantyText" style="font-size: 18px;"></span></p>
                    <div class="spec">
                        <label class="waranty">
                            <input type="radio" name="waranty" id="6" value="6" onclick="calculate()" checked = checked>
                            6 Months
                        </label>
                        <span class="divider"></span>
                        <label class="waranty">
                            <input type="radio" name="waranty" id="12" value="12" onclick="calculate()">
                            12 Months
                        </label>
                    </div>
                    <div class="total">
                        <?php
                        $row = $result->fetch_assoc();
                        echo '<p id="output">Total: RM'. $row['price'] .'.00</p>';

                        mysqli_data_seek($result,0);                        
                        ?>
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
                    $row = $result->fetch_assoc();
                    echo '<p><b>Dimensions:</b> '. $row['dimension'] .'<br>
                        <b>Weight:</b> '. $row['weight'] .'<br>
                        <b>Build:</b> Glass front (Gorilla Glass), glass back (Gorilla Glass), stainless steel frame
                        <br>
                        <b>SIM:</b> '. $row['sim'] .'
                        </p>';
                        mysqli_data_seek($result,0);
                    ?>
                </div>
                <div class="platform">
                    <h2>Platform</h2>
                    <?php
                    $row = $result->fetch_assoc();
                    echo '<p><b>OS:</b> '. $row['os'] .'<br>
                            <b>Chipset:</b> '. $row['chipset'] .'<br>
                            <b>CPU:</b> '. $row['cpu'] .'<br>
                            <b>GPU:</b> '. $row['gpu'] .'
                        </p>';
                        mysqli_data_seek($result,0);
                    ?>
                </div>
                <div class="camera">
                    <h2>Camera</h2>
                    <?php
                    $row = $result->fetch_assoc();
                    echo '<p><b>Rear Camera:</b> '. $row['rear'] .'<br>
                            <b>Selfie Camera:</b> '. $row['selfie'] .'
                        </p>';
                        mysqli_data_seek($result,0);
                    ?>
                </div>
            </div>
            <hr>
            <div class="in-box">
                <h1>What's in the box: </h1>
                <?php
                $row = $result->fetch_assoc();
                echo '<p>'. $row['wintb'] .'</p>';
                mysqli_data_seek($result,0);
                ?>
            </div>
            <hr>
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
    <script>
        
        function visibility(color) {
            // Hide all color boxes initially
            document.querySelectorAll('.color-image').forEach(function (box) {
                box.style.visibility = 'hidden';
                box.style.opacity = '0';
            });document.querySelectorAll('.color-text').forEach(function (box) {
                box.style.visibility = 'hidden';
            });

            // Show the selected color box
            let selectedImg = document.getElementById('img' + color);
            let selectedText = document.getElementById('text' + color);

            if (selectedImg && selectedText) {
                selectedImg.style.visibility = 'visible';
                selectedImg.style.opacity = '1';
                selectedText.style.visibility = 'visible';
            }
        }

        function calculate() {
            <?php
                $row = $result->fetch_assoc();
                echo 'let total = '. $row['price'] .';';
                mysqli_data_seek($result,0);
            ?>

            let capacity1 = document.getElementById('64GB');
            let capacity2 = document.getElementById('128GB');
            let capacity3 = document.getElementById('256GB');
            let capacity4 = document.getElementById('512GB');
            let plusCapacity = 0;

            if (capacity1.checked) {
                plusCapacity = 0;
                document.getElementById('plusCapacityText').innerHTML = '';
            } else if (capacity2.checked) {
                plusCapacity = 30;
                document.getElementById('plusCapacityText').innerHTML = '+RM' + plusCapacity;
            }else if (capacity3.checked) {
                plusCapacity = 50;
                document.getElementById('plusCapacityText').innerHTML = '+RM' + plusCapacity;
            }else if (capacity4.checked) {
                plusCapacity = 60;
                document.getElementById('plusCapacityText').innerHTML = '+RM' + plusCapacity;
            }
            total += plusCapacity;

            let waranty1 = document.getElementById('6');
            let waranty2 = document.getElementById('12');
            let plusWaranty = 0;

            if (waranty1.checked) {
                plusWaranty = 0;
                document.getElementById('plusWarantyText').innerHTML = '';
            } else if (waranty2.checked) {
                plusWaranty = 20;
                document.getElementById('plusWarantyText').innerHTML = '+RM' + plusWaranty;
            }
            total += plusWaranty;

            let output = document.getElementById('output');
            output.innerHTML = 'Total: RM' + total.toFixed(2);
        }

    </script>
</body>

</html>