<?php include 'header.php'; ?>

<h2>Reservation Results</h2>
<?php
// Makes sure the required fields were sent from the form

if (!isset($_POST['customer_name']) || !isset($_POST['phone'])
     || !isset($_POST['reservation_date']) || !isset($_POST['reservation_time'])
     || !isset($_POST['guests'])) {
    echo "<p>You have not entered all the required details.<br>
          Please go back and try again.</p>";
    include 'footer.php';
    exit;
}

//  Create short variable names, and remove extra spaces with trim()
$name    = trim($_POST['customer_name']);
$phone   = trim($_POST['phone']);
$email   = trim($_POST['email']);
$date    = trim($_POST['reservation_date']);
$time    = trim($_POST['reservation_time']);
$guests  = intval($_POST['guests']);
$request = trim($_POST['special_request']);

//  Makes sure the required fields are not empty
if ($name == '' || $phone == '' || $date == '' || $time == ''
     || $guests < 1 || $guests > 20) {
    echo "<p>Please fill in your name, phone, date, time,
          and a number of guests from 1 to 20.<br>
          Please go back and try again.</p>";
    include 'footer.php';
    exit;
}

// for the optional fields if left blank then save them as NULL  in the database
if ($email == '') {
    $email = null;
}
if ($request == '') {
    $request = null;
}

try {
        // Connects as sabores_user who can only SELECT and INSERT
    $db = new mysqli('localhost', 'sabores_user', 'sabores123', 'sabores_db');



    //  Saves the reservation with a prepared statement
    $query = "INSERT INTO reservations
              (customer_name, phone, email, reservation_date,
               reservation_time, guests, special_request)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssssis', $name, $phone, $email, $date,
                      $time, $guests, $request);
    $stmt->execute();


    // Tells the customer whether it worked or not

    if ($stmt->affected_rows > 0) {
        echo "<p>Thank you, " . htmlspecialchars($name) . "!</p>";
        echo "<p>Your table for " . $guests . " is reserved on "
             . htmlspecialchars($date) . " at " . htmlspecialchars($time) . ".</p>";
        
    } else {
        echo "<p>An error has occurred.<br>
              Your reservation was not saved.</p>";
    }

    $db->close();

} catch (Exception $e) {
    // If the connection or the insert failed it shows a friendly message
    echo "<p>Error: Sorry! I could not save your reservation.<br>
          Please try again later.</p>";
}