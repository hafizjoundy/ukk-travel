<html>
    <body>
        <form action="<?php echo base_url() ?>searchfull" method="POST">
            Kota Asal<input type="text" name="rute_from"><br>
            Kota Tujuan <input type="text" name="rute_to"><br>
            Tanggal Berangkat <input type="date" name="depart_date"> <br>
            Jumlah Penumpang <input type="text" name="passengers"> <br><br>
            <button type="submit" name="submit">Cari Tiket</button>
        </form>
    </body>
</html>