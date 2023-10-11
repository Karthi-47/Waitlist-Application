<!DOCTYPE html>
<html data-bs-theme="light" lang="en"
  style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);margin-top: 0;margin-bottom: 0;text-align: center;"
  data-bs-spy="scroll">

<head></head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Project_Cart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>
    @font-face {
    font-family: Aclonica;
    src: url({{asset('fonts/K2FyfZJVlfNNSEBXGY7UAo8.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
}

@font-face {
    font-family: Akronim;
    src: url({{asset('fonts/fdN-9sqWtWZZlHRpygl7kWYN.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
}

@font-face {
    font-family: Akronim;
    src: url({{asset('fonts/fdN-9sqWtWZZlHRpygd7kQ.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
}

@font-face {
    font-family: Poppins;
    src: url({{asset('fonts/pxiEyp8kv8JHgFVrJJbecmNE.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF
}

@font-face {
    font-family: Poppins;
    src: url({{asset('fonts/pxiEyp8kv8JHgFVrJJnecmNE.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
}

@font-face {
    font-family: Poppins;
    src: url({{asset('fonts/pxiEyp8kv8JHgFVrJJfecg.woff2')}}) format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
}

@font-face {
    font-family: swiper-icons;
    src: url({{asset('fonts/swiper-icons.woff')}}) format('woff');
    font-weight: 400;
    font-style: normal;
    font-display: auto
}
  </style>

</head>
<body>
  <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body" style="padding: 0;margin-top: 26px;"><button class="btn-close" type="button"
            aria-label="Close" data-bs-dismiss="modal"
            style="text-align: right;padding: 0px;margin-left: 421px;"></button><!-- Start: PS Cinel cursos heading -->
          <h4 class="display-3 text-uppercase fs-1 fw-semibold" style="padding-right: 10px;padding-bottom: 10px;">
            &nbsp;Register Here!</h4><!-- End: PS Cinel cursos heading --><!-- Start: Google Style Login -->
          <div class="shadow-lg login-card"><img class="profile-img-card"
              src="{{asset('Images/Apple-Logo.png')}}" width="96" height="96"
              style="width: auto;">
            <p class="profile-name-card"> </p>
            <form method="POST" action="register" style="height: auto;width: auto;padding: 0;">
                @csrf
                <div class="form-group mb-3"><input class="form-control" type="email" name="email"
                    placeholder="Email or Mobile No" required></div>
                <div class="form-group mb-3"><input class="form-control" type="password" id="password" name="password"
                    placeholder="Password" required></div>
                <div class="form-group mb-3"><input class="form-control" type="password" id="Cnfpassword"
                    name="cnfpassword" placeholder="Confirm Password" required></div>
                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage"
                    class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3">
                  <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                        type="checkbox">Accept the terms &amp; Conditions.</label></div>
                </div>
                <div class="form-group mb-3"><button class="btn btn-primary d-block w-100" id="submitButton"
                    type="submit" style="color: rgb(255,255,255);background-color: #00b5a8;">Submit</button></div>
              </form>
          </div><!-- End: Google Style Login -->
        </div>
      </div>
    </div>
  </div>
  <!-- Start: Navbar Right Links (Dark) -->
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
      <div class="collapse navbar-collapse" id="navcol-5">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse"
              href="/index.html" style="font-family: Poppins, sans-serif;">Home</a></li>
          <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse"
              href="#" style="font-family: Poppins, sans-serif;" onclick="location.href='waitlist';">Waitlist</a></li>
        </ul>
          <a class="btn btn-primary ms-md-2" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="/admin" style="font-family: Poppins, sans-serif;">Admin</a>
      </div>
    </div>
  </nav><!-- End: Navbar Right Links (Dark) --><!-- Start: Simple Slider -->
  <div class="simple-slider"><!-- Start: Slideshow -->
    <div class="swiper-container" ><!-- Start: Slide Wrapper -->
      <div class="swiper-wrapper" style="height: 600px;"><!-- Start: Slide -->
        <div data-aos="zoom-in" class="swiper-slide"
          style="height: 600px;background: url({{asset('Images/2.jpg')}}) center / cover no-repeat;">
          <h1 data-aos="fade-down" data-aos-delay="300"
            style="text-align: center;color: var(--bs-body-bg);display: block;font-weight: bold;font-family: Poppins, sans-serif;margin-top: 520px;backdrop-filter: invert(0%);">
            "Think Different"</h1>
        </div><!-- End: Slide --><!-- Start: Slide -->
        <div class="swiper-slide"
          style="height: 700px;background: url({{asset('Images/15.jpg')}}) center / cover no-repeat;">
        </div><!-- End: Slide --><!-- Start: Slide -->
      </div><!-- End: Slide Wrapper --><!-- Start: Pagination -->
      <div class="swiper-pagination"></div><!-- End: Pagination --><!-- Start: Previous -->
      <div class="swiper-button-prev"></div><!-- End: Previous --><!-- Start: Next -->
      <div class="swiper-button-next"></div><!-- End: Next -->
    </div><!-- End: Slideshow --><!-- Start: Projects Grid Horizontal -->
    <div class="container py-4 py-xl-5" style="padding: 0px;">
      <h2 data-bss-disabled-mobile="true" class="pulse animated infinite"
        style="font-family: 'Poppins';font-weight: bold;">
        Upcoming Mobiles</h2>
      <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <p class="w-lg-50" style="font-size: 20px;text-shadow: 0px 0px 2px var(--bs-yellow);">Apple's "Wonderlust"
            event was a media event held on Tuesday, September 12, 2023, where the company unveiled the iPhone 15
            lineup, new Apple Watch models, and a new USB-C charging case for AirPods Pro.</p>
        </div>
      </div>
      <div class="row gy-4 row-cols-1 row-cols-md-2">
        <div class="col">
          <div class="d-flex flex-column flex-lg-row">
            <div class="w-100"><img data-bs-toggle="tooltip" data-bss-tooltip="" class="d-block w-100 fit-cover"
                style="height: 200px;box-shadow: 0px 0px 15px var(--swiper-theme-color);overflow: clip;margin-bottom: 0px;padding: 16px;padding-bottom: 0px;padding-top: 0px;"
                src="{{asset('Images/iPhone 15 Pro New.jpg')}}"></div>
            <div class="py-4 py-lg-0 px-lg-4" style="box-shadow: 0px 0px 15px var(--swiper-theme-color);">
              <h4>iPhone 15 Pro&nbsp;</h4>
              <p style="font-size: 18px;">iPhone 15 Pro is the first iPhone to support USB 3, for a huge leap in data
                transfer speeds and faster workflows.</p><a class="btn btn-primary ms-md-2" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="#" style="font-family: Poppins, sans-serif;" data-bs-target="#modal-1"
          data-bs-toggle="modal">PRE BOOK</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column flex-lg-row">
            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover"
                style="height: 200px;text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);padding: 9px;padding-top: 0;padding-bottom: 0;"
                src="{{asset('Images/iPhone 15 New.jpg')}}"></div>
            <div class="py-4 py-lg-0 px-lg-4"
              style="text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);">
              <h4>iPhone 15&nbsp;</h4>
              <p style="font-size: 18px;">iPhone 15 New is the first iPhone to feature an aerospace grade titanium
                design,using the same alloy that spacecraft.</p><a class="btn btn-primary ms-md-2" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="#" style="font-family: Poppins, sans-serif;" data-bs-target="#modal-1"
          data-bs-toggle="modal">PRE BOOK</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column flex-lg-row">
            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover"
                style="height: 200px;text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);padding: 5px;"
                src="{{asset('Images/MAC.jpg')}}"></div>
            <div class="py-4 py-lg-0 px-lg-4"
              style="text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);">
              <h4>Apple Mac Book Pro</h4>
              <p style="font-size: 18px;">The 13-inch MacBook Pro is supercharged by M2. It's our most portable pro
                laptop with all-day battery life.</p><a class="btn btn-primary ms-md-2" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="#" style="font-family: Poppins, sans-serif;" data-bs-target="#modal-1"
          data-bs-toggle="modal">PRE BOOK</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column flex-lg-row">
            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover"
                style="height: 200px;text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);padding: 10px;"
                src="{{asset('Images/Apple Watch SE.png')}}"></div>
            <div class="py-4 py-lg-0 px-lg-4"
              style="text-shadow: 0px 0px var(--swiper-theme-color);box-shadow: 0px 0px 15px var(--swiper-theme-color);">
              <h4>Apple Watch Series 9</h4>
              <p style="font-size: 18px;">Apple Watch SE has powerful connectivity, fitness, health and safety features
                and is available in three case colours.</p><a class="btn btn-primary ms-md-2" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="#" style="font-family: Poppins, sans-serif;" data-bs-target="#modal-1"
          data-bs-toggle="modal">PRE BOOK</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End: Projects Grid Horizontal -->
    <div>
      <h1 data-aos="zoom-in"
        style="font-family: Aclonica, sans-serif;box-shadow: 0px 0px;text-shadow: 0px 0px 6px var(--bs-body-color);">
        Trending Now</h1>
    </div>
    <div style="background: var(--bs-secondary-text-emphasis);"><!-- Start: card-3-column-animation-shadows-images -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"
              style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
              <div class="bg-light border rounded shadow card" data-bss-hover-animate="pulse"><img class="card-img-top"
                  src="{{asset('Images/airpods.jpg')}}"
                  style="background: var(--swiper-theme-color);">
                <div class="card-body" style="background: var(--bs-card-border-color);">
                  <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);font-weight: bold;">
                    AirPods Pro with Charging Case&nbsp;</h3>
                  <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                  <!-- Start: Lorem1 -->
                  <p id="lorem">From ₹3983.00/mo.Per Month with instant savings and No Cost EMI
                    or
                    MRP ₹24900.00
                    (Incl. of all taxes)</p><!-- End: Lorem1 --><button class="btn btn-outline-success" type="button"
                    style="font-weight: normal;font-family: Antic, sans-serif;">Buy Now</button>
                </div>
              </div>
            </div>
            <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"
              style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;margin-right: 0px;margin-bottom: 0px;">
              <div class="bg-light border rounded shadow card" data-bss-hover-animate="pulse"><img class="card-img-top"
                  src="{{asset('Images/case.jpg')}}">
                <div class="card-body" style="background: var(--bs-card-border-color);">
                  <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);font-weight: bold;">
                    iPhone 15 Pro Clear Case with MagSafe</h3>
                  <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                  <!-- Start: Lorem1 -->
                  <p id="lorem">From ₹853.00/mo. Per Month with EMIFootnote◊◊
                    or
                    MRP ₹4900.00
                    (Incl. of all taxes)</p><!-- End: Lorem1 --><button class="btn btn-outline-success" type="button"
                    style="font-weight: normal;font-family: Antic, sans-serif;">Buy Now</button>
                </div>
              </div>
            </div>
            <div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"
              style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">
              <div class="bg-light border rounded shadow card" data-bss-hover-animate="pulse"><img class="card-img-top"
                  src="{{asset('Images/airtag.jpg')}}">
                <div class="card-body" style="background: var(--bs-card-border-color);">
                  <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);font-weight: bold;">
                    AirTag FineWoven Key Ring Taupe</h3>
                  <p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                  <!-- Start: Lorem1 -->
                  <p id="lorem">From ₹679.00/mo.
                    Per Monthwith EMIFootnote◊◊
                    or
                    MRP ₹3900.00
                    (Incl. of all taxes)</p><!-- End: Lorem1 --><button class="btn btn-outline-success" type="button"
                    style="font-weight: normal;font-family: Antic, sans-serif;">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End: card-3-column-animation-shadows-images -->
    </div>
    <div style="background: var(--bs-primary-border-subtle);width: 100%;height: auto;"><!-- Start: Contact Details -->
      <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
          <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
              <h2 style="font-size: 39.128px;margin-bottom: 0px;">Contact us</h2>
              <h2 style="font-size: 14.128px;">Any Queries Contact Us 24x7</h2>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="d-flex flex-column justify-content-center align-items-start h-100">
                <div class="d-flex align-items-center p-3">
                  <div
                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      viewBox="0 0 16 16" class="bi bi-telephone">
                      <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                      </path>
                    </svg></div>
                  <div class="px-2">
                    <h6 class="text-start mb-0">Phone</h6>
                    <p class="mb-0">+91 6374221424</p>
                  </div>
                </div>
                <div class="d-flex align-items-center p-3">
                  <div
                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      viewBox="0 0 16 16" class="bi bi-envelope">
                      <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                      </path>
                    </svg></div>
                  <div class="px-2">
                    <h6 class="text-start mb-0">Email</h6>
                    <p class="mb-0">karthippm10@gmail.com</p>
                  </div>
                </div>
                <div class="d-flex align-items-center p-3">
                  <div
                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      viewBox="0 0 16 16" class="bi bi-pin">
                      <path
                        d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                      </path>
                    </svg></div>
                  <div class="px-2">
                    <h6 class="text-start mb-0">Location</h6>
                    <p class="mb-0">47th Street,Erode</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <div>
                <form class="p-3 p-xl-4" method="post" action="contact"><!-- Start: Success Example -->
                  @csrf
                  <div class="mb-3"><input class="form-control" type="text" id="name-1" name="namecn" placeholder="Name">
                  </div><!-- End: Success Example --><!-- Start: Error Example -->
                  <div class="mb-3"><input class="form-control" type="email" id="email-1" name="emailcn"
                      placeholder="Email"></div><!-- End: Error Example -->
                  <div class="mb-3"><textarea class="form-control" id="message-1" name="messagecn" rows="6"
                      placeholder="Message"></textarea></div>
                  <div><button class="btn btn-primary d-block w-100" type="submit">Send </button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End: Contact Details -->
    </div><!-- Start: Newsletter Subscription Centered -->
    <section class="newsletter-subscribe py-4 py-xl-5">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2 class="display-6 fw-bold">Don't Miss Anything!</h2>
          </div>
        </div>
        <form class="d-flex justify-content-center flex-wrap" method="post" action="subscribe">
          @csrf
          <div class="mb-3"><input class="form-control" type="email" name="emailsub" placeholder="Enter Your Email"></div>
          <div class="mb-3"><button class="btn btn-primary ms-2" type="submit">Subscribe Now</button></div>
        </form>
      </div>
    </section><!-- End: Newsletter Subscription Centered --><!-- Start: Footer Dark -->
    <footer class="text-center bg-dark">
      <div class="container text-white py-4 py-lg-5">
        <ul class="list-inline">
          <li class="list-inline-item me-4"><a class="link-light" href="#">Privacy Policy</a></li>
          <li class="list-inline-item me-4"><a class="link-light" href="#">Terms of Use</a></li>
          <li class="list-inline-item"><a class="link-light" href="#">Sales Policy</a></li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
              </path>
            </svg></li>
          <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
              </path>
            </svg></li>
          <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
              </path>
            </svg></li>
        </ul>
        <h1 style="font-size: 18.88px;">Copyright © 2023 Apple Inc. All rights reserved.</h1>
      </div>
    </footer><!-- End: Footer Dark -->
  </div><!-- End: Simple Slider -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="{{asset('JS/script.min.js')}}"></script>
</body>

</html>