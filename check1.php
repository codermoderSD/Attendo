<html>

<head>
    <title>Attendo|<?php echo $_GET["email"];?></title>
    <link href="icon.png" rel="icon" />
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style src="style.css"></style>
<body>
    <div>
        <header style="background-color: #123255; padding: 1rem; display:flex; justify-content: space-between;">
            <div style="display:flex;">    
                <h4 style="color:rgb(248, 205, 191); " ;>Welcome
                    <?php echo $_GET["email"];?></h4>
            </div>
            <a href="mainPage.html" style="display:flex; text-decoration: none;">
                <h4 class="logout" style=" display:inline-block; margin: 0px 1rem;
                            color: rgb(248, 205, 191);
                            background-color: #123255;
                            padding: .3rem;
                            text-align: center;
                            border: 2px solid rgb(248, 205, 191);
                            border-radius: 50px;
                            font-size: 1rem;
                            cursor: pointer;
                            outline: none;
                            width: 6.5rem;">
                            Log Out</h4>
            </a>
        </header>
        <footer style="position:absolute; right: 1rem; bottom: 1rem;">
                <img style="width: 8rem; opacity:0.6" src="logo.jpeg"><a
                    href="mainPage.html"></a></img>
        </footer>
    </div>
    <?php 
$username = "root"; 
// $password = "teamattendo@vit567"; 
$password = ""; 
$database = "csv_db 6"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$x=$_GET['email'];
$query = "SELECT * FROM attendance WHERE name='$x' ORDER BY Date DESC";
 
 
echo '<br><table table-dark style="margin-left: auto; 
margin-right: auto; width:60%; text-align: center; color:#0a1b2e; font-weight:bold; 
font-size:20px; border-collapse: collapse; background-color: #a7c4e4; border:2px solid #112336" border="3"
        cellspacing="1" cellpadding="5">
        <tr style="background-color: #112336;">
            <td style="color:white">
                <font face="Times">Name</font>
            </td>
            <td style="color:white">
                <font face="Times">Date</font>
            </td>
            <td style="color:white">
                <font face="Times">Time</font>
            </td>
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