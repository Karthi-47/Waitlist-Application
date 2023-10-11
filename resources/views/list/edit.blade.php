<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Edit Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSm07SnpJef0486qhLn
uZ2cdeRh002iuK6FUUVM" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/
bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body><!-- Start: Navbar Right Links (Dark) -->
  <nav class="navbar navbar-expand-md bg-dark py-3" data-bs-theme="dark">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span
          class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
          data-aos="fade-down" data-aos-delay="300"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
            fill="currentColor" viewBox="0 0 16 16" class="bi bi-apple" data-aos="fade-down" data-aos-delay="300">
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z">
            </path>
            <path
              d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z">
            </path>
          </svg></span><span data-aos="fade-down" data-aos-delay="300"
          style="font-family: Poppins, sans-serif;">APPLE</span></a><button data-bs-toggle="collapse"
        class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span
          class="navbar-toggler-icon"></span></button>

    </div>
  </nav><!-- End: Navbar Right Links (Dark) --><!-- Start: Ludens Users - 0 Profile Content -->
  <div class="container-fluid">
    <h3 class="text-dark mb-4" style="margin-top: 17px;">Edit Details <i class="bi
        bi-pencil-square"></i></h3>
    <div class="card shadow mb-3">
      <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold" style="font-size: 18px;">Personal Details</p>
      </div>
      <div class="card-body"><!-- Start: Form -->
        <form method="POST" action="update">
            @csrf
            @method('PUT')
          <div class="row" style="margin-bottom: 25px;text-align: left;">
            <div class="col-md-6 text-start">
              <div class="mb-3"><label class="form-label" for="lastname"><strong>First Name</strong></label><input
                  class="form-control" value="{{ old ('fname', $details->fname) }}" type="text" id="fname" name="fname" placeholder="Enter First Name" required></div>
            </div>
            <div class="col-md-6 text-start">
              <div class="mb-3"><label class="form-label" for="firstname"><strong>Last Name</strong></label><input
                  class="form-control" value="{{ old ('lname', $details->lname) }}" type="text" id="lname" name="lname" placeholder="Enter Last Name" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="email"><strong>Email&nbsp;</strong></label><input
                  class="form-control" value="{{ old ('email', $details->email) }}" type="email" placeholder="Enter Email" id="email" name="email" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="phone"><strong>Phone Number</strong></label><input
                  class="form-control" value="{{ old ('phone', $details->phone) }}" type="phone" placeholder="Enter Phone Number" name="phone" id="phone" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input
                  class="form-control" value="{{ old ('country', $details->country) }}" type="text" placeholder="Enter Country" name="country" id="country" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="state"><strong>State</strong></label><input
                  class="form-control" value="{{ old ('state', $details->state) }}" type="text" placeholder="Enter State" name="state" id="state" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input
                  class="form-control" value="{{ old ('city', $details->city) }}" type="text" id="city" placeholder="Enter City" name="city" required></div>
            </div>
            <div class="col-md-6">
              <div class="mb-3"><label class="form-label" for="pincode"><strong>Pincode</strong></label><input
                  class="form-control" value="{{ old ('pincode', $details->pincode) }}" type="text" placeholder="Enter Pincode" name="pincode" id="pincode" required></div>
            </div><!-- Start: Error Messages -->
            <div class="col">
              <p id="emailErrorMsg" class="text-danger" style="display:none;"></p>
              <p id="passwordErrorMsg" class="text-danger" style="display:none;"></p>
            </div><!-- End: Error Messages -->
            <div class="col-md-12" style="text-align: right;margin-top: 5px;"><button class="btn btn-primary btn-sm"
                id="submitBtn" type="reset"
                style="padding: 9px 8px;width: 110.6842px;margin-right: 27px;font-size: 15px;background: var(--bs-danger);">Clear All</button><button
                class="btn btn-primary btn-sm" id="submitBtn-1" type="submit"
                style="padding: 9px 8px;width: 110.6842px;font-size: 15px;">Update</button></div>
          </div>
        </form><!-- End: Form -->
      </div>
    </div>
  </div><!-- End: Ludens Users - 0 Profile Content -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://geodata.solutions/includes/countrystate.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb
  crossorigin="anonymous"></script>

  <script src="/{{asset('JS/script_book.min.js')}}"></script>
  <script src="{{asset('JS/script.min.js')}}"></script>
</body>

</html>