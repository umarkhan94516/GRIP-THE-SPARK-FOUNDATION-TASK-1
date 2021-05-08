<html>
<head>
<title>TSF Bank</title>
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="./mucss.css"></head>
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


$query= "select * from Transaction";
$result=mysqli_query($conn,$query);
echo "<center><table class=styled-table>
    <thead>
        <tr>
            <th>Transaction ID</th>
            <th>Sendername</th>
            <th>To</th>
            <th>Resivername</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
";
foreach($result as $row)
{
    echo 
    " <tr class=active-row>
    <td>$row[id]</td>
    <td>$row[Sendername]</td>
     <td>To</td>
    <td>$row[Resivername]</td>
    <td>$row[Bal]</td>
    </tr>";
}
echo "</tbody>
</table>
</center>";
?>