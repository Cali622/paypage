<<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Pay Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
   </head>
   <body>
      <div class="container">
         <h2 class="my-4 text-center">Intro to Course</h2>
         <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">
               <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
               <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
               <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
               <div id="card-element" class="form-control">
                  <!-- A Stripe Element will be inserted here. -->
               </div>
               <!-- Used to display form errors. -->
               <div id="card-errors" role="alert"></div>
            </div>
            <button>Submit Payment</button>
         </form>
      </div>      
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://js.stripe.com/v3/"></script>
      <script src="./js/charge.js"></script>
   </body>
</html>