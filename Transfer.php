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

$conn=mysqli_connect("localhost","id16743926_user","Umar9451671841@","id16743926_mydatabse1");
if(mysqli_connect_errno())
{
echo "Connection Could not Established....";

}
$query= "select Username,Password from user where Username='".$Username."' AND Password='".$Password."'limit 1";
$result=mysqli_query($conn,$query);


if(mysqli_num_rows($result)==1)
{
    $query= "select * from user";
    $result=mysqli_query($conn,$query);
    
     $query1= "SELECT bal FROM user WHERE Username='$Username';";
    $result1=mysqli_query($conn,$query1);
    

    echo "
    <label for=cars></label>
    <div class=login-form> 
    <h1  style=color:#009879; >Welcome</h1>
<form action='Transfercompleted.php' method=get>

<select hidden name=user >
  <option name=Username:> $Username</option>;
</select>
<h2 style=color:#009879;> Username: $Username </h2>";
foreach($result1 as $row1)
{
   echo" <pre><h2 style=color:#009879;>Balance:       $row1[bal]</h2></pre>";
}
 echo "<h1 style=color:#009879;> To</h1>
<select style=height:50px;width:100%;padding-left:120px;border-radius:5px;outline:none;border:0;font-weight:bold; name=cars id=cars>
";

foreach($result as $row)
{
    if($Username != $row[Username])
    echo 
  "<option style=color:#009879; name='name'> $row[Username]   </option>";
}


echo "</select>
<br><br>
<input type=text name=Balane placeholder=Balance>
<br><br>

<button style=height:50px;width:100%;padding-left:10px;border-radius:5px;outline:none;border:2;font-weight:bold; type=submit> Transfer Amount</button>
</form>

</div>";
}
else
{
echo "<p>password not match</p>";
}


?>
