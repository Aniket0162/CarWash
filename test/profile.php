<?php
$insert = false ;
 if(isset($_POST['name']))
 {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "editpersonalinfo";

    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to". 
        mysqli_connect_error());
    }
    $name =$_POST['name'];
    $number = $_POST['number'];
    $sql ="INSERT INTO `personal info` (`name`, `phone no`) VALUES ('$name', '$number')";

    if($con->query($sql) == true)
    {
        // echo "Successfully inserted";
        $insert = true ;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
       
    }
    $con->close();

}
?>


<?php
$insert = false ;
 if(isset($_POST['officename']))
 {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "editpersonalinfo";

    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to". 
        mysqli_connect_error());
    }

    $officename =$_POST['officename'];
    $place = $_POST['place'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $postoffice = $_POST['postoffice'];
    $pin = $_POST['pin'];

    
    $sql ="INSERT INTO `addresswork` (`officename`, `place`, `city`, `district`, `state`, `postoffice`, `pin`) VALUES (' $officename', '$place', '$city', ' $district', '$state','$postoffice', ' $pin')";


    if($con->query($sql) == true)
    {
        // echo "Successfully inserted";
        $insert = true ;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
       
    }
    $con->close();

}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bedb28f9b6.js" crossorigin="anonymous"></script>

    <title>Welcome to our Carwash</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="logo.jpg" height="40px" width="40px" alt="">
            <a class="navbar-brand p-2" href="#">Carwash site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="index.php"><i class="fa fa-car p-2"
                                aria-hidden="true"></i>Services</a>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.html"><i
                                class="fa-solid fa-circle-info p-2"></i>About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="profile.php"><i
                                class="fa-solid fa-address-card p-2"></i>Profile</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>



    <div class="container my-4">
        <h2>Personal info</h2>

        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#SettingModal"><i
                        class="fa-solid fa-gear p-2"></i>Setting</button>
            </div>

            <!--Setting Modal -->

            <div class="modal fade" id="SettingModal" tabindex="-1" aria-labelledby="SettingModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="SettingModalLabel">Setting</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>


                        <div class="modal-body ">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
                                <img src="logo4.png" height="80px" width="80px" alt="">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4">
                                <button class="btn btn-primary me-md-2" type="button" href="#"><i
                                        class="fa-solid fa-phone "></i></button>
                                <button class="btn btn-primary me-md-2" type="button" href="#"><i
                                        class="fa-brands fa-whatsapp "></i></button>
                                <button class="btn btn-primary me-md-2" type="button" href="#"><i
                                        class="fa-solid fa-envelope "></i></button>
                            </div>


                            <div class="d-grid gap-2 my-2">
                               <button type="button" class="btn btn-secondary text-start" data-bs-toggle="modal" data-bs-target="#LogoutModal"><i class="fa-solid fa-right-from-bracket float-end my-1 "></i>Logout</button>
                            </div>
                            <div class="d-grid gap-2 my-2">
                                <button class="btn btn-outline-secondary text-start" type="button"><i
                                        class="fa-solid fa-id-card float-end my-1"></i>Licences</button>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save <i
                                    class="fa-solid fa-floppy-disk p-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- log out Modal -->
            <div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="LogoutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="LogoutModalLabel">Logout?</h5>
                    </div>
                    <div class="modal-body">
                        <div class="d-grid gap-2 my-2">
                            <div class="d-grid gap-2 d-md-block">
                                <p>Are you sure you want to logout?</p>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" data-bs-dismiss="modal" type="submit"> Logout</button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            <div class="d-grid gap-2 my-4">
                <button type="button" class="btn btn-outline-secondary text-start" data-bs-toggle="modal"
                    data-bs-target="#PersonalInfoModal"><i class="fa-solid fa-user float-end my-1"></i>Edit Personal
                    Info</button>
            </div>


            <!-- php Script -->

            <?php
            if($insert == true){
            echo  "<p class='SubmitMsg'>Thanks for submitting your form. we are happy to see you joining for Laxmi institute of technology Trip </p>";
            }
            ?>
            <!--Edit Personal info Modal -->

            
            
        <form action="profile.php" method="post">

            <div class="modal fade" id="PersonalInfoModal" tabindex="-1" aria-labelledby="PersonalInfoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title " id="PersonalInfoModalLabel">Tell us <br><strong>About
                                    Yourself</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="personal info icon.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Personal Info</h5>
                                        <p class="card-text">
                                            ---------------------------------------------------------------------------------------------------------------------
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-body">
                            <div class="d-grid gap-2">
                                <label>Name:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="name"
                                    class="form-control" id="name"
                                    placeholder=" User Name                                                                                       &#xf007;">
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <label>Phone Number:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="number" name="number"
                                    class="form-control" id="number" maxlength="10"
                                    placeholder=" Phone Number                                                                                  &#xf095;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save <i
                                    class="fa-solid fa-floppy-disk p-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>





            <div class="d-grid gap-2 my-4">
                <button type="button" class="btn btn-outline-secondary text-start" data-bs-toggle="modal"
                    data-bs-target="#MyAddressesModal"><i class="fa-solid fa-address-card float-end my-1"></i>My
                    Addresses</button>
            </div>
            <!--My Addresses Modal -->
            <div class="modal fade" id="MyAddressesModal" tabindex="-1" aria-labelledby="MyAddressesModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="MyAddressesModalLabel">My Address </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-grid gap-2 my-2">
                                <button type="button" class="btn btn-outline-secondary text-center"
                                    data-bs-toggle="modal" data-bs-target="#AddAddressModal">Add Address<i
                                        class="fa-solid fa-plus p-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Add Address Modal -->
            <div class="modal fade" id="AddAddressModal" tabindex="-1" aria-labelledby="AddAddressModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddAddressModalLabel">Enter your Address </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-grid gap-2 my-2">
                                <button type="button" class="btn btn-outline-secondary text-center"
                                    data-bs-toggle="modal" data-bs-target="#WorkModal">Work<i
                                        class="fa-solid fa-plus p-2"></i></button>
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <button type="button" class="btn btn-outline-secondary text-center"
                                    data-bs-toggle="modal" data-bs-target="#HomeModal">Home<i
                                        class="fa-solid fa-plus p-2"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <!-- Add Address Modal for work-->

            <?php
            if($insert == true){
            echo  "<p class='SubmitMsg'>Detail are success fully submited </p>";
            }
            ?>
     
     <form action="profile.php" method="post">

            <div class="modal fade" id="WorkModal" tabindex="-1" aria-labelledby="WorkModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="WorkModalLabel">Enter your Address </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>



                        <div class="modal-body">
                            <div class="d-grid gap-2">
                                <label>Office Name:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="officename"
                                    class="form-control" id="officename"
                                    placeholder=" Office Name                                                                                 &#xe0c8;">
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <label>Place:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="place"
                                    class="form-control" id="place"
                                    placeholder=" Place                                                                                              &#xf3c5;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>City:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="city"
                                    class="form-control" id="city"
                                    placeholder=" City                                                                                                &#xf64f;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <select class="form-select my-2" aria-label="Default select example" name="district" id="district" >
                                    <option selected>District</option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanadu">Wayanadu</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasaragod">Kasaragod</option>
                                    <option value="none">none</option>
                                </select>
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <select class="form-select my-2" aria-label="Default select example" name="state" id="state">
                                    <option selected>State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="none">none</option>
                                </select>

                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>Post Office:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="postoffice"
                                    class="form-control" id="postoffice"
                                    placeholder=" Post Office                                                                                             &#xf0e0;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>Pin:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="number" name="pin"
                                    class="form-control" id="pin"
                                    placeholder=" Pin                                                                                                &#xf64f;">
                            </div>


                            <div class="d-grid gap-2 my-4">
                                <button type="button" class="btn btn-primary p-2"
                                    data-bs-dismiss="modal">Map Location<i class="fa-solid fa-location-dot float-end"></i></button>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save <i
                                    class="fa-solid fa-floppy-disk p-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>

     </form>


     <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->

   
<?php
$insert = false ;
 if(isset($_POST['housename']))
 {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "editpersonalinfo";

    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to". 
        mysqli_connect_error());
    }

    $housename =$_POST['housename'];
    $place = $_POST['place'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $postoffice = $_POST['postoffice'];
    $pin = $_POST['pin'];

    
    $sql ="INSERT INTO `addresshome` (`housename`, `place`, `city`, `district`, `state`, `postoffice`, `pin`) VALUES (' $housename', '$place', '$city', ' $district', ' $state',' $postoffice', ' $pin')";


    if($con->query($sql) == true)
    {
        // echo "Successfully inserted";
        $insert = true ;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
       
    }
    $con->close();

}
?>


                <!-- Add Address Modal for Home-->
                <form action="profile.php" method="post">

            <div class="modal fade" id="HomeModal" tabindex="-1" aria-labelledby="HomeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="HomeModalLabel">Enter your Address </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>



                        <div class="modal-body">
                            <div class="d-grid gap-2">
                                <label>House Name:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="housename"
                                    class="form-control" id="housename"
                                    placeholder=" House Name                                                                                 &#xe0c8;">
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <label>Place:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="place"
                                    class="form-control" id="place"
                                    placeholder=" Place                                                                                              &#xf3c5;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>City:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="city"
                                    class="form-control" id="city"
                                    placeholder=" City                                                                                                &#xf64f;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <select class="form-select my-2" aria-label="Default select example" name="district" id="district">
                                    <option selected>District</option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanadu">Wayanadu</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasaragod">Kasaragod</option>
                                    <option value="none">none</option>
                                </select>
                            </div>


                            <div class="d-grid gap-2 my-2">
                                <select class="form-select my-2" aria-label="Default select example" name="state" id="state">
                                    <option selected>State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="none">none</option>
                                </select>

                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>Post Office:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="text" name="postoffice"
                                    class="form-control" id="postoffice"
                                    placeholder=" Post Office                                                                                             &#xf0e0;">
                            </div>

                            <div class="d-grid gap-2 my-2">
                                <label>Pin:</label>
                                <input style="font-family: 'Font Awesome 5 Free'; font-weight:200;" type="number" name="pin" 
                                    class="form-control" id="pin"
                                    placeholder=" Pin                                                                                                &#xf64f;">
                            </div>


                            <div class="d-grid gap-2 my-4">
                                <button type="button" class="btn btn-primary p-2"
                                    data-bs-dismiss="modal">Map Location<i class="fa-solid fa-location-dot float-end"></i></button>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary p-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save <i
                                    class="fa-solid fa-floppy-disk p-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    </form>

            <div class="d-grid gap-2 my-4 ">
                <button type="button" class="btn btn-outline-secondary text-start" data-bs-toggle="modal"
                    data-bs-target="#MyVehiclesModal"><i class="fa-solid fa-car float-end my-1"></i>My Vehicles</button>
            </div>

            <!--My Vehicles Modal -->
            <div class="modal fade" id="MyVehiclesModal" tabindex="-1" aria-labelledby="MyVehiclesModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="MyVehiclesModalLabel">My Vehicles </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-grid gap-2 my-2">
                                <button type="button" class="btn btn-outline-secondary text-center"
                                    data-bs-toggle="modal" data-bs-target="#NewVehicleModal">New Vehicle<i
                                        class="fa-solid fa-plus p-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>




<!--  New Vehicles -->
 <?php
$insert = false ;
 if(isset($_POST['vehiclename']))
 {

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "editpersonalinfo";

    $con = mysqli_connect($server, $username, $password, $database);
    if(!$con){
        die("connection to this database failed due to". 
        mysqli_connect_error());
    }

    $vehiclename =$_POST['vehiclename'];
    $vehiclenumber = $_POST['vehiclenumber'];
    $vehicletype = $_POST['vehicletype'];
    
    $sql2 ="INSERT INTO `myvehicles` ( `vehiclename`, `vehiclenumber`, `vehicletype`) VALUES ( ' $vehiclename ', ' $vehiclenumber ', ' $vehicletype ')";
    


    if($con->query($sql2) == true)
    {
        // echo "Successfully inserted";
        $insert = true ;
    }
    else{
        echo "ERROR: $sql2 <br> $con->error";
       
    }
    $con->close();

}
?>

                <!-- New Vehicles Modal -->
                <form action="profile.php" method="post">

                <div class="modal fade" id="NewVehicleModal" tabindex="-1" aria-labelledby="NewVehicleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="NewVehicleModalLabel">Add your <br> <strong>Vehicle</strong>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <p class="para p-2"> <br> Fill in our vehicle name,rergistration number and select the
                                vehicle type to add your vehicle.</p>

                            <div class="modal-body">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
                                    <img src="logo5.jpg" height="150px" width="200px" alt="">
                                </div>


                                <div class="d-grid gap-2 my-2">
                                    <label>Vehicle Name:</label>
                                    <input type="text" class="form-control" id="vehiclename" name="vehiclename"
                                        placeholder="Vehicle Name">
                                </div>


                                <div class="d-grid gap-2 my-2">
                                    <label>Vehicle Number:</label>
                                    <input type="number" class="form-control" id="vehiclenumber" maxlength="10" name="vehiclenumber"
                                        placeholder="Vehicle Number">
                                </div>

                                <select class="form-select my-4" aria-label="Default select example" name="vehicletype"  id="vehicletype">
                                    <option selected>Vechile Type</option>
                                    <option value="Bullet or Sports bike">Bullet or Sports bike</option>
                                    <option value="truck ten wheels">truck ten wheels</option>
                                    <option value="traveller small">traveller small</option>
                                    <option value="truck six wheels">truck six wheels</option>
                                    <option value="bike">bike</option>
                                    <option value="premium suv or muv">premium suv or muv</option>
                                    <option value="pickup small">pickup small</option>
                                    <option value="compact suv">compact suv</option>
                                    <option value="minibus">minibus</option>
                                    <option value="truck four wheels">truck four wheels</option>
                                    <option value="suv or muv">suv or muv</option>
                                    <option value="ambulance small">ambulance small</option>
                                    <option value="tourist bus">tourist bus</option>
                                    <option value="traveller big">traveller big</option>
                                    <option value="none">none</option>
                                </select>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary p-2"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="save" class="btn btn-primary">Save <i
                                        class="fa-solid fa-floppy-disk p-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                
            </div>
            

            <div class="container">
                <img src="" alt="">
            </div>

            <footer class="bg-dark text-center text-white ">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-facebook-f" aria-hidden="true"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-twitter" aria-hidden="true"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-google" aria-hidden="true"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-linkedin-in" aria-hidden="true"></i></a>


                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
                <div class="container">
                    <p class="float-end" style="background-color: rgba(0, 0, 0, 0.2)"><a href="#">Back to top</a></p>
                </div>
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright:
                    <a class="text-white" href="index.php">Carwash.com</a>
                </div>
                <!-- Copyright -->
            </footer>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

</body>

</html>