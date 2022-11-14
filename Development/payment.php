<?php 
session_start();
include "configure.php";
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM payment WHERE uid = ?";
    $stmt = $connection->prepare($sql); 
    $stmt->execute([$uid]);
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        $pid = $user['pid'];
        $userid = $user['uid'];
        if($uid == $userid){
            $_SESSION['pid'] = $pid;
            header("Location: buy_ticket.php");
    }
}
if(isset($_POST['pay_btn'])){
    $uid = $_SESSION['uid'];
    $cardholdername = $_POST['cardholder_name'];
    $card_number = $_POST['card_number'];
    $expiration = $_POST['expiration'];
    $cvv = $_POST['CVV'];
    $_SESSION['cardholder_name'] = $cardholdername;
    $_SESSION['card_number'] = $card_number;
    $_SESSION['expiration'] = $expiration;
    $_SESSION['cvv'] = $cvv;
    $sql = "INSERT INTO payment(cardholdername, cardnumber, expiration, cvv, uid) VALUES(?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$cardholdername, $card_number, $expiration, $cvv, $uid]);
    header("Location: buy_ticket.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="payment.css">
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
<!------------------------------- Body design code ---------------------------------->
 <div id = "payment-body">
    <div id = "credit-card-background">
        <div id = "visa-card-logo">
            <img src="images/—Pngtree—realistic virtual credit cards_5358211.png" width="300px" height="300px">
        </div>
        <div id = "visa-card-info">
            <form method="POST">
                <h2 style = "text-align: center">Payment Details</h2>
                <br>    
                <label>CARDHOLDER NAME</label>
                <br><br>
                <input type="text" placeholder="Name" name="cardholder_name" >
                <br><br>
                <label>CARD NUMBER</label>
                <br><br>
                <input type="text" placeholder="Card Number" name="card_number" >
                <br><br>
                <label>EXPIRATION DATE</label>
                <br><br>
                <input type="text" placeholder="MM/YYYY" name="expiration" >
                <br><br>
                <label>CVV</label>
                <br><br>
                <input type="password" placeholder="CVV" name="CVV" ><br><br>
                <button name="pay_btn">Pay</button>
            </form>
        </div>
    </div>
 </div>   

<!---------------------------- Footer Code --------------------------------------->
    <footer>
      <div id="footer">
          <div id="footer-contact">
              <div id="footer-logo"></diV>
              <div id="contact">
                  <h2>Contact</h2>
                  <p>09 777 111 811, 09 76543 0471, 09 76543 0474</p>
                  <p><a herf="About.php">Ask a question</a></p>
              </div>
          </div>
          <div id="footer-info">
              <h2>INFORMATION</h2><br>
              <p><a herf="searching_ticket.php">Find/Print Your Ticket</a></p>
          </div>
          <div id="footer-legal">
              <h2>LEGAL</h2><br>
              <p><a herf="termscondition.html">Terms & Conditions</a></p>
          </div>
      </div>
  </footer>
</body>
</html>