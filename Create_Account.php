﻿<html >
<head>
<title>Online Library</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function showHint(str)
{
	if (str.length==0)
	  {
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+str + "&p=name",true);
	xmlhttp.send();
}

function emailCheck(str)
{
	if (str.length==0)
	  {
	  document.getElementById("emailHint").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("emailHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+str + "&p=email",true);
	xmlhttp.send();
}
function passwordCheck(pwd, pwd2)
{
		if (pwd.length==0)
		  {
		  document.getElementById("passwordHint").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("passwordHint").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","check_user_name.php?p1="+pwd+ "&p2="+ pwd2 + "&p=password",true);
		xmlhttp.send();
}

function mobileCheck(str)
{
	if (str.length==0)
	  {
	  document.getElementById("mobileHint").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("mobileHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+ str + "&p=mobile",true);
	xmlhttp.send();
}
</script>
</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu" style="background: #007ACC; ">    
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="Customer_Care.php"  class="current">Customer Care</a></li>
        </ul>	
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="index.html" target="_parent">Online <strong>library</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
		<p><a href="Customer_Care.php"  style="color:blue"> << Back</a></p>
		<br />
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'GET') do_when_page_load_as_get_method();	
			else do_when_page_load_as_post_method();
			?>
			<!-- End of Login Form -->
		</div>
	</div> 
  	<div id="templatemo_footer">
		Copyright © 2018. All rights reserved Shah Muhammad Azmatullah Muntasir 
    </div>
  
</div> <!-- end of warpper -->
	<?php
	function do_when_page_load_as_get_method()
	{
		//echo date('Y-m-d H:i:s');
		//starting of get method
		?>
		<!-- Starting of Login Form -->
		<div class="form">
			<p style="color:green">Welcome to be a member of <b style="color:blue">Online Library</b></p>
			<br />
			<table>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<tr>
						<td>User Name: </td>
						<td><input type="text" name="user_name" onkeyup="showHint(this.value)" placeholder="User_Name" required="required"/></td>
						<!--<td style="color:blue">N.B: No space allowed.</td> -->
						<td><span id="txtHint"></span></td>
					</tr>
					<tr><td></td></tr>
					
					<tr><td></td></tr>
					<tr>
						<td>Email: </td>
						<td><input type="email" name="email" onkeyup="emailCheck(this.value)" placeholder="xxxxx@xxx.com" required="required"/></td>
						<td><span id="emailHint"></span></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password" required="required"/></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td>Re-Enter Password: </td>
						<td><input type="password" name="re_enter_password" onkeyup="passwordCheck(this.value, password.value)" placeholder="Re-Enter Password" required="required"/></td>
						<td><span id="passwordHint"></span></td>
					</tr>				
					<tr><td></td></tr>
					<tr>
						<td></td>
						<td></td>					
						<td><input type="submit" value="Sign up" /> </td>
					</tr>
					<tr><td></td></tr>
					</form>
			</table>
		</div>		
	<?php
	//ending of get method
	}
	function do_when_page_load_as_post_method()
	{
		//starting of post method
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('online_library', $con);
		
		$taken_table = mysql_query("SELECT * FROM Client_information");
		
		if($taken_table) ;//echo "client_information table selected";
		else echo "table can't selected";
		
		
		$user_info="INSERT INTO Client_information (User_Name, user_email, Password)
		VALUES
		('$_POST[user_name]', '$_POST[email]', '$_POST[password]')";

		if (!mysql_query($user_info, $con))
		{
		  echo "Please try with another username";
		  //header('Location: http://localhost/Online_Library/Create_Account.php');
		  //exit(  );
		  die('Error: ' . mysql_error());				  
		}
		else 
		{
			echo "<p>Welcome! Your account has been created successfully!</p>";
		}

		mysql_close($con);
		//ending of post method
	}
	?>
</body>
</html>