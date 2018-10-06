<?php
SESSION_start();
include('connection.php');
//$username=$_POST['username'];
//$password=$_POST['password'];
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');
//echo "hai show";
//$status=$_POST['status'];
 $sql="select * from tbl_login where username='$username'";
 $result=mysqli_query($con,$sql);
 $rowcount=mysqli_num_rows($result);
 if($rowcount!=0)
{
	//echo "found";
	while($row=mysqli_fetch_array($result))
	{
		$dbu_name=$row['username'];
		$dbu_pass=$row['password'];
		$dbu_status=$row['status'];
		$dbu_uname=$row['uname'];
		 $_SESSION['username']=$dbu_name;
         $_SESSION['password']=$dbu_pass;
			   
		
		if($dbu_name==$username && $dbu_pass==$password)
		{
			$_SESSION['username']=$dbu_name;
            $_SESSION['password']=$row['password'];
 		    $_SESSION['username']=$row['username'];
			
			if($dbu_status==0)	
			{
				//$_SESSION['username']=$dbu_name;
				 $_SESSION['status']="admin";
				//$_SESSION['password']=$dbu_pass;
				//$_SESSION['uname']=$dbu_uname;
                         
						 header("location:../safeguard/home.php");
						 //echo "Admin login" ;
			}
			    else if($dbu_status==1)
				{
					$_SESSION['username']=$dbu_uname;
					$_SESSION['status']=$dbu_status;
					header("location:../safeguard/userhome.php");
					
				}
				else if($dbu_type==2)
				{
					$_SESSION['username']=$dbu_name;
					$_SESSION['status']=$dbu_status;
				    header("location:../safeguard/life.php");	
				    }
				    else
				    
				  header("location:../safeguard/login.php");
		}	
			else
			 
            {
			   header("location:../safeguard/login.php?error=wrong password");
	           echo "wrong";
            }
   
	    }
   }

else
{
	echo "not found";	
}
?>
