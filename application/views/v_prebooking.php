<div class="booking">
    <div class="booking-rute">
        <h3>Konfirmasi Pesawat</h3>
        <table>
        <tr>
            <td>Maskapai</td>
            <td> : </td>
            <td><?php echo $data['data_rute']['code'] ?></td>
        </tr>
        <tr>
            <td>Depart</td>
            <td> : </td>
            <td><?php echo $data['data_rute']['depart'] ?></td>
        </tr>
        <tr>
            <td>Arrive</td>
            <td> : </td>
            <td><?php echo $data['data_rute']['arrive'] ?></td>
        </tr>
        <tr>
            <td>Durasi</td>
            <td> : </td>
            <td>
                 <!-- duration -->
            <?php
            $datetime1 = new DateTime($data['data_rute']['depart']); //convert to datetime
            $datetime2 = new DateTime($data['data_rute']['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>

            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td> : </td>
            <td><?php echo $data['data_rute']['class'] ?></td>
        </tr>
        </table>
    </div>
    <div class="booking-rute">
        <h3>Total Pembayaran</h3>
        <table>
        <tr>
            <td>Harga Tiket</td>
            <td> : </td>
            <td><?php echo $data['data_rute']['price'] ?></td>
        </tr>
        <tr>
            <td>Jumlah Penumpang</td>
            <td> : </td>
            <td><?php echo $_GET['passengers'] ?></td>
        </tr>
        <tr>
            <td>Total yang harus dibayar</td>
            <td> : </td>
            <td><?php echo $data['total_payment'] ?></td>
        </tr>
        </table>
    </div>

    <div class="booking-continue">
    <form action="<?php echo base_url() ?>prebooking/makebooking" method="POST">
        <input name="rute_id" value="<?php echo $_GET['rute_id'] ?>" type="hidden">
        <input name="passengers" value="<?php echo $_GET['passengers'] ?>" type="hidden">
        <button class="choose-btn">Lanjut Booking</button>
    </form>
    </div>
</div>