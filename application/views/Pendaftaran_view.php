<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>
	<div class="container">
        <h3>Form Pendaftaran Kursus Komputer</h3>
        <form action="<?php echo base_url("pendaftaran/add_new_pendaftaran");?>" method="POST">
        	<div class="form-group row">
                <div class="col-md-2"><label for="nama_murid">Nama</label></div>
                <div class="col-md-3"><input type="text" class="form-control" name="nama_murid" required/></div>
            </div>
            <div class="form-group row">
            	<div class="col-md-2"><label for="pendidikan">Pendidikan</label></div>
                <div class="col-md-3"><select name="pendidikan" class="form-control" required>
                	<option value="">===</option>
                    <option value="smk">SMK RPL</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="profesional">Profesional</option>
                </select></div>
            </div>
            <div class="form-group row">
            	<div class="col-md-2"><label for="nama_sekolah">Asal Universitas/Sekolah</label></div>
                <div class="col-md-3"><input type="text" class="form-control" name="nama_sekolah" required/></div>
            </div>
            <div class="form-group row">
            	<div class="col-md-2"><label for="kelas">Tingkat</label></div>
                <div class="col-md-3"><select name="kelas" class="form-control" required>
                	<option value="">===</option>
                	<option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="alumni">Alumni</option>
                </select></div>
            </div>
            
            <div class="form-group row">
            	<div class="col-md-2"><label for="no_hp">No.HP</label></div>
                <div class="col-md-3"><input type="text" class="form-control" name="no_hp" required/></div>
            </div>
            <div class="form-group row">
            	<div class="col-md-2"><label for="akun_line">Akun Line</label></div>
                <div class="col-md-3"><input type="text" class="form-control" name="akun_line"/></div>
            </div>
            <div class="form-group row">
            	<div class="col-md-2"><label for="akun_fb">Akun Facebook</label></div>
                <div class="col-md-3"><input type="text" class="form-control" name="akun_fb" required/></div>
            </div>
            <p>Kami sengaja meminta Akun Media Sosial Anda, supaya kami bisa menghubungi Anda dengan cepat</p>
            <b>Kursus yang Diikuti:</b><i>(Boleh dipilih lebih dari satu)</i>
            <div class="checkbox">
                <label><input type="checkbox" value="oop" name="paket_bimbel[]">Pemrograman Berorientasi Objek (Java atau C++) (Rp.600.000/bulan)</label>
            </div>
             <div class="checkbox">
                <label><input type="checkbox" value="c" name="paket_bimbel[]">Pemrograman C (Rp.600.000/bulan)</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="web" name="paket_bimbel[]">Pembuatan Website(Rp.600.000/bulan)</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="android" name="paket_bimbel[]">Pembuatan Aplikasi Android (Rp.600.000/bulan)</label>
            </div>
            <div class="col-md-3 col-md-offset-4" style="padding-top:5%;padding-bottom:5%;">
            	<button type="submit" class="btn btn-info" style="padding:10px">Daftar</button>
          	</div>
        </form>
   	</div>
</body>
</html>
