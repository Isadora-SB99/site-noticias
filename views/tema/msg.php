<div id="msg">
    
<?php
	if(isset($_SESSION['msg'])){
		foreach($_SESSION['msg'] AS $msg){
			echo "<div  class='msg alert alert-".$msg['class']."' role='alert'>"
			.$msg['msg'].
			"
		  </div>";
		}
		unset($_SESSION['msg']);
		echo "<script>$('.msg').hide(3000);</script>";
	}
?>
</div>