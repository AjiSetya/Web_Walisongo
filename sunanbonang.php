<?php
$filename = 'counter_sunanbonang.txt';
 
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
          <a class="navbar-brand" onClick="goBack()"><span class="pull-left"><span class="glyphicon glyphicon-menu-left  animated rotateIn"></span></span>Sunan Bonang</a>
        </div>
    </nav><br><br>
  
  <!-- Animation class -->
    <div id="main" class="m-scene">
    <!-- Classes that define elment animations -->
      <div class="scene_element scene_element--fadein">
  
  <div class="img-hover">
  	<center><img style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);border-radius:15px;" src="assets/img/bonang.png" class="img-responsive max-width: 100% height:auto display:block" alt="Walisongo"></center></div><br><br>
    
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Sunan Bonang</h1>
        </div>
        <div class="panel-body">
        <p align="justify">Nama lengkap Sunan Bonang adalah Raden Maulana Makdum Ibrahim Sunan Bonang. Raden Ibrahim (Sunan Bonang) adalah putra R. Rochmat Sunan Ampel dengan Ny. Ageng Manila (Dewi Tjondrowati) putri R. Arya Tedja, salah satu tumenggung dari kerajaan Majapahit yang berkuasa di Tuban. Menurut sumber, R. Ibrahim dilahirkan sekitar tahun 1465 M.</p>
        <p align="justify">Ketika R. Ibrahim berumur 7 tahun, beliau pergi mengaji ke Mesir selama 6 bulan. Setelah sampai di tanah Jawa, R. Ibrahim langsung masuk ke kebun ayahnya tanpa sepengetahuan kedua orang tuanya. Beberapa hari kemudian Sunan Ampel baru mengetahui bahwa di dalam kebunnya ada seorang pemuda, anehnya saat itu Sunan Ampel tidak mengenal siapa dia sebenarnya dan dari mana asal usulnya. Ketika ditanya R. Ibrahim sendiri juga tidak menjelaskan siapa dirinya sebenarnya.</p>
        <p align="justify">Oleh Sunan Ampel, R. Ibrahim dipercaya untuk mengajar dan menjadi kepala pondok milik Sunan Ampel. Perintah tersebut dilaksanakan dengan baik selama 40 hari, akhirnya barulah diketahui siapa sebenarnya pemuda tersebut. R. Ibrahim mendapat perintah dari ayahnya untuk pergi mengembara dengan suatu wasiat agar R. Ibrahim naik ke Gunung Dumas, dan tidak boleh berhenti sebelum sampai di suatu hutan yang namanya Alas Kemuning. Bertahun-tahun R. Ibrahim mengembara tanpa makan dan tidur hingga akhirnya ditemui oleh Nabiyullah yang bernama Chidir, dan diperintah agar R. Ibrahim turun pada sebuah batu kemuning.</p>
        <p align="justify">Empat hari kemudian Nabi Chidir menemui kembali dengan menunjukkan bahwa hutan inilah yang dimaksud dengan hutan atau alas Kemuning, serta memerintahkan agar R. Ibrahim bermukim di tempat itu. Setelah R. Ibrahim menetap di alas Kemuning, beliau mendapat perintah untuk berkhalwat (bertapa) pada sebuah batu, dan batu itulah yang kita kenal dengan Pasujudan (tempat sujudnya R. Ibrahim kepada Allah SWT).</p>
        <p align="justify">Ketika R. Ibrahim berumur 30 tahun beliau menerima pangkat kewalian dari guru Mursyid, dan dikenal dengan nama Kanjeng Sunan Bonang.R. Ibrahim Sunan Bonang mempunyai seorang santri yang bernama K. Nagur. K. Nagur inilah santri yang dapat dilihat oleh orang banyak. Sebab kebanyakan santri beliau tidak terlihat oleh mata manusia biasa. Selang beberapa lama setelah beliau menerima pangkat wali (Sunan), beliau mendirikan sebuah masjid di Desa Bonang.</p>
        <p align="justify">Diceritakan dalam sejarah, bahwa pada suatu ketika pernah ada seorang pendeta Hindu yang mengajak berdebat dengan Sunan Bonang, bahkan kemudian pendeta Hindu itupun mengakui kekalahannya, akhirnya bertobat serta menyatakan diri masuk Islam.</p>
        <p align="justify">Pada masa hidupnya dikatakan, bahwa Sunan Bonang itu pernah belajar di Pasai. Sekembalinya dari Pasai, Sunan Bonang memasukkan pengaruh Islam ke dalam kalangan Bangsawan dari Keraton Majapahit, serta mempergunakan Demak sebagai tempat berkumpul bagi para Wali, serta pusat Kerajaan Islam. Raden Ibrahim Sunan Bonang menjadi Muballigh dan Imam di wilayah pesisir sebelah utara, mulai dari Lasem sampai Tuban. Disanalah Sunan Bonang mendirikan pondok-pondok sebagai tempat penggemblengan para santri dan muridnya. Sebagian riwayat mengatakan bahwa Sunan Bonang tidak menikah sampai beliau wafat, tetapi dalam riwayat lain menyebutkan bahwa R. Ibrahim Sunan Bonang menikah dengan Dewi Hirah putri dari R. Jaka Kandar serta mempunyai keturunan satu yang bernama Dewi Rukhil.</p>
        <p align="justify">Dewi Rukhil menikah dengan Sunan Kudus Ja’far Shodiq. Dari pernikahan Ja’far Shodiq dengan Dewi Rukhil binti Sunan Bonang lahirlah R. Amir Khasan yang wafat di Karimunjawa dalam status jejaka.</p>
        <p align="justify">Tahun 1525 M, Raden Maulana Makdum Ibrahim Sunan Bonang wafat dalam usia kurang lebih 60 tahun, dimakamkan di rumah kediaman beliau (Ndalem) di desa Bonang Lasem. Setengah riwayat menyebutkan bahwa makam beliau terletak di Tuban, ada pula yang mengatakan di Madura. Semua itu menunjukkan karomahnya Sunan Bonang yang mungkin terjadi bagi seseorang yang menjadi kekasih Allah (Waliyyullah). Hal ini mempunyai hikmah bagi para pengikutnya.</p>
        <p><strong>Karya Sastra Sunan Bonang :</strong></p>
        <p align="justify">Sunan Bonang banyak menggubah sastra berbentuk suluk atau tembang tamsil. Antara lain Suluk Wijil yang dipengaruhi kitab Al Shidiq karya Abu Sa'id Al Khayr. Sunan Bonang juga menggubah tembang Tamba Ati (dari bahasa Jawa, berarti penyembuh jiwa) yang kini masih sering dinyanyikan orang.</p>
        <p align="justify">Ada pula sebuah karya sastra dalam bahasa Jawa yang dahulu diperkirakan merupakan karya Sunan Bonang dan oleh ilmuwan Belanda seperti Schrieke disebut Het Boek van Bonang atau buku (Sunan) Bonang. Tetapi oleh G.W.J. Drewes, seorang pakar Belanda lainnya, dianggap bukan karya Sunan Bonang, melainkan dianggapkan sebagai karyanya.</p>
        <p align="justify">Beliau juga menulis sebuah kitab yang berisikan tentang Ilmu Tasawwuf berjudul Tanbihul Ghofilin. Kitab setebal 234 hlmn ini sudah sangat populer dikalangan para santri.</p>
        <p align="justify">Sunan Bonang juga menggubah gamelan Jawa yang saat itu kental dengan estetika Hindu, dengan memberi nuansa baru. Dialah yang menjadi kreator gamelan Jawa seperti sekarang, dengan menambahkan instrumen bonang. Gubahannya ketika itu memiliki nuansa dzikir yang mendorong kecintaan pada kehidupan transedental (alam malakut). Tembang "Tombo Ati" adalah salah satu karya Sunan Bonang.</p>
        <p align="justify">Dalam pentas pewayangan, Sunan Bonang adalah dalang yang piawai membius penontonnya. Kegemarannya adalah menggubah lakon dan memasukkan tafsir-tafsir khas Islam. Kisah perseteruan Pandawa-Kurawa</p>
        <br><br>
        <table style="width: 100%;">
          <tr>
            <td><p><strong>Total Pengunjung : <?= file_get_contents($filename)?></strong></p></td>
            <td align="right"><a href="sunandrajad.php"><button class="btn btn-info">Baca Sunan Drajad</button></a></td>
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
