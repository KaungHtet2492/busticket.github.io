<?php 
include "configure.php";
session_start();
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM booking_ticket WHERE uid = ?";
$stmt = $connection->prepare($sql); 
$stmt->execute([$uid]);
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
    }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="look_book_ticket.css">
  <title></title>
</head>
<body>
<!------------------------------- Header Noti code ---------------------------------->
<header> 
      <div id="noti">
          <div id="logo">
              <img src="images/logo.png">
          </div>
        <div>
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="look_book_ticket.php">Book Ticket</a></li>
              <li><a href="Contact.php">Contact</a></li>
              <li><a href="About.php">About</a></li>
              <li><a href="Login.html">Logout</a></li>
          </ul>
        </div>
      </div>
  </header>
<!------------------------------- Body code ---------------------------------->
    <div id="booking_body">
        <form method="POST"> 
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bus Operator</th>
                    <th>Trip Path</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>seat No</th>
                    <th>Total Price</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
<?php 
     while($user = $stmt->fetch()){
?>
                <tr>
                    <td><?php echo $user['tid']; ?></td>
                    <td><?php echo $user['busoperator']; ?></td>
                    <td><?php echo $user['route']; ?></td>
                    <td><?php echo $user['departuretime']; ?></td>
                    <td><?php echo $user['arrivaltime']; ?></td>
                    <td><?php echo $user['seatno']; ?></td>
                    <td><?php echo $user['totalprice']; ?></td>
                    <td><a onclick="return confirm('Are you want to Delete?')" href="cancel_book_ticket.php?id=<?php echo $user['tid'];?>" class="back-btn" >Cancel</a></td>
                </tr>
<?php 
    }
?>
            </tbody>
        </table>
        </form>
    </div>

  <!---------------------------- Footer Code --------------------------------------->
  <footer>
      <div id="footer">
          <div id="footer-contact">
              <div id="footer-logo"></diV>
              <div id="contact">
                  <h2>Contact</h2>
                  <p>09 777 111 811, 09 76543 0471, 09 76543 0474</p>
                  <a herf="About.php">Ask a question</a>
              </div>
          </div>
          <div id="footer-info">
              <h2>INFORMATION</h2><br>
              <a herf="searching_ticket.php">Find/Print Your Ticket</a>
          </div>
          <div id="footer-legal">
              <h2>LEGAL</h2><br>
              <a herf="termscondition.html">Terms & Conditions</a>
          </div>
      </div>
  </footer>
</body>
</html>