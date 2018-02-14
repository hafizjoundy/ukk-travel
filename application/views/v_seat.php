<div class="booking">
    <div class="booking-rute">
    <h3>Pilih Kursi</h3>
    <div class="customer-name">

    <form action="<?php echo base_url() ?>booking/proccess" method="POST">
        <input type="hidden" name='key' value='<?php echo $_GET['key'] ?>'>
        <table class="customer-table">
        
            <?php $i=0; ?>
            <?php foreach ( $data as $value ): ?>
            <?php $i++; ?>
                
            <tr>
                <td>
                    <div onclick="pget(this.id)" id="p<?php echo $i ?>" class="customer-color id-p<?php echo $i ?>"></div>
                </td>
                <td>
                    <span><?php echo $value ?></span>
                </td>
                <td>
                    <input name="seat[]" class="form-control" id="i<?php echo $i ?>" type="text">
                </td>
            </tr>

            <?php endforeach; ?>

           
        </table>
    </div>

    <div class="seat">
        <div onclick="sget(this.id)" id="1" class="seat-id"><p>1</p></div>
        <div onclick="sget(this.id)" id="2" class="seat-id"><p>2</p></div>
        <div onclick="sget(this.id)" id="3" class="seat-id"><p>3</p></div>
        <div onclick="sget(this.id)" id="4" class="seat-id"><p>4</p></div>
        <div id="5" class="seat-id seat-notavailabe"><p>5</p></div>
        <div onclick="sget(this.id)" id="6" class="seat-id"><p>6</p></div>
        <div id="7" class="seat-id seat-notavailabe"><p>7</p></div>
        <div onclick="sget(this.id)" id="8" class="seat-id"><p>8</p></div>
        <div onclick="sget(this.id)" id="9" class="seat-id"><p>9</p></div>
        <div onclick="sget(this.id)" id="10" class="seat-id"><p>10</p></div>
        <div onclick="sget(this.id)" id="11" class="seat-id"><p>11</p></div>
        <div onclick="sget(this.id)" id="12" class="seat-id"><p>12</p></div>
        <div onclick="sget(this.id)" id="13" class="seat-id"><p>13</p></div>
        <div onclick="sget(this.id)" id="14" class="seat-id"><p>14</p></div>
    </div>
    </div>

    <div class="booking-continue">
        <button type="submit" name="submit" class="choose-btn">Lanjut Bayar</button>
    </div>
</div>
<!-- <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
<script>

function pget(id){
    seat.p = id;
    $('.customer-color').removeClass("customer-selected");
    $('#'+id).addClass("customer-selected");
}
function sget(id){
    seat.selectSeat(id);
}

var seat = {
    p:'',
    pn:function(id){
        pn = id.replace('p', '');
        return pn;
    },
    selectSeat: function(id) {
        if ($('#' + id).attr('class') == 'seat-id') {

            if($('#i'+this.pn(this.p)).val() == ''){
                $('#' + id).addClass("seat-selected");
                 // console.log(this.pn(this.p));
                $('#i'+this.pn(this.p)).val(id);
                $('#'+id).addClass('seat-for-'+this.p);
            }

          
        } else {
            cSeat = $('#' + id).attr('class');
            cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p','');
            $('#' + id).removeClass("seat-selected");
            $('#'+id).removeClass(cSeat.replace('seat-id ',''));
            $('#i'+cSeatoc).val(''); 
            
            
        }
        //    console.log($('#'+id).attr('class'));
    }
}



</script>