<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<?php
// the message
$msg = "Pendaftaran Bimbel";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("nugie.archie@gmail.com","Pendaftaran Bimbel",$msg);
?>

<body>
	<div class="container">
    	<img src="<?php echo base_url("images/congrats.gif");?>" class="img-responsive" style="display:block;margin:0 auto;max-width:250px;height:auto;" alt="Sukses Mendaftar"/>
    	<h3><b>Selamat <?php echo $nama_murid;?>, kamu sudah terdaftar sebagai Peserta Kursus Pemrograman Komputer di Winlink Solution<p> (Kursus Pemrograman Komputer terbaik di Medan).</b></h3>
        <h4><b>Kami akan segera menghubungi kamu melalui HP/Facebook/Line untuk mengatur Jadwal Belajar dan Menginformasikan Cara Pembayaran.</b></h4>
        <h4><i>Sampai Ketemu di Winlink Solution ...</i></h4>
    </div>
</body>
</html>
