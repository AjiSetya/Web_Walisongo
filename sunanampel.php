<?php
$filename = 'counter_sunanampel.txt';
 
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
          <a class="navbar-brand" onClick="goBack()"><span class="pull-left"><span class="glyphicon glyphicon-menu-left  animated rotateIn"></span></span>Sunan Ampel</a>
        </div>
    </nav><br><br>
  
  <!-- Animation class -->
    <div id="main" class="m-scene">
    <!-- Classes that define elment animations -->
      <div class="scene_element scene_element--fadein">
  
  <div class="img-hover">
  	<center><img style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);border-radius:15px;" src="assets/img/sunanampel.png" class="img-responsive max-width: 100% height:auto display:block" alt="Walisongo"></center></div><br><br>
    
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Sunan Ampel</h1>
        </div>
        <div class="panel-body">
        <p align="justify">Raden Rahmatullah (Sunan Ampel) lahir di negeri Cempa pada tahun 1401 M. Putra dari seorang ibu yang bernama Dewi Candrawulan putri dari Raja Cempa. Adapun ayahnya bernama Ibrahim Al-Ghazi, seorang ulama besar dari Samarqandi dekat Bukhara, sebuah daerah yang terletak di wilayah Rusia Selatan. Sebagaimana kita ketahui bahwa daerah tersebut terkenal sebagai tempat kelahiran ulama besar ulama termasyhur sebagai perawi hadis shahih, yaitu Imam Bukhari.</p>
        <p align="justify">Menurut riwayat, bahwa Ibrahim Al-Ghazi atau sering disebut sebagai Ibrahim Asmaraqandi, datang ke ke Negeri Cempa untuk menyebarkan agama Islam ke negara-negara Asia atas perintah ayahnya yang bernama Syekh Jamaluddin Jumadil Kubra. Di Negeri Cempa beliau berhasil mengajak Raja Cempa masuk Islam, dan akhirnya beliau dikawinkan dengan Putri Raja Cempa yang bernama Dewi Candarawulan. Cempa adalah suatu negeri kecil yang terletak di Kamboja (Indocina), tetapi ada yang mengatakan bahwa negeri itu terletak di daerah Aceh yang sekarang dinamakan Jeumpa.</p>
        <p align="justify">Perkawinannya dengan Dewi Candrawulan itu, Ibrahin Asmaraqandi mempunyai dua orang anak yaitu: Ali Murtala dan Ali Rahmatullah (Raden Rahmat). Adapun Putri Raja Cempa yang bernama Dewi Anarawati atau sering disebut Dwarawati Adiknya Dewi Candrawulan, menjadi Istri Raja Majapahit yaitu Prabu Kertabumi atau dikenal dengan sebutan Prabu Brawijaya.</p>
        <p align="justify">Pada saat itu Kerajaan Majapahit merupakan Kerajaan terbesar di Jawa, namun kondisi kerajaan dalam keadaan yang semarawut baik di dalam maupun di luar, lebih-lebih sepeninggal Mahapatih Gajahmada dan Prabu Hayam Wuruk, Kerajaan menjadi pecah belah, perang saudara tiada henti-hentinya dan rakyat kecil banyak yang menjadi korban akibat perang tesebut.</p>
        <p align="justify">Sementara kerajaan-kerajaan lain yang sudah ditaklukkan Mahapatih Gajahmada sudah banyak yang memisahkan diri baik secara terang-terangan maupun secara diam-diam. Kesetiaan para pembesar kerajaan dan para Adipati sudah mulai luntur, sehingga pajak dan upeti kerajaan banyak yang tidak sampai ke tangan kerajaan, melainkan tertahan dan bertumpuk di kediaman para pembesar dan para adipati.</p>
        <p align="justify">Dengan demikian, tumbuhlah dengan subur kejahatan yang merajalela dimana-mana. Banyak terjadi pencurian dan perampokan. Bahkan banyak terjadi kesatuan-kesatuan prajurit yang melepaskan diri dan beralih menjadi perampok, merampas harta penduduk dan memperkosa para wanita. Sedangkan di kalangan kaum bangsawan dan para pangeran juga terjangkit penyakit moral. Mereka hanyut dalam perjudian dan bermabuk-mabukan. Prabu Brawijaya sangat perihatin melihat keadaan ini, karena ia menyadari jika keadaan ini tidak bisa diatasi akan mengakibatkan hancurnya kerajaan.</p>
        <p align="justify">"<em>Ratu Anarawati juga ikut prihatin melihat keadaan tersebut. Ia ikut merasakan kesedihan hati sang suami yang setiap hari selalu termenung memikirkan bagaimana cara mencari jalan keluar untuk mengatasi masalah tersebut. Untuk itulah Ia mencoba mengajukan saran kepada suaminya, Prabu Brawijaya, yaitu dengan mendatangkan dan menerima Ali Rahmatullah salah seorang kemenakannya yang saat itu tinggal di Negeri Cempa.</em>"</p>
        <p align="justify">Setelah menghaturkan sembah dan mengajukan saran, ternyata Prabu Kertabumi sangat setuju dengan saran yang diajukan istri tercintanya itu. Semua tutur kata dan saran Dewi Anarawati di perhatikan dengan seksama. Dalam pikiran sang Prabu Kertabumi membenarkan apa yang dikatakan oleh istrinya bahwa kalau manusia sudah bermental judi, maka kejahatan seperti perampokan, pencurian dan korupsi akan merajalela, dan bermabuk-amabukan dapat menjadikan manusia lupa diri, bahkan lupa segala-galanya sehingga akan dengan mudah membongkar yang sifatnya rahasia mulai yang sifatnya pribadi sampai kepada rahasia negara.</p>
        <p align="justify">Kemudian Prabu Kertabumi meminta pendapat kepada Istrinya bagaimana jalan keluarnya untuk membrantas semua itu. Maka Dewi Anarawati menghaturkan sembah: Ampunkan hamba Prabu… barangkali tuan berkenan, hamba mempunyai seorang kemenakan yaitu putra dari kakak hamba Dewi Candrawulan yang bernama Ali Rahmatullah, dia ahli dalam memperbaiki moral yang rusak seperti itu.</p>
        <p align="justify">Setelah ada kesepakatan, maka dikirimlah utusan ke negeri Cempa untuk menemui dan meminta Raja Cempa agar berkenan mengirmkan cucunya ke Majapahit. Kedatangan utusan dari Majapahit itu mendapat sambutan yang baik dan Raja Cempa pun tidak keberatan meluluskan permintaan mereka itu. Sayyid Ali Rahmatullah berangkat ke tanah Jawa ditemani oleh ayah dan kakaknya. Mereka bertiga terlebih dahulu mendarat di daerah Tuban. Tetapi sayang sekali sesampainya di Tuban ayahnya, yaitu Sayyaid Ibrahim Asmaraqandi jatuh sakit sampai wafat dan dimakamkan di desa Gesik Harja. Kecamatan Palang, Kabupaten Tuban Jawa Timur.</p>
        <p align="justify">Sedangkan kakak Sayyid Ali Rahmatullah yaitu Sayyid Ali Murtala meneruskan perjalanannya berdakwah keliling daerah nusantara, mulai Madura sampai Bima. Di Bima beliau mendapat sebutan Raja Pandeta Bima, akhirnya beliau berdakwah di Gresik dan mendapat julukan Rade Santri. Beliau wafat dan dimakamkan di Gresik.</p>
        <p align="justify">Adapun Sayyid Ali Rahmatullah juga meneruskan perjalanannya sesuai tujuan semula yaitu Kerajaan Majapahit dan menghadap Prabu Kertabumi sesuai dengan permintaan Ratu Dewi Anarawati. Dalam suatu riwayat disebutkan bahwa ayyid Ali Rahmatullah yang tinggal beberapa waktu di kerajaan Majapahit, kemudian dikawinkan dengan Dewi Candrawati putri Raja Majapahit. Oleh karena itulah beliau sering dipanggil “Raden Rahmat”, karena beliau sebagai menantu Raja Majapahit.</p>
        <p align="justify"><em>Prabu Kertabumi senang dan suka sekali mempunyai menantu Raden Rahmat, karena tutur kata dan sifatnya yang lemah lembut. Maka sang Prabu Kertabumi memberikan hadiah sebidang tanah di Ampeldenta Surabaya.</em></p>
        <p align="justify">Setelah bertempat tinggal di Ampeldenta, langkah pertama yang dilakukan adalah membangun Masjid dan selanjutnya membangun pesantren. Hal itu dilakukan oleh beliau terkait dengan tugasnya sebagai seorang guru yang mengajarkan budi pekerti kepada para pembesar kerajaan dan para Adipati. Sedangkan para anak-anak pejabat dan bangsawan diperintahkan tinggal di pesantren Ampeldenta untuk menekuni belajar budi pekerti kepada Raden Rahmat. Selain itu juga diperkenankan bagi masyarakat awam siapa saja yang ingin belajar.</p>
        <p align="justify" strong=""><strong>Ajaran Raden Rahmat :<br></strong>
          Karena beliau bertempat tinggal dan menetap di Desa Ampeldenta dan menjadi penguasa di sana, maka ia dikenal sebagai <strong>Sunan Ampel</strong>, yang artinya <strong><em>Sesuhunan</em></strong> <strong><em>atau panutan masyarakat</em></strong>. Semakin lama bertambah banyak orang yang menimba ilmu kepada beliau , tidak hanya dari kalangan bangsawan Majapahit saja, bahkan dari kalangan masyarakat umum pun juga tidak kalah banyaknya.</p>
        <p align="justify">Adapun ajaran beliau yang sangat terkenal adalah Falsafah <strong>MO-LIMO</strong> yang artinya “<strong>MO</strong>” adalah <em>ora gelem</em> (tidak mau) dan “<strong>LIMO</strong>” artinya <em>perkarfa lima</em>. Jadi maksud dari kata <strong>MO-LIMO</strong> ialah <em>tidak mau melakukan perkara lima yang dilarang</em>, yaitu:</p>
        <div align="justify">
          <ol>
            <li><strong>Emoh Main</strong> atau tidak mau main (judi)</li>
            <li><strong>Emoh Ngombe</strong> atau tidak mau minum-minuman yang memabukkan</li>
            <li><strong>Emoh Madat</strong> atau tidak mau minum/menghisap candu atau ganja dan sejenisnya</li>
            <li><strong>Emoh Maling</strong>, atau tidak mau mencuri dan korupsi</li>
            <li><strong>Emoh Madon</strong>, Atau tidak mau main perempuan yang bukan istrinya (berzina)</li>
          </ol>
        </div>
        <p align="justify">Setelah nampak hasil dari didikan Raden Rahmat, Prabu Barawijaya merasa sangat gembira sekali. Dan iapun sangat bangga mempunyai menantu seperti Raden Rahmat itu, karena dapat membantu memperbaiki budi pekerti para putra bangsawan. Para Adipati dan para Kawula, sehingga keadaan kerajaan Majapahit menjadi tenang kembali.</p>
        <p align="justify"><em>Sebenarnya Prabu Brawijaya menyukai pada ajaran itu, dalam hati dan pikirannya mengatakan, Islam adalah agama yang baik dan agama yang mempunyai didikan budi pekerti luhur</em>.</p>
        <p align="justify">Oleh karena itu, ketika Raden Rahmat mengumumkan bahwa ajaran itu adalah agama Islam, sang Prabu pun tidak marah. Akan tetapi ketika Raden Rahnat mengajaknya masuk Islam sang Prabu tidak bersedia dan mengatakan sangat berat rasanya untuk meninggalkan agama Budha yang sudah mendarah daging pada dirinya.</p>
        <p align="justify">Walaupun demikian, sang Prabu tetap memberikan kebebasan kepada menantunya itu untuk menyiarkan agama Islam kepada siapa saja, tetapi dengan syarat bagi mereka yang tidak berkenan jangan dipaksa. Raden Rahmat mengatakan kepada Raja, bahwa ia tidak mengislamkan manusia, tetapi hanya sekedar menyampaikan ajaran islam kepada manusia. Maka apa yang dipersyaratkan oleh Raja sudah sesuai dengan ajaran Islam, yaitu manusia bebas memilih agama yang cocok untu menusia itu sendiri. Tidak ada paksaan dalam memilih agama.</p>
        <p align="justify">Setelah Syekh Maulana Malik Ibrahim wafat, sebagai mufti atau pemimpin Islam setanah Jawa, yakni menjadi sesepuh Wali Songo digantikan oleh Sunan Ampel (Raden Rahmat). Keberhasilan Sunan Ampel dalam mendidik seperti misalnya adanya beberapa santri dan putranya yang akhirnya menjadi anggota Wali Songo, seperti Sunan Giri dan Sunan Kalijaga, serta putranya sendiri yaitu Sunan Drajat dan Sunan Bonang.</p>
        <p align="justify"><em>Jasa Sunan Ampel yang besar ialah dengan berdirinya kerajaan Demak Bintara, yang tiada lain beliaulah orang pertama yang mempunyai gagasan untuk itu. Kerajaan Demak adalah merupakan kerajaan Islam pertama di Tanah Jawa yang dipimpin seorang raja yaitu <strong>Raden Patah</strong>, salah seorang murid dan sekaligus menantu Sunan Ampel sendiri. <strong>Raden Patah</strong> juga putra dari Prabu Brawijaya dengan istri dari Cina, yang bernama <strong>Dewi Kian</strong> yang kemudian diberikan kepada Adipati Arya Damar di Palembang, setelah Prabu Brawijaya mendapat istri lagi dari Cempa yaitu Dewi Anarawati bibi Sunan Ampel.</em></p>
        <p align="justify">Oleh sebab itulah, ketika beberapa wali mengusulkan agar Kerajaan Bintara Demak menyerbu Majapahit, Sunan Ampel menyatakan ketidak setujuannya. Karena menurut Sunan Ampel, hal itu akan membuat cemar nama Islam di Jawa khususnya … dan lagi apa kata orang nanti, tidakkah Raden Patah akan menjadi anak yang durhaka, bila sampai terjadi penyerangan dan merebut tahta orang tuanya sendiri.</p>
        <p align="justify">Dibangunnya masjid Demak yang berdiri pada tahun 1477 M itupun Sunan Ampel juga ikut berperan dalam perancangan proyek pembangunannya. Hal itu dapat dilihat pada salah satu diantara empat tiang utama masjid itu diberi nama sesuai dengan pendirinya ialah Sunan Ampel.</p>
        <br><br>
        <table style="width: 100%;">
          <tr>
            <td><p><strong>Total Pengunjung : <?= file_get_contents($filename)?></strong></p></td>
            <td align="right"><a href="sunanbonang.php"><button class="btn btn-info">Baca Sunan Bonang</button></a></td>
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
