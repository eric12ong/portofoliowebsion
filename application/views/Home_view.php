<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<style>
	@media(min-width:700px){
		.item{
			max-height:300px;
			width:auto;
		}
	}
	@media(max-width:700px){
		.item{
			min-height:200px;
			width:auto;
		}
	}
	h2,h3{padding: 0px; margin: 0px;}
	h4{border-bottom: 1px solid #999999;}
	h4,h5{font-weight:bold;}
	p{padding:5px 0px;}
	ul .menu_item{padding-bottom:10px;}
  	
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      	width: 50%;
      	margin: auto;
  	}
	.header{
		width:100%;
		position:relative;
		background-image: url('<?php echo base_url("images/header_background.png");?>');
		background-repeat:no-repeat;
		background-size:cover;
	}
	.carousel-indicators {
	  bottom:-10px;
	}
	.carousel-indicators li {
		display: inline-block;
		margin: 10px;
		text-indent: 0;
		cursor: pointer;
		border: none;
		border-radius: 50%;
		background-color:#666666;
		box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
	}
</style>

<body>
	<div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" class="img-fluid rounded" style="">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url("images/android_app_development.jpg");?>" alt="Chania" style="max-height:300px;width:auto;">
                </div>
                <div class="item">
                    <img src="<?php echo base_url("images/aplikasi_keren.jpg");?>" alt="Chania" style="max-height:300px;width:auto;">
                </div>
                <div class="item">
                    <img src="<?php echo base_url("images/android_app_development.jpg");?>" alt="Chanie" style="max-height:300px;width:auto;">
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    
    <div class="container">
		<h2>Selamat Datang,</h2>
        <h3>Terima kasih telah mengunjungi website kami.</h3>
        <h4>Sekilas Tentang Winlink Solution</h4>
        <img src="<?php echo base_url("images/header_foto_training_komputer.jpg");?>" class="img-fluid rounded" style="width:100%; max-width:600px;height:auto; display:block; margin:0 auto;" alt="Kursus Komputer"/>
        <p><b>Winlink Solution</b> adalah <b>Kursus Komputer di Medan</b> yang diajar langsung oleh <b>Dosen lulusan Teknik Informatika ITB dan Alumni Teknologi Informasi USU.</b></p>
        <p>Winlink Solution merupakan satu-satunya <b>kursus komputer terbaik di Medan</b> yang memiliki <b>staf pengajar dari Lulusan Universitas Terbaik di Indonesia</b>. Kursus Komputer lain mungkin bisa memberikan kursus komputer dengan iming-iming cepat memahami pembuatan program / cepat bekerja, namun bagaimanapun juga kunci keberhasilan kursus komputer terletak dari kualitas pengajarnya. Jika Anda ingin belajar kursus Pemrograman dengan terbaik maka <b>carilah kursus pemrograman dengan pengajar dari lulusan universitas terbaik</b> juga. Karena jika Anda sembarangan mengikuti kursus komputer, mungkin saja Anda mendapatkan pengajar yang tidak memiliki latar belakang pendidikan yang baik.
        <p><b>Visi Misi Winlink Solution :</b></p>
        <p>Memberikan kursus komputer terbaik di Medan yang membantu mahasiswa jurusan Teknik Informatika/Sistem Informasi/Ilmu Komputer/Teknologi Informasi yang merasa frustrasi dalam membuat aplikasi/website menggunakan bahasa pemrograman Java, C, C++, PHP, dan Android.</p>
        <p>Winlink Solution menerima murid dari:
        <ul>
        	<li>mahasiswa Teknik Informatika/Sistem Informasi/Ilmu Komputer/Teknologi Informasi</li>
            <li>Siswa SMK bidang Rekayasa Perangkat Lunak</li>
     	</ul>
        yang ingin mempelajari bahasa Pemrograman mulai dari Pembuatan Aplikasi Desktop (dengan bahasa Java, C, C++) dan Website (dengan bahasa PHP).</p>
        <h4>Pelajaran yang kami tawarkan</h4>
        <div class="row">
        	<div class="col-md-4">
            	<div class="thumbnail">
            		<img src="<?php echo base_url("images/desktop_app_development.jpg");?>" style="max-height:200px;width:auto;" alt="Pemrograman Java, C, C++"/>
            		<div class="caption">
                    	<b>Pengembangan Desktop App</b>
                        <p>Murid akan mempelajari pengembangan aplikasi desktop menggunakan bahasa pemrograman C,C++,atau Java.</p>
                    </div>
                </div>
           	</div>
            <div class="col-md-4">
            	<div class="thumbnail">
            		<img src="<?php echo base_url("images/web_designing.jpg");?>" style="max-height:200px;width:auto;" alt="Pemrograman Website"/>
            		<div class="caption">
                    	<b>Pengembangan Website</b>
                        <p>Murid akan mempelajari pengembangan Website menggunakan bahasa pemrograman PHP (Code Igniter), Adobe Photoshop, dan MySQL.</p>
                    </div>
                </div>
           	</div>
            <div class="col-md-4">
            	<div class="thumbnail">
            		<img src="<?php echo base_url("images/android_app_development.jpg");?>" style="max-height:200px;width:auto;" alt="Pemrograman Android"/>
            		<div class="caption">
                    	<b>Pengembangan Mobile Apps</b>
                        <p>Murid akan mempelajari pengembangan aplikasi desktop menggunakan bahasa Pemrograman Android.</p>
                    </div>
                </div>
           	</div>
        </div>
    </div>
    <div class="container">   
       	<h4>Keunggulan Winlink Solution</h4>
        <h5>Pengajar yang Berkualitas</h5>
        <div class="row">
       		<div class="col-md-3">
            	<img class="col-md-12 img-rounded img-fluid" src="<?php echo base_url("images/pengajar.png");?>" style="width:100%; height:auto; display:block; margin:0 auto" alt="Pengajar Kursus Komputer Terbaik"/>
            </div>
            <div class="col-md-8">
            	<p>Kami memiliki staf pengajar lulusan Universitas Terbaik.</p>
                <ul>
                    <li class="menu_item">Nugraha Siburian, S.T, M.T : merupakan Dosen Sistem Informasi di Universitas Pelita Harapan, Medan dengan latar belakang pendidikan :
               S1 Teknik Informatika ITB dengan IPK 3.31 dan S2 Teknik Informatika ITB dengan IPK 3.89. Beliau sudah berpengalaman sebagai pengajar/dosen dibidang Science dan Komputer dan juga pernah bekerja sebagai IT Specialist di IBM Indonesia.<br />
                    <i>Keahlian : Bidang Pemrograman Java, C, C++, Web Development, Datawarehouse, Project Management, dll</i></li>
                    <li class="menu_item">Erwin Sitorus, S.Kom : merupakan Alumni Teknologi Informasi USU denga IPK 3.31.<br />
                    <i>Keahlian : Bidang Pemrograman Java, Mobile Apps Development using Android, dll</i></li>
               </ul>
          	</div>
      	</div>
        <h5>Cepat Mahir Menghasilkan Website & Aplikasi Keren</h5>
        <div class="row">
        	<div class="col-md-3">
            	<img class="col-md-12 img-rounded img-fluid" src="<?php echo base_url("images/aplikasi_keren.jpg");?>" style="width:100%; max-width:600px;height:auto; display:block; margin:0 auto" alt="Pembuatan Website dan Aplikasi"/>
            </div>
            <div class="col-md-8">
            	<p>Anda akan diajari secara intensif untuk bisa mengembangkan aplikasi dan website, sekalipun Anda belum memiliki pengalaman dan skill di bidang Pemrograman.</p>
            </div>
        </div>
        <h5>Siswa yang Berprestasi akan dibantu Melamar Kerja</h5>
        <div class="row">
        	<div class="col-md-3">
            	<img class="col-md-12 img-rounded img-fluid" src="<?php echo base_url("images/diterima_bekerja.png");?>" style="width:100%; max-width:600px;height:auto; display:block; margin:0 auto" alt="Dibantu Melamar Kerja"/>
            </div>
            <div class="col-md-8">
            	<p>Bagi mahasiswa dan siswa SMK tingkat akhir yang akan melamar kerja, kami akan membantu Anda untuk melamar pekerjaan. Namun kami tidak menjanjikan akan mendapat pekerjaan. Kami hanya membantu melamar pekerjaan, karena Bpk. Windy Nugraha selaku Pendiri Winlink Solution memiliki koneksi ke Pemilik Perusahaan di Jakarta, Bandung, Surabaya, Singapura, dll.</p>
                <p></p>
            </div>
        </div>
    </div>
</body>

<script>
	  jQuery(document).ready(function($) {
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
</html>