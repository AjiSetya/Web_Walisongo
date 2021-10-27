<?php
$filename = 'counter_sunangresik.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Wali Songo</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="assets/css/anim/animate.css" rel="stylesheet">
    
     <style>
	
	body {
		background:url(assets/img/bg2.jpg);
		}
		
	</style>
    
  </head>

  <body role="document">
  
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <a class="navbar-brand" onClick="goBack()"><span class="pull-left"><span class="glyphicon glyphicon-menu-left animated rotateIn"></span></span>Sunan Gresik</a>
        </div>
    </nav><br><br>
  
  <!-- Animation class -->
    <div id="main" class="m-scene">
    <!-- Classes that define elment animations -->
      <div class="scene_element scene_element--fadein">
  
  <div class="img-hover">
  	<center><img style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);border-radius:15px;" src="assets/img/sunangresik.png" class="img-responsive max-width: 100% height:auto display:block" alt="Walisongo"></center></div><br><br>
    
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Sunan Gresik</h4>
        </div>
        <div class="panel-body">
        <p align="justify">Sunan Gresik atau Maulana Malik Ibrahim (w. 1419 M/882 H) adalah nama salah seorang Walisongo, yang dianggap yang pertama kali menyebarkan agama Islam di tanah Jawa. Ia dimakamkan di desa Gapurosukolilo, kota Gresik, Jawa Timur.</p>
        <p align="justify">Tidak terdapat bukti sejarah yang meyakinkan mengenai asal keturunan Maulana Malik Ibrahim, meskipun pada umumnya disepakati bahwa ia bukanlah orang Jawaasli. Sebutan <em>Syekh Maghribi</em> yang diberikan masyarakat kepadanya, kemungkinan menisbatkan asal keturunannya dari wilayah Arab Maghrib di Afrika Utara.</p>
        <p align="justify">Babad Tanah Jawi versi J.J. Meinsma menyebutnya dengan nama <em>Makhdum Ibrahim as-Samarqandy</em>, yang mengikuti pengucapan lidah Jawa menjadi <em>Syekh Ibrahim Asmarakandi</em>. Ia memperkirakan bahwa Maulana Malik Ibrahim lahir di Samarkand, Asia Tengah, pada paruh awal abad 14.</p>
        <p align="justify">Dalam keterangannya pada buku <em>The History of Java</em> mengenai asal mula dan perkembangan kota Gresik, Raffles menyatakan bahwa menurut penuturan para penulis lokal, "<em>Mulana Ibrahim</em>, seorang <em>Pandita</em> terkenal berasal dari Arabia, keturunan dari <em>Jenal Abidin</em>, dan sepupu raja <em>Chermen</em> (sebuah negara <em>Sabrang</em>), telah menetap bersama para <em>Mahomedans</em> lainnya di <em>Desa Leran</em> di <em>Jang'gala</em>".</p>
        <p align="justify">Namun, kemungkinan pendapat yang terkuat adalah berdasarkan pembacaan J.P. Moquette atas baris kelima tulisan pada prasasti makamnya di desa Gapura Wetan, Gresik; yang mengindikasikan bahwa ia berasal dari Kashan, suatu tempat di Iran sekarang.</p>
        <p align="justify">Terdapat beberapa versi mengenai silsilah Maulana Malik Ibrahim. Ia pada umumnya dianggap merupakan keturunan Rasulullah SAW, melalui jalur keturunan Husain bin Ali, Ali Zainal Abidin, Muhammad al-Baqir, Ja'far ash-Shadiq, Ali al-Uraidhi, Muhammad al-Naqib, Isa ar-Rumi, Ahmad al-Muhajir, Ubaidullah, Alwi Awwal, Muhammad Sahibus Saumiah, Alwi ats-Tsani, Ali Khali' Qasam, Muhammad Shahib Mirbath, Alwi Ammi al-Faqih, Abdul Malik (Ahmad Khan), Abdullah (al-Azhamat) Khan, Ahmad Syah Jalal, Jamaluddin Akbar al-Husaini (Maulana Akbar), dan Maulana Malik Ibrahim yang berarti ia adalah keturunan orang Hadrami yang berhijrah.</p>
        <p align="justify"><strong><em>Filsafat : Mengenai filsafat ketuhanannya, disebutkan bahwa Maulana Malik Ibrahim pernah menyatakan mengenai apa yang dinamakan Allah. Ia berkata: "Yang dinamakan Allah ialah sesungguhnya yang diperlukan ada-Nya."</em></strong></p>
        <p align="justify" strong=""><strong>Penyebaran Agama :</strong><br>
        </p>
        <p align="justify">Maulana Malik Ibrahim dianggap termasuk salah seorang yang pertama-tama menyebarkan agama Islam di tanah Jawa, dan merupakan wali senior di antara paraWalisongo lainnya. Beberapa versi babad menyatakan bahwa kedatangannya disertai beberapa orang. Daerah yang ditujunya pertama kali ialah desa Sembalo, sekarang adalah daerah Leran, Kecamatan Manyar, yaitu 9 kilometer ke arah utara kota Gresik. Ia lalu mulai menyiarkan agama Islam di tanah Jawa bagian timur, dengan mendirikan mesjid pertama di desa Pasucinan, Manyar.</p>
        <p align="justify">Pertama-tama yang dilakukannya ialah mendekati masyarakat melalui pergaulan. Budi bahasa yang ramah-tamah senantiasa diperlihatkannya di dalam pergaulan sehari-hari. Ia tidak menentang secara tajam agama dan kepercayaan hidup dari penduduk asli, melainkan hanya memperlihatkan keindahan dan kabaikan yang dibawa oleh agama Islam. Berkat keramah-tamahannya, banyak masyarakat yang tertarik masuk ke dalam agama Islam.</p>
        <p align="justify">Sebagaimana yang dilakukan para wali awal lainnya, aktivitas pertama yang dilakukan Maulana Malik Ibrahim ialah berdagang. Ia berdagang di tempat pelabuhan terbuka, yang sekarang dinamakan desa Roomo, Manyar. Perdagangan membuatnya dapat berinteraksi dengan masyarakat banyak, selain itu raja dan para bangsawan dapat pula turut serta dalam kegiatan perdagangan tersebut sebagai pelaku jual-beli, pemilik kapal atau pemodal.</p>
        <p align="justify">Setelah cukup mapan di masyarakat, Maulana Malik Ibrahim kemudian melakukan kunjungan ke ibukota Majapahit di Trowulan. Raja Majapahit meskipun tidak masuk Islam tetapi menerimanya dengan baik, bahkan memberikannya sebidang tanah di pinggiran kota Gresik. Wilayah itulah yang sekarang dikenal dengan nama desa Gapura. Cerita rakyat tersebut diduga mengandung unsur-unsur kebenaran; mengingat menurut Groeneveldt pada saat Maulana Malik Ibrahim hidup, di ibukota Majapahit telah banyak orang asing termasuk dari Asia Barat.</p>
        <p align="justify">Demikianlah, dalam rangka mempersiapkan kader untuk melanjutkan perjuangan menegakkan ajaran-ajaran Islam, Maulana Malik Ibrahim membuka pesantren-pesantren yang merupakan tempat mendidik pemuka agama Islam di masa selanjutnya. Hingga saat ini makamnya masih diziarahi orang-orang yang menghargai usahanya menyebarkan agama Islam berabad-abad yang silam. Setiap malam Jumat Legi, masyarakat setempat ramai berkunjung untuk berziarah. Ritual ziarah tahunan atau haul juga diadakan setiap tanggal 12 Rabi'ul Awwal, sesuai tanggal wafat pada prasasti makamnya. Pada acara haul biasa dilakukan khataman Al-Quran, mauludan (pembacaan riwayat Nabi Muhammad), dan dihidangkan makanan khas bubur harisah.</p>
        <p align="justify"><strong>Wafat :</strong> Setelah selesai membangun dan menata pondokan tempat belajar agama di Leran, Syeh Maulana Malik Ibrahim wafat tahun 1419. Makamnya kini terdapat di desa Gapura, Gresik, Jawa Timur. Inskripsi dalam bahasa Arab yang tertulis pada makamnya adalah sebagai berikut:</p>
        <div align="justify">
          <blockquote>Ini adalah makam almarhum seorang yang dapat diharapkan mendapat pengampunan Allah dan yang mengharapkan kepada rahmat Tuhannya Yang Maha Luhur, guru para pangeran dan sebagai tongkat sekalian para sultan dan wazir, siraman bagi kaum fakir dan miskin. Yang berbahagia dan syahid penguasa dan urusan agama: Malik Ibrahim yang terkenal dengan kebaikannya. Semoga Allah melimpahkan rahmat dan ridha-Nya dan semoga menempatkannya di surga. Ia wafat pada hari Senin 12 Rabi'ul Awwal 822 Hijriah.</em>
              </td>
            </blockquote>
        </div>
        <p align="justify">Saat ini, jalan yang menuju ke makam tersebut diberi nama Jalan Malik Ibrahim</p>
        <p align="justify" strong=""><strong>Legenda rakyat :</strong><br>
        </p>
        <div align="justify">Menurut legenda rakyat, dikatakan bahwa Syeh Maulana Malik Ibrahim atau <strong>Sunan Gresik</strong> berasal dari Persia. Syeh Maulana Malik Ibrahim dan Syeh Maulana Ishaq disebutkan sebagai anak dari Syeh Maulana Ahmad Jumadil Kubro, atau Syekh Jumadil Qubro. Syeh Maulana Ishaq disebutkan menjadi ulama terkenal di Samudera Pasai, sekaligus ayah dari Raden Paku atau Sunan Giri. Syeh Jumadil Qubro dan kedua anaknya bersama-sama datang ke pulau Jawa. Setelah itu mereka berpisah;Syekh Jumadil Qubro tetap di pulau Jawa, Syeh Maulana Malik Ibrahim ke Champa, Vietnam Selatan; dan adiknya Syeh Maulana Ishak mengislamkan Samudera Pasai.
          </p>
        </div>
        <p align="justify">Syeh Maulana Malik Ibrahim disebutkan bermukim di Champa (dalam legenda disebut sebagai negeri Chermain atau Cermin) selama tiga belas tahun. Ia menikahi putri raja yang memberinya dua putra; yaitu Raden Rahmat atau Sunan Ampel dan Sayid Ali Murtadha atau Raden Santri. Setelah cukup menjalankan misi dakwah di negeri itu, ia hijrah ke pulau Jawa dan meninggalkan keluarganya. Setelah dewasa, kedua anaknya mengikuti jejaknya menyebarkan agama Islam di pulau Jawa.</p>
        <p align="justify">Syeh Maulana Malik Ibrahim dalam cerita rakyat kadang-kadang juga disebut dengan nama <em>Kakek Bantal</em>. Ia mengajarkan cara-cara baru bercocok tanam. Ia merangkul masyarakat bawah, dan berhasil dalam misinya mencari tempat di hati masyarakat sekitar yang ketika itu tengah dilanda krisis ekonomi dan perang saudara. Selain itu, ia juga sering mengobati masyarakat sekitar tanpa biaya. Sebagai tabib, diceritakan bahwa ia pernah diundang untuk mengobati istri raja yang berasal dari Champa. Besar kemungkinan permaisuri tersebut masih kerabat istrinya.</p>
        <br><br>
        <table style="width: 100%;">
          <tr>
            <td><p><strong>Total Pengunjung : <?= file_get_contents($filename)?></strong></p></td>
            <td align="right"><a href="sunanampel.php"><button class="btn btn-info">Baca Sunan Ampel</button></a></td>
          </tr>
        </table>
        </div>
      </div>

    </div> <!-- /container -->
  
  
  
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
	function goBack() {
    window.history.back();
	}
	</script>
    <script src="assets/js/anim/function.js"></script>
    <script src="assets/js/anim/jquery.smoothState.js"></script>
    </div>
    </div>
  </body>
</html>
