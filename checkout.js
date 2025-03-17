document.addEventListener('DOMContentLoaded', () => {
    const checkoutButton = document.getElementById('checkout-button');
    const cartItemsDiv = document.getElementById('cart-items');
    const paymentStatusDiv = document.getElementById('payment-status');

    // Fetch cart items from your PHP backend (/api/cart)
    fetch('/api/cart')
        .then(response => response.json())
        .then(cart => {
            if (cart && cart.length > 0) {
                cart.forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.innerHTML = `
                        <img src="${item.image_path}" alt="${item.name}" style="max-width: 100px;">
                        <h3>${item.name}</h3>
                        <p>${item.description}</p>
                        <p>Quantity: ${item.quantity}</p>
                        <p>Price: $${(item.price / 100).toFixed(2)}</p>
                    `;
                    cartItemsDiv.appendChild(itemDiv);
                });
            } else {
                cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
                checkoutButton.disabled = true;
            }
        })
        .catch(error => {
            console.error('Error fetching cart:', error);
            cartItemsDiv.innerHTML = '<p>Error loading cart.</p>';
        });

    checkoutButton.addEventListener('click', () => {
        fetch('/stripe-checkout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.url) {
                window.location.href = data.url;
            } else if (data.error) {
                paymentStatusDiv.innerHTML = `<p style="color:red;">Error: ${data.error}</p>`;
            } else {
                paymentStatusDiv.innerHTML = `<p style="color:red;">An unknown error occurred.</p>`;
            }
        })
        .catch(error => {
            console.error('Error during checkout:', error);
            paymentStatusDiv.innerHTML = `<p style="color:red;">Error during checkout.</p>`;
        });
    });

    // Check for payment status from the URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('payment') === 'done') {
        paymentStatusDiv.innerHTML = '<p style="color:green;">Payment successful!</p>';
    } else if (urlParams.get('payment_fail') === 'true') {
        paymentStatusDiv.innerHTML = '<p style="color:red;">Payment failed.</p>';
    }
});