<?php

namespace AppBundle;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class Utils
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/[\W_]/', '-', $text);

        // trim and lowercase
        $text = strtolower($text);

        return $text;
    }

    static public function limitText($string, $limitCount=50, $limitChar='...' ){
        // strip tags to avoid breaking any html
        $string = strip_tags($string);
        if (strlen($string) > $limitCount) {

            // truncate string
            $stringCut = substr($string, 0, $limitCount);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= $limitChar;
        }
        return $string;
    }

    static public function randomChars($digits)
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $digits; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    static function encrypt($string)
    {
      $output = 0;
      $encrypt_method = 'AES-256-CBC';
      $secret_key = '375BABC02EEBFBCC43FCBA330321D38125F1670CEFE1A43C22A30A086D1C3474';
      $secret_iv = '25A568F8521ED95BF7E198A1B72711C0';

      $key = hash('sha256', $secret_key);
      $iv = substr(hash('sha256', $secret_iv), 0, 16);
      $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
      $output = base64_encode($output);
      return $output;
    }

    static function decrypt($string) {
      $output = 0;
      $encrypt_method = 'AES-256-CBC';
      $secret_key = '375BABC02EEBFBCC43FCBA330321D38125F1670CEFE1A43C22A30A086D1C3474';
      $secret_iv = '25A568F8521ED95BF7E198A1B72711C0';

      $key = hash('sha256', $secret_key);
      $iv = substr(hash('sha256', $secret_iv), 0, 16);
      $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
      return $output;
    }

    static function columnSort($unsorted, $column) {
      $sorted = $unsorted;
      for ($i=0; $i < sizeof($sorted)-1; $i++) {
        for ($j=0; $j<sizeof($sorted)-1-$i; $j++)
          if ($sorted[$j][$column] > $sorted[$j+1][$column]) {
            $tmp = $sorted[$j];
            $sorted[$j] = $sorted[$j+1];
            $sorted[$j+1] = $tmp;
        }
      }
      return $sorted;
  }

  static function truncate($text, $length)
  {
   $length = abs((int)$length);
   if(strlen($text) > $length) {
      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   }
   return($text);
  }

  static function sanitize($string, $force_lowercase = true, $anal = false)
  {
      $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
          "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
          "â€”", "â€“", ",", "<", ".", ">", "/", "?");
      $clean = trim(str_replace($strip, "", strip_tags($string)));
      $clean = preg_replace('/\s+/', "-", $clean);
      $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;

      return ($force_lowercase) ?
          (function_exists('mb_strtolower')) ?
              mb_strtolower($clean, 'UTF-8') :
              strtolower($clean) :
          $clean;
  }

  static function bronzeSerial()
  {
    $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $serial = '';

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $serial .= $tokens[rand(0, 35)];
        }

        if ($i < 3) {
            $serial .= '-';
        }
    }
    return $serial;
  }

  static function curl($url)
  {
      $ch = curl_init();  // Initialising cURL
      curl_setopt($ch, CURLOPT_URL, $url);    // Setting cURL's URL option with the $url variable passed into the function
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Setting cURL's option to return the webpage data
      $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
      curl_close($ch);    // Closing cURL
      return $data;   // Returning the data from the function
  }

  static function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }

  public function releaseFile($file,$name)
  {
    $response = new BinaryFileResponse($file);
    //$response->headers->set ('Content-Type', 'text/plain');
    $response->setContentDisposition (ResponseHeaderBag::DISPOSITION_ATTACHMENT, $name);
    return $response;
  }

  public function getVisitorDetails()
  {
    $ip='0.0.0.0';
    $ip=$_SERVER['REMOTE_ADDR'];
    return json_decode(file_get_contents("http://ipinfo.io/$ip/json"));
  }

  public function browser_name()
  {

      $ua = $_SERVER['HTTP_USER_AGENT'];

      if (
          strpos(strtolower($ua), 'safari/') &&
          strpos(strtolower($ua), 'opr/')
      ) {
          // Opera
          $res = 'Opera';
      } elseif (
          strpos(strtolower($ua), 'safari/') &&
          strpos(strtolower($ua), 'chrome/')
      ) {
          // Chrome
          $res = 'Chrome';
      } elseif (
          strpos(strtolower($ua), 'msie') ||
          strpos(strtolower($ua), 'trident/')
      ) {
          // Internet Explorer
          $res = 'Internet Explorer';
      } elseif (strpos(strtolower($ua), 'firefox/')) {
          // Firefox
          $res = 'Firefox';
      } elseif (
          strpos(strtolower($ua), 'safari/') &&
          (strpos(strtolower($ua), 'opr/') === false) &&
          (strpos(strtolower($ua), 'chrome/') === false)
      ) {
          // Safari
          $res = 'Safari';
      } else {
          // Out of data
          $res = false;
      }

      return $res;
  }

  public function checkPayment($member)
  {
    $companies = $member->getCompanies();

    if(count($companies) > 0)
    {
      $needs_payment = true;
      foreach($companies as $company)
      {
        if(!$company->getCurrentSubscriptionStatus() == 'Expired')
        {
          $needs_payment = false;
        }
      }
    }
    return $needs_payment;
  }
}
