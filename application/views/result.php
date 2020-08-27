<?php 
$session = $this->session->userdata('nama');
if($session){
	echo $session. "Server1";
}else{
	echo "kosong";
}

?>
