<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<header class="header">
    <h1><strong> Wilson's Restaurant INC. </strong></h1>

    <div class="nav">
        <ul>
            <li><a href="restaurant.php">Home</a></li>
            <li><a href="pastOrders.php">Past Orders</a></li>
            <li><a href="orderInfo.php">Order Information</a></li>
            <li><a class="active" href="customer.php">Customers</a></li>
            <li><a href="employee.php">Employee</a></li>
        </ul>
    </div>

    <div class=underHeader>
        <h2>Add Customer</h2>
        <form id= form action="customer.php" method="post">
            <input name="email" type="email" title="First Name" placeholder="email" required/>
            <input name="first_name" type="text" title="Customer ID" placeholder="first name" required/>
            <input name="last_name" type="text" title="Last Name" placeholder="last name" required/>
            <input name="street" type="text" title="Street" placeholder="st" required/>
            <input name="city" type="text" title="City" placeholder="city" required/>
            <input name="postal_code" type="text" title="Postal Code" placeholder="X#X#X#" required/>
            <input name="phone_number" type="text" title="Phone Number" placeholder="10 digit phone number" required/>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

        <?php
            include "assets/php/customer.php";
        ?>
</header>
</body>
</html>