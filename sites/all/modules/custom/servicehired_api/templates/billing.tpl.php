<h2>
  Billing
</h2>

<div class="order-flow">
    <div class="left-col"><h3>How does billing work?</h3>
        <p>We charge donations and bookings that are directly paid to the business owners after they have completed their job with you.</p>

        <h3>Payment history</h3>
        <ul><?php print get_user_billing(); ?></ul>
    </div>
    <div class="right-col">
  <h3>Your default payment method</h3>
  <div class="grid">
    <?php print formatted_card(); ?>
  </div>
    <div class="btn btn-change">Change payment method</div>
    </div>
</div>

<style>
    .card {
        max-width: 282px;
        padding: 15px 15px 15px 82px;
        background-size: 56px;
        background-repeat: no-repeat;
        background-position: 15px 17px;
        font-size: 15px;
        background-color: rgba(211, 211, 211, 0.24);
        border-radius: 5px;
    }
    .card-Visa {
        background-image: url(https://cdn4.iconfinder.com/data/icons/payment-method/160/payment_method_card_visa-512.png);
    }
    .left-col, .right-col {
        width: 50%;
        float: left;
        padding-right: 10%;
    }
    .btn.btn-change {
        color: white;
        background: #f04e23;
        margin-top: 15px;
    }
</style>
