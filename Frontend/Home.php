<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
    } 
    $date_now = date("m/d/Y");
    $date_convert = date_format(new DateTime($date_now), "m/d/Y");
    $_SESSION['eName'] = $date_now;
    unset($_SESSION['date']); 
    unset($_SESSION['rdate']); 


    if(isset( $_SESSION['last_login_timestamp'])){

    if((time() - $_SESSION['last_login_timestamp'])>1200){
        session_destroy();
            } 
    }

    if(isset( $_SESSION['success'])){

        echo '<script>alert("'.$_SESSION['success'].'")</script>'; 
        unset($_SESSION['success']);
    }  

    ?>
<html>

<head>
    <title>
        Project
    </title>
</head>
<!-- Importing style.css -->
<link rel="stylesheet" type="text/css" href="style.css">
</link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <!-- Navbar -->
    <?php
include 'Navbar.php';
    ?>
    <?php
if(isset($_SESSION['id'])) {
    // echo  $_SESSION['id'];
}

?>
    <!--Banner  -->
    <div class="Banner" onclick="sclosepopup(); closepopup()">
        <div class=" Banner-img">
            <div class="Banner-Overlay">
                <!-- <img src="../Images/Opportunity.jpg" alt="img"> -->
                <div class="Banner-content">
                    <h3>Find your
                        next <span style="color:Orange">Opportunity</span>
                        <p>Music,Exhibition & IT Fair</p>
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="Boxarea" onclick="sclosepopup(); closepopup()">
        <div class=" Content_Boxarea">
            <div class="left-Boxarea">
                <i class="fa-solid fa-magnifying-glass " style="font-size:45px"></i>
                <div class='right-boxarea'>
                    <h5>EventSeeker</h5>
                    <h3 class="h3_Boxarea">Looking For a Event?</h3>
                </div>
            </div>
            <a href="Search.php" class="a_Boxarea">Search Now<i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="Content_Boxarea">
            <div class="left-Boxarea">
                <i class="fa-solid fa-paste" style="font-size:45px"></i>
                <div class='right-boxarea'>
                    <h5>Register</h5>

                    <h3 class="h3_Boxarea">Are you Registrating?</h3>
                </div>
            </div>
            <a href="Registerevent.php" class="a_Boxarea">Register Now<i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>


    <?php
    

    include 'Events.php';
    include 'Blogs.php';
    include 'Footer.php';
    ?>










</body>

</html>