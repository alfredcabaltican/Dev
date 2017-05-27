<?php
	
	class Concierge extends Constants {

		public function __construct() {
		
			$this->DBCN();
			
		}
		
		public function login($id) {
			
			global $code;
			
			$sqlx = mysql_query("SELECT request_code 
									FROM tbl_guest_inf
								WHERE request_code = '".mysql_real_escape_string($id)."'
					") or die(mysql_error());
				
				$val = mysql_num_rows($sqlx);
				
				if($val > 0) {
					
					$x = mysql_fetch_object($sqlx);
					
					$code = $x->request_code;
					
					echo "response = ok <br />";
					echo "val = ", $code;
					
				} else {
					
					echo 'code not found';
					
				}
				
		}
		
	}

	class Request extends Concierge {
		
		public function xhr() {
		
			switch($_GET['req']) {
			
					case "login": {
						$this->login($_POST['code']);
						break;
					}
					
				default: { }
			}
		}
		
	}
	
?>