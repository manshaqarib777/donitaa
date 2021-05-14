<?php
namespace Spot\Shipment\Classes;

class Functions
{
	public static function console_log($data){
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
	
	public static function url_get_contents($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
		// This is what solved the issue (Accepting gzip encoding)
		curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
	
}

