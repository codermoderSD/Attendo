<html>
<head><title>Attendo|<?php echo $_GET["email"];?></title>
<link href="icon.png" rel="icon"/></head>
<body style="background-color: #87cefa;">
<div>
<header style="height:120px; background-color: #123255;">
<h4 style="padding-left:20px; display:inline-block; color:rgb(243, 152, 119)";>Welcome <?php echo $_GET["email"];?></h4>
<a href="front.html"><h4 style=" display:inline-block; margin: 0px 9px;
            color: rgb(243, 152, 119);
            background-color: #123255;
            padding: 8px 20px;
            border: 2px solid rgb(243, 152, 119);
            border-radius: 50px;
            font-size: 13px;
            cursor: pointer;
            outline: none;
            width: 50px;">Log Out</h4></a>
<a href="front.html">
<img style="padding-right:20px; float:right; width: 120px;" src="logo.jpeg"><a href="front.html"></a></img>
</header>
</div>
<?php 
$username = "Attendo"; 
$password = "teamattendo@vit567"; 
$database = "csv_db 6"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$x=$_GET['email'];
$query = "SELECT * FROM attendance WHERE name='$x' ORDER BY Date DESC";
 
 
echo '<br><table style="margin-left: auto; 
margin-right: auto; width:50%; color:#123255; font-weight:bold; 
font-size:20px; border-collapse: collapse; border:2px solid rgb(255, 100, 82)" 
border="3" cellspacing="1" cellpadding="5"> 
      <tr>
          <td style="color:white;"> <font face="Times">Name</font> </td> 
          <td style="color:white"> <font face="Times">Date</font> </td> 
          <td style="color:white"> <font face="Times">Time</font> </td>
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $Name = $row["Name"];
        $Date = $row["Date"];
        $Time = $row["Time"];
 
        echo '<tr> 
                  <td>'.$Name.'</td> 
                  <td>'.$Date.'</td> 
                  <td>'.$Time.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>