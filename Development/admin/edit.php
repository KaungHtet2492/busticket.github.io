<?php 
include "configure.php";
$uid = $_GET['id'];
$sql = "SELECT * FROM user_account WHERE uid=:uid";
$stmt = $connection->prepare($sql);
$stmt->execute([':uid' => $uid ]);
$row = $stmt->fetch(PDO::FETCH_OBJ);

if(isset($_POST['update'])) {
  $username = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "UPDATE user_account SET username=?,email=?,password=? WHERE uid=?";
  $stmt = $connection->prepare($sql);
  if($stmt->execute([$username,$email,$password,$uid])){
    header("Location: admin.php");
  }else{
    echo '<script>alert("Data Update Fail!")</script>';
  }


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
    <h2>User accounts</h2>
    <ul>
      <li>Adminal panel of user accounts information</li><br>
      <a href="create_user_account.php" id = "create-user-btn">Create User Accounts</a>
    </ul>
  </section>

  <section class="panel important">
    <h2><u>Update User Accounts Information</u></h2>
    <form id="user-edit" method="POST">
      <input type="text" value="<?php echo $uid; ?>"><br><br>
      <input type="text" name = "uname" value = "<?php echo $row->username; ?>"><br><br>
      <input type="text" name = "email" value = "<?php echo $row->email; ?>"><br><br>
      <input type="text" name = "password" value = "<?php echo $row->password; ?>"><br><br>
      <input type="submit" id = "update-btn" name = "update" value = "Update">
    </form>
  </section>

<?php 


?>

</main>
