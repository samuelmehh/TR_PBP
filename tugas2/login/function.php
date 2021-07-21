<?php
	require_once "config.php";
function select_data($user="") {
		global $con;

		$hasil = array();

		if ($user != "") $sql = "SELECT * FROM tbl_data WHERE NIM = :user";
		else $sql = "SELECT * FROM tbl_data";

		try {
            $stmt = $con->prepare($sql);
            if ($user != "") $stmt->bindValue(':user', $user, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
        		$rs = $stmt->fetchAll();
        		
        		if ($rs != null) {
        			$i = 0;
        			foreach ($rs as $val) {
        				$hasil[$i]['nim'] = $val['NIM'];
        				$hasil[$i]['nama'] = $val['Nama'];
						$hasil[$i]['ipk'] = $val['IPK'];
						$hasil[$i]['asal'] = $val['Asal'];
						$i++;
        			}
        		}
        	}
        } catch(Exception $e) {
			echo 'Error select_data : '.$e->getMessage();
		}

		return $hasil;
	}
?>