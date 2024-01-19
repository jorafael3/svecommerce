<?php

/**
 * Esta clase es para realizar la cotizacion del envio de un producto con la api de cotizar de servientrega.
 */
class Functions
{
  public const _SERVIENTREGA_API_EC_TEST = 'http://181.39.87.158:8021/api/';
  public const _SERVIENTREGA_API_EC_LIVE = 'https://swservicli.servientrega.com.ec:5052/api/';

  public const _SERVIENTREGA_API_PDF_EC_TEST = 'http://181.39.87.158:7777/api/';
  public const _SERVIENTREGA_API_PDF_EC_LIVE = 'https://swservicli.servientrega.com.ec:5001/api/';


  public static function getDataCitysEc($user, $pass)
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => self::getUrlApi() . 'ciudades/%5B\'' . $user . '\',\'' . $pass . '\'%5D',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
  }

  public static function isTestMode()
  {
    return Configuration::get("SERVI_TESTMODE") == 1;
  }

  public static function getUrlApi()
  {
    if (self::isTestMode()) {

      return self::_SERVIENTREGA_API_EC_TEST;
    }
    return self::_SERVIENTREGA_API_EC_LIVE;
  }

  public static function getUrlApiPdf()
  {
    if (self::isTestMode()) {

      return self::_SERVIENTREGA_API_PDF_EC_TEST;
    }
    return self::_SERVIENTREGA_API_PDF_EC_LIVE;
  }

  public static function getTraking($data)
  {
    $client = new SoapClient("https://servientrega-ecuadorsf.appsiscore.com:443/app/ws/server_trazabilidad.php");
    return $client->createLabel($data);


  }


  public static function get_generate_guia_ec($user, $pass, $guia)
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => self::getUrlApiPdf() . 'GuiasWeb/%5B\''.$guia.'\',\''.$user.'\',\''.$pass.'\',%20\'1\'%5D',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);

  }

  public static function post_generate_guia_pe($data)
  {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => self::getUrlApi() . 'guiawebs/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
  }
}
