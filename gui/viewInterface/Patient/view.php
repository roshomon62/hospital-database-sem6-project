 <?php

 	$servername = "localhost";
 	$username = "root";
 	$password = "mynewpassword";
 	$dbname = "hospital";

 	//echo "connecting...<br>";
	// Create connection
	 $conn = mysqli_connect($servername, $username, $password , $dbname);

	// Check connection
	 if (!$conn) {
	 	die("Connection failed: " . mysqli_connect_error());

	 }

	 echo "<h1>Patient Data</h1><br>";


	 $sql = "SELECT * FROM Patient";
	 $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
    	// output data of each row]
    	echo "
    	<table border=\"1\" cellpadding=\"10\">

    	<tr>
    	<td>ID</td>
    	<td>Name</td>
    	<td>Age</td>
    	<td>LastVisit</td>
    	<td>Address</td>
    	<td>MedicalHistory</td>
    	</tr>

    	";
    	while($row = mysqli_fetch_assoc($result)) {
    		echo "<tr>";
    		echo "<td>".$row["ID"]."</td>";
    		echo "<td>".$row["Name"]."</td>";
    		echo "<td>".$row["Age"]."</td>";
    		echo "<td>".$row["Last_visit"]."</td>";
    		echo "<td>".$row["Address"]."</td>";
    		echo "<td>".$row["Medical_history"]."</td>";
        	//echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Age"]. "<br>";
        	echo "</tr>";
    		}

    	echo "</table>";
	} 		
	else 
	{
    		echo "0 results";
	}

	 mysqli_close($conn);
?> 