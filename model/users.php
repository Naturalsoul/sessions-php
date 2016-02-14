<?php
	class Users {
		private $name = "";
		private $pass = "";

		public function getName() {
			return $this->name;
		}

		public function getPass() {
			return $this->pass;
		}

		public function setName($name) {
			$this->name = $name;
		}

		public function setPass($pass) {
			$this->pass = $pass;
		}
	}
?>