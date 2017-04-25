<doctyp html>
<html>
    <head>
        <title>strip payment element</title>
        <link rel='stylesheet' type='text/css' href='css/style.css'/>
    </head>
    <body>
        <script src="https://js.stripe.com/v3/"></script>

        <form action="/charge" method="post" id="payment-form">
          <div class="form-row">
            <label for="card-element">
              Credit or debit card
            </label>
            <div id="card-element">
              <!-- a Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors -->
            <div id="card-errors"></div>
          </div>

          <button>Submit Payment</button>
        </form>

        <script type="text/javascript" src="scripts/strip.js"></script>
    </body>
</html>