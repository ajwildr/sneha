function checkStatus(orderId) {
    // For testing purposes, we'll just simulate a successful payment
    setTimeout(() => {
        const statusDiv = document.querySelector('.payment-status');
        statusDiv.classList.remove('status-pending');
        statusDiv.classList.add('status-completed');
        statusDiv.innerHTML = '<p class="font-bold">Status: Completed</p>';
        
        const button = document.querySelector('button');
        button.style.display = 'none';
    }, 2000);
}