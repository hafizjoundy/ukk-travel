<div class="flight-wrapper">

<div class="search-flight-title animated fadeIn">
    <!-- get data from get -->
    <h4>
        <span class="glyphicon glyphicon-plane"></span>
        Trip from 
        <b><?php echo $_GET['rute_from'] ?></b> to 
        <b><?php echo $_GET['rute_to'] ?></b>
    </h4>

   
    <p> 
        <b>
        <?php
        // convert date to month day using date function php
        $date = strtotime($_GET['depart_date']);
        echo date("D d M Y", $date);
        ?>
        </b>
    </p>
    
    <p>
        <b>
        <span><?php echo $_GET['passengers'] ?> Passengers, </span> 
        <span><?php echo $_GET['flight_class'] ?> Class</span>
        </b>
    </p>

</div>


<div class="search-flight animated fadeInUp">
    <div class="search-header">
        <div class="col-lg-3">
        <h6>Airline</h6>
        </div>
        <div class="col-lg-2">
        <h6>Depart</h6>
        </div>
        <div class="col-lg-2">
        <h6>Arrive</h6>
        </div>
        <div class="col-lg-2">
        <h6>Duration</h6>
        </div>
        <div class="col-lg-3">
        <h6>Price per Person</h6>
        </div>
    </div>
    <div class="notfound">
        <h2>Rute Tidak Tersedia :(</h2>
        <h4>Cari rute lain, <span onclick='window.location.href="<?php echo base_url() ?>"' class="choose-btn">Cari</span></h4>
    </div>


</div>
</div>