<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include 'Navbar.php';

if(isset( $_SESSION['userName'])){

    if(isset( $_SESSION['last_login_timestamp'])){

// if((time() - $_SESSION['last_login_timestamp'])>60){
// session_destroy();
// }
    }
?>
<link rel="stylesheet" type="text/css" href="Registerevent.css">

</link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class='event'>
    <form action="dbevent.php" method='POST' enctype='multipart/form-data'>
        <div class='Registerevent'>
            <h2>Event Information</h2>
            <input type="hidden" name='uid' id='uid' value=<?php echo $_SESSION['id']?>>
            <label for="image"> Choose a Photo</label>
            <div class="input-icon">
                <input type="file" name='image' id='image' required>
                <i class="fa-solid fa-image"></i>
            </div>
            <?php 
            if(isset($_SESSION['rerror'])){
                echo "<span style='background-color:rgb(233, 90, 90);color:white;width: 300px;margin-top:10px;'>".$_SESSION['rerror']."</span>";
            }
?>
            <label for="name">Event Name</label>
            <div class="input-icon">
                <input type="text" name='name' id='name' required placeholder="Enter Event Name"> <i
                    class="fa-solid fa-file"></i>
            </div>
            <label for="loc"> Event Location</label>
            <div class="input-icon">
                <input type="text" name='location' id='loc' required placeholder="Enter Event Location">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <label for="date">Event Date</label>
            <div class="input-icon">
                <input type="date" name='date' id='date' required placeholder="Enter Event Date">
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <?php 
            if(isset($_SESSION['rdate'])){
            echo "<span style='background-color:rgb(233, 90, 90);color:white;width: 300px;margin-top:10px;'>".$_SESSION['rdate']."</span>
            " ;
            }
            
?>
            <label for="desc">Event Description</label>
            <div class="input-icon" style="width:450px;background-color:transparent;">
                <textarea name="description" id="desc" cols="100" rows="20" required
                    placeholder="Enter Event Description"></textarea>
            </div>
            <label for="orgname">Event Organizers</label>
            <div class="input-icon">
                <input type="text" name='orgname' id='orgname' required placeholder="Enter Event Organizers">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>

            <!-- </div>
        <div class="Eventinfo"> -->
            <h2>Event Detail</h2>
            <label for="time">Time</label>
            <div class="input-icon">
                <input type="time" name="time" id="time" required placeholder="Enter Event Time">
                <i class="fa-solid fa-business-time"></i>
            </div>
            <label for="capacity">Capacity</label>
            <div class="input-icon">
                <input type="text" name="capacity" id="capacity" placeholder="Enter Event Capacity">
                <i class="fa-solid fa-clipboard-user"></i>
            </div>

            <label for="price">Ticket Price</label>
            <div class="input-icon">
                <input type="text" name="price" id="price" placeholder="Enter Event Ticket Price">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>

        </div>
        <input type="submit" name="save" id="" class="button-submit">
    </form>

    <?php
    }
    else{
    include 'Error.php';
}
?>
</div>
<?php
include 'Footer.php';
?>