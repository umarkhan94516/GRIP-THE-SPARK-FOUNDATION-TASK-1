<html>
<head>
<title>TSF Bank</title>
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="./mucss.css">

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
$conn=mysqli_connect("localhost","id16743926_user","Umar9451671841@","id16743926_mydatabse1");
if(mysqli_connect_errno())
{
echo "Connection Could not Established....";
}


$query= "select * from user";
$result=mysqli_query($conn,$query);
echo "<center><table class=styled-table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Mobile Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
<tbody>";
foreach($result as $row)
{
    echo 
    " 
    <tr class=active-row>
    <td>$row[Username]</td>
    <td>$row[Number]</td>
    <td>$row[Name]</td>
    <td>$row[email]</td>
    <td>$row[bal]</td>
      </tr>
   ";
   
}
echo " </tbody> </table>
 </center> ";?>
