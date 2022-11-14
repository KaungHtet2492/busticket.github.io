<?php
include "configure.php";
$sql = "SELECT * FROM report";
$stmt = $connection->prepare($sql);
$stmt->execute();
?>
<link rel="stylesheet" type="text/css" href="admin.css">
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
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
    <h2>User accounts</h2>
    <ul>
      <li>Admin panel of user Feedbacks</li><br>
    </ul>
  </section>
  <section class="panel important">
      <form action="" method="post">
      <table>
<!--   The Head of The Table -->
       <thead>
           <tr>
               <th>ID</th>
               <th>User reports</th>

           </tr>
<!--  End of The Head -->
       </thead>
<!--   The Body of The Table -->
       <tbody>
<!--          First Row -->
<?php 
     while($row = $stmt->fetch()){
?>
           <tr>
               <td>
                 <?php echo $row['rid']; ?>
               </td>
               <td>
                  <?php echo $row['report_reasons']; ?>
               </td>
           </tr>
<?php 
    }
?>

<!-- End of The of The Table -->
      </tbody>
<!-- End of The Table -->
   </table>
      </form>
  </section>


</main>
