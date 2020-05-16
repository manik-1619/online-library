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
            <li><a href="library.php" class="current">Library</a></li>
            <li><a href="Customer_Care.php">Customer Care</a></li>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="index.php" target="_parent">Online <strong>library</strong><span>Get your desire</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
                <a href="Customer_Care.php">JOIN NOW <br /><span>Be one of us</span></a>    
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<li><input type="submit" name="Faculty_of_EEE" value="Faculty of EEE" /></li>
				<li><input type="submit" name="Faculty_of_CE" value="Faculty of CE" /></li>
				<li><input type="submit" name="Faculty_of_ME" value="Faculty of ME" /></li>
				</form>
            </ul>
			
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
		
			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				//echo "get method is calling";
				
				session_start();
				faculty_of_eee();
				
			}
			else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				session_start();
				if(isset($_REQUEST['Faculty_of_EEE']))
				{
					//logout();
					faculty_of_eee();
				}
				if(isset($_REQUEST['Faculty_of_CE']))
				{
					//show_profile();
					faculty_of_ce();
				}
				if(isset($_REQUEST['Faculty_of_ME']))
				{
					//show_profile();
					faculty_of_me();
				}
				if(isset($_REQUEST['buy_book']))
				{
					//show_profile();
					buy_book();
				}
			}
			?>
            
		</div>
    
  </div> 
    <!-- end of templatemo_main -->
  
  	<div id="templatemo_footer">    
		Copyright © 2018. All rights reserved Shah Muhammad Azmatullah Muntasir
    </div>
  
</div> <!-- end of warpper -->

	<?php 
	function faculty_of_eee()
	{
		if((isset($_SESSION['name']) && isset($_SESSION['password'])) || (!isset($_COOKIE["user"])))
		{
		//echo $_SESSION['name'];
		?>
				<div class="form">
					<p style="color:green">Please enter your Book Name to buy such book.</p>
					<table>						
							<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
									<td>Book Name: </td>
									<td><input type="text" name="buy_book_name" placeholder="Book Name" required="required"/></td>
								</tr>
								<tr>
									<td>Writer_Name: </td>
									<td><input type="text" name="buy_book_id" placeholder="Writer_Name" required="required"/></td>
									<td><input type="submit" name="buy_book" value="OK" /></td>

									<a href= "JavaScript Bangla E-book by faruk.pdf">download</a>
									
								</tr>
							</form>
					</table>
				</div>
				//<a href = F:\3-1\3_1 from 2k13\JavaScript Bangla E-book by faruk.pdf></a>
				<?php
		}
				?>
				<hr /><p style="text-align:center; color:blue">Faculty of <b>Electrical & Electronic Engineering</b> available books:<hr /></p>	<a href = "F:\3-1\3_1 from 2k13\JavaScript Bangla E-book by faruk.pdf">e</a>
				
		<?php 
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		
		//session_start();
		mysql_select_db('online_library', $con);
		$result = mysql_query("SELECT * FROM transaction WHERE category='Faculty of EEE' AND buyer='empty'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no books in Faculty of EEE.</p>";
		else
		{
			
			 do
			{
			?> <div class="post_section"><p>
			<?php
			echo "<table>";
			  echo "<tr>";
			  echo "<td>Book Name:</td>" ;
			  echo "<td><b>" . $row['book_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Book Id:</td>" ;
			  echo "<td><b>" . $row['Book_id'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Writer:</td>" ;
			  echo "<td><b>" . $row['writer_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Price:</td>" ;
			  echo "<td><b>" . $row['price'] . " tk</b></td>";
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
			?> </div>
			<?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function faculty_of_ce()
	{
		if((isset($_SESSION['name']) && isset($_SESSION['password'])) || (!isset($_COOKIE["user"])))
		{
		?>
				<div class="form">
					<p style="color:green">Please enter your Book Name to buy such book.</p>
					<table>						
							<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
									<td>Book Name: </td>
									<td><input type="number" name="buy_book_name" placeholder="Book Name" required="required"/></td>
								</tr>
								<tr>
									<td>Book ID: </td>
									<td><input type="text" name="buy_book_id" placeholder="Book ID" required="required"/></td>
									<td><input type="submit" name="buy_book" value="Buy" /></td>
								</tr>
							</form>
					</table>
				</div>
					<?php
		}
				?>
				<hr /><p style="text-align:center; color:blue">Faculty of <b>Civil Engineering</b> available books:<hr /></p>	
				
		<?php
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('online_library', $con);
		$result = mysql_query("SELECT * FROM transaction WHERE category='Faculty of CE' AND buyer='empty'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no books in Faculty of CE.</p>";
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
			  echo "<td>Writer:</td>" ;
			  echo "<td><b>" . $row['writer_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Price:</td>" ;
			  echo "<td><b>" . $row['price'] . " tk</b></td>";
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
			?> </div>
			<?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function faculty_of_me()
	{
		if((isset($_SESSION['name']) && isset($_SESSION['password'])) || (!isset($_COOKIE["user"])))
		{
		?>
				<div class="form">
					<p style="color:green">Please enter your Book Name to buy such book.</p>
					<table>						
							<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<tr>
									<td>Book Name: </td>
									<td><input type="number" name="buy_book_name" placeholder="Book Name" required="required"/></td>
								</tr>
								<tr>
									<td>Book ID: </td>
									<td><input type="text" name="buy_book_id" placeholder="Book ID" required="required"/></td>
									<td><input type="submit" name="buy_book" value="Buy" /></td>
								</tr>
							</form>
					</table>
				</div>
				<?php
		}
				?>	
				<hr /><p style="text-align:center; color:blue">Faculty of <b>Mechanical Engineering</b> available books:<hr /></p>
		<?php 
		
		$con = mysql_connect('localhost', 'root', '');
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		else ;//echo "connected";
		mysql_select_db('online_library', $con);
		$result = mysql_query("SELECT * FROM transaction WHERE category='Faculty of ME' AND buyer='empty'");
		
		$row = mysql_fetch_array($result);
		if(!$row) echo "<p>There is no books in Faculty of ME.</p>";
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
			  echo "<td>Writer:</td>" ;
			  echo "<td><b>" . $row['writer_name'] . "</b></td>";
			  echo "</tr>";
			  
			  echo "<tr>";
			  echo "<td>Price:</td>" ;
			  echo "<td><b>" . $row['price'] . " tk</b></td>";
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
			?> </div>
			<?php
			}while($row = mysql_fetch_array($result));
			
		}
		mysql_close($con);
	}
	
	function buy_book()
	{
		//session_start();
		
		$con = mysql_connect('localhost', 'root', '');
		mysql_select_db('online_library', $con);
		
		$time = date("d/m/y G:i:s", time());
		$name = $_SESSION['name'];
		//mysql_query($con,"UPDATE p_info SET stock=$q WHERE p_name=". $_POST['p_name']);
		$result = mysql_query("SELECT * FROM transaction WHERE Book_id='". $_POST['buy_book_id'] . "'");
		$row = mysql_fetch_array($result);
		if(!$row) {
			echo "Your information is not correct. Please <a href=\"library.php\">try again.</a>";
			return;
			//die('Error: ' . mysql_error());
		}
		
		$milon = "UPDATE transaction SET buyer='$name', buy_time='$time' WHERE Book_id='". $_POST['buy_book_id'] . "'";
		
		
		
		if (!mysql_query($milon, $con))
		{
			echo "Unable to update. Because " . mysql_error();
			return;
		}
		
		echo $_POST['buy_book_name'] . " is bought successfully. <br />Visit <a href=\"Customer_Care.php\">your profile.</a>";
	}
	?>
</body>
</html>