 
<style>


    .sidenav {
        height: 70%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        z-index: 999;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #fff;
        display: block;
        transition: 0.3s;
        text-transform: uppercase;
        font-family: Oswald;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
    .m-nav{
        font-size:32px; 
        cursor: pointer; 
        background-color: black; 
        padding: 1px 6px 1px 6px; 
        color: white; 
        border-radius: 7px;
    }
</style>




<div class="responive-header hidden-lg">
    <div class="logo ">
        <a href="index.php" title="logo">
            <img src="images/logo_sticky_2.png" alt=""   /> 
        </a>
    </div>
    <span class="open-responsive-btn">
<!--        <span class="m-nav" onclick="openNav()">&#9776; </span>-->
    </span> 

<!--    <div class="responisve-menu"> 
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="about-us.php">Who we are?</a>
            <a href="destination.php">Destination</a>
            <a href="#">Tour Packages</a>
            <ul style="list-style: none">
                <?php
                $TOUR_TYPE = new TourType(NULL);
                foreach ($TOUR_TYPE->all() as $tour_type) {
                    ?>
                    <li><a href="tour-packages.php?id=<?php echo $tour_type['id'] ?>" title="<?php echo $tour_type['name'] ?>"><?php echo $tour_type['name'] ?></a></li>
                <?php } ?>
            </ul>
            <a href="things-to-do.php">Things to do</a>
            <a href="gallery.php">Gallery</a>
            <a href="gest-book.php">Gest Book</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>-->
</div>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    
    
</script> 


