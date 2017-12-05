<?php
include_once('lib/db.inc.php');
	
	global $db;
	$db = ierg4210_DB();
	$q1 = $db->prepare("SELECT email from users");
	$q1->execute();
	$result = $q1;
	$e = 0;
	foreach($result as $row)
	{
	
	if($_POST['email']==$row['email'])
	$e = 1;
    }	


	if(!$e)
		echo ' No such user';

	
	
	else{
	$q = $db->prepare("SELECT email,password,salt,flag from users where email = ?");
	$q->execute(array($_POST['email']));
	
					
		foreach($q as $row)
		{				
		$saltpassword=hash_hmac('sha1',$_POST['password'],$row['salt']);
		
		if($row["password"]==$saltpassword)
		{
			if ($row["flag"]=="admin")
		   header('Location:admin.html', true , 302);
		   
		   else 
			   header('Location:123.php', true , 302);
		   
		   
		   
		   exit();
		}
		
		if($row["password"]!=$saltpassword && $_POST['email']==$row['email'])
			echo 'wrong password';
		
		

		}
		
          

	}
	
/*$exp =time() + 3600*24*3;
			$token = array(
			'em'=>$row['email'],
			'exp'=>$exp;
			'k'=>hash_hmac('sha1',$exp.$row['password'], $row['salt'])
			setcookie('t4210', json_encode($token),
			$exp,'','',false,true);
			$_SESSION['t4210'] = $token;
			return true;*/
?>
