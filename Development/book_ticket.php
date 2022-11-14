<?php 
session_start();

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script type="text/javascript">
    function autoclick(){
        $("print").click();
    }

    $(document).ready(function(){
        var element = $("book-ticket-slip");

        $("print").on('click', function(){
            html2canvas(element, {
                onrendered: function(canvas){
                    var imageDate = canvas.toDataURL("image/jpg");
                    var newData = imageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
                    $("print").attr("download", "image.jpg").attr("href", newData);
                }
            });
        });
    });

</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="book_ticket.css">
  <title></title>
</head>
<body onload = "autoclick();">
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
    <div id = "book-ticket-body">
        <div id = "book-ticket-slip">
            <div id = "book-ticket-logo">
                <img src="images/logo.png">
            </div>
            <table style="width:100%">
                <tr>
                    <td>Bus Operator</td>
                    <td><?php echo $_SESSION['bus_operator']; ?></td>
                </tr>
                <tr>
                    <td>Route</td>
                    <td><?php echo $_SESSION['trip_path']; ?></td>
                </tr>
                <tr>
                    <td>Departure Time</td>
                    <td><?php echo $_SESSION['departs']; ?></td>
                </tr>
                <tr>
                    <td>Arrival Time</td>
                    <td><?php echo $_SESSION['arrives']; ?></td>
                </tr>
                <tr>
                    <td>Seat No.</td>
                    <td><?php echo $_SESSION['seatno']; ?></td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td><?php echo $_SESSION['bus_ticket_price']; ?></td>
                </tr>
                </table>
               
        </div>
        <button id="print">Print</button>
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