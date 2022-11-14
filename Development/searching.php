<?php
  session_start();

  include "configure.php";
  
  $from_place = $_SESSION['fromcity'];
  $to_place = $_SESSION['tocity'];
  $sql = "SELECT * FROM bus_information WHERE fromplace = :fromcity AND toplace = :tocity";
    if($stmt = $connection->prepare($sql)){
        $stmt->bindParam(":fromcity", $from_place);
        $stmt->bindParam(":tocity", $to_place);
        $stmt->execute();
    }
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="searching.css">
  <link rel="stylesheet" type="text/css" href="index.css">
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

    <!------------------------------- Searching Ticket Code ---------------------------------->
  <form method="POST" >
    <div id="search-div">
      <div id="search-trip">
        <div id="search-title">
          <h3>Search Trip</h3>
        </div>
        <div id="search-info">
          <div id="search-from">
            <div id="search-from-logo">
              <img src="images/bus.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
                  <select id="from-trip">
                    <option><?php echo $_SESSION['fromcity']; ?></option>
                  </select>
            </div>
          </div>
          <div id="search-to">
            <div id="search-from-logo">
              <img src="images/placeholder.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
                  <select id="from-trip">
                    <option><?php echo $_SESSION['tocity']; ?></option>
                  </select>
            </div>
          </div>
          <div id="search-date">
            <div id="search-from-logo">
              <img src="images/calendar.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
              <input type="text" value="<?php echo $_SESSION['traveltime']; ?>">
            </div>
          </div>
          <div id="search-button">
              <a href="index.php" id="back-btn">Back</a>
          </div>
        </div>
      </div>
    </div>
    <!---------------------------- Output of Searching Code --------------------------------------->
    <div id="output-search">
      <div id="search-output">
          <div id="Yangon-Mandalay-Day">
            <?php 
                while($row = $stmt->fetch()){
                  $busid = $row['busid'];
            ?>
            <div id="YM-bus">
              <div id="YM-info">
                <h3><?php echo $row['departuretime']; ?> - Scania - Standard</h3>
                <p> <?php echo $row['fromplace']; ?> - <?php echo $row['toplace']; ?> </p>
                <p>Departs : <?php echo $row['departuretime']; ?> </p>
                <p>Arrives : <?php echo $row['arrivaltime']; ?> </p>
              </div>  
              <div id="YM-logo">
                <img src="images/ShweSinSetKyar.png">
                <p> <?php echo $row['busoperator'];?> </p>
              </div>
              <div id="YM-btn">
                <h2> 1 seat MMK <?php echo $row['price']; ?> </h2>
                <a href="seat.php?id=<?php echo $row['busid'];?>" id="back-btn">Select Seat</a>
              </div>
            </div>
            <?php 
                }
            ?>
          </div>
      </div>
    </div>  

    
  </form>
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
              <p><a herf="termscondtion.html">Terms & Conditions</a></p>
          </div>
      </div>
  </footer>

</body>
</html>