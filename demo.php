<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sri vasavi Bus Information System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contact-page">
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="nav1.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="index.php">Home</a> </li>
                                        <li class="active"> <a href="driverregistration.php">Driver Entry</a> </li>
                                        <li> <a href="studentreg.php"> Student Entry</a> </li>
                                        <li> <a href="busadd.php"> Bus</a> </li>
                                        <li> <a href="route.html"> Route</a> </li>
                                        <li> <a href="fee.html"> Fee Details</a> </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- end header inner -->
    <!-- end header -->
    <center>
        <h1>details of specific bus</h1>
        <div class="container">
            <form action="" method="POST">
                <input type="text" name="bus_id" placeholder="enter the bus number">
                <input type="submit" name="search" value="search">
            </form>
            <table>
                <tr>

                    <th>STOP NAME// </th>
                    <th>ARRIVAL TIME //</th>
                    <th>DEPARTURE TIME// </th>
                    <th>DRIVER NAME //</th>
                    <th>DRIVER NUMBER </th>
                </tr> </br>
            <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'bustransport');
            if(isset($_POST['search']))
            {
                $bus_id = $_POST['bus_id'];
                $query = "SELECT DISTINCT r.stop, r.arrival_time,r.departure_time,d.D_Name,d.phone FROM `route` r,`driver` d where r.bus_number='$bus_id' && d.D_no='$bus_id' ";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['stop']; ?> //</td>
                        <td> <?php echo $row['arrival_time']; ?> //</td>
                        <td> <?php echo $row['departure_time']; ?> //</td>
                        <td> <?php echo $row['D_Name']; ?> //</td>
                        <td> <?php echo $row['phone']; ?> //</td>
                    </tr>
                    <?php
                }
            }
            ?>
            </table>
        </div>
    </center>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>
</html>