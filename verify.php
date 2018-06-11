<?php
  function post_captcha($user_response) {
      $ip = null;
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $ip = $_SERVER['REMOTE_ADDR'];
      }

      $fields = array(
          'secret' => '6LcChj4UAAAAAHWXtbP_Z_TRtG3gN5rm1j6ZYjMG',
          'response' => $user_response,
          'remoteip' => $ip
      );

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $result = curl_exec($ch);
      curl_close($ch);

      return json_decode($result, true);
  }

  // Call the function post_captcha
  $res = post_captcha($_POST['g-recaptcha-response']);

  function mb_ucfirst($string, $encoding) {
    $strlen = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
   }

   function firstChars2Upper($ad){
     $arr = preg_split('/\s+/', $ad);
     foreach ($arr as &$elements){
       $elements = mb_ucfirst(mb_strtolower($elements), "UTF-8");
     }
     unset($elements);

     $retName = implode(" ", $arr);
     return $retName;
	 }

	function smsYolla($ad, $soyad, $numara) {

		header('Content-Type: text/html; charset=utf-8');
		$postUrl='http://panel.vatansms.com/panel/smsgonder1Npost.php';
		$MUSTERİNO='28016'; //5 haneli müşteri numarası
		$KULLANICIADI='****'; // must be entered
		$SIFRE='****'; // must be entered
		$ORGINATOR="IEEE YTU";

		$TUR='Turkce';  // Normal yada Turkce
		//$ZAMAN='2014-04-07 10:00:00';

		$mesaj1= "Merhaba ".$ad." ".$soyad." 13. İltek Günleri'ne kaydınız başarıyla alınmıştır. 20-21-22 Mart 2018 tarihlerinde YTU Elektrik Elektronik Fakültesi'nde görüşmek üzere.";
		$numara1= $numara;

		$xmlString='data=<sms>
		<kno>'. $MUSTERİNO .'</kno>
		<kulad>'. $KULLANICIADI .'</kulad>
		<sifre>'.$SIFRE .'</sifre>
		<gonderen>'.  $ORGINATOR .'</gonderen>
		<mesaj>'. $mesaj1 .'</mesaj>
		<numaralar>'. $numara1.'</numaralar>
		<tur>'. $TUR .'</tur>
		</sms>';

		// Xml içinde aşağıdaki alanlarıda gönderebilirsiniz.
		//<zaman>'. $ZAMAN.'</zaman> İleri tarih için kullanabilirsiniz

		$Veriler =  $xmlString;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $postUrl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $Veriler);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$response = curl_exec($ch);
		curl_close($ch);
	}

  function checkExists($gsm, $mail)
  {
      $servername = "94.73.146.86";
      $username = "***"; // must be entered
      $password = "***"; // must be entered
      $dbname = "etkinlikler1718";

      try {
        $conn = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      $gsm_control = $conn->prepare("SELECT ID FROM iltek WHERE Gsm = :gsm");
      $gsm_control->execute(array("gsm" => $gsm));

      $mail_control = $conn->prepare("SELECT ID FROM iltek WHERE Email = :mail");
      $mail_control->execute(array("mail" => $mail));

      $gsm_mail_control = $conn->prepare("SELECT ID FROM iltek WHERE Gsm = :gsm AND Email = :mail");
      $gsm_mail_control->execute(array("gsm" => $gsm, "mail" => $mail));

      if ($gsm_control->fetch(PDO::FETCH_ASSOC)) {
        if ($gsm_mail_control->fetch(PDO::FETCH_ASSOC)) {
          return 3;
        }
        else {
          return 1;
        }
      }
      else {
        if ($mail_control->fetch(PDO::FETCH_ASSOC)) {
          return 2;
        }
        else {
          return 0;
        }
      }
  }

	function insertData($ad, $soyad, $tc, $gsm, $email, $okul, $bolum, $sinif, $anket, $konaklama, $cekilis, $cv) {
    $servername = "94.73.146.86";
    $username = "***"; // must be entered
    $password = "***"; // must be entered
    $dbname = "etkinlikler1718";

    try {
      $conn = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password);
      //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    $query = $conn->prepare("INSERT INTO iltek
      (Ad, Soyad, Tc, Gsm, Email, Okul, Bolum, Sinif, Anket, Konaklama, Cekilis, Cv)
      VALUES (:ad, :soyad, :tc, :gsm, :email, :okul, :bolum, :sinif, :anket, :konaklama, :cekilis, :cv)");

    if ($query->execute([
      "ad" => $ad,
      "soyad" => $soyad,
      "tc" => $tc,
      "gsm" => $gsm,
      "email" => $email,
      "okul" => $okul,
      "bolum" => $bolum,
      "sinif" => $sinif,
      "anket" => $anket,
      "konaklama" => $konaklama,
			"cekilis" => $cekilis,
      "cv" => $cv,
      ]) === TRUE) {
        //echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

	   }

      $ad = $_POST['ad'];
      $soyad = $_POST['soyad'];
      $tc = $_POST['tc'];
      if ($tc == NULL || $tc == "") {
        $tc='0';
      }
      $gsm = $_POST['gsm'];
    	$gsm = preg_replace(array('/^\+?9?0?/', '/[^0-9,.]/'), '', $gsm);
      $email = $_POST['email'];
      $okul = $_POST['okul'];
      $bolum = $_POST['bolum'];
      $sinif = $_POST['sinif'];
      $anket = $_POST['anket'];
      $konaklama = 'Hayır';
      $cekilis = $_POST['cekilis'];
      $cv = NULL;

      $ad = firstChars2Upper($ad);
      $soyad = firstChars2Upper($soyad);

      $url = 'res.php';

      function checktc($okul, $tc) {
          if($okul != "Yıldız Teknik Üniversitesi" && ($tc == NULL || $tc == "" || $tc == "0")) {
              return 1;
          }else {
              return 0;
          }

      }

      if($res['success']) {
        if (checkExists($gsm, $email) == 0 && checktc($okul, $tc) == 0) {

          smsYolla($ad, $soyad, $gsm);
          $name = $_FILES['cv']['name'];
          $tmp_name = $_FILES['cv']['tmp_name'];
          if(isset($name)) {
            if(!empty($name)) {
              $location = "uploads/";
              if(move_uploaded_file($tmp_name, $location.$gsm.".pdf")) {
                $cv = 1;
              }else {
                $cv = 2;
              }
            }else {
              $cv = 0;
            }
          }
          insertData($ad,$soyad,$tc,$gsm,$email,$okul,$bolum,$sinif,$anket,$konaklama,$cekilis,$cv);
          header( "Location: $url?success" );
        }elseif (checktc($okul, $tc) == 1) {
    		header( "Location: $url?error" );
        }elseif (checkExists($gsm, $email) == 1) {
          header( "Location: $url?gsm_exists" );
        }elseif (checkExists($gsm, $email) == 2) {
          header( "Location: $url?mail_exists" );
        }elseif (checkExists($gsm, $email) == 3) {
          header( "Location: $url?gsm_mail_exists" );
        }
    	}else {
    		header( "Location: $url?error" );
    	}

?>
