<html >
<head>
<title>Online Library</title>
<link href="library_style.css" rel="stylesheet" type="text/css" />

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
    
        <div id="templatemo_main">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			session_start();
			if((!isset($_SESSION['name']) && !isset($_SESSION['password'])) || (!isset($_COOKIE["user"])))
			{		
				?>
				<!-- Starting of Login Form -->
					<div class="form">
						<p style="color:green">Please choose one of the following-</p>
						<table>						
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								
								<tr>
									<td><a href="Admin_login.php" style="color:blue">Admin Login</a></td>
								</tr>
								<tr>
									<td><a href="Login.php" style="color:blue">Log in</a></td>
								</tr>
								<tr><td></td></tr>
								<tr>
									<td><a href="Create_Account.php" style="color:blue">Create New Account</a></td>
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
									<td><a href="library.php" style="color:blue">Purchase Books</a></td>
								</tr>
								<tr><td></td></tr>
								<tr>
									<td><a href="Sell_Books_form.php" style="color:blue">Sell Your Books</a></td>
								</tr>
								<tr><td></td></tr>
								<tr>
									<td><input type="submit" name="my_profile" value="View Profile" /></td>
								</tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr>
									<td>
										<input type="Submit" name="Logout" value="Logout"/>
									</td>
								</tr>		
								</form>
						</table>
					</div>
			<?php
			}
		}	 
		else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		session_start();
		if(isset($_REQUEST['Logout']))
		{
			logout();
		}
		if(isset($_REQUEST['my_profile']))
		{
			show_profile();
		}
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		/*mysql_select_db('online_library', $con);
		$result = mysql_query("SELECT * FROM transaction");
		
		while($row = mysql_fetch_array($result))
		{
			if(isset($_REQUEST[$row['sell_book_name']]))
			{
				?><p><a href="Customer_Care.php"  style="color:blue"> << Back</a></p><?php
				
				$sql="DELETE FROM sell".$_SESSION['name']." WHERE book_name='".$row['sell_book_name'] ."'";

				if (!mysql_query($sql,$con))
				{				
				  die('Sorry! We are unable to delete your book.<br /> ' . mysql_error());
				}
				echo "<b>". $row['sell_book_name'] . "</b> has been deleted from your profile. <br />";		

				$sql2="DELETE FROM ".$row['sell_category']." WHERE book_name='".$row['sell_book_name'] ."'" . "AND owner='" . $_SESSION['name'] . "'";

				if (!mysql_query($sql2,$con))
				{				
				  die('Sorry! We are unable to delete your book from faculty table.<br /> ' . mysql_error());
				}
				//echo "<b>". $row['sell_book_name'] . "</b> has been deleted from your profile. <br />";		
				
				break;
			}
			//else echo "trying to match with " . $row['sell_book_name'] . "<br />";
		}*/
		
		mysql_close($con);
	}
	?>
	<!-- End of Login Form -->
		</div>
  </div> 
    <!-- end of templatemo_main -->
  
  	<div id="templatemo_footer">
		Copyright © 2018. All rights reserved Shah Muhammad Azmatullah Muntasir
    </div>
	</div> <!-- end of warpper -->
	
	<?php
	function logout()
	{
		unset($_SESSION['name']);
		unset($_SESSION['password']);
		header('Location: http://localhost/Online_Library/Customer_Care.php');
		exit();
	}
	
	function show_profile()
	{
		?> <p><a href="Customer_Care.php"  style="color:blue"> << Back</a></p>	<?php
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('online_library', $con);
		$result = mysql_query("SELECT * FROM transaction WHERE seller='" . $_SESSION['name'] . "'");
		
		?><p style="color:green"><b> <?php echo $_SESSION['name']; ?> </b>, Personal Profile <hr /></p><?php
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no books in your self.</p>";
		else
		{
			
			?><p style="text-align:center; color:blue"><b>Sold book list:</b><hr /></p><?php
			
			 do
			{
			?> <div class="post_section">
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Book Name:</td>" ;
			  echo "<td><b>" . $row['book_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Book ID:</td>" ;
			  echo "<td><b>" . $row['Book_id'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Writer:</td>" ;
			  echo "<td><b>" . $row['writer_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Category:</td>" ;
			  echo "<td><b>" . $row['category'] . "</b>" . "</td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Price:</td>" ;
			  echo "<td><b>" . $row['price'] . "/-</b></td>";
			  echo "<td>";

			  echo "</td>";
			  echo "</tr>";
			  
			  echo "<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>";
			echo "</table>";
			?>
			</div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		
		
		$result = mysql_query("SELECT * FROM transaction WHERE buyer='" . $_SESSION['name'] . "'");
		
		?><hr /><p style="text-align:center; color:blue"><b>Bought book list:</b><hr /></p><?php
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no books in your self.</p>";
		else
		{
			
			
			
			 do
			{
			?> <div class="post_section">
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Book Name:</td>" ;
			  echo "<td><b>" . $row['book_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Book ID:</td>" ;
			  echo "<td><b>" . $row['Book_id'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Writer:</td>" ;
			  echo "<td><b>" . $row['writer_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Category:</td>" ;
			  echo "<td><b>" . $row['category'] . "</b>" . "</td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Price:</td>" ;
			  echo "<td><b>" . $row['price'] . "/-</b></td>";
			  echo "<td>";

			  echo "</td>";
			  echo "</tr>";
			  
			  echo "<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>";
			echo "</table>";
			?>
			</div><?php
			}while($row = mysql_fetch_array($result));
			
		}
		
		mysql_close($con);
	}
	
	function remove_book_from_sell_list()
	{
		echo "have to remove book";
	}
	?>

</body>
</html>