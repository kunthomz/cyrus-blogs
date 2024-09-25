<?php 
// Template Name: php testing
// Get the data
$data = gr();

// Check if the data is available and is an array
if($data && is_array($data)) {
    // Loop through each user
    foreach($data as $user) {
        echo "Name: " . $user['name'] . "<br>";
        echo "Age: " . $user['age'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
        echo "Is Member: " . ($user['isMember'] ? 'Yes' : 'No') . "<br>";
        echo "Address: " . $user['address']['street'] . ", " . $user['address']['city'] . ", " . $user['address']['state'] . "<br>";

        // Loop through orders for each user
        if(!empty($user['orders'])) {
            echo "Orders:<br>";
            foreach($user['orders'] as $order) {
                echo "Order ID: " . $order['orderId'] . "<br>";
                echo "Product: " . $order['product'] . "<br>";
                echo "Quantity: " . $order['quantity'] . "<br>";
                echo "Price: $" . $order['price'] . "<br><br>";
            }
        } else {
            echo "No orders found.<br><br>";
        }
    }
} else {
    echo "No data available.";
}
?>
