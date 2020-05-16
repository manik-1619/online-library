<html >
<head>
<title>Online Library</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function bookNameCheck(str)
{
	if (str.length==0)
	  {
	  document.getElementById("bookNameCheck").innerHTML="";
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
		document.getElementById("bookNameCheck").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+str + "&p=sale_book_name",true);
	xmlhttp.send();
}

function writerNameCheck(str)
{
	if (str.length==0)
	  {
	  document.getElementById("writerNameCheck").innerHTML="";
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
		document.getElementById("writerNameCheck").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+str + "&p=sale_book_name",true);
	xmlhttp.send();
}

function priceCheck(str)
{
	if (str.length==0)
	  {
	  document.getElementById("priceCheck").innerHTML="";
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
		document.getElementById("priceCheck").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","check_user_name.php?q="+str + "&p=mobile",true);
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
                <h1><a href="index.php" target="_parent">Online <strong>library</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
		<p><a href="Customer_Care.php" style="color:blue"> << Back</a></p>
        <div id="templatemo_main">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			
			//echo date('Y-m-d H:i:s:p');
			
			session_start();
			if(!isset($_SESSION['name']) && !isset($_SESSION['password']))
			{		
				?>
				<!-- Starting of Login Form -->
					<div class="form">
						<p>Please choose one of the following-</p>
						<table>						
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<select name="sell_category" required="required">
									<option value="Faculty ofEEE">Faculty of EEE</option>
									<option value="Faculty of CE">Faculty of CE</option>
									<option value="Faculty of ME">Faculty of ME</option>
								</select>
								<tr><td></td></tr>
								<tr>
									<td><a href="Create_Account.php">Create New Account</a></td>
								</tr>				
								<tr><td></td></tr>		
								</form>
						</table>
					</div>
			
				<?php
			}
			else {
			?>
			<!-- Starting of Login Form -->
					<div class="form">
						<p style="color:green">Welcome, <?php echo "<b>" . $_SESSION['name'] . "</b>" ?>!</p>
						<table>						
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
								<td></td>
							
								</tr>
								<tr><td></td></tr>	
								<tr>
								<td>Category:</td>
								<td>
								<select name="sell_category" required="required">
									<option value="Faculty of EEE">Faculty of EEE</option>
									<option value="Faculty of CE">Faculty of CE</option>
									<option value="Faculty of ME">Faculty of ME</option>
								</select>
								</td>
								</tr>
								<tr><td></td></tr>	
								<tr>
									<td>Book Name: </td>
									<td><input type="text" name="sell_book_name" onkeyup="bookNameCheck(this.value)" placeholder="Book Name" required="required"/></td>
									<td><span id="bookNameCheck"></span></td>
								</tr>
								<tr><td></td></tr>	
								<tr>
									<td>Writer Name: </td>
									<td><input type="text" name="sell_writer_name" onkeyup="writerNameCheck(this.value)" placeholder="Writer Name" required="required"/></td>
									<td><span id="writerNameCheck"></span></td>
								</tr>
								<tr><td></td></tr>	
								<tr>
									<td>Desired Price: </td>
									<td><input type="number" name="sell_book_price" onkeyup="priceCheck(this.value)" placeholder="Price" required="required"/></td>
									<td><span id="priceCheck"></span></td>
								</tr>			
								<tr><td></td></tr>	
								<tr>
									<td></td>
									<td></td>					
									<td><input type="submit" name="Submit" value="Submit" /> </td>
								</tr>
								</form>
						</table>
					</div>
			<?php
			}
		}	 
		else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_REQUEST['Submit']))
		{
			submit();
		}
	}
	?>
	<!-- End of Login Form -->
		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © 2018. All rights reserved Shah Muhammad Azmatullah Muntasir
        
    </div>
  
    <div class="cleaner"></div>
	</div> <!-- end of warpper -->
	
	<?php
	function submit()
	{
		session_start();
		echo "<p>Congrats <b>" . $_SESSION['name'] . "</b>!</p>";
		echo "<p>Submitted successfully!</p> Visit <a href=\"Customer_Care.php\">your profile.</a>";	
		
		
		$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('online_library', $con);
		$taken_table = mysql_query("SELECT * FROM transaction");
		
		$num_rows = mysql_num_rows($taken_table); 
		$num_rows = $num_rows + 10000001;
		
		
		$query = "INSERT INTO transaction
		(book_id, book_name, writer_name, price, category, seller, sell_time, buyer, buy_time)
		VALUES ('". $num_rows."','".$_POST['sell_book_name']."', '".$_POST['sell_writer_name']."', '".$_POST['sell_book_price']."', '".$_POST['sell_category']."','".$_SESSION['name']."','".date("d/m/y G:i:s", time())."','empty','empty')";
		
		if (!mysql_query($query, $con))
		{
		  echo "Please try with another username";
		  //header('Location: http://localhost/Online_Library/Create_Account.php');
		  //exit(  );
		  die('Error: ' . mysql_error());				  
		}	
	}
	?>

</body>
</html>