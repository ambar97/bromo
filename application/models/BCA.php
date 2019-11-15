<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BCA extends CI_Model {


 /**

 * @author Fendrik Nurul Jadid <fendrik1311@gmail.com>

 * @since v.1.0

 **/


   public function get($url="",$method="GET",$parameter="")
   {

         $ci =& get_instance();
         date_default_timezone_set('UTC');
         $timestamp = strval(time()-strtotime('1970-01-01 00:00:00'));
         $token = "jk5ZTkyYzgtYzAzNC00YmNhLWE0OTAtYWM4NGI0YTZiMjQxOjNmYWIwNGI1LWM4ODctNGZmMi05OGNkLTE1YjJmYTcyNzA1NA==";
         $var1 = $method.":".$url.":".$token.":".strtolower(hash("sha256",$parameter,FALSE)).":".$timestamp;
         $secretKey = "djajdhajdha";
         $signature = hash_hmac('sha256', $var1, $secretKey, true);
         die($var1);
         $curl = curl_init();
         curl_setopt_array($curl, array(

           CURLOPT_URL => "https://sandbox.bca.co.id/",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 30,
           CURLOPT_POSTFIELDS => $parameter,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => $method,
           CURLOPT_HTTPHEADER => array(
             "Authorization: Bearer ".$token,
             "Content-Type: application/json",
             "Origin : sunsetview.id",
             "X-BCA-KEY: Basic ".$secretKey,
             "X-BCA-Signature: ".$encodedSignature,
             "X-BCA-timestamp: ".$timestamp,
             "ChannelID : ",
             "CredentialID : "
           ),
         ));

         $response = curl_exec($curl);
         $err = curl_error($curl);

         curl_close($curl);

         if ($err) {
           return "cURL Error #:" . $err;
         } else {
           return $response;
         }
  }
}
