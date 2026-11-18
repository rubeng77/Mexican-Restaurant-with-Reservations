# Mexican-Restaurant-with-Reservations
A PHP and MySQL site for a Mexican restaurant called Sabores de Michoacan. Customers can fill out reservation forms that get saved to a MySQL database. 

## How the form works
-reserve.php has the form which it sends with 'POST' to save_reservation.php

-save_reservation.php then checks the input, connects as sabores_user, and saves the reservation with a prepare statement. 

-The saved reservations can be seen in phpMyAdmin as follows. click sabores_db-> reservations -> Browse

## How to setup
1. Copy the sabores_reservations folder into XAMPP's htdocs folder. 
2. Start Apache and MySQL in XAMPP. 
3. In phpMyAdmin, open the SQL tab, paste in database/sabores_db.sql, and then click Go. This creates the sabores_db database,  the reservations table, and the user sabores_user. 
4. Go to ‘http://localhost/sabores_reservations/index.php' in your browser.



