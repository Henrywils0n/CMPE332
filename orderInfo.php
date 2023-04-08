<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

    <?php
        include "assets/php/connectdb.php";
    ?>

    <!-- NAV BAR -->
    <header class="header">
        <h1><strong> Wilson's Restaurant INC. </strong></h1>

        <nav class="nav">
            <ul>
                <li><a href="restaurant.php">Home</a></li>
                <li><a href="pastOrders.php">Past Orders</a></li>
                <li><a class="active" href="orderInfo.php">Order Information</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="employee.php">Employee</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div class=underHeader>
      <h2>Search Orders By Date</h2>
      <form action="orderInfo.php" method="get">
        <input name="date" type="date" title="Orders By Date" placeholder="Date" required/>
        <button type="submit" class="btn">Submit</button>
      </form>
    </div><!--end log form -->

    <?php
        include "assets/php/orderInfo.php";
    ?>





</body>
</html>
