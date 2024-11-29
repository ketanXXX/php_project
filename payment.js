// Replace 'your_stripe_publishable_key' with your actual Stripe publishable key
var stripe = Stripe('your_stripe_publishable_key');
var elements = stripe.elements();

// Create an instance of the card Element
var card = elements.create('card');

// Add an instance of the card Element into the `card-element` div
card.mount('#card-element');

function submitPayment() {
    var clientSecret = document.getElementById('client-secret').value;

    stripe.confirmCardPayment(clientSecret, {
        payment_method: {
            card: card
        }
    }).then(function(result) {
        if (result.error) {
            // Show error to your customer
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // The payment succeeded
            console.log(result.paymentIntent);
            alert("Payment successful!");
        }
    });
}
