<?php include 'header.php'; ?>

<!-- This is the reservation form. This sends the data to the save_reservation.php-->

<h2>Make a Reservation!</h2>
<p>Fill out the form to reserve your table. * means required.</p>
<form action ="save_reservation.php" method="post">

<fieldset>
    <legend>Reservation Details</legend>

    <p><label for="customer_name">Name *</label>
    <input type="text" id="customer_name" name="customer_name"
    maxlength="50" size="30" required></p>

    <p><label for="phone">Phone *</label>
    <input type="text" id="phone" name="phone"
    maxlength="20" size="20" required></p>

    <p><label for="email">Email</label>
    <input type="email" id="email" name="email"
    maxlength="100" size="30"></p>

    <p><label for="reservation_date">Date *</label>
    <input type="date" id="reservation_date" name="reservation_date" required></p>

    <p><label for="reservation_time">Time *</label>
    <input type="time" id="reservation_time" name="reservation_time" required></p>

    <p><label for="guests">Number of Guests *</label>
    <input type="number" id="guests" name="guests"
    min="1" max="20" required></p>

    <p><label for="special_request">Special Request</label>
    <textarea id="special_request" name="special_request"
    maxlength="255" rows="3" cols="30"></textarea></p>
</fieldset>

<p><input type="submit" value="Reserve My Table"></p>

</form>

<?php include 'footer.php'; ?>

