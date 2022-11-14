<?php 
include "configure.php";
if(isset($_POST['create'])){
  $busoperator = $_POST['busoperator'];
  $fromplace = $_POST['fromplace'];
  $toplace = $_POST['toplace'];
  $departuretime = $_POST['departuretime'];
  $arrivaltime = $_POST['arrivaltime'];
  $price = $_POST['price'];
  $image = $_POST['image'];
    $sql = "INSERT INTO bus_information(busoperator, fromplace, toplace, departuretime, arrivaltime, price, busimage) VALUES(?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    if($stmt->execute([$busoperator,$fromplace,$toplace,$departuretime,$arrivaltime,$price,$image])){

    echo '<script>alert("Bus Information insert Successfull!!")</script>';
    }else{
        echo '<script>alert("Bus Information insert Fail!!")</script>';
    }
    //header("Location: admin_bus_info.php");
}
?>
<link rel="stylesheet" type="text/css" href="admin.css">
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="logout warn"><a href="admin.php">Back</a></li>
    <li class="users"><a href="#">Admin Account</a></li>
    <li class="logout warn"><a href="../login.html">Log Out</a></li>
  </ul>
</header>
<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admin.php">Dashboard</a></li>
    <li class="users"><a href="admin.php">User accounts</a></li>
    <li class="edit"><a href="admin_bus_info.php">Bus Information</a></li>
    <li class=""><a href="admin_book_ticket.php">Booking Tickets</a></li>
    <li class=""><a href="admin_buy_ticket.php">Buy Tickets</a></li>
    <li class="edit"><a href="admin_payment.php">Payment</a></li>
    <li class="comments"><a href="admin_report.php">Reports</a></li>
  </ul>
</nav>

<main role="main">
  
  <section class="panel important">
    <h2>Bus Information</h2>
    <ul>
      <li>Adminal panel of Bus Information</li><br>
    </ul>
  </section>

  <section class="panel important">
    <h2><u>Insert Bus Information</u></h2>
    <form id="user-edit" method="POST">
      <lable>Bus Operator</lable><br>
      <input type="text" name = "busoperator" placeholder = "Enter Bus Operator"><br><br>
      <lable>From Place</lable><br>
      <input type="text" name = "fromplace" placeholder = "Enter From Place"><br><br>
      <lable>To Place</lable><br>
      <input type="text" name = "toplace" placeholder = "Enter To Place"><br><br>
      <lable>Departure Time</lable><br>
      <input type="text" name = "departuretime" placeholder = "Enter Departure Time"><br><br>
      <lable>Arrival Time</lable><br>
      <input type="text" name = "arrivaltime" placeholder = "Enter Arrival Time"><br><br>
      <lable>Price</lable><br>
      <input type="text" name = "price" placeholder = "Enter Bus Seat Price"><br><br>
      <lable>Images</lable><br>
      <input type="text" name = "image" placeholder = "Enter Bus Operator image"><br><br>
      <input type="submit" id ="update-btn" name ="create" value="Insert">
    </form>
  </section>

</main>
