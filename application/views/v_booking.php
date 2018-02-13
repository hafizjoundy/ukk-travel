<div class="booking">
    <div class="booking-rute">
        <h3>Data Penumpang</h3>


        <form action="<?php echo base_url() ?>booking/insert_customer" method="POST">

    <?php for($i = 1;$i <= $_GET['passengers']; $i++) : ?>
        
        <h4>Penumpang <?php echo $i ?></h4>
        <label for="">Nama</label>
        <input type="text" name="name[]"><br>
        <label for="">Address</label>
        <textarea name="address[]" id="" cols="30" rows="10"></textarea><br>
        <label for="">Nomor</label>
        <input type="text" name="nomor[]"><br>
        <label for="">Email</label>
        <input type="text" name="email[]"><br>
        <label for="">Gender</label>
        <select name="gender[]" id="">
            <option value="l">Male</option>
            <option value="p">Female</option>
        </select>

    <?php endfor; ?>
        
    </div>

    <div class="booking-continue">
        <button type="submit" name="submit" class="choose-btn">Lanjut Pilih Kursi</button>
    </div>

    </form>
</div>