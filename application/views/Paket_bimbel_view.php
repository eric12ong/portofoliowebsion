<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<style>
	@media(max-width:600px){
		.max-lines {
			display: block; /* or inline-block */
			text-overflow: ellipsis;
			word-wrap: break-word;
			overflow: hidden;
			max-height: 15em;
			line-height: 1.8em;
		}
	}
</style>
<body>
	<div class="container">
        <h3>Materi Pilihan</h3>
        <p>Kami menyediakan sejumlah materi pilihan.</p>
        <table class="table table-hover table-responsive" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Materi Pilihan</th>
                    <th>Biaya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td><h4>Pemrograman Berorientasi Objek (Java atau C++)</h4>
                        <div class="row">
                    		<div class="col-md-3"><img src="<?php echo base_url("images/java.jpg");?>" style="max-width:120px;" alt="Pemrograman Java"/></div>
                            <div class="col-md-9">
                            	<p>Kursus Pemrograman Berorientasi Objek bertujuan untuk membantu mahasiswa tahun Pertama yang mendapatkan Kuliah Pemrograman Berorientasi Objek untuk memahami logika dan struktur data dalam pembuatan Program bahasa Java atau C++.</p> 		
                            	<a href="<?php echo base_url("");?>paket_bimbel/detail_bimbel/1" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                  	</td>
                    <td>Rp.600.000,- /bulan, seminggu 2x Pertemuan. Durasi 1.5 jam per Pertemuan.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td><h4>Pemrograman C</h4>
                        <div class="row">
                    		<div class="col-md-3"><img src="<?php echo base_url("images/c_programming.jpg");?>" style="max-width:120px;" alt="Pemrograman C"/></div>
                            <div class="col-md-9">
                            	<p>Kursus pemrograman C bertujuan untuk melatih mahasiswa menulis program menggunakan bahasa C. Bahasa C sebagai bahasa tingkat rendah sangat populer digunakan dalam Pengembangan Operating System (OS) dan aplikasi yang embedded pada Hardware. </p>
                                <a href="<?php echo base_url();?>paket_bimbel/detail_bimbel/2" class="btn btn-info">Detail</a>
                          	</div>
                        </div>
                  	</td>
                    <td>Rp.600.000,- /bulan, seminggu 2x Pertemuan. Durasi 1.5 jam per Pertemuan.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td><h4>Pembuatan Website</h4>
                        <div class="row">
                    		<div class="col-md-3"><img src="<?php echo base_url("images/web_designing.jpg");?>" style="max-width:120px;" alt="Pemrograman Website (PHP)"/></div>
                        	<div class="col-md-9">
                            	<p>Kursus ini berguna untuk mahasiswa/professional yang ingin mengembangan website menggunakan framework, bahasa pemrograman PHP, dan desain gambar menggunakan Adobe Photoshop.</p>
                                <a href="<?php echo base_url();?>paket_bimbel/detail_bimbel/3" class="btn btn-info">Detail</a>
                        	</div>
                        </div>
                  	</td>
                    <td>Rp.600.000,- /bulan, seminggu 2x Pertemuan. Durasi 1.5 Jam per Pertemuan.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td><h4>Pembuatan Aplikasi di HP Android</h4>
                        <div class="row">
                    		<div class="col-md-3"><img src="<?php echo base_url("images/android_app_development.jpg");?>" style="max-width:120px;" alt="Pemrograman Android"/></div>
                        	<div class="col-md-9">
                            	<p>Kursus ini berguna untuk mahasiswa/professional yang ingin mengembangan website menggunakan framework, bahasa pemrograman PHP, dan desain gambar menggunakan Adobe Photoshop.</p>
                                <a href="<?php echo base_url();?>paket_bimbel/detail_bimbel/4" class="btn btn-info">Detail</a>
                        	</div>
                        </div>
                  	</td>
                    <td>Rp.600.000,- /bulan, seminggu 2x Pertemuan. Durasi 1.5 Jam per Pertemuan.</td>
                </tr>
            </tbody>
        </table>
      	</div>
    </div>
</body>
</html>
