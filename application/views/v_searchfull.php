<?php
foreach ($data as $value) { //foreach from data
?>

<p>Tanggal Keberangkatan : <?php echo $value['depart_date']; ?></p>
<p>Jam Keberangakatan : <?php echo $value['depart_time']; ?></p>
<p>Dari : <?php echo $value['rute_from']; ?></p>
<p>Ke : <?php echo $value['rute_to']; ?></p>
<p>Harga : <?php echo $value['price']; ?></p>
<a href="">Pilih</a>
<hr>

<?php
}
?>