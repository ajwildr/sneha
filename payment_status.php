<?php
require_once 'config.php';
$order_id = filter_input(INPUT_GET, 'order_id', FILTER_SANITIZE_STRING);

include 'includes/header.php';
?>

<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-6">Payment Status</h2>
    
    <div class="payment-status status-pending">
        <p class="font-bold">Status: Pending</p>
    </div>
    
    <div class="mb-6">
        <p class="text-gray-600 mb-2">Order ID: <?php echo $order_id; ?></p>
    </div>
    
    <button onclick="checkStatus('<?php echo $order_id; ?>')" 
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
        Refresh Status
    </button>
</div>

<?php include 'includes/footer.php'; ?>
