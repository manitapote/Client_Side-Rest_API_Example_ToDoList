<?php
//echo 'true apicaller';

ini_set('display_errors',1);
error_reporting(-1);

class ApiCaller
{
	public $_app_id;
	private $_app_key;
	private $_api_url;
	

	public function __construct($app_id, $app_key, $api_url)
	{
		$this->_app_id = $app_id;
		$this->_app_key = $app_key;
		$this->_api_url = $api_url;
		//echo $this->_app_id;
	}

	public function sendRequest($request_params)
	{
		//echo "</br></br>request params</br></br>";
		//print_r($request_params);
		
		$params1 = array();
		$params1['app_key'] = $this->_app_key;
		$params1['app_id'] = $this->_app_id;
		$params= array_merge($params1,$request_params);
		echo "</br></br>from apicaller</br></br>";
		$ch = curl_init();
		if(!$ch)
		{
			echo "curl not initialized";
		}	
		
		curl_setopt($ch, CURLOPT_URL, $this->_api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
		curl_setopt($ch, CURLOPT_POST,count($params));

		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$result = curl_exec($ch);

		$info =  curl_getinfo($ch);
		curl_close($ch);
		$result = json_decode($result);

		if(!isset($result)) 
		{
			throw new Exception("Request was not correct");
		}
		if ($result->success == false)
		{
			throw new Exception($result['errormsg']);
		}
		return $result;
	}
}

?>