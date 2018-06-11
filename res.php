<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>13.İltek Günleri Kayıt Formu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/res.css">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/images/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/images/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/images/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/images/favicon/mstile-310x310.png" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">
      <div class="container-fluid header">
        <img class="ieeeytu_logo col-lg-2 col-md-2 col-sm-5 col-xs-5" src="images\IEEEYTU_White.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="frm">
              <img class="iltek_h"src="images\iltekw_h.png" alt="">
            <?php
            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $query = parse_url($url, PHP_URL_QUERY);
                if ($query == 'error' || $query == '') {
                    echo '<p class="center msg">Oops.. <br>Bir şeyler ters gitti. <br> Yanlış bir sayfada olabilirsiniz veya form sayfasındaki tüm alanları eksiksiz(reCAPTCHA dahil) doldurduğunuzdan emin olun. </p>';
                    echo '<button type="submit" id="goBack" class="btn btn-danger center-block" name="button">Geri Don</button>';
                } else if($query == 'success') {
                    echo '<p class="center msg">Kaydınız tamamlanmıştır.</p>';
                    echo '<button type="submit" id="newReg" class="form-control btn btn-success center-block" name="button">Yeni Kayıt</button>';
                } else if($query == 'gsm_exists') {
                    echo '<p class="center msg">Girdiğiniz telefon numarası ile daha önce kayıt yapılmıştır.  <br> Lütfen telefon numaranızı kontrol ediniz.</p>';
                    echo '<button type="submit" id="goBack" class="form-control btn btn-danger center-block" name="button">Geri Don</button>';
                } else if($query == 'mail_exists') {
                    echo '<p class="center msg">Girdiğiniz email adresi ile daha önce kayıt yapılmıştır. <br> Lütfen email adresinizi kontrol ediniz </p>';
                    echo '<button type="submit" id="goBack" class="form-control btn btn-danger center-block" name="button">Geri Don</button>';
                } else if($query == 'gsm_mail_exists') {
                    echo '<p class="center msg">Girdiğiniz telefon numarası ve email adresi ile daha önce kayıt yapılmıştır. <br> Lütfen telefon numaranızı ve email adresinizi kontrol ediniz </p>';
                    echo '<button type="submit" id="goBack" class="form-control btn btn-danger center-block" name="button">Geri Don</button>';
                }
             ?>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#goBack').click(function() {
            location.href = 'index.php';
        })
        $('#newReg').click(function() {
            location.href = 'index.php';
        })
      })
    </script>
  </body>
</html>
