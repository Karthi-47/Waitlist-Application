<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Pre_Book</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
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
      <div class="collapse navbar-collapse" id="navcol-5">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"></li>
          <li class="nav-item"></li>
          <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse"
              href="#" style="font-family: Poppins, sans-serif;" onclick="location.href='index';">Back</a></li>
        </ul><a class="btn btn-primary ms-md-2" onclick="location.href='index';" role="button" data-bss-disabled-mobile="true" data-aos="fade-down"
          data-aos-delay="300" href="#" style="font-family: Poppins, sans-serif;" data-bs-target="#modal-1"
          data-bs-toggle="modal">Logout</a>
      </div>
    </div>
  </nav><!-- End: Navbar Right Links (Dark) -->
  <h3 class="text-center" style="margin-top: 6px;">Pre Booking Wait List</h3>
  <!-- Start: DataTable - Fully BSS Editable -->
  <section class="mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header py-2" style="background: var(--bs-form-valid-border-color);">
              <p class="lead text-info m-0"><strong>Your Position</strong></p>
            </div>
            <div class="card-body" style="display: flex;">
              <div class="table-responsive table mb-0 pt-3 pe-2" style="display: block;">
                <table class="table table-striped table-sm my-0 mydatatable">
                  <thead>
                    <tr>
                      <th style="text-align: center;">Position</th>
                      <th style="text-align: center;">First Name</th>
                      <th style="text-align: center;">Email ID</th>
                      <th style="text-align: center;">Phone</th>
                      <th style="text-align: center;">Country</th>
                      <th style="text-align: center;">State</th>
                      <th style="text-align: center;">City</th>
                      <th style="text-align: center;">Pincode</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data)
                    @csrf
                    <tr>
                      <td style="text-align: center;">{{$loop->iteration}}</td>
                      <td style="text-align: center;">{{$data->fname}}</td>
                      <td style="text-align: center;">{{$data->email}}</td>
                      <td style="text-align: center;">{{$data->phone}}</td>
                      <td style="text-align: center;">{{$data->country}}</td>
                      <td style="text-align: center;">{{$data->state}}</td>
                      <td style="text-align: center;">{{$data->city}}</td>
                      <td style="text-align: center;">{{$data->pincode}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End: DataTable - Fully BSS Editable -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  <script src="{{asset('JS/script_waitlist.js')}}"></script>
</body>

</html>