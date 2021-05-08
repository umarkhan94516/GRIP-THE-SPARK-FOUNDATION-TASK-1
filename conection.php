<html>
<head>
<title>TSF Bank</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div class="topnav">
<a class="active" href="index.html">Home</a>
<a href="Customer.php">Customer</a>
  <a href="SendMoney.html">SendMoney</a>
  <a href="TransactionHistory.php">Transaction History</a>
  <a href="#about">About</a>
</div>
    
    </body>
</body>
</html>

<?php
$Username = $_GET['Username'];
$Password = $_GET['password'];
$MNumber = $_GET['number'];
$name = $_GET['Name'];
$email = $_GET['Email'];
$balance = $_GET['Balane'];



$conn=mysqli_connect("localhost","id16743926_user","Umar9451671841@","id16743926_mydatabse1");

$sql="INSERT INTO user (Username, Password, Number, Name, email, bal) VALUES ('$Username','$Password','$MNumber','$name','$email','$balance')";

if($conn->query($sql))
{
    echo "<center><h1 Style=color:#009879;id=s1 >Your Account is Created Sucessfully</h1></center>";
    
    
}else
{
echo"<h1 style=color:#009879; id=s1 >Your Account is Not Created</h1>";    
}

?>
