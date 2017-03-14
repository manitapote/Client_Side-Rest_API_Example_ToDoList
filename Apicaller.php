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
		$ch = curl_init();
		if(!$ch)
		{
			echo "curl not initialized";
		}	
		
		curl_setopt($ch, CURLOPT_URL, $this->_api_url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);

		curl_setopt($ch, CURLOPT_POST, 1);
		
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		
		$result = curl_exec($ch);
		//print_r($result);
		$result = @json_decode($result,true);
		//$info =  curl_getinfo($ch);
		echo json_last_error();
		curl_close($ch);
		
		$r = json_encode($result['data']);
		if($params['action'] == "read")
		{
			header("Location: read_result.php?data=$r");
		}

		if ($params['action'] == "update")
		{
			header("Location: update.php?data=$r");
		}


		if($result === null && json_last_error()== JSON_ERROR_SYNTAX)
		{
			throw new Exception("Request was not correct");
		}
		if ($result['success'] === false)
		{
			throw new Exception($result['errormsg']);
		}
		return $result;
	}
}

?>