<?php
// ini_set('session.cache_limiter', 'public');
//  session_cache_limiter(false);
session_start();
if (!isset($_SESSION['uemail'])) {
    header("location:login.php");
}
include("config.php");
$error = '';
$msg = '';
if (isset($_POST['edit'])) {
    $pid=$_REQUEST['pid'];
    $id = $_SESSION['uid'];     
    $date = $_POST['date'];
    $time = $_POST['time'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $uid = $_POST['uid'];
    $status = $_POST['status'];
    $sql = "INSERT INTO req(date, time, name, email, phone,message,uid,status,pid,bid) VALUES ('$date','$time','$name','$email','$phone','$message','$uid','$status','$id','$pid')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('your message send successfully.');</script>";
    } else {
        echo "<script>alert('request is already send.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Real Estate PHP">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--	Title
	=========================================================-->
    <title>Real Estate PHP</title>
</head>

<body>



    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner   --->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Property Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->


            <div class="full-row">
                <div class="container">
                    <div class="row">

                        <?php
                        $id = $_REQUEST['pid'];
                        $query = mysqli_query($con, "SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
                        while ($row = mysqli_fetch_array($query)) {

                            if ($row['status'] == "available") {
                        ?>

                                <div class="col-lg-8">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;">
                                                <!-- Slide 1-->
                                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['18']; ?>" class="ls-bg" alt="" /> </div>

                                                <!-- Slide 2-->
                                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['19']; ?>" class="ls-bg" alt="" /> </div>

                                                <!-- Slide 3-->
                                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['20']; ?>" class="ls-bg" alt="" /> </div>

                                                <!-- Slide 4-->
                                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['21']; ?>" class="ls-bg" alt="" /> </div>

                                                <!-- Slide 5-->
                                                <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['22']; ?>" class="ls-bg" alt="" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="bg-primary d-table px-3 py-2 rounded text-white text-capitalize">For <?php echo $row['5']; ?></div>
                                            <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1']; ?></h5>
                                            <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-primary font-12"></i> &nbsp;<?php echo $row['14']; ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-primary text-left h5 my-2 text-md-right">₹<?php echo $row['13']; ?></div>
                                            <div class="text-left text-md-right">Price</div>
                                        </div>

                                    </div>
                                    <div class="property-details">
                                        <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                            <ul>
                                                <li><span class="text-secondary"><?php echo $row['12']; ?></span> Sqft</li>
                                                <li><span class="text-secondary"><?php echo $row['6']; ?></span> Bedroom</li>
                                                <li><span class="text-secondary"><?php echo $row['7']; ?></span> Bathroom</li>
                                                <li><span class="text-secondary"><?php echo $row['8']; ?></span> Balcony</li>
                                                <li><span class="text-secondary"><?php echo $row['10']; ?></span> Hall</li>
                                                <li><span class="text-secondary"><?php echo $row['9']; ?></span> Kitchen</li>
                                            </ul>
                                        </div>
                                        <h4 class="text-secondary my-4">Description</h4>
                                        <p><?php echo $row['2']; ?></p>

                                        <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                                        <div class="table-striped font-14 pb-2">
                                            <table class="w-100">
                                                <tbody>
                                                    <tr>
                                                        <td>BHK :</td>
                                                        <td class="text-capitalize"><?php echo $row['4']; ?></td>
                                                        <td>Property Type :</td>
                                                        <td class="text-capitalize"><?php echo $row['3']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Floor :</td>
                                                        <td class="text-capitalize"><?php echo $row['11']; ?></td>
                                                        <td>Total Floor :</td>
                                                        <td class="text-capitalize"><?php echo $row['28']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>City :</td>
                                                        <td class="text-capitalize"><?php echo $row['15']; ?></td>
                                                        <td>State :</td>
                                                        <td class="text-capitalize"><?php echo $row['16']; ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                                        <div class="row">
                                            <?php echo $row['17']; ?>

                                        </div>

                                        <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                                        <div class="accordion" id="accordionExample">
                                            <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                            <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <img src="admin/property/<?php echo $row['25']; ?>" alt="Not Available">
                                            </div>
                                            <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                            <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <img src="admin/property/<?php echo $row['26']; ?>" alt="Not Available">
                                            </div>
                                            <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                            <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <img src="admin/property/<?php echo $row['27']; ?>" alt="Not Available">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php } else {
                            }
                        } ?>

                        <div class="col-lg-4">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
                            <form class="d-inline-block w-100" action="calc.php" method="post">
                                <label class="sr-only">Property Amount</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₹ </div>
                                    </div>
                                    <input type="text" class="form-control" name="amount" placeholder="Property Price" required>
                                </div>
                                <label class="sr-only">Month</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="month" placeholder="Duration month" required>
                                </div>
                                <label class="sr-only">Interest Rate</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" name="interest" placeholder="Interest Rate"required>
                                </div>
                                <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calclute Instalment</button>
                            </form>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                                <ul class="property_list_widget">

                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <li> <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage" style="height: 80px;">
                                            <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h6>
                                            <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14']; ?></span>

                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div>
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Contect billder</h4>
                                <ul class="d-flex flex-row">
                                    <li class="p-2">
                                        <?php
                                        $id = $_REQUEST['pid'];
                                        $query = mysqli_query($con, "SELECT * FROM `property` WHERE pid=$id");
                                        while ($row = mysqli_fetch_array($query)) {
                                            $stype = $row['stype'];
                                            if ($stype == "buy") {
                                        ?>

                                                <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModal">Request Book tour </button>

                                            <?php
                                            } else {
                                            ?>
                                                <button class="btn btn-primary mt-4" data-toggle="modal" data-target="#see">For Rent </button>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </li>
                                    <li class="p-2">

                                        <button class="btn btn-primary mt-4" data-toggle="modal" data-target="#message">Message </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <!-- modal see charges -->
            <?php
            $id = $_REQUEST['pid'];
            $query = mysqli_query($con, "SELECT * FROM `property` WHERE  pid='$id'");
            while ($row = mysqli_fetch_array($query)) {
                $amount = $row['13'];
                $deposit = $amount * 3;
                $maintanance = 500;
                $totle = $amount + $deposit + $maintanance;
            ?>
                <div class="modal fade" id="see" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:60px">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header m-2">
                                <h5 class="modal-title" id="exampleModalLabel">Other Charges</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="w-100 " action="#" method="post">
                                    <div class="d-flex justify-content-between">
                                        <p>Amount</p>
                                        <div class="text-primary text-left h5 my-2 text-md-right">₹<?php echo $row['13']; ?></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>Security Deposite</p>
                                        <div class="text-primary text-left h6 my-2 text-md-right">₹<?php echo $deposit ?></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>Maintanunce</p>
                                        <div class="text-primary text-left h6 my-2 text-md-right">₹<?php echo $maintanance ?></div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p>Total Amount</p>
                                        <div class="text-primary text-left h6 my-2 text-md-right">₹<?php echo $totle ?></div>
                                    </div>

                                    <div class="text-success text-left h6 my-2 text-md-right"> <a href="javascript:void(0)" data-productid="<?php echo $row['0']; ?>" data-productname="<?php echo $row['1']; ?>" data-amount="<?php echo $totle ?>" class="btn btn-primary buynow">Buy Now</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Modal request -->
            <?php
            $uid = $_SESSION['uid'];
            $query = mysqli_query($con, "SELECT * FROM `user` WHERE uid='$uid'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:60px">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header m-2">
                                <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="w-100 " action="#" method="post">

                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group">

                                            <input type="date" name="date" min="2024-03-16" class="form-control mb-3" placeholder="Your Name*" required>
                                            <input type="time" name="time" class="form-control mb-3" placeholder="Your Name*" required>
                                            <input type="text" name="name" class="form-control mb-3" placeholder="Your Name*" value="<?php echo $row['uname'] ?>">
                                            <input type="email" name="email" class="form-control mb-3" placeholder="Email Address*" value="<?php echo $_SESSION['uemail'] ?>">
                                            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone" maxlength="10" value="<?php echo $row['uphone'] ?>">
                                            <textarea name="message" id="" cols="30" rows="3">I am intrested in this property.</textarea>
                                            <?php
                                            $a=mysqli_query($con,"SELECT * FROM property WHERE pid=$id");
                                            while ($row = mysqli_fetch_array($a)) {
                                                
                                                ?>
                                                <input type="hidden" name="uid" value="<?php echo $row['uid'] ?>">
                                            <?php } ?>
                                            <input type="hidden" name="status" value="Null">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="submit" name="edit" class="btn btn-primary" value="send">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:60px">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header m-2">
                            <h5 class="modal-title" id="exampleModalLabel">send message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php




                            if (isset($_POST['ka'])) {
                                $id = $_POST['pid'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                $uid = $_POST['uid'];
                                    $sql = "INSERT INTO message(email,message,uid,pid) VALUES ('$email','$message','$uid','$id')";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        echo "<script>alert('your message send successfully.');</script>";
                                    } else {
                                        echo "<script>alert('request is already send.');</script>";
                                    }
                            }
                            ?>
                            <form class="w-100 " action="#" method="post">

                                <div class="row d-flex justify-content-center">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address*" value="<?php echo $_SESSION['uemail'] ?>" required>
                                        <textarea name="message" id="" cols="30" rows="3" placeholder="Enter Message" Required></textarea>

                                        <input type="hidden" name="pid" value="<?php echo $id ?>">
                                        <?php
                                        $id = $_REQUEST['pid'];
                                        $query = mysqli_query($con, "SELECT * FROM property WHERE pid=$id");

                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <input type="text" name="uid" value="<?php echo $row['uid']; ?>">x
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" name="ka" class="btn btn-primary" value="send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <a href="" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- jQuery Layer Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/tmpl.js"></script> -->
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <!-- <script src="js/jquery.slider.js"></script> -->
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(".buynow").click(function() {

            var amount = $(this).attr('data-amount');
            var productid = $(this).attr('data-productid');
            var productname = $(this).attr('data-productname');

            var options = {
                "key": "rzp_test_zHhNFsppG7bIjH", // Enter the Key ID generated from the Dashboard
                "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "name": "E-state",
                "description": productname,
                "image": "./admin/assets/img/t2.png",
                "handler": function(response) {
                    var paymentid = response.razorpay_payment_id;

                    $.ajax({
                        url: "payment-process.php",
                        type: "POST",
                        data: {
                            product_id: productid,
                            payment_id: paymentid
                        },
                        success: function(finalresponse) {
                            if (finalresponse == "done") {
                                alert('Payment successfully');
                            } else {
                                alert('Payment successfull');
                                console.log(finalresponse);
                            }
                        }
                    })

                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });
    </script>
</body>

</html>