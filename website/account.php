<!DOCTYPE html>
<head>
  <title>iTech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <style>
  body {
    background-color: #BCD2E8;
    
   }
  .content {
  margin-top: 5px;
  padding: 125px 25px 1000px 10px;
  background-color: #BCD2E8;
  }
  .account{
    position: absolute;
    top: 40px; left: 80%;
    border: 3px solid darkBlue;
    background-color: #91BAD6;
    height: 200px;
    width: 200px;
    padding: 15px 20px;
    font-size: 20px;
      }
  .account a{
    text-decoration: none;
    color: white;
    border: none;
    cursor: pointer;
    outline: none;
  }
  .account a:hover{
    font-weight: bold;
  }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

  </style>
</head>
<body>

<div class="account">
  <a href="#myAccount" style="font-family: arial;" onclick="openPage('myAccount')">My Account</a>
  <br>
  <br>
  <a href="#orders" style="font-family: arial;" onclick="openPage('orders')">My Orders</a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <a href="index.php" style="font-family: arial;">Logout</a>	
  </div>

<div id="myAccount">
<?php
  $conn = new PDO('sqlite:4041cem.db');
  $statement = $conn->query("SELECT * FROM Customer WHERE Cust_name = 'lara'");
  $customers = $statement->fetchAll(PDO::FETCH_ASSOC);
  echo"<table border=1>";

  echo "<tr>";
    echo "<td>My Customer ID</td>";
    echo "<td>My Name</td>";
    echo "<td>My Location</td>";
  echo "</tr>";

foreach ($customers as $row => $customer){
  echo "<tr>";
   echo "<td>". $customer['Cust_ID'] . "</td>";
   echo "<td>". $customer['Cust_name'] . "</td>";
   echo "<td>". $customer['Cust_location'] . "</td>";
  echo "</tr>";
  }

  echo "</table>";
?>
</div>

<div id="orders">
<?php
  $conn = new PDO('sqlite:4041cem.db');
  $statement2 = $conn->query("SELECT * FROM Cart WHERE Order_ID = 113");
  $customers2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
  $statement3 = $conn->query("SELECT * FROM Orders WHERE Order_ID = 13");
  $customers3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
  echo"<table border=1>";

  echo "<tr>";
    echo "<td>Item</td>";
    echo "<td>QTY</td>";
  echo "</tr>";

foreach ($customers2 as $row => $customer2){
  echo "<tr>";
   echo "<td>". $customer2['Item_name'] . "</td>";
   echo "<td>". $customer2['Cart_Qty'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

 echo"<table border=1>";
 echo "<tr>";
   echo "<td>Total</td>";
   echo "<td>Purchase Date</td>"; 
 echo "</tr>";

foreach ($customers3 as $row => $customer3){
    echo "<td>". $customer3['Order_total'] . "</td>";
    echo "<td>". $customer3['Order_date'] . "</td>";
 }
 echo "</table>";

?>
</div>


</body>
<script>
//open page function:
function openPage(pageName) {
  var i, content;
  content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}
</script>