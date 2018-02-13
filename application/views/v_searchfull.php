<div class="search-flight-wrapper">
<div class="search-flight-title">
    <!-- get data from get -->
    <h3><?php echo $_GET['rute_from'] ?> → <?php echo $_GET['rute_to'] ?></h3>
    <p>

    <!-- convert date to month day using date function php -->
    <?php
     $date = strtotime($_GET['depart_date']);
     echo date("D d M Y",$date);
     ?>

    <span class="line-horisontal">|</span> <?php echo $_GET['passengers'] ?> Passengers <span class="line-horisontal">|</span> <?php echo $_GET['flight_class'] ?>
</div>
<div class="container search-flight">
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

<!-- foreach variabel data as value -->
 <?php foreach ($data as $value) : ?>

    <div class="flight-rute">
    <form action="<?php echo base_url() ?>prebooking/" method="GET">
        <input type="hidden" name="passengers" value="<?php echo $_GET['passengers'] ?>">
        <input type="hidden" name="rute_id" value="<?php echo $value['id']; ?>">
        <div class="col-lg-3">
            <p>Lion</p>
        </div>
        <div class="col-lg-2">
            <p><?php echo $value['depart']; ?></p>
            <p><?php echo $value['rute_from']; ?></p>
        </div>
        <div class="col-lg-2">
            <p><?php echo $value['arrive']; ?></p>
            <p><?php echo $value['rute_to']; ?></p>
        </div>
        <div class="col-lg-2">
            <p>
            
            <!-- duration -->
            <?php
            $datetime1 = new DateTime($value['depart']); //convert to datetime
            $datetime2 = new DateTime($value['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>

            </p>
        </div>
        <div class="col-lg-3">
            <p>
            
            <!-- convert number to idr format -->
            <?php 
            echo "Rp.".strrev(implode('.',str_split(strrev(strval($value['price'])),3)));
            ?>
            
            </p>
            <button onclick="window.location.href='<?php echo base_url() ?>prebooking/flight/<?php echo $value['id']; ?>'" class="choose-btn">Choose</button>
        </div>
        </form>
    </div>

    <!-- end foreach -->
    <?php endforeach; ?>

</div>
</div>