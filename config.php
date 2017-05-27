<?php
	class DB {
		
		protected function DBCN() {
			
			global $DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME;
			
			#$DB_HOSTNAME = "192.168.8.100";
			$DB_HOSTNAME = "localhost";
			$DB_NAME = "atlantis_concierge";
			$DB_USERNAME = "root";
			$DB_PASSWORD = "";
					
			$connection = mysql_connect($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD) or die('Could not connect. ' . mysql_error());
			mysql_select_db($DB_NAME,$connection) or die('Could not select database. ' . mysql_error());
		}
	}
	
	class Constants extends DB {
		
		public $PG = '1';
		public $DU = '2';
		public $AZ = '3';
		
	}
?>