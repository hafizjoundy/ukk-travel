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
        <button onclick='window.location.href="<?php echo base_url() ?>booking"' class="choose-btn">Lanjut Booking</button>
    </div>
</div>