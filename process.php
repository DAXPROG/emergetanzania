
<?php 
	ini_set('error_reporting',~E_ALL &~ E_NOTICE &~ E_WARNING &~ E_USER_NOTICE &~ E_DEPRECATED &~ E_USER_DEPRECATED);
	//include("_connect.php");
	if(isset($_POST["donationfeedback"]))
    { 
		//echo 'admissionInfo';
    	
		/* 
			$name = $_POST["name"];
			$email=$_POST["email"];
			$amount=$_POST["amount"];
			
			
			$sql = "insert into donation(Name,Email,Donated_Amount)VALUES('$name','$email','$amount')";
			$result = mysqli_query($sql);
			if($result){
			echo 'Submitted'; 	
			}else{
				echo 'QAUERY NOT EXECUTED!!!';
			} */
		          
  }else if(isset($_POST["contactusform"])){
	        
			//$name=$_POST["name"];
			//$phone=$_POST["phone"];
			//$email = $_POST["email"];
			//$message=$_POST["sms"];
			//$date=Date('d-m-y');
			
			//echo $message.', '.$name.', '.$phone.', '.$email.', '.$date;
			//$sql = "insert into message(Sender_Name,Phone,Sender_Email,Message,Submited_On)VALUES('$name','$phone','$email','$message','$date')";
			//$result = mysqli_query($sql);
			//if($result){
			//echo 'Submitted'; 	
			//}else{
				//echo 'QAUERY NOT EXECUTED!!!';
			//} 
  }else if (isset($_POST["changepassword"])){
	        /* $username = $_POST["username"];
			$oldpassword=$_POST["oldpassword"];
			$newpassword=$_POST["newpassword"];
			
			$sql1 = select * from Admin where Password==$password and Username==$username;
			$result1 = mysqli_query($sql1);
			if($result1){
				//mysql_assoc
				$sql = "update table Admin set password=$newpassword where User_Name=$username";
				$result = mysqli_query($sql);
				if($result){
				echo 'Submitted'; 	
				}else{
				echo 'QAUERY NOT EXECUTED!!!';
				}
			}else{ echo'Query not executed';} */
			
  }else if(isset($_POST["adminlogin"])){
	 /*  $username=$_POST["username"];
	  $password=$_POST["password"];
	  echo 'Hello '.$username; */
  }else{echo 'id not set';}

?>