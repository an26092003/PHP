<!-- đặng tiến hưng -->
<?php

include('controllers/c_orders.php');

@session_start();

if (isset($_SESSION['admin_id'])) {
    if ($_SESSION['admin_role'] == 1 || $_SESSION['admin_role'] == 2) {
        $index = new c_order();
        $index-> delete_order();
    } else {
        header('location: index.php');
    }
} else {
    header('location: notfound.php');
}