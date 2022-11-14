<?php 
session_start();
include "configure.php";
$busid = $_GET['id'];
$sql = "SELECT * FROM bus_information WHERE busid=:busid";
$stmt = $connection->prepare($sql);
$stmt->execute([':busid' => $busid ]);
$row = $stmt->fetch(PDO::FETCH_OBJ);

$bus_operator = $row->busoperator;
$fromplace = $row->fromplace;
$toplace = $row->toplace;
$trip_path = $fromplace.'-'.$toplace;
$departs = $row->departuretime;
$arrives = $row->arrivaltime;
$price = 'MMK '.$row->price;

$_SESSION['bus_operator'] = $bus_operator;
$_SESSION['trip_path'] = $trip_path;
$_SESSION['departs'] = $departs;
$_SESSION['arrives'] = $arrives;
$_SESSION['bus_ticket_price'] = $price;
//------------------ Code for Booking Tickets and Buy Tickets ---------------------
if(isset($_POST['book_ticket'])){
    $seatnum = $_POST['passengers'];
    $_SESSION['seatno'] = $seatnum;
    $uid = $_SESSION['uid'];
    $sql = "INSERT INTO booking_ticket(busoperator, route, departuretime, arrivaltime, seatno, totalprice, uid) VALUES(?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$bus_operator, $trip_path, $departs, $arrives, $seatnum, $price, $uid]);
    header("Location: book_ticket.php");
}elseif(isset($_POST['buyticket'])){
    $seatnum = $_POST['passengers'];
    $_SESSION['seatno'] = $seatnum;
    $uid = $_SESSION['uid'];
    $_SESSION['bus_operator'] = $bus_operator;
    $_SESSION['trip_path'] = $trip_path;
    $_SESSION['departs'] = $departs;
    $_SESSION['arrives'] = $arrives;
    $_SESSION['bus_ticket_price'] = $price;
    header("Location: payment.php");
}

//------------------- Code for checking the seat is available or not -----------------------

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="seat.css">
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
              <li><a href="About.php">About</a><li>
              <li><a href="Login.html">Logout</a></li>
          </ul>
        </div>
      </div>
  </header>

  <!---------------------------- Body Code --------------------------------------->
  <form method="POST">
    <div id="seat-body">
        <div id="seat-place">
            <div id="seat-title">
                Please select Seat
            </div>
            <div id="seat-ticket">
                <div id="seat-row-0">
                    Driver
                </div>
                <div id="seat-row-1">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-1" value="1" required="" type="radio">
                            <label for="seat-radio-1-1"> 1 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-2" value="2" required="" type="radio">
                            <label for="seat-radio-1-2">  2  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-3" value="3" required="" type="radio">
                            <label for="seat-radio-1-3">  3  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-4" value="4" required="" type="radio">
                            <label for="seat-radio-1-4">  4  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-2">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-5" value="5" required="" type="radio">
                            <label for="seat-radio-1-5"> 5 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-6" value="6" required="" type="radio">
                            <label for="seat-radio-1-6">  6  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-7" value="7" required="" type="radio">
                            <label for="seat-radio-1-7">  7  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-8" value="8" required="" type="radio">
                            <label for="seat-radio-1-8">  8  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-3">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-9" value="9" required="" type="radio">
                            <label for="seat-radio-1-9"> 9 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-10" value="10" required="" type="radio">
                            <label for="seat-radio-1-10">  10  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-11" value="11" required="" type="radio">
                            <label for="seat-radio-1-11">  11  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-12" value="12" required="" type="radio">
                            <label for="seat-radio-1-12">  12  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-4">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-13" value="13" required="" type="radio">
                            <label for="seat-radio-1-13"> 13 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-14" value="14" required="" type="radio">
                            <label for="seat-radio-1-14">  14  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-15" value="15" required="" type="radio">
                            <label for="seat-radio-1-15">  15  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-16" value="16" required="" type="radio">
                            <label for="seat-radio-1-16">  16  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-5">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-17" value="17" required="" type="radio">
                            <label for="seat-radio-1-17"> 17 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-18" value="18" required="" type="radio">
                            <label for="seat-radio-1-18">  18  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-19" value="19" required="" type="radio">
                            <label for="seat-radio-1-19">  19  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-20" value="20" required="" type="radio">
                            <label for="seat-radio-1-20">  20  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-6">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-21" value="21" required="" type="radio">
                            <label for="seat-radio-1-21"> 21 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-22" value="22" required="" type="radio">
                            <label for="seat-radio-1-22">  22  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-23" value="23" required="" type="radio">
                            <label for="seat-radio-1-23">  23  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-24" value="24" required="" type="radio">
                            <label for="seat-radio-1-24">  24  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-7">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-25" value="25" required="" type="radio">
                            <label for="seat-radio-1-25"> 25 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-26" value="26" required="" type="radio">
                            <label for="seat-radio-1-26">  26  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-27" value="27" required="" type="radio">
                            <label for="seat-radio-1-27">  27  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-28" value="28" required="" type="radio">
                            <label for="seat-radio-1-28">  28  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-8">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-29" value="29" required="" type="radio">
                            <label for="seat-radio-1-29"> 29 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-30" value="30" required="" type="radio">
                            <label for="seat-radio-1-30">  30  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-31" value="31" required="" type="radio">
                            <label for="seat-radio-1-31">  31  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-32" value="32" required="" type="radio">
                            <label for="seat-radio-1-32">  32  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-9">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-33" value="33" required="" type="radio">
                            <label for="seat-radio-1-33"> 33 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-34" value="34" required="" type="radio">
                            <label for="seat-radio-1-34">  34  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-35" value="35" required="" type="radio">
                            <label for="seat-radio-1-35">  35  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-36" value="36" required="" type="radio">
                            <label for="seat-radio-1-36">  36  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-10">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-37" value="37" required="" type="radio">
                            <label for="seat-radio-1-37"> 37 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-38" value="38" required="" type="radio">
                            <label for="seat-radio-1-38">  38  </label>
                        </li>
                        <li class="seat"></li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-39" value="39" required="" type="radio">
                            <label for="seat-radio-1-39">  39  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-40" value="40" required="" type="radio">
                            <label for="seat-radio-1-40">  40  </label>
                        </li>
                    </ol>
                </div>

                <div id="seat-row-11">
                    <ol class="seats">
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-41" value="41" required="" type="radio">
                            <label for="seat-radio-1-41"> 41 </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-42" value="42" required="" type="radio">
                            <label for="seat-radio-1-42">  42  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-43" value="43" required="" type="radio">
                            <label for="seat-radio-1-43">  43  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-44" value="44" required="" type="radio">
                            <label for="seat-radio-1-44">  44  </label>
                        </li>
                        <li class="seat">
                            <input role="input-passenger-seat" name="passengers" id="seat-radio-1-45" value="45" required="" type="radio">
                            <label for="seat-radio-1-45">  45  </label>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div id="seat-info">
            <div id="book-summary">
                <b>Booking Summary</b>
            </div>
            <div id="info-table">
            <table style="width:100%">
                <tr>
                    <td>Bus Operator</td>
                    <td><?php echo $row->busoperator; ?></td>
                </tr>
                <tr>
                    <td>Route</td>
                    <td><?php echo $row->fromplace; ?> - <?php echo $row->toplace; ?> </td>
                </tr>
                <tr>
                    <td>Departure Time</td>
                    <td><?php echo $row->departuretime; ?></td>
                </tr>
                <tr>
                    <td>Arrival Time</td>
                    <td><?php echo $row->arrivaltime; ?></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>MMK <?php echo $row->price; ?></td>
                </tr>
                </table>
                <input type="submit" name="book_ticket" id = "book-btn" value="Book Ticket">
                <input type="submit" name="buyticket" id = "buy-btn" value="Buy Ticket">
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
              <p><a herf="termscondition.html">Terms & Conditions</a></p>
          </div>
      </div>
  </footer>

</body>
</html>
