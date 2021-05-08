<?php
$Username = $_GET['user'];
$name = $_GET['cars'];
$balance = $_GET['Balane'];
echo "<html>
<head>
<title>TSF Bank</title>
<link rel=stylesheet type=text/css href=./style.css>
</head>
<body>
    <div class=topnav>
 <a class=active href=index.html>Home</a>
<a href=Customer.php>Customer</a>
  <a href=SendMoney.html>SendMoney</a>
  <a href=TransactionHistory.php>Transaction History</a>
  <a href=about.htmlt>about</a>
</div>
    
    </body>
</body>
</html>";

$conn=mysqli_connect("localhost","id16743926_user","Umar9451671841@","id16743926_mydatabse1");
if(mysqli_connect_errno())
{
echo "Connection Could not Established....";
}

$sql="UPDATE user SET bal = bal+$balance WHERE username='$name';";
$sql1="UPDATE user SET bal = bal-$balance WHERE username='$Username';";
$sql2="INSERT INTO Transaction(Sendername,Resivername, Bal) VALUES ('$Username','$name',$balance);";

if($conn->query($sql) && $conn->query($sql1) && $conn->query($sql2) )
{
    echo "<div class=login-form> 
<h1>Transaction Compledetd Succsessfully </h1>";
    
    
}else
{
    echo "<div class=login-form> 
<h1>Transaction Not Compledetd</h1>";    
}



?>
