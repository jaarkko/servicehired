<h2>
  Billing
</h2>

<div class="order-flow">
  <h3>Your default payment method</h3>
  <div class="grid">
    <?php print formatted_card(); ?>
  </div>
    <div class="btn btn-change">Change payment method</div>
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
</style>