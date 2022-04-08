<!DOCTYPE html>

<html>

<head>

    <title>jquery input mask phone number validation - itsolutionstuff.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

</head>

<body>



<div class="container">

    <h1>jquery input mask phone number validation - itsolutionstuff.com</h1>



    <strong>Phone Number:</strong>

    <input type="text" name="phone" class="phone form-control" value="7898978998">



    <strong>Phone Number 2:</strong>

    <input type="text" name="phone" class="phone2 form-control">



    <strong>Phone Number 3:</strong>

    <input type="text" name="phone" class="phone3 form-control">



</div>



<script>

    $(document).ready(function(){

        $('.phone').inputmask('(999)-999-9999');

        $('.phone2').inputmask('(99)-9999-9999');

        $('.phone3').inputmask('99-9999999999');

    });

</script>



</body>

</html>
