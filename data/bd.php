<?php
	class cn {
		private $host = "localhost";
		private $username = "root";
		private $pass = "";
		private $bd = "test_login";
		private $con = false;

		public function On() {
			$this->con = new mysqli($this->host, $this->username, $this->pass, $this->bd);

			if($this->con->connect_error) {
				die("Connection failed: ".$this->con->connect_error);
			}
		}

		public function Of() {
			$this->con->close();
		}

		public function InData($sql) {
			if($this->con->query($sql)) {
				echo "Registered! :D <3 :3";
			} else {
				echo "Failed D: : ".$this->con->error;
			}
		}

		public function GetData($sql) {
			$res = $this->con->query($sql);
			$data = array();

			if($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($data, $row["name"], $row["pass"]);
				}
			} else {
				return false;
			}

			return $data;
		}
	}
?>