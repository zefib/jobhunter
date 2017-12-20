<?php
	if (isset($_POST["Username"])) {
		include 'conn.php';

		$GetUsername=$_POST["Username"];
		$GetPass=$_POST["InputPassword"];

		$query = $conn->prepare("SELECT * FROM user WHERE username = ?");
		$query->execute(array($GetUsername));

		$Results = $query->fetch();
      if($query->rowCount() == 0){
      		//echo "user_error(): username not found";
        	header("Location:index.php");
      } else {
          if($GetPass <> $Results['Password']){
          	//echo "user_error(): wrong password";
          	header("Location:index.php");
          } else {
          	session_start();
            $_SESSION['JHUserid'] = $Results['id'];
            $_SESSION['JHUserType'] = $Results['type'];

            $GetId=$Results['id'];
			
			header("Location:index.php");
          }
      }
	}else{
		header("Location:index.php");
	}
?>
