<?php
session_start();
if(isset($_POST['button'])){
    $fromcity = $_POST['fromplace'];
	  $tocity = $_POST['toplace'];
    $traveltime = $_POST['showcalendar'];

    $_SESSION['fromcity'] = $fromcity;
    $_SESSION['tocity'] = $tocity;
    $_SESSION['traveltime'] = $traveltime;
    header("Location: searching.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="searching_ticket.css">
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

    <div id = "searching-ticket-body">
      <form method="POST" >
        <div id = "searching-ticket-whole"> 
        <h2> Search your Trip path </h2>
        <div id="search-info">
          <div id="search-from">
            <div id="search-from-logo">
              <img src="images/bus.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
                  <select id="from-trip" name="fromplace">
                    <option>Select City</option>
                    <option value="Yangon">Yangon</option>
                    <option value="NayPyiTaw">Nay Pyi Taw</option>
                    <option value="Mandalay">Mandalay</option>
                    <option value="TaungGyi">Taung Gyi</option>
                  </select>
            </div>
          </div>
          <div id="search-to">
            <div id="search-from-logo">
              <img src="images/placeholder.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
                  <select id="from-trip" name="toplace">
                    <option>Select City</option>
                    <option value="Yangon">Yangon</option>
                    <option value="NayPyiTaw">Nay Pyi Taw</option>
                    <option value="Mandalay">Mandalay</option>
                    <option value="TaungGyi">Taung Gyi</option>
                  </select>
            </div>
          </div>
          <div id="search-date">
            <div id="search-from-logo">
              <img src="images/calendar.png" width="30px" height="30px">
            </div>
            <div id="search-from-combo">
              <input type="date" id="search-calendar" name="showcalendar" value="mm-dd-yyyy">
            </div>
          </div>
          <div id="search-button">
              <button class="search-button" name ="button">Search Now</button>
          </div>
        </div>
        </div>
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