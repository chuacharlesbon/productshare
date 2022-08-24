
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Primary Meta Tags -->
  <title>Xffiliate Products</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- Meta -->
  <meta name="title" content="{{$product_info->name}} - Xffiliate: Turn Customers to Brand Advocates">
  <meta name="description" content="{{$product_info->description}}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:title" content="{{$product_info->name}} - Xffiliate: Turn Customers to Brand Advocates">
  <meta property="og:description" content="{{$product_info->description}}">
  <meta property="og:image" content="{{$product_info->image}}">

  <!-- Twitter -->
  <meta property="twitter:card" content="">
  <meta property="twitter:url" content="">
  <meta property="twitter:title" content="{{$product_info->name}} - Xffiliate: Turn Customers to Brand Advocates">
  <meta property="twitter:description" content="{{$product_info->image}}">
  <meta property="twitter:image" content="{{$product_info->image}}">
  <title>Xffiliate Product Share</title>
</head>
  <body>
    <div class="container-fluid px-sm-5 px-md-10 px-xl-20 align-items-center">

      <div class="w-100 d-flex flex-row align-items-center mr-auto mt-3">
        <img alt="Xffiliate" style="width: 36px; height: 36px;margin-right: 1rem;" src='{{asset('/xffiliate-logo.png')}}' />
        <p class="mr-auto fs-2 fw-semibold my-auto" style="color: #073763;">
          Xffiliate
        </p>
      </div>
      <hr class="w-100" />
      <div class="container-fluid pt-5 w-100 w-md-75 d-flex flex-column align-items-center">
        <p class="fw-semibold fs-4 mt-5 mb-1 text-center">Almost there!</p>
        <p class="fw-bold fs-2 text-center mb-10" style="color: #073763;">
          Please wait while the <span style="color: #FF733F;"> website</span> loads.
        </p>
        <p class="mb-10 text-center">
          This may take up to 30 seconds. If you encounter a error please reload the page. Thank
          you!
        </p>
      </div>

    </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <span id = "prodlink" hidden>{{$product_info->link}}</span>
    <script src="{{asset('/js/productredirect.js')}}" type = "text/javascript"></script>
  </body>
</html>
