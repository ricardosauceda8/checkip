<?php

class CheckIP{


	function getUserIP()
	{
    // Get real visitor IP behind CloudFlare network
		if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
			$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
			$_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
		}

		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

		if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
		}else{
			$ip = $remote;
		}

		return $ip;
	}

	function validateIP($inicial, $page, $user_ip){
		if(is_numeric($inicial)){
			//echo "Es un número<br>";
			//echo $user_ip; // Output IP address [Ex: 177.87.193.134]

			require_once 'controller/conn/connection.php';
			$connect = new connection();
			$connection=$connect->connections();

			$ip_counter = 1;
			$ip_date = date("Y-m-d H:i:s");
			$ip_status = 1;
			$ip_page_visit = $page; 
			$ip_number = "";

			/**
			* CON ESTE IF, EVITAMOS QUE EL CÓDIGO SE ACTIVE CON NUESTRAS IP's de prueba en
			* localhost y nuestras IP's personales
			*/

			//if($user_ip != "1.1.1.19"){

			$sql_select_ip = "SELECT * FROM checkip WHERE ip_number ='".$user_ip."' AND ip_status = 1";
			//echo "sql: " .$sql_select_ip . "<br>";
			$result = $connection->query($sql_select_ip);

			if ($result->num_rows > 0) {
                // output data of each row
				while($row = $result->fetch_assoc()) {
					//echo "IP: " . $row["ip_number"]. " | # de visitas: " . $row["ip_counter"]. " | page " . $row["ip_page_visit"]. "<br>";
					$ip_number = $row["ip_number"];
					$ip_counter =  $row["ip_counter"]+1;
				}

				if($ip_counter<=3){
					$sqlUpdate = "UPDATE checkip SET ip_counter='$ip_counter' WHERE ip_number='".$ip_number."'";

					if ($connection->query($sqlUpdate) === TRUE) {
                    //echo "Record updated successfully";
                    //header('Location: https://www.paginaswebpremium.com.mx/');exit;
					} else {
						//echo "Error updating record: " . $connection->error;
					}

				}else{
					//header('Location: https://www.tecnicosenrefrigeracioncdmx.com');exit;
				}

			} else {

				//echo "0 results";

				$sql = "INSERT INTO checkip (ip_number, ip_counter, ip_date, ip_status, ip_page_visit) VALUES ('".$user_ip."','".$ip_counter."','".$ip_date."','".$ip_status."','".$ip_page_visit."');";

                //echo ''.$sql;
				$jsondata = array();

				if ($connection->query($sql)===true) {
					$message= "Tu información ha sido enviada correctamente. En breve uno de nuestros asesores se pondrá en contacto contigo.<br>";
					$jsondata['success'] = true;
					$jsondata['message'] = $message;
					//echo "msj:" . $message;
				} else {
					$message= "Hemos tenido un problema al guardar un información, contacta al servicio técnico.<br>";
					$jsondata['success'] = false;
					$jsondata['message'] = $message;
					//echo "msj:" . $message;
				}

			}

			//}else{
				//echo "IP DE PRUEBA :)";
			//}

		}else{
			//echo "NO ES UNA IP";
		}
	}



}


?>