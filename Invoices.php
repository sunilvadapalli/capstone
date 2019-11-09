<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show MySQL DB Data</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
 
<table class="table table-bordered">
<h1><center>GL Invoice List </center></h1>
 <thead>
 <tr>
 <th>Invoice ID</th>
 <th>Invoice Received Date</th>
 <th>Client Names</th>
 <th>Product Ordered</th>
 <th>Quantity</th>
 <th>Invoice Status</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <?php
 $link = mysqli_connect("localhost", "root", "Ramtheja@143", "test");
 $sql = "SELECT * FROM Invoice";
 $result = mysqli_query($link, $sql);
 
 while($test = mysqli_fetch_array($result))
 {
 $ID = $test['Invoice_ID']; 
 echo"<td>".$test['Invoice_ID']."</td>";
 echo"<td>".$test['Invoice_Received_Date']."</td>";
 echo"<td>".$test['Client_Name']."</td>";
 echo"<td>".$test['Product_Ordered']."</td>"; 
 echo"<td>".$test['Quantity']."</td>";
 echo"<td>".$test['Invoice_Status']."</td>";
 echo "</tr>";
 }
 mysqli_close($link);
 ?>
</table>

</div>
</body>
</html>