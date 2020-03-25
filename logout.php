<?php
session_start();
session_destroy();
?>
<h1>You have been signed out.You will be taken to login page in 5 seconds</h1>
<script type="text/javascript">
	setTimeout(()=>{
		window.location.href="login.php";
	},2000);
</script>