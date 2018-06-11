<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>13. İltek Günleri Kayıt Formu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/select2.min.css">
    <link rel="stylesheet" href="styles/select2-bootstrap.min.css">
    <link rel="stylesheet" href="styles/bootstrap-social.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="/styles/fontawesome-all.css">

  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>
    <div class="row">
      <div class="container-fluid header">
        <img class="ieeeytu_logo col-lg-2 col-md-2 col-sm-5 col-xs-5" src="images\IEEEYTU_White.png" alt="">
      </div>
    </div>
    <div class="cont-grid">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 frm">
          <form class="" action="verify.php" method="post" enctype="multipart/form-data">
            <img class="iltek_h"src="images\iltekw_h.png" alt="">
            <h3 class="head">20-21-22 Mart 2018</h3>
            <div class="hr"></div>
            <h3 class="head slo" style="margin-bottom:5%">"Teknolojinin gerisinde kalmayın!"</h3>
            <div class="container col-xs-12" style="margin-bottom:5%">
                <div class="row">
                    <a href="#sponsor"><button type="button" class="btn btn-primary col-sm-6 col-md-6 col-xs-6">Sponsorlarımız</button></a>
                    <a href="#contact"><button type="button" class="btn btn-primary col-sm-6 col-md-6 col-xs-6">İletişim</button></a>
                </div>
            </div>
            <div class="form-group">
              <label>Ad</label>
              <input type="text" class="form-control" name="ad" placeholder="Ad" required>
            </div>
            <div class="form-group">
              <label>Soyad</label>
              <input type="text" class="form-control" name="soyad" placeholder="Soyad" required>
            </div>
            <div class="form-group">
              <label>Gsm No</label>
              <input type="number" class="form-control input-fix-mousewheel1" name="gsm" placeholder="Gsm No" required>
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label>Okul</label>
              <select id="okul" name="okul" class="form-control select2" required>
                <option value="" disabled selected>-- Seçiniz --</option>
                <option value="Yıldız Teknik Üniversitesi">Yıldız Teknik Üniversitesi</option>
                <option value="Abant İzzet Baysal Üniversitesi">Abant İzzet Baysal Üniversitesi</option>
                <option value="Abdullah Gül Üniversitesi">Abdullah Gül Üniversitesi</option>
                <option value="Acıbadem Üniversitesi">Acıbadem Üniversitesi</option>
                <option value="Adana Bilim ve Teknoloji Üniversitesi">Adana Bilim ve Teknoloji Üniversitesi</option>
                <option value="Adnan Menderes Üniversitesi">Adnan Menderes Üniversitesi</option>
                <option value="Adıyaman Üniversitesi">Adıyaman Üniversitesi</option>
                <option value="Afyon Kocatepe Üniversitesi">Afyon Kocatepe Üniversitesi</option>
                <option value="Ahi Evran Üniversitesi">Ahi Evran Üniversitesi</option>
                <option value="Ahmet Yesevi Üniversitesi">Ahmet Yesevi Üniversitesi</option>
                <option value="Akdeniz Üniversitesi">Akdeniz Üniversitesi</option>
                <option value="Akev Üniversitesi">Akev Üniversitesi</option>
                <option value="Aksaray Üniversitesi">Aksaray Üniversitesi</option>
                <option value="Alanya Alaaddin Keykubat Üniversitesi">Alanya Alaaddin Keykubat Üniversitesi</option>
                <option value="Alanya Hamdullah Emin Paşa Üniversitesi">Alanya Hamdullah Emin Paşa Üniversitesi</option>
                <option value="Amasya Üniversitesi">Amasya Üniversitesi</option>
                <option value="Anadolu Üniversitesi">Anadolu Üniversitesi</option>
                <option value="Anka Teknoloji Üniversitesi">Anka Teknoloji Üniversitesi</option>
                <option value="Ankara Sosyal Bilimler Üniversitesi">Ankara Sosyal Bilimler Üniversitesi</option>
                <option value="Ankara Üniversitesi">Ankara Üniversitesi</option>
                <option value="Ardahan Üniversitesi">Ardahan Üniversitesi</option>
                <option value="Artvin Çoruh Üniversitesi">Artvin Çoruh Üniversitesi</option>
                <option value="Atatürk Üniversitesi">Atatürk Üniversitesi</option>
                <option value="Atılım Üniversitesi">Atılım Üniversitesi</option>
                <option value="Avrasya Üniversitesi">Avrasya Üniversitesi</option>
                <option value="Ağrı İbrahim Çeçen Üniversitesi">Ağrı İbrahim Çeçen Üniversitesi</option>
                <option value="Bahçeşehir Üniversitesi">Bahçeşehir Üniversitesi</option>
                <option value="Balıkesir Üniversitesi">Balıkesir Üniversitesi</option>
                <option value="Bandırma Onyedi Eylül Üniversitesi">Bandırma Onyedi Eylül Üniversitesi</option>
                <option value="Bartın Üniversitesi">Bartın Üniversitesi</option>
                <option value="Batman Üniversitesi">Batman Üniversitesi</option>
                <option value="Bayburt Üniversitesi">Bayburt Üniversitesi</option>
                <option value="Başkent Üniversitesi">Başkent Üniversitesi</option>
                <option value="Beykent Üniversitesi">Beykent Üniversitesi</option>
                <option value="Bezmiâlem Vakıf Üniversitesi">Bezmiâlem Vakıf Üniversitesi</option>
                <option value="Bilecik Şeyh Edebali Üniversitesi">Bilecik Şeyh Edebali Üniversitesi</option>
                <option value="Bilkent Üniversitesi">Bilkent Üniversitesi</option>
                <option value="Bingöl Üniversitesi">Bingöl Üniversitesi</option>
                <option value="Biruni Üniversitesi">Biruni Üniversitesi</option>
                <option value="Bitlis Eren Üniversitesi">Bitlis Eren Üniversitesi</option>
                <option value="Bozok Üniversitesi">Bozok Üniversitesi</option>
                <option value="Boğaziçi Üniversitesi">Boğaziçi Üniversitesi</option>
                <option value="Bursa Orhangazi Üniversitesi">Bursa Orhangazi Üniversitesi</option>
                <option value="Bursa Teknik Üniversitesi">Bursa Teknik Üniversitesi</option>
                <option value="Bülent Ecevit Üniversitesi">Bülent Ecevit Üniversitesi</option>
                <option value="Canik Başarı Üniversitesi">Canik Başarı Üniversitesi</option>
                <option value="Celal Bayar Üniversitesi">Celal Bayar Üniversitesi</option>
                <option value="Cumhuriyet Üniversitesi">Cumhuriyet Üniversitesi</option>
                <option value="Çanakkale Onsekiz Mart Üniversitesi">Çanakkale Onsekiz Mart Üniversitesi</option>
                <option value="Çankaya Üniversitesi">Çankaya Üniversitesi</option>
                <option value="Çankırı Karatekin Üniversitesi">Çankırı Karatekin Üniversitesi</option>
                <option value="Çağ Üniversitesi">Çağ Üniversitesi</option>
                <option value="Çukurova Üniversitesi">Çukurova Üniversitesi</option>
                <option value="Deniz Harp Okulu">Deniz Harp Okulu</option>
                <option value="Dicle Üniversitesi">Dicle Üniversitesi</option>
                <option value="Dokuz Eylül Üniversitesi">Dokuz Eylül Üniversitesi</option>
                <option value="Doğuş Üniversitesi">Doğuş Üniversitesi</option>
                <option value="Dumlupınar Üniversitesi">Dumlupınar Üniversitesi</option>
                <option value="Düzce Üniversitesi">Düzce Üniversitesi</option>
                <option value="Ege Üniversitesi">Ege Üniversitesi</option>
                <option value="Erciyes Üniversitesi">Erciyes Üniversitesi</option>
                <option value="Erzincan Üniversitesi">Erzincan Üniversitesi</option>
                <option value="Erzurum Teknik Üniversitesi">Erzurum Teknik Üniversitesi</option>
                <option value="Eskişehir Osmangazi Üniversitesi">Eskişehir Osmangazi Üniversitesi</option>
                <option value="Fatih Sultan Mehmet Üniversitesi">Fatih Sultan Mehmet Üniversitesi</option>
                <option value="Fatih Üniversitesi">Fatih Üniversitesi</option>
                <option value="Fırat Üniversitesi">Fırat Üniversitesi</option>
                <option value="Galatasaray Üniversitesi">Galatasaray Üniversitesi</option>
                <option value="Gazi Üniversitesi">Gazi Üniversitesi</option>
                <option value="Gaziantep Üniversitesi">Gaziantep Üniversitesi</option>
                <option value="Gaziosmanpaşa Üniversitesi">Gaziosmanpaşa Üniversitesi</option>
                <option value="Gebze Teknik Üniversitesi">Gebze Teknik Üniversitesi</option>
                <option value="Gedik Üniversitesi">Gedik Üniversitesi</option>
                <option value="Gediz Üniversitesi">Gediz Üniversitesi</option>
                <option value="Giresun Üniversitesi">Giresun Üniversitesi</option>
                <option value="Gülhane Askeri Tıp Akademisi">Gülhane Askeri Tıp Akademisi</option>
                <option value="Gümüşhane Üniversitesi">Gümüşhane Üniversitesi</option>
                <option value="Hacettepe Üniversitesi">Hacettepe Üniversitesi</option>
                <option value="Hakkari Üniversitesi">Hakkari Üniversitesi</option>
                <option value="Haliç Üniversitesi">Haliç Üniversitesi</option>
                <option value="Harran Üniversitesi">Harran Üniversitesi</option>
                <option value="Hasan Kalyoncu Üniversitesi">Hasan Kalyoncu Üniversitesi</option>
                <option value="Hava Harp Okulu">Hava Harp Okulu</option>
                <option value="Hitit Üniversitesi">Hitit Üniversitesi</option>
                <option value="Iğdır Üniversitesi">Iğdır Üniversitesi</option>
                <option value="Işık Üniversitesi">Işık Üniversitesi</option>
                <option value="Kadir Has Üniversitesi">Kadir Has Üniversitesi</option>
                <option value="Kafkas Üniversitesi">Kafkas Üniversitesi</option>
                <option value="Kahramanmaraş Sütçü İmam Üniversitesi">Kahramanmaraş Sütçü İmam Üniversitesi</option>
                <option value="Kanuni Üniversitesi">Kanuni Üniversitesi</option>
                <option value="Kara Harp Okulu">Kara Harp Okulu</option>
                <option value="Karabük Üniversitesi">Karabük Üniversitesi</option>
                <option value="Karadeniz Teknik Üniversitesi">Karadeniz Teknik Üniversitesi</option>
                <option value="Karamanoğlu Mehmetbey Üniversitesi">Karamanoğlu Mehmetbey Üniversitesi</option>
                <option value="Karatay Üniversitesi">Karatay Üniversitesi</option>
                <option value="Kastamonu Üniversitesi">Kastamonu Üniversitesi</option>
                <option value="Kilis 7 Aralık Üniversitesi">Kilis 7 Aralık Üniversitesi</option>
                <option value="Kocaeli Üniversitesi">Kocaeli Üniversitesi</option>
                <option value="Konya Gıda Tarım Üniversitesi">Konya Gıda Tarım Üniversitesi</option>
                <option value="Koç Üniversitesi">Koç Üniversitesi</option>
                <option value="Kırklareli Üniversitesi">Kırklareli Üniversitesi</option>
                <option value="Kırıkkale Üniversitesi">Kırıkkale Üniversitesi</option>
                <option value="MEF Üniversitesi">MEF Üniversitesi</option>
                <option value="Maltepe Üniversitesi">Maltepe Üniversitesi</option>
                <option value="Mardin Artuklu Üniversitesi">Mardin Artuklu Üniversitesi</option>
                <option value="Marmara Üniversitesi">Marmara Üniversitesi</option>
                <option value="Mehmet Akif Ersoy Üniversitesi">Mehmet Akif Ersoy Üniversitesi</option>
                <option value="Melikşah Üniversitesi">Melikşah Üniversitesi</option>
                <option value="Mersin Üniversitesi">Mersin Üniversitesi</option>
                <option value="Mevlana Üniversitesi">Mevlana Üniversitesi</option>
                <option value="Mimar Sinan Güzel Sanatlar Üniversitesi">Mimar Sinan Güzel Sanatlar Üniversitesi</option>
                <option value="Murat Hüdavendigar Üniversitesi">Murat Hüdavendigar Üniversitesi</option>
                <option value="Mustafa Kemal Üniversitesi">Mustafa Kemal Üniversitesi</option>
                <option value="Muğla Sıtkı Koçman Üniversitesi">Muğla Sıtkı Koçman Üniversitesi</option>
                <option value="Muş Alparslan Üniversitesi">Muş Alparslan Üniversitesi</option>
                <option value="Namık Kemal Üniversitesi">Namık Kemal Üniversitesi</option>
                <option value="Necmettin Erbakan Üniversitesi**">Necmettin Erbakan Üniversitesi**</option>
                <option value="Nevşehir Hacı Bektaş Veli Üniversitesi">Nevşehir Hacı Bektaş Veli Üniversitesi</option>
                <option value="Niğde Üniversitesi">Niğde Üniversitesi</option>
                <option value="Nişantaşı Üniversitesi">Nişantaşı Üniversitesi</option>
                <option value="Nuh Naci Yazgan Üniversitesi">Nuh Naci Yazgan Üniversitesi</option>
                <option value="İbn-u Haldun Üniversitesi">İbn-u Haldun Üniversitesi</option>
                <option value="İnönü Üniversitesi">İnönü Üniversitesi</option>
                <option value="İpek Üniversitesi**">İpek Üniversitesi**</option>
                <option value="İskenderun Teknik Üniversitesi">İskenderun Teknik Üniversitesi</option>
                <option value="İstanbul 29 Mayıs Üniversitesi">İstanbul 29 Mayıs Üniversitesi</option>
                <option value="İstanbul Arel Üniversitesi">İstanbul Arel Üniversitesi</option>
                <option value="İstanbul Aydın Üniversitesi">İstanbul Aydın Üniversitesi</option>
                <option value="İstanbul Ayvansaray Üniversitesi">İstanbul Ayvansaray Üniversitesi</option>
                <option value="İstanbul Bilgi Üniversitesi">İstanbul Bilgi Üniversitesi</option>
                <option value="İstanbul Bilim Üniversitesi">İstanbul Bilim Üniversitesi</option>
                <option value="İstanbul Esenyurt Üniversitesi">İstanbul Esenyurt Üniversitesi</option>
                <option value="İstanbul Gelişim Üniversitesi">İstanbul Gelişim Üniversitesi</option>
                <option value="İstanbul Kemerburgaz Üniversitesi">İstanbul Kemerburgaz Üniversitesi</option>
                <option value="İstanbul Kültür Üniversitesi">İstanbul Kültür Üniversitesi</option>
                <option value="İstanbul Medeniyet Üniversitesi">İstanbul Medeniyet Üniversitesi</option>
                <option value="İstanbul Medipol Üniversitesi">İstanbul Medipol Üniversitesi</option>
                <option value="İstanbul Rumeli Üniversitesi">İstanbul Rumeli Üniversitesi</option>
                <option value="İstanbul Sabahattin Zaim Üniversitesi">İstanbul Sabahattin Zaim Üniversitesi</option>
                <option value="İstanbul Teknik Üniversitesi">İstanbul Teknik Üniversitesi</option>
                <option value="İstanbul Ticaret Üniversitesi">İstanbul Ticaret Üniversitesi</option>
                <option value="İstanbul Üniversitesi">İstanbul Üniversitesi</option>
                <option value="İstanbul Şehir Üniversitesi">İstanbul Şehir Üniversitesi</option>
                <option value="İstinye Üniversitesi">İstinye Üniversitesi</option>
                <option value="İzmir Ekonomi Üniversitesi">İzmir Ekonomi Üniversitesi</option>
                <option value="İzmir Kâtip Çelebi Üniversitesi">İzmir Kâtip Çelebi Üniversitesi</option>
                <option value="İzmir Yüksek Teknoloji Enstitüsü">İzmir Yüksek Teknoloji Enstitüsü</option>
                <option value="İzmir Üniversitesi">İzmir Üniversitesi</option>
                <option value="Okan Üniversitesi">Okan Üniversitesi</option>
                <option value="Ondokuz Mayıs Üniversitesi">Ondokuz Mayıs Üniversitesi</option>
                <option value="Ordu Üniversitesi">Ordu Üniversitesi</option>
                <option value="Orta Doğu Teknik Üniversitesi">Orta Doğu Teknik Üniversitesi</option>
                <option value="Osmaniye Korkut Ata Üniversitesi">Osmaniye Korkut Ata Üniversitesi</option>
                <option value="Özyeğin Üniversitesi">Özyeğin Üniversitesi</option>
                <option value="Pamukkale Üniversitesi">Pamukkale Üniversitesi</option>
                <option value="Piri Reis Üniversitesi">Piri Reis Üniversitesi</option>
                <option value="Polis Akademisi">Polis Akademisi</option>
                <option value="Recep Tayyip Erdoğan Üniversitesi">Recep Tayyip Erdoğan Üniversitesi</option>
                <option value="Sabancı Üniversitesi">Sabancı Üniversitesi</option>
                <option value="Sakarya Üniversitesi">Sakarya Üniversitesi</option>
                <option value="Sanko Üniversitesi">Sanko Üniversitesi</option>
                <option value="Sağlık Bilimleri Üniversitesi">Sağlık Bilimleri Üniversitesi</option>
                <option value="Selahattin Eyyubi Üniversitesi">Selahattin Eyyubi Üniversitesi</option>
                <option value="Selçuk Üniversitesi">Selçuk Üniversitesi</option>
                <option value="Siirt Üniversitesi">Siirt Üniversitesi</option>
                <option value="Sinop Üniversitesi">Sinop Üniversitesi</option>
                <option value="Süleyman Demirel Üniversitesi">Süleyman Demirel Üniversitesi</option>
                <option value="Süleyman Şah Üniversitesi">Süleyman Şah Üniversitesi</option>
                <option value="Şifa Üniversitesi">Şifa Üniversitesi</option>
                <option value="Şırnak Üniversitesi">Şırnak Üniversitesi</option>
                <option value="TED Üniversitesi">TED Üniversitesi</option>
                <option value="TOBB Ekonomi ve Teknoloji Üniversitesi">TOBB Ekonomi ve Teknoloji Üniversitesi</option>
                <option value="Toros Üniversitesi">Toros Üniversitesi</option>
                <option value="Trakya Üniversitesi">Trakya Üniversitesi</option>
                <option value="Tunceli Üniversitesi">Tunceli Üniversitesi</option>
                <option value="Turgut Özal Üniversitesi">Turgut Özal Üniversitesi</option>
                <option value="Türk Alman Üniversitesi">Türk Alman Üniversitesi</option>
                <option value="Türk Hava Kurumu Üniversitesi">Türk Hava Kurumu Üniversitesi</option>
                <option value="Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi">Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi</option>
                <option value="Ufuk Üniversitesi">Ufuk Üniversitesi</option>
                <option value="Uludağ Üniversitesi">Uludağ Üniversitesi</option>
                <option value="Uluslararası Antalya Üniversitesi">Uluslararası Antalya Üniversitesi</option>
                <option value="Uşak Üniversitesi">Uşak Üniversitesi</option>
                <option value="Üsküdar Üniversitesi">Üsküdar Üniversitesi</option>
                <option value="Yalova Üniversitesi">Yalova Üniversitesi</option>
                <option value="Yaşar Üniversitesi">Yaşar Üniversitesi</option>
                <option value="Yeditepe Üniversitesi">Yeditepe Üniversitesi</option>
                <option value="Yeni Yüzyıl Üniversitesi">Yeni Yüzyıl Üniversitesi</option>
                <option value="Yüksek İhtisas Üniversitesi**">Yüksek İhtisas Üniversitesi**</option>
                <option value="Yüzüncü Yıl Üniversitesi">Yüzüncü Yıl Üniversitesi</option>
                <option value="Yıldırım Beyazıt Üniversitesi">Yıldırım Beyazıt Üniversitesi</option>
                <option value="Zirve Üniversitesi">Zirve Üniversitesi</option>
                </select>
            </div>
            <div id="tcno" class="form-group">
                <!-- <label>TC Kimlik No (Okul güvenliğine verilecektir. Yildiz Teknik Üniversitesi öğrencileri için zorunlu değildir.)</label>
                <input id="tcno" type="number" class="form-control input-fix-mousewheel1" name="tc" placeholder="Tc Kimlik No" required> -->
            </div>
            <div class="form-group">
              <label>Bölüm</label>
              <select name="bolum" class="form-control select2" required>
                <option value="" disabled selected>-- Seçiniz --</option>
                <option value="Elektrik Mühendisliği">Elektrik Mühendisliği</option>
                <option value="Elektronik ve Haberleşme Mühendisliği">Elektronik ve Haberleşme Müh</option>
                <option value="Matematik Mühendisliği">Matematik Mühendisliği</option>
                <option value="Metalurji ve Malzeme Mühendisliği">Metalurji ve Malzeme Mühendisliği</option>
                <option value="Acil Durum ve Afet Yönetimi">Acil Durum ve Afet Yönetimi</option>
                <option value="Adalet Yüksekokulu">Adalet Yüksekokulu</option>
                <option value="Ağaçişleri Endüstri Mühendisliği">Ağaçişleri Endüstri Mühendisliği</option>
                <option value="Ağız ve Diş Sağlığı">Ağız ve Diş Sağlığı</option>
                <option value="Aile ve Tüketici Bilimleri">Aile ve Tüketici Bilimleri</option>
                <option value="Aktüerya">Aktüerya</option>
                <option value="Alman Dili ve Edebiyatı">Alman Dili ve Edebiyatı</option>
                <option value="Almanca Öğretmenliği">Almanca Öğretmenliği</option>
                <option value="Alternatif Enerji Kaynakları Teknolojisi">Alternatif Enerji Kaynakları Teknolojisi</option>
                <option value="Ameliyathane Hizmetleri">Ameliyathane Hizmetleri</option>
                <option value="Amerikan Kültürü ve Edebiyatı">Amerikan Kültürü ve Edebiyatı</option>
                <option value="Ana Okulu Öğretmenliği">Ana Okulu Öğretmenliği</option>
                <option value="Anestezi">Anestezi</option>
                <option value="Antep Fıstığı, Tarımı ve İşleme Tekn.">Antep Fıstığı, Tarımı ve İşleme Tekn.</option>
                <option value="Antropoloji">Antropoloji</option>
                <option value="Arap Dili ve Edebiyatı">Arap Dili ve Edebiyatı</option>
                <option value="Arıcılık">Arıcılık</option>
                <option value="Arkeoloji">Arkeoloji</option>
                <option value="Arnavutça">Arnavutça</option>
                <option value="Arşivcilik">Arşivcilik</option>
                <option value="Astronomi ve Uzay Bilimleri">Astronomi ve Uzay Bilimleri</option>
                <option value="Aşçılık">Aşçılık</option>
                <option value="Atçılık ve Antrenörlüğü">Atçılık ve Antrenörlüğü</option>
                <option value="Avcılık ve Yaban Hayat">Avcılık ve Yaban Hayat</option>
                <option value="Avrupa Birliği İlişkileri">Avrupa Birliği İlişkileri</option>
                <option value="Ayakkabı Tasarımı ve Üretimi">Ayakkabı Tasarımı ve Üretimi</option>
                <option value="Azerbaycan Dili ve Edebiyatı">Azerbaycan Dili ve Edebiyatı</option>
                <option value="Bağcılık">Bağcılık</option>
                <option value="Bahçe Bitkileri">Bahçe Bitkileri</option>
                <option value="Bahçe Tarımı">Bahçe Tarımı</option>
                <option value="Balıkçılık Teknolojisi">Balıkçılık Teknolojisi</option>
                <option value="Balıkçılık Teknolojisi Müh.">Balıkçılık Teknolojisi Müh.</option>
                <option value="Bankacılık/Finans">Bankacılık/Finans</option>
                <option value="Bankacılık/Sigortacılık">Bankacılık/Sigortacılık</option>
                <option value="Basım ve Yayın Teknolojileri">Basım ve Yayın Teknolojileri</option>
                <option value="Basın-Yayın">Basın-Yayın</option>
                <option value="Batı Dilleri">Batı Dilleri</option>
                <option value="Beden Eğitimi">Beden Eğitimi</option>
                <option value="Beden Eğitimi ve Spor Öğretmenliği">Beden Eğitimi ve Spor Öğretmenliği</option>
                <option value="Beslenme ve Diyetetik">Beslenme ve Diyetetik</option>
                <option value="Beton Teknolojisi">Beton Teknolojisi</option>
                <option value="Bilgi Güvenliği Teknolojisi">Bilgi Güvenliği Teknolojisi</option>
                <option value="Bilgi ve Belge Yönetimi">Bilgi ve Belge Yönetimi</option>
                <option value="Bilgi ve İletişim Teknolojileri â€“ Bilgisayar">Bilgi ve İletişim Teknolojileri â€“ Bilgisayar</option>
                <option value="Bilgisayar Bilimleri">Bilgisayar Bilimleri</option>
                <option value="Bilgisayar Destekli Tasarım ve Animasyon">Bilgisayar Destekli Tasarım ve Animasyon</option>
                <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                <option value="Bilgisayar Operatörlüğü">Bilgisayar Operatörlüğü</option>
                <option value="Bilgisayar Öğretmenliği">Bilgisayar Öğretmenliği</option>
                <option value="Bilgisayar Programcılığı">Bilgisayar Programcılığı</option>
                <option value="Bilgisayar Teknolojisi">Bilgisayar Teknolojisi</option>
                <option value="Bilgisayar Teknolojisi ve Bilişim Sistemleri">Bilgisayar Teknolojisi ve Bilişim Sistemleri</option>
                <option value="Bilgisayar Teknolojisi ve Programlama">Bilgisayar Teknolojisi ve Programlama</option>
                <option value="Bilgisayar ve Öğretim Teknolojileri Eğitimi">Bilgisayar ve Öğretim Teknolojileri Eğitimi</option>
                <option value="Bilgisayar ve Öğretim Teknolojileri Öğr.">Bilgisayar ve Öğretim Teknolojileri Öğr.</option>
                <option value="Bilişim Sistemleri Müh.">Bilişim Sistemleri Müh.</option>
                <option value="Bilişim Sistemleri ve Teknolojileri">Bilişim Sistemleri ve Teknolojileri</option>
                <option value="Bitki Koruma">Bitki Koruma</option>
                <option value="Biyokimya">Biyokimya</option>
                <option value="Biyoloji">Biyoloji</option>
                <option value="Biyoloji Öğretmenliği">Biyoloji Öğretmenliği</option>
                <option value="Biyomedikal Cihaz Teknolojisi">Biyomedikal Cihaz Teknolojisi</option>
                <option value="Biyomedikal Mühendisliği">Biyomedikal Mühendisliği</option>
                <option value="Biyomedikal Teknolojisi">Biyomedikal Teknolojisi</option>
                <option value="Biyomühendislik">Biyomühendislik</option>
                <option value="Biyosistem Müh.">Biyosistem Müh.</option>
                <option value="Boşnakça">Boşnakça</option>
                <option value="Boya Teknolojisi">Boya Teknolojisi</option>
                <option value="Büro Yönetimi">Büro Yönetimi</option>
                <option value="Büyük ve Küçükbaş Hayvan Yetiştiriciliği">Büyük ve Küçükbaş Hayvan Yetiştiriciliği</option>
                <option value="Cevher Hazırlama Müh.">Cevher Hazırlama Müh.</option>
                <option value="Coğrafi Bilgi Sistemleri">Coğrafi Bilgi Sistemleri</option>
                <option value="Coğrafya">Coğrafya</option>
                <option value="Coğrafya Öğretmenliği">Coğrafya Öğretmenliği</option>
                <option value="Çağdaş Türk lehçeleri ve edebiyatı">Çağdaş Türk lehçeleri ve edebiyatı</option>
                <option value="Çağdaş Yunan Dili ve Edebiyatı">Çağdaş Yunan Dili ve Edebiyatı</option>
                <option value="Çalışma Ekonomisi ve Endüstri İlişkileri">Çalışma Ekonomisi ve Endüstri İlişkileri</option>
                <option value="Çay Eksperliği">Çay Eksperliği</option>
                <option value="Çeviribilim">Çeviribilim</option>
                <option value="Çevre Koruma ve Kontrol">Çevre Koruma ve Kontrol</option>
                <option value="Çevre Mühendisliği">Çevre Mühendisliği</option>
                <option value="Çevre Sağlığı">Çevre Sağlığı</option>
                <option value="Çevre Teknolojisi">Çevre Teknolojisi</option>
                <option value="Çevre Temizliği ve Denetimi">Çevre Temizliği ve Denetimi</option>
                <option value="Çin Dili ve Edebiyatı">Çin Dili ve Edebiyatı</option>
                <option value="Çocuk Gelişimi">Çocuk Gelişimi</option>
                <option value="Çocuk Gelişimi ve Eğitimi Öğretmenliği">Çocuk Gelişimi ve Eğitimi Öğretmenliği</option>
                <option value="Deniz Elektroniği">Deniz Elektroniği</option>
                <option value="Deniz Haberleşme">Deniz Haberleşme</option>
                <option value="Deniz Teknolojisi Mühendisliği">Deniz Teknolojisi Mühendisliği</option>
                <option value="Deniz Ulaştırma ve İşletme Mühendisliği">Deniz Ulaştırma ve İşletme Mühendisliği</option>
                <option value="Deniz ve liman İşletme">Deniz ve liman İşletme</option>
                <option value="Denizcilik">Denizcilik</option>
                <option value="Denizcilik İşletmeleri Yönetimi">Denizcilik İşletmeleri Yönetimi</option>
                <option value="Deri Mühendisliği">Deri Mühendisliği</option>
                <option value="Deri Teknolojisi">Deri Teknolojisi</option>
                <option value="Dış Ticaret">Dış Ticaret</option>
                <option value="Dil, Tarih, Coğrafya">Dil, Tarih, Coğrafya</option>
                <option value="Dilbilim">Dilbilim</option>
                <option value="Din Kültürü ve AhlÃ¢k Bilgisi Öğretmenliği">Din Kültürü ve AhlÃ¢k Bilgisi Öğretmenliği</option>
                <option value="Diş Hekimliği">Diş Hekimliği</option>
                <option value="Diş Protez Teknolojisi">Diş Protez Teknolojisi</option>
                <option value="Diyaliz">Diyaliz</option>
                <option value="Doğal Yapı Taşları Teknolojisi">Doğal Yapı Taşları Teknolojisi</option>
                <option value="Doğu Dilleri">Doğu Dilleri</option>
                <option value="Döküm">Döküm</option>
                <option value="Döküm Öğretmenliği">Döküm Öğretmenliği</option>
                <option value="Dünya Dinleri">Dünya Dinleri</option>
                <option value="Ebelik">Ebelik</option>
                <option value="Eczacılık">Eczacılık</option>
                <option value="Eczane Hizmetleri">Eczane Hizmetleri</option>
                <option value="Edebiyat">Edebiyat</option>
                <option value="Edebiyat Programları">Edebiyat Programları</option>
                <option value="Eğitim Bilimleri">Eğitim Bilimleri</option>
                <option value="Ekoloji">Ekoloji</option>
                <option value="Ekonometri">Ekonometri</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Ekonomi â€“ Yönetim Bilimleri Prog.">Ekonomi â€“ Yönetim Bilimleri Prog.</option>
                <option value="Ekonomi Politik ve Toplum Felsefesi">Ekonomi Politik ve Toplum Felsefesi</option>
                <option value="Ekonomi ve Finans">Ekonomi ve Finans</option>
                <option value="Ekonomi ve İdari Bilimler Programları">Ekonomi ve İdari Bilimler Programları</option>
                <option value="El Sanatları Tasarımı ve Üretimi">El Sanatları Tasarımı ve Üretimi</option>
                <option value="Elektrik">Elektrik</option>
                <option value="Elektrik Enerjisi Üretim, İletim ve Dağıtımı">Elektrik Enerjisi Üretim, İletim ve Dağıtımı</option>
                <option value="Elektrik Öğretmenliği">Elektrik Öğretmenliği</option>
                <option value="Elektrik/Elektronik">Elektrik/Elektronik</option>
                <option value="Elektrik-Elektronik Mühendisliği">Elektrik-Elektronik Mühendisliği</option>
                <option value="Elektrik-Elektronik Öğretmenliği">Elektrik-Elektronik Öğretmenliği</option>
                <option value="Elektrikli Cihaz Teknolojisi">Elektrikli Cihaz Teknolojisi</option>
                <option value="Elektronik Haberleşme Teknolojisi">Elektronik Haberleşme Teknolojisi</option>
                <option value="Elektronik Mühendisliği">Elektronik Mühendisliği</option>
                <option value="Elektronik Öğretmenliği">Elektronik Öğretmenliği</option>
                <option value="Elektronik Teknolojisi">Elektronik Teknolojisi</option>
                <option value="Elektronik ve Haberleşme Öğretmenliği">Elektronik ve Haberleşme Öğretmenliği</option>
                <option value="Elektronörofizyoloji">Elektronörofizyoloji</option>
                <option value="Emlak ve Emlak Yönetimi">Emlak ve Emlak Yönetimi</option>
                <option value="Endüstri Mühendisliği">Endüstri Mühendisliği</option>
                <option value="Endüstri Psikolojisi">Endüstri Psikolojisi</option>
                <option value="Endüstri Sistemleri Müh.">Endüstri Sistemleri Müh.</option>
                <option value="Endüstri Ürünleri Tasarımı">Endüstri Ürünleri Tasarımı</option>
                <option value="Endüstriyel Bitkiler Yetiştiriciliği">Endüstriyel Bitkiler Yetiştiriciliği</option>
                <option value="Endüstriyel Cam ve Seramik">Endüstriyel Cam ve Seramik</option>
                <option value="Endüstriyel Elektronik">Endüstriyel Elektronik</option>
                <option value="Endüstriyel Kalıpçılık">Endüstriyel Kalıpçılık</option>
                <option value="Endüstriyel Otomasyon">Endüstriyel Otomasyon</option>
                <option value="Endüstriyel Tasarım">Endüstriyel Tasarım</option>
                <option value="Endüstriyel Teknoloji Öğretmenliği">Endüstriyel Teknoloji Öğretmenliği</option>
                <option value="Enerji Bilimi&amp;Teknolojileri">Enerji Bilimi&amp;Teknolojileri</option>
                <option value="Enerji Sistemleri Müh.">Enerji Sistemleri Müh.</option>
                <option value="Enformasyon Teknolojileri">Enformasyon Teknolojileri</option>
                <option value="Enformatik">Enformatik</option>
                <option value="Ermeni Dili ve Edebiyatı">Ermeni Dili ve Edebiyatı</option>
                <option value="Eser Koruma">Eser Koruma</option>
                <option value="Eski Yunan Dili ve Edebiyatı">Eski Yunan Dili ve Edebiyatı</option>
                <option value="Et ve Ürünleri Teknolojisi">Et ve Ürünleri Teknolojisi</option>
                <option value="Ev İdaresi">Ev İdaresi</option>
                <option value="Ev ve Deney Hayvanları Yetiştiriciliği">Ev ve Deney Hayvanları Yetiştiriciliği</option>
                <option value="Evde Hasta Bakımı">Evde Hasta Bakımı</option>
                <option value="Fars Dili ve Edebiyatı">Fars Dili ve Edebiyatı</option>
                <option value="Felsefe">Felsefe</option>
                <option value="Felsefe Grubu Öğretmenliği">Felsefe Grubu Öğretmenliği</option>
                <option value="Fen Bilgisi Öğretmenliği">Fen Bilgisi Öğretmenliği</option>
                <option value="Fen Bilimleri">Fen Bilimleri</option>
                <option value="Fındık Eksperliği">Fındık Eksperliği</option>
                <option value="Fidan Yetiştiriciliği">Fidan Yetiştiriciliği</option>
                <option value="Finans Matematiği">Finans Matematiği</option>
                <option value="Fizik">Fizik</option>
                <option value="Fizik Mühendisliği">Fizik Mühendisliği</option>
                <option value="Fizik Öğretmenliği">Fizik Öğretmenliği</option>
                <option value="Fizik Tedavi ve Rehabilitasyon">Fizik Tedavi ve Rehabilitasyon</option>
                <option value="Fizyoterapi">Fizyoterapi</option>
                <option value="Fizyoterapi ve Rehabilitasyon">Fizyoterapi ve Rehabilitasyon</option>
                <option value="Fotoğrafçılık ve Kameramanlık">Fotoğrafçılık ve Kameramanlık</option>
                <option value="Fransız Dili ve Edebiyatı">Fransız Dili ve Edebiyatı</option>
                <option value="Fransızca Öğretmenliği">Fransızca Öğretmenliği</option>
                <option value="Gastronomi ve Mutfak Sanatları">Gastronomi ve Mutfak Sanatları</option>
                <option value="Gayrimenkul ve Varlık Değerleme">Gayrimenkul ve Varlık Değerleme</option>
                <option value="Gaz ve Tesisatı Teknolojisi">Gaz ve Tesisatı Teknolojisi</option>
                <option value="Gazetecilik">Gazetecilik</option>
                <option value="Geleneksel El Sanatları">Geleneksel El Sanatları</option>
                <option value="Gemi İnşaatı">Gemi İnşaatı</option>
                <option value="Gemi İnşaatı Mühendisliği">Gemi İnşaatı Mühendisliği</option>
                <option value="Gemi Makineleri">Gemi Makineleri</option>
                <option value="Gemi Makineleri İşletme Mühendisliği">Gemi Makineleri İşletme Mühendisliği</option>
                <option value="Gemi ve Deniz Teknolojisi Müh.">Gemi ve Deniz Teknolojisi Müh.</option>
                <option value="Gemi ve Yat Tasarımı">Gemi ve Yat Tasarımı</option>
                <option value="Genetik ve Biyomühendislik">Genetik ve Biyomühendislik</option>
                <option value="Geomatik Müh.">Geomatik Müh.</option>
                <option value="Geoteknik">Geoteknik</option>
                <option value="Gerontoloji">Gerontoloji</option>
                <option value="Gıda Kalite Kontrol ve Analizi">Gıda Kalite Kontrol ve Analizi</option>
                <option value="Gıda Mühendisliği">Gıda Mühendisliği</option>
                <option value="Gıda Teknolojisi">Gıda Teknolojisi</option>
                <option value="Giyim Üretim Teknolojisi">Giyim Üretim Teknolojisi</option>
                <option value="Görme Engelliler Öğr.">Görme Engelliler Öğr.</option>
                <option value="Görsel İletişim">Görsel İletişim</option>
                <option value="Görsel İletişim Tasarımı">Görsel İletişim Tasarımı</option>
                <option value="Görsel Sanatlar ve İletişim Tasarımı">Görsel Sanatlar ve İletişim Tasarımı</option>
                <option value="Grafik Tasarımı">Grafik Tasarımı</option>
                <option value="Gümrük İşletme">Gümrük İşletme</option>
                <option value="Gürcü Dili ve Edebiyatı">Gürcü Dili ve Edebiyatı</option>
                <option value="Güverte">Güverte</option>
                <option value="Güzel Sanatlar">Güzel Sanatlar</option>
                <option value="Halıcılık ve Kilimcilik">Halıcılık ve Kilimcilik</option>
                <option value="Halkbilim">Halkbilim</option>
                <option value="Halkla İlişkiler">Halkla İlişkiler</option>
                <option value="Halkla İlişkiler ve Reklamcılık">Halkla İlişkiler ve Reklamcılık</option>
                <option value="Halkla ilişkiler ve Tanıtım">Halkla ilişkiler ve Tanıtım</option>
                <option value="Harita Mühendisliği">Harita Mühendisliği</option>
                <option value="Harita ve Kadastro">Harita ve Kadastro</option>
                <option value="Hava Lojistiği">Hava Lojistiği</option>
                <option value="Havacılık Elektrik ve Elektroniği">Havacılık Elektrik ve Elektroniği</option>
                <option value="Havacılık ve Uzay Mühendisliği">Havacılık ve Uzay Mühendisliği</option>
                <option value="Havacılıkta Yer Hizmetleri Yönetimi">Havacılıkta Yer Hizmetleri Yönetimi</option>
                <option value="Hayvansal Üretim">Hayvansal Üretim</option>
                <option value="Hazır Giyim Öğretmenliği">Hazır Giyim Öğretmenliği</option>
                <option value="Hemşirelik/Sağlık M.Y.O">Hemşirelik/Sağlık M.Y.O</option>
                <option value="Hırvat Dili ve Edebiyatı">Hırvat Dili ve Edebiyatı</option>
                <option value="Hidrojeoloji Mühendisliği">Hidrojeoloji Mühendisliği</option>
                <option value="Hindoloji">Hindoloji</option>
                <option value="Hititoloji">Hititoloji</option>
                <option value="Hukuk">Hukuk</option>
                <option value="Hungaroloji">Hungaroloji</option>
                <option value="İbrani Dili ve Edebiyatı">İbrani Dili ve Edebiyatı</option>
                <option value="İç Mimarlık">İç Mimarlık</option>
                <option value="İç Mimarlık ve Çevre Tasarımı">İç Mimarlık ve Çevre Tasarımı</option>
                <option value="İklimlendirme ve Soğutma">İklimlendirme ve Soğutma</option>
                <option value="İkram Hizmetleri">İkram Hizmetleri</option>
                <option value="İktisadi İdari İlimler">İktisadi İdari İlimler</option>
                <option value="İktisat">İktisat</option>
                <option value="İlahiyat">İlahiyat</option>
                <option value="İletişim">İletişim</option>
                <option value="İletişim Bilimleri">İletişim Bilimleri</option>
                <option value="İletişim Sanatları">İletişim Sanatları</option>
                <option value="İletişim Tasarımı">İletişim Tasarımı</option>
                <option value="İlk ve Acil Yardım">İlk ve Acil Yardım</option>
                <option value="İlköğretim Matematik Öğretmenliği">İlköğretim Matematik Öğretmenliği</option>
                <option value="İmalat Mühendisliği">İmalat Mühendisliği</option>
                <option value="İngiliz Dil Bilimi">İngiliz Dil Bilimi</option>
                <option value="İngiliz Dili ve Edebiyatı">İngiliz Dili ve Edebiyatı</option>
                <option value="İngilizce Öğretmenliği">İngilizce Öğretmenliği</option>
                <option value="İnsan Kaynakları Yönetimi">İnsan Kaynakları Yönetimi</option>
                <option value="İnsan ve Toplum Bilimleri">İnsan ve Toplum Bilimleri</option>
                <option value="İnşaat">İnşaat</option>
                <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                <option value="İnternet ve Ağ Teknolojileri">İnternet ve Ağ Teknolojileri</option>
                <option value="İpek Böcekçiliği">İpek Böcekçiliği</option>
                <option value="İspanyol Dili Ve Edebiyatı">İspanyol Dili Ve Edebiyatı</option>
                <option value="İstatistik">İstatistik</option>
                <option value="İstatistik ve Bilgisayar Bilimleri">İstatistik ve Bilgisayar Bilimleri</option>
                <option value="İş Sağlığı ve Güvenliği Teknikerliği">İş Sağlığı ve Güvenliği Teknikerliği</option>
                <option value="İş ve Uğraşı Terapisi">İş ve Uğraşı Terapisi</option>
                <option value="İşitme Engelliler Öğretmenliği">İşitme Engelliler Öğretmenliği</option>
                <option value="İşitme Engelliler Öğretmenliği">İşitme Engelliler Öğretmenliği</option>
                <option value="İşletme">İşletme</option>
                <option value="İşletme â€“ Ekonomi">İşletme â€“ Ekonomi</option>
                <option value="İşletme Bilgi Yönetimi">İşletme Bilgi Yönetimi</option>
                <option value="İşletme Enformatiği">İşletme Enformatiği</option>
                <option value="İşletme Mühendisliği">İşletme Mühendisliği</option>
                <option value="İşletme Öğretmenliği">İşletme Öğretmenliği</option>
                <option value="İşletme Yönetimi">İşletme Yönetimi</option>
                <option value="İtalyan Dili ve Edebiyatı">İtalyan Dili ve Edebiyatı</option>
                <option value="İtfaiyecilik ve Yangın Güvenliği">İtfaiyecilik ve Yangın Güvenliği</option>
                <option value="Japon Dili ve Edebiyatı">Japon Dili ve Edebiyatı</option>
                <option value="Japonca Öğretmenliği">Japonca Öğretmenliği</option>
                <option value="Jeodezi ve Fotogrametri Mühendisliği">Jeodezi ve Fotogrametri Mühendisliği</option>
                <option value="Jeofizik Mühendisliği">Jeofizik Mühendisliği</option>
                <option value="Jeoloji Mühendisliği">Jeoloji Mühendisliği</option>
                <option value="Kağıt Teknolojisi">Kağıt Teknolojisi</option>
                <option value="Kamu Yönetimi">Kamu Yönetimi</option>
                <option value="Karşılaştırmalı Edebiyat">Karşılaştırmalı Edebiyat</option>
                <option value="Kaynak Mühendisliği">Kaynak Mühendisliği</option>
                <option value="Kaynak Teknolojisi">Kaynak Teknolojisi</option>
                <option value="Kentsel Tasarım ve Peyzaj Mim.">Kentsel Tasarım ve Peyzaj Mim.</option>
                <option value="Kimya">Kimya</option>
                <option value="Kimya â€“ Biyoloji Müh.">Kimya â€“ Biyoloji Müh.</option>
                <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                <option value="Kimya Öğretmenliği">Kimya Öğretmenliği</option>
                <option value="Kimya Teknolojisi">Kimya Teknolojisi</option>
                <option value="Kimya ve Süreç Mühendisliği">Kimya ve Süreç Mühendisliği</option>
                <option value="Klasik Arkeoloji">Klasik Arkeoloji</option>
                <option value="Konaklama İşletmeciliği">Konaklama İşletmeciliği</option>
                <option value="Konservatuar">Konservatuar</option>
                <option value="Kontrol Mühendisliği">Kontrol Mühendisliği</option>
                <option value="Kontrol ve Otomasyon Mühendisliği">Kontrol ve Otomasyon Mühendisliği</option>
                <option value="Kontrol ve Otomasyon Teknolojisi">Kontrol ve Otomasyon Teknolojisi</option>
                <option value="Kooperatifçilik">Kooperatifçilik</option>
                <option value="Kore Dili ve Edebiyatı">Kore Dili ve Edebiyatı</option>
                <option value="Kozmetik Teknolojisi">Kozmetik Teknolojisi</option>
                <option value="Kuaförlük ve Güzellik Bilgileri Öğretmenliği">Kuaförlük ve Güzellik Bilgileri Öğretmenliği</option>
                <option value="Kuyumculuk ve Takı Tasarımı">Kuyumculuk ve Takı Tasarımı</option>
                <option value="Kültür Yönetimi">Kültür Yönetimi</option>
                <option value="Kültürel Miras ve Turizm">Kültürel Miras ve Turizm</option>
                <option value="Kümes Hayvanları Yetiştiriciliği">Kümes Hayvanları Yetiştiriciliği</option>
                <option value="Küresel ve Uluslararası İlişkiler">Küresel ve Uluslararası İlişkiler</option>
                <option value="Laborant ve Veteriner Sağlık">Laborant ve Veteriner Sağlık</option>
                <option value="Laboratuvar Teknolojisi">Laboratuvar Teknolojisi</option>
                <option value="Lastik Teknolojisi">Lastik Teknolojisi</option>
                <option value="Latin Dili ve Edebiyatı">Latin Dili ve Edebiyatı</option>
                <option value="Leh Dili ve Edebiyatı">Leh Dili ve Edebiyatı</option>
                <option value="Lojistik Yönetimi">Lojistik Yönetimi</option>
                <option value="Lojistik/Ulaştırma">Lojistik/Ulaştırma</option>
                <option value="Maden Mühendisliği">Maden Mühendisliği</option>
                <option value="Maden Teknolojisi">Maden Teknolojisi</option>
                <option value="Makine">Makine</option>
                <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                <option value="Makine Resim ve Konstrüksiyon">Makine Resim ve Konstrüksiyon</option>
                <option value="Makine Resmi ve Konstrüksiyon Öğretmenliği">Makine Resmi ve Konstrüksiyon Öğretmenliği</option>
                <option value="Makine ve İmalat Mühendisliği">Makine ve İmalat Mühendisliği</option>
                <option value="Maliye">Maliye</option>
                <option value="Malzeme Bilimi ve Mühendisliği">Malzeme Bilimi ve Mühendisliği</option>
                <option value="Mantarcılık">Mantarcılık</option>
                <option value="Marka İletişimi">Marka İletişimi</option>
                <option value="Matbaa">Matbaa</option>
                <option value="Matbaa Öğretmenliği">Matbaa Öğretmenliği</option>
                <option value="Matematik">Matematik</option>
                <option value="Matematik Öğretmenliği">Matematik Öğretmenliği</option>
                <option value="Matematik-Bilgisayar">Matematik-Bilgisayar</option>
                <option value="Medya ve İletişim Sistemleri">Medya ve İletişim Sistemleri</option>
                <option value="Mekatronik">Mekatronik</option>
                <option value="Mekatronik Mühendisliği">Mekatronik Mühendisliği</option>
                <option value="Mekatronik Öğretmenliği">Mekatronik Öğretmenliği</option>
                <option value="Menkul Kıymetler ve Sermaye Piyasası">Menkul Kıymetler ve Sermaye Piyasası</option>
                <option value="Metal Öğretmenliği">Metal Öğretmenliği</option>
                <option value="Metalografi ve Malzeme Muayenesi">Metalografi ve Malzeme Muayenesi</option>
                <option value="Metalurji Mühendisliği">Metalurji Mühendisliği</option>
                <option value="Metalürji">Metalürji</option>
                <option value="Meteoroloji Mühendisliği">Meteoroloji Mühendisliği</option>
                <option value="Meyve ve Sebze İşleme Teknolojisi">Meyve ve Sebze İşleme Teknolojisi</option>
                <option value="Mikrobiyoloji">Mikrobiyoloji</option>
                <option value="Mimari Dekoratif Sanatlar">Mimari Dekoratif Sanatlar</option>
                <option value="Mimari Restorasyon">Mimari Restorasyon</option>
                <option value="Mimarlık">Mimarlık</option>
                <option value="Mobil Teknolojileri">Mobil Teknolojileri</option>
                <option value="Mobilya ve Dekorasyon">Mobilya ve Dekorasyon</option>
                <option value="Mobilya ve Dekorasyon Öğretmenliği">Mobilya ve Dekorasyon Öğretmenliği</option>
                <option value="Moda ve Tekstil Tasarımı">Moda ve Tekstil Tasarımı</option>
                <option value="Moleküler Biyoloji ve Genetik">Moleküler Biyoloji ve Genetik</option>
                <option value="Motor">Motor</option>
                <option value="Muhasebe">Muhasebe</option>
                <option value="Muhasebe Bilgi Sistemleri">Muhasebe Bilgi Sistemleri</option>
                <option value="Muhasebe ve Denetim">Muhasebe ve Denetim</option>
                <option value="Muhasebe ve Finans Yönetimi">Muhasebe ve Finans Yönetimi</option>
                <option value="Muhasebe ve Finansman Öğretmenliği">Muhasebe ve Finansman Öğretmenliği</option>
                <option value="Muhasebe ve Vergi Uygulamaları">Muhasebe ve Vergi Uygulamaları</option>
                <option value="Mühendislik Programları">Mühendislik Programları</option>
                <option value="Mühendislik ve Doğa Bilimleri Prog.">Mühendislik ve Doğa Bilimleri Prog.</option>
                <option value="Mühendislik Yönetimi">Mühendislik Yönetimi</option>
                <option value="Mütercim Tercümanlık">Mütercim Tercümanlık</option>
                <option value="Nakış Öğretmenliği">Nakış Öğretmenliği</option>
                <option value="Nanoteknoloji Mühendisliği">Nanoteknoloji Mühendisliği</option>
                <option value="Nükleer Enerji Mühendisliği">Nükleer Enerji Mühendisliği</option>
                <option value="Odyometri">Odyometri</option>
                <option value="Okul Öncesi Eğitim Öğretmenliği">Okul Öncesi Eğitim Öğretmenliği</option>
                <option value="Optisyenlik">Optisyenlik</option>
                <option value="Organik Tarım">Organik Tarım</option>
                <option value="Orman">Orman</option>
                <option value="Orman Endüstrisi Mühendisliği">Orman Endüstrisi Mühendisliği</option>
                <option value="Orman Mühendisliği">Orman Mühendisliği</option>
                <option value="Ormancılık ve Orman Ürünleri">Ormancılık ve Orman Ürünleri</option>
                <option value="Orta Öğretim Fen ve Matematik Alanları Eğitimi">Orta Öğretim Fen ve Matematik Alanları Eğitimi</option>
                <option value="Ortopedik Protez ve Ortez">Ortopedik Protez ve Ortez</option>
                <option value="Otel Yöneticiliği">Otel Yöneticiliği</option>
                <option value="Oto Boya ve Karoseri">Oto Boya ve Karoseri</option>
                <option value="Otobüs Kaptanlığı">Otobüs Kaptanlığı</option>
                <option value="Otomasyon">Otomasyon</option>
                <option value="Otomotiv">Otomotiv</option>
                <option value="Otomotiv Mühendisliği">Otomotiv Mühendisliği</option>
                <option value="Otomotiv Öğretmenliği">Otomotiv Öğretmenliği</option>
                <option value="Otomotiv Teknolojisi">Otomotiv Teknolojisi</option>
                <option value="Otopsi Yardımcılığı">Otopsi Yardımcılığı</option>
                <option value="Özel Eğitim Öğr.">Özel Eğitim Öğr.</option>
                <option value="Özel Güvenlik ve Koruma">Özel Güvenlik ve Koruma</option>
                <option value="Pancar Yetiştiriciliği ve Şeker Teknolojisi">Pancar Yetiştiriciliği ve Şeker Teknolojisi</option>
                <option value="Patoloji Laboratuvar Teknikleri">Patoloji Laboratuvar Teknikleri</option>
                <option value="Pazarlama">Pazarlama</option>
                <option value="Perakende Satış ve Mağaza Yönetimi">Perakende Satış ve Mağaza Yönetimi</option>
                <option value="Perfüzyon Teknikleri">Perfüzyon Teknikleri</option>
                <option value="Petrol Mühendisliği">Petrol Mühendisliği</option>
                <option value="Peyzaj Mimarlığı">Peyzaj Mimarlığı</option>
                <option value="Peyzaj ve Süs Bitkileri">Peyzaj ve Süs Bitkileri</option>
                <option value="Polimer Müh.">Polimer Müh.</option>
                <option value="Posta Hizmetleri">Posta Hizmetleri</option>
                <option value="Prehistorya">Prehistorya</option>
                <option value="Psikoloji">Psikoloji</option>
                <option value="Psikolojik Danışmanlık ve Rehberlik">Psikolojik Danışmanlık ve Rehberlik</option>
                <option value="Radyo ve Televizyon Programcılığı">Radyo ve Televizyon Programcılığı</option>
                <option value="Radyo, Televizyon ve Sinema">Radyo, Televizyon ve Sinema</option>
                <option value="Radyoloji">Radyoloji</option>
                <option value="Radyoterapi">Radyoterapi</option>
                <option value="Rafineri ve Petro Kimya">Rafineri ve Petro Kimya</option>
                <option value="Raylı Sistemler Elektrik Elektronik Teknolojisi">Raylı Sistemler Elektrik Elektronik Teknolojisi</option>
                <option value="Raylı Sistemler İşletmeciliği">Raylı Sistemler İşletmeciliği</option>
                <option value="Raylı Sistemler Makinistlik">Raylı Sistemler Makinistlik</option>
                <option value="Raylı Sistemler Yol Teknolojisi">Raylı Sistemler Yol Teknolojisi</option>
                <option value="Reklamcılık">Reklamcılık</option>
                <option value="Rekreasyon">Rekreasyon</option>
                <option value="Rekreasyon Yönetimi">Rekreasyon Yönetimi</option>
                <option value="Resim Öğretmenliği">Resim Öğretmenliği</option>
                <option value="Roman Dili ve Edebiyatı">Roman Dili ve Edebiyatı</option>
                <option value="Rus Dili">Rus Dili</option>
                <option value="Rus Dili ve Edebiyatı">Rus Dili ve Edebiyatı</option>
                <option value="Saç Bakımı ve Güzellik Hiz.">Saç Bakımı ve Güzellik Hiz.</option>
                <option value="Sağlık Kurumları İşletmeciliği">Sağlık Kurumları İşletmeciliği</option>
                <option value="Sahne ve Dekor Tasarımı">Sahne ve Dekor Tasarımı</option>
                <option value="Sahne ve Gösteri Sanatları Teknolojisi">Sahne ve Gösteri Sanatları Teknolojisi</option>
                <option value="Sahne ve Gösteri Sanatları Yönetimi">Sahne ve Gösteri Sanatları Yönetimi</option>
                <option value="Sanat Tarihi">Sanat Tarihi</option>
                <option value="Sanat ve Sosyal Bilimler Prog.">Sanat ve Sosyal Bilimler Prog.</option>
                <option value="Sanat ve Tasarım">Sanat ve Tasarım</option>
                <option value="Sanat Yönetimi">Sanat Yönetimi</option>
                <option value="Sebze Üretimi">Sebze Üretimi</option>
                <option value="Seracılık">Seracılık</option>
                <option value="Seramik">Seramik</option>
                <option value="Seramik Mühendisliği">Seramik Mühendisliği</option>
                <option value="Seramik, Cam ve Çinicilik">Seramik, Cam ve Çinicilik</option>
                <option value="Sermaye Piyasası Denetim ve Derecelendirme">Sermaye Piyasası Denetim ve Derecelendirme</option>
                <option value="Seyahat İşletmeciliği">Seyahat İşletmeciliği</option>
                <option value="Seyahat İşletmeciliği ve Turizm Rehberliği">Seyahat İşletmeciliği ve Turizm Rehberliği</option>
                <option value="Sınıf Öğretmenliği">Sınıf Öğretmenliği</option>
                <option value="Sigortacılık">Sigortacılık</option>
                <option value="Sigortacılık ve Risk Yönetimi">Sigortacılık ve Risk Yönetimi</option>
                <option value="Sinema ve Televizyon">Sinema ve Televizyon</option>
                <option value="Sinoloji">Sinoloji</option>
                <option value="Sivil Hava Ulaştırma İşletmeciliği">Sivil Hava Ulaştırma İşletmeciliği</option>
                <option value="Sivil Havacılık">Sivil Havacılık</option>
                <option value="Sivil Havacılık Kabin Hizmetleri">Sivil Havacılık Kabin Hizmetleri</option>
                <option value="Sivil Savunma ve İtfaiyecilik">Sivil Savunma ve İtfaiyecilik</option>
                <option value="Siyasal Bilgiler">Siyasal Bilgiler</option>
                <option value="Siyaset Bilimi">Siyaset Bilimi</option>
                <option value="Siyaset Bilimi ve Kamu Yönetimi">Siyaset Bilimi ve Kamu Yönetimi</option>
                <option value="Siyaset Bilimi ve Uluslararası İlişkiler">Siyaset Bilimi ve Uluslararası İlişkiler</option>
                <option value="Sondaj Teknolojisi">Sondaj Teknolojisi</option>
                <option value="Sosyal Bilgiler Öğretmenliği">Sosyal Bilgiler Öğretmenliği</option>
                <option value="Sosyal Bilimler">Sosyal Bilimler</option>
                <option value="Sosyal Güvenlik">Sosyal Güvenlik</option>
                <option value="Sosyal Hizmetler">Sosyal Hizmetler</option>
                <option value="Sosyoloji">Sosyoloji</option>
                <option value="Spor Yönetimi">Spor Yönetimi</option>
                <option value="Su Ürünleri">Su Ürünleri</option>
                <option value="Su Ürünleri Müh.">Su Ürünleri Müh.</option>
                <option value="Sualtı Teknolojisi">Sualtı Teknolojisi</option>
                <option value="Subtropik İklim Bitkileri">Subtropik İklim Bitkileri</option>
                <option value="Sulama Teknolojisi">Sulama Teknolojisi</option>
                <option value="Sümeroloji">Sümeroloji</option>
                <option value="Süs Bitkileri">Süs Bitkileri</option>
                <option value="Süt Teknolojisi">Süt Teknolojisi</option>
                <option value="Süt ve Ürünleri">Süt ve Ürünleri</option>
                <option value="Süt ve Ürünleri Teknolojisi">Süt ve Ürünleri Teknolojisi</option>
                <option value="Şarap Üretim Teknolojisi">Şarap Üretim Teknolojisi</option>
                <option value="Şehir Planlama">Şehir Planlama</option>
                <option value="Tahribatsız Muayene">Tahribatsız Muayene</option>
                <option value="Takı Tasarımı">Takı Tasarımı</option>
                <option value="Talaşlı Üretim Öğretmenliği">Talaşlı Üretim Öğretmenliği</option>
                <option value="Tarım Ekonomisi">Tarım Ekonomisi</option>
                <option value="Tarım İşletmeciliği">Tarım İşletmeciliği</option>
                <option value="Tarım Makineleri">Tarım Makineleri</option>
                <option value="Tarımsal Biyoteknoloji">Tarımsal Biyoteknoloji</option>
                <option value="Tarımsal Ürünler Muhafaza ve Depolama Teknolojisi">Tarımsal Ürünler Muhafaza ve Depolama Teknolojisi</option>
                <option value="Tarımsal Yapılar ve Sulama">Tarımsal Yapılar ve Sulama</option>
                <option value="Tarih">Tarih</option>
                <option value="Tarih Öğretmenliği">Tarih Öğretmenliği</option>
                <option value="Tarla Bitkileri">Tarla Bitkileri</option>
                <option value="Tasarım ve Konstrüksiyon Öğretmenliği">Tasarım ve Konstrüksiyon Öğretmenliği</option>
                <option value="Teknik Eğitim">Teknik Eğitim</option>
                <option value="Tekstil">Tekstil</option>
                <option value="Tekstil Geliştirme ve Pazarlama">Tekstil Geliştirme ve Pazarlama</option>
                <option value="Tekstil Mühendisliği">Tekstil Mühendisliği</option>
                <option value="Tekstil Öğretmenliği">Tekstil Öğretmenliği</option>
                <option value="Tekstil Tasarım">Tekstil Tasarım</option>
                <option value="Tekstil Teknolojisi">Tekstil Teknolojisi</option>
                <option value="Tesisat Öğretmenliği">Tesisat Öğretmenliği</option>
                <option value="Tıbbi Biyolojik Bilimler">Tıbbi Biyolojik Bilimler</option>
                <option value="Tıbbi Dökümantasyon ve Sekreterlik">Tıbbi Dökümantasyon ve Sekreterlik</option>
                <option value="Tıbbi Görüntüleme Teknikleri">Tıbbi Görüntüleme Teknikleri</option>
                <option value="Tıbbi Laboratuar">Tıbbi Laboratuar</option>
                <option value="Tıbbi Tanıtım ve Pazarlama">Tıbbi Tanıtım ve Pazarlama</option>
                <option value="Tıbbi ve Aromatik Bitkiler">Tıbbi ve Aromatik Bitkiler</option>
                <option value="Tıp">Tıp</option>
                <option value="Tıp Mühendisliği">Tıp Mühendisliği</option>
                <option value="Tohumculuk">Tohumculuk</option>
                <option value="Toksikoloji">Toksikoloji</option>
                <option value="Toprak Bilimi ve Bitki Besleme">Toprak Bilimi ve Bitki Besleme</option>
                <option value="Trikotaj Öğretmenliği">Trikotaj Öğretmenliği</option>
                <option value="Turizm Animasyonu">Turizm Animasyonu</option>
                <option value="Turizm İşletmeciliği">Turizm İşletmeciliği</option>
                <option value="Turizm Rehberliği">Turizm Rehberliği</option>
                <option value="Turizm ve Otel İşletmeciliği">Turizm ve Otel İşletmeciliği</option>
                <option value="Turizm ve Seyahat Hizmetleri">Turizm ve Seyahat Hizmetleri</option>
                <option value="Turizm, Otelcilik">Turizm, Otelcilik</option>
                <option value="Turunçgil Tarımı ve İşleme Teknolojisi">Turunçgil Tarımı ve İşleme Teknolojisi</option>
                <option value="Türk Dili ve Edebiyatı">Türk Dili ve Edebiyatı</option>
                <option value="Türk Dili ve Edebiyatı Öğretmenliği">Türk Dili ve Edebiyatı Öğretmenliği</option>
                <option value="Türk Halkbilimi">Türk Halkbilimi</option>
                <option value="Türkçe Öğretmenliği">Türkçe Öğretmenliği</option>
                <option value="Tütün Tarımı ve İşleme Teknolojisi">Tütün Tarımı ve İşleme Teknolojisi</option>
                <option value="Uçak Bakım Elektrik Elektronik">Uçak Bakım Elektrik Elektronik</option>
                <option value="Uçak Bakım Gövde Motor">Uçak Bakım Gövde Motor</option>
                <option value="Uçak Bakım Lojistik İşletmeleri">Uçak Bakım Lojistik İşletmeleri</option>
                <option value="Uçak Mühendisliği">Uçak Mühendisliği</option>
                <option value="Uçak Teknolojisi">Uçak Teknolojisi</option>
                <option value="Ulaştırma ve Lojistik">Ulaştırma ve Lojistik</option>
                <option value="Ulaştırma ve Trafik Hizmetleri">Ulaştırma ve Trafik Hizmetleri</option>
                <option value="Uluslararası Finans">Uluslararası Finans</option>
                <option value="Uluslararası Girişimcilik">Uluslararası Girişimcilik</option>
                <option value="Uluslararası İlişkiler">Uluslararası İlişkiler</option>
                <option value="Uluslararası Lojistik">Uluslararası Lojistik</option>
                <option value="Uluslararası Ticaret">Uluslararası Ticaret</option>
                <option value="Uluslararası Ticaret ve İşletmecilik">Uluslararası Ticaret ve İşletmecilik</option>
                <option value="Uluslararası Ticaret ve Lojistik">Uluslararası Ticaret ve Lojistik</option>
                <option value="Uluslararası Ticaret ve Pazarlama">Uluslararası Ticaret ve Pazarlama</option>
                <option value="Urdu Dili ve Edebiyatı">Urdu Dili ve Edebiyatı</option>
                <option value="Uygulamalı İngilizce-Türkçe Çevirmenlik">Uygulamalı İngilizce-Türkçe Çevirmenlik</option>
                <option value="Uygulamalı İspanyolca ve Çevirmenlik">Uygulamalı İspanyolca ve Çevirmenlik</option>
                <option value="Uygulamalı Matematik">Uygulamalı Matematik</option>
                <option value="Uygulamalı Matematik ve Bilgisayar">Uygulamalı Matematik ve Bilgisayar</option>
                <option value="Uygulamalı Rusça ve Çevirmenlik">Uygulamalı Rusça ve Çevirmenlik</option>
                <option value="Uzay Mühendisliği">Uzay Mühendisliği</option>
                <option value="Üretimde Kalite Kontrol">Üretimde Kalite Kontrol</option>
                <option value="Üstün Zekalılar Öğr.">Üstün Zekalılar Öğr.</option>
                <option value="Veteriner">Veteriner</option>
                <option value="Yağ Endüstrisi">Yağ Endüstrisi</option>
                <option value="Yapı Denetimi">Yapı Denetimi</option>
                <option value="Yapı Ressamlığı">Yapı Ressamlığı</option>
                <option value="Yapı Ressamlığı Öğretmenliği">Yapı Ressamlığı Öğretmenliği</option>
                <option value="Yapı Tesisat Teknolojisi">Yapı Tesisat Teknolojisi</option>
                <option value="Yapı Yalıtım Teknolojisi">Yapı Yalıtım Teknolojisi</option>
                <option value="Yaşlı Bakımı">Yaşlı Bakımı</option>
                <option value="Yat İşletme ve Yönetimi">Yat İşletme ve Yönetimi</option>
                <option value="Yaygın Din Öğretimi ve Uygulamaları">Yaygın Din Öğretimi ve Uygulamaları</option>
                <option value="Yazılım Mühendisliği">Yazılım Mühendisliği</option>
                <option value="Yeni Medya">Yeni Medya</option>
                <option value="Yerel Yönetimler">Yerel Yönetimler</option>
                <option value="Yiyecek İçecek İşletmeciliği">Yiyecek İçecek İşletmeciliği</option>
                <option value="Yönetim Bilişim Sistemleri (MIS)">Yönetim Bilişim Sistemleri (MIS)</option>
                <option value="Yunan Dili ve Edebiyatı">Yunan Dili ve Edebiyatı</option>
                <option value="Zeytincilik ve Zeytin İşleme Teknolojisi">Zeytincilik ve Zeytin İşleme Teknolojisi</option>
                <option value="Zihinsel Engelliler Öğretmenliği">Zihinsel Engelliler Öğretmenliği</option>
                <option value="Ziraat">Ziraat</option>
                <option value="Ziraat Mühendisliği">Ziraat Mühendisliği</option>
                <option value="Zooteknik">Zooteknik</option>
              </select>
            </div>
            <div class="form-group noselect">
              <label>Sınıf</label>
              <select name="sinif" class="form-control" required>
                <option>Hazırlık</option>
                <option>1. Sınıf</option>
                <option>2. Sınıf</option>
                <option>3. Sınıf</option>
                <option>4. Sınıf</option>
                <option>Mezun veya Lisansüstü</option>
              </select>
            </div>
            <div class="form-group">
              <label>Etkinliği nereden duydunuz?</label>
              <select name="anket" class="form-control" required>
                <option>Sıkı takipçisiyim.</option>
                <option>Arkadaşımdan duydum.</option>
                <option>Okuldaki afişlerden gördüm.</option>
                <option>Sosyal medyadan gördüm.</option>
                <option>Stantlar sayesinde.</option>
                <option>Diğer.</option>
              </select>
            </div>
            <div class="form-group">
              <label id="cbtext">Etkinlikte gerçekleşecek olan Yurtdışı Dil Eğitimi ve Work and Travel çekilişine katılmak istiyorum. İletişim bilgilerimin ilgili sponsorlarla paylaşılmasını kabul ediyorum.</label>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-success perm">
                  <input class="form-control" type="radio" name="cekilis" value="Evet" autocomplete="off" required>
                  Evet <span class="glyphicon glyphicon-ok" id="o1"></span>
                </label>
                <label class="btn btn-danger perm">
                  <input class="form-control" type="radio" name="cekilis" value="Hayır" autocomplete="off" required>
                  Hayır <span class="glyphicon glyphicon-remove" id="o2"></span>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label>CV</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <label class="btn btn-success btn-file" for="fileInput">
                    <div class="input required">
                      <input id="fileInput" name="cv" type="file" accept="application/pdf">
                    </div> Dosya seç
                  </label>
                </span>
                <span class="file-input-label"></span>
              </div>
              <span class="help-block">(İsteğe bağlı. Sadece PDF uzantılı dosyalar yüklenmektedir.)</span>
            </div>

            <div class="g-recaptcha" data-sitekey="***"></div> <!-- must be entered -->
            <br/>
            <div class="btn-group col-md-12 col-xs-12 " style="padding:0;">
              <button type="submit" class="btn btn-success submit">Kayit ol</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- sponsor -->
    <div class="container spoCont text-center" id="sponsor">
        <h1>SPONSORLARIMIZ</h1>
          <div class="container spoField col-xs-12">
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Platin Sponsor</h3>
                  <a target="_blank" href="http://www.huawei.com/tr/"><img class="col-md-6 col-md-offset-3 col-xs-12"src="images/platin/huawei_white.png" alt="" ></a>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Altın Sponsor</h3>
                  <a target="_blank" href="https://www.siemens.com/tr/tr/home.html"><img class="col-md-6 col-md-offset-3 col-xs-12"src="images/altin/siemens2.png" alt=""></a>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Gümüş Sponsorlar</h3>
                  <div class="container col-xs-12">
                      <div class="row">
                          <a target="_blank" href="http://www.garantiteknoloji.com.tr/"><img class="gr3" src="images/gumus/garantiteknoloji.jpg" alt=""></a>
                          <a target="_blank" href="http://www.havelsan.com.tr/"><img class="gr3" src="images/gumus/havelsan.png" alt=""></a>
                          <a target="_blank" href="http://www.intertech.com.tr/tr/default.aspx"><img class="gr3" src="images/gumus/intertech.png" alt=""></a>
                      </div>
                  </div>
                  <div class="container col-xs-12 col-md-offset-2">
                      <div class="row">
                          <a target="_blank" href="https://www.mercedes-benz.com.tr/passengercars.html"><img class="gr3" src="images/gumus/mercedes.png" alt=""></a>
                          <a target="_blank" href="https://www.yapikredi.com.tr/"><img class="gr3" src="images/gumus/yapikredi.png" alt=""></a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Destek Sponsorları</h3>
                  <div class="container col-xs-12">
                      <div class="row">
                          <a target="_blank" href="https://www.adesso.de/en/adesso-turkey/index.jsp"><img class="gr3" src="images/destek/Adesso.png" alt=""></a>
                          <a target="_blank" href="http://www.airties.com.tr/"><img class="gr3" src="images/destek/airties2.png" alt=""></a>
                          <a target="_blank" href="https://www.etiya.com/"><img class="gr3" src="images/destek/etiya.jpg" alt=""></a>
                      </div>
                  </div>
                  <div class="container col-xs-12 col-md-offset-2" style="margin-top:2%">
                      <div class="row">
                          <a target="_blank" href="https://www.piworks.net/"><img class="gr3" src="images/destek/piworks3.jpg" alt=""></a>
                          <a target="_blank" href="https://www.atlascopco.com/tr-tr"><img class="gr3" src="images/destek/atlas.png" alt=""></a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Fuar Sponsorları</h3>
                    <div class="container col-xs-12">
                        <div class="row">
                            <a target="_blank" href="http://www.visratek.com/tr"><img class="gr3" src="images/fuar/visratek.png" alt=""></a>
                            <a target="_blank" href="http://www.altinay.com/tr/"><img class="gr3" src="images/fuar/altinay.jpg" alt=""></a>
                            <a target="_blank" href="http://www.andasis.com/"><img class="gr3" src="images/fuar/andasis.png" alt=""></a>
                        </div>
                    </div>
                    <div class="container col-xs-12" style="margin-top:2%">
                        <div class="row">
                            <a target="_blank" href="http://www.bites.com.tr/tr/"><img class="gr3" src="images/fuar/bites.png" alt=""></a>
                            <a target="_blank" href="http://www.gumush.com.tr/"><img class="gr3" src="images/fuar/gumush.png" alt=""></a>
                            <a target="_blank" href="http://www.sage.tubitak.gov.tr/"><img class="gr3" src="images/fuar/sage.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="container col-xs-12" style="margin-top:2%">
                            <img class="col-md-4 col-xs-12 col-md-offset-4" src="images/fuar/bilgem.jpg" alt="">
                    </div>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Ürün Sponsorları</h3>
                  <div class="container col-xs-12">
                      <div class="row">
                          <img class="gr3" src="images/urun/assa.png" alt="">
                          <img class="gr3" src="images/urun/penguen.png" alt="">
                          <img class="gr3" src="images/urun/uniball.jpg" alt="">
                      </div>

                  </div>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Basın Sponsorları</h3>
                  <div class="container col-xs-12">
                      <div class="row">
                          <a target="_blank" href="http://www.webtekno.com/"><img class="gr3" src="images/basin/webtekno.png" alt=""></a>
                          <a target="_blank" href="https://www.ytukampus.com/"><img class="gr3" src="images/basin/ytukampuswhite.png" alt=""></a>
                          <a target="_blank" href="https://www.donanimhaber.com/"><img class="gr3" src="images/basin/dh.png" alt=""></a>
                      </div>
                  </div>
                  <div class="container col-xs-12" style="margin-top:2%">
                      <div class="row">
                          <a target="_blank" href="https://www.bundlehaber.com/"><img class="gr3" src="images/basin/bundle.jpg" alt=""></a>
                          <a target="_blank" href="http://oyungezer.com.tr/"><img class="gr3" src="images/basin/oyungezer.png" alt=""></a>
                          <a target="_blank" href="https://www.fizikist.com/"><img class="gr3" src="images/basin/fizikist.jpg" alt=""></a>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 rws" id="">
                  <h3 class="header">Uluslarasi Dil Okulu Sponsoru</h3>
                  <div class="container col-xs-12">
                      <div class="row">
                          <a target="_blank" href="http://westline.com.tr/tr/index.php"><img class="col-md-4 col-xs-12 col-md-offset-4" src="images/westline.jpg" alt=""></a>
                      </div>
                  </div>
                  <img src="" alt="">
              </div>

          </div>
      </div>



    <div class="container-fluid footer" id="contact">
    	<div class="row">
        <div class="span8 col-md-2 col-md-offset-1 col-sm-6 col-xs12">
          <iframe style="padding-left:1%;padding-right:1%;" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12039.39073478664!2d28.8899402!3d41.0285882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9b6432391eba941!2sY%C4%B1ld%C4%B1z+Teknik+%C3%9Cniversitesi+Elektrik+Elektronik+Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1509795046983" width="100%" height="175" frameborder="0"></iframe>
        </div>
          <div class="span4 col-md-3 col-sm-6 col-xs12">
        		<address>
        			<strong>Adres</strong><br>
              <hr class="hrf">
        			Yıldız Teknik Üniversitesi Davutpaşa Kampüsü<br>
              Elektrik Elektronik Fakültesi<br>
              Kongre Merkezi<br>
        			Esenler/Davutpasa<br>
        			İstanbul<br>
        			Türkiye<br>
        			34220<br>
        		</address>
        	</div>
          <div class="col-md-5">
            <strong>İletişim</strong>
            <hr class="hrf">
          </div>
          <div class="span3 col-md-2 col-xs12">
            <br>
            Yiğit İplikçi<br>
            13.İltek Günleri Koordinatörü<br>
            <span class="glyphicon glyphicon-envelope" style="margin-top: 3.5%;">
              <a class="mail" href="mailto:yigitiplikci@ieeeytu.com?Subject=13.İLTEK%20Günleri%20Hakkında" target="_top">yigitiplikci@ieeeytu.com</a>
          </div>
          <div class="span3 col-md-4 col-xs12">
            <br>
            Seren Temurlenk<br>
            13.İltek Günleri Koordinatörü<br>
            <span class="glyphicon glyphicon-envelope" style="margin-top: 2%;">
              <a class="mail" href="mailto:serentemurlenk@ieeeytu.com?Subject=13.İLTEK%20Günleri%20Hakkında" target="_top">serentemurlenk@ieeeytu.com</a>
          </div>
          <a class="btn-soc"></a>
          <div class="col-md-5 socm">
            <strong>Sosyal Medya</strong>
            <hr class="hrf">
            <a class="btn btn-social-icon btn-facebook" target="_blank" href="https://facebook.com/iltekgunleri">
                <span class="fa fa-facebook"></span>
             </a>
             <a class="btn btn-social-icon btn-instagram" target="_blank" href="https://instagram.com/iltekgunleri">
               <i class="fa fa-instagram" aria-hidden="true"></i>
             </a>
            <a class="btn btn-social-icon btn-twitter" target="_blank" href="https://twitter.com/iltekgunleri">
               <span class="fa fa-twitter"></span>
             </a>
            <a class="btn btn-social-icon btn-linkedin" target="_blank" href="https://www.linkedin.com/in/iltek-g%C3%BCnleri-9b1a8712a/">
                <span class="fa fa-linkedin"></span>
             </a>
          </div>
        </div>

    </div>

    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/select2.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $( "#okul" ).change(function() {
          if($("#okul").val() != 'Yıldız Teknik Üniversitesi') {
            $('#tcno').html('<label>TC Kimlik No </label><input id="tcno" type="number" class="form-control input-fix-mousewheel1" name="tc" placeholder="Tc Kimlik No" required><span class="help-block">(Okul güvenliğine verilecektir.)</span>');
        }else {
            $('#tcno').html('');
          }
        })
      $(document).ready(function() {

        $('.select2').select2({
          theme: 'bootstrap'
        });
        $('.select2-container').attr('style', '100%');

        $('.input-fix-mousewheel1').on('focus', function (e) {
    			$(this).on('mousewheel.disableScroll', function (e) {
      			   e.preventDefault();
    			    })
      	  }).on('blur', function (e) {
          $(this).off('mousewheel.disableScroll')
         });

      })
    </script>
    <script type="text/javascript">
        $(".gr3").addClass("col-md-4 col-xs-12");

      $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
        });

        $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
          console.log("test");
          var input_label = $(this).closest('.input-group').find('.file-input-label'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input_label.length ) {
            input_label.text(log);
          } else {
            if( log ) alert(log);
          }
        });
      });

      window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

    </script>
  </body>
</html>
