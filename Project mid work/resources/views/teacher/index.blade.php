<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar-custom {
            background-color:#E91E63;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: white;
        }
        .navbar a {
            float: left;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
            text-align: center;
        }
        .navbar a:hover {
            background-color : #F48FB1;
        }

    </style>
    <title>Teacher</title>
</head>
<body>
    {{--Navigation Bar Design--}}
    <nav class="navbar navbar-expand-lg navbar-custom " >
        <a class="navbar-brand" href="#" ><b style="font-size:30px">Welcome!! Teacher</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="nav navbar-nav navbar-right" >
            <a class="nav-item nav-link active navbar-text" href="{{route('teacher')}}"><i class="fa fa-fw fa-home"></i>Home </a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-user"></i>Profile</a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-book"></i>Courses</a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-users"></i>Students</a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-money"></i>Accounts</a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-bell"></i>Notifications</a>
            <a class="nav-item nav-link active navbar-text" href="#"><i class="fa fa-fw fa-sign-out"></i>Log out</a>
          </div>
        </div>
    </nav>

    {{--University Card Design--}}
    <div align="center" style="padding:2%">
      <div class="card" style="width:70%">
        <div class="card-header" >
          <h2>University</h2>
        </div>
        <div class="card-body">
          <h4 class="card-title">Dear Faculties</h4>
          <p class="card-text">As you all know that this is an education institution, you will have to mainain the students as well as
            have to maintain some rules and regulations.<br> Please go through the policies and if there is any query related to policies
            or any other problem you can let us know by mailing us.
          </p>
          <a href="#" class="btn btn-primary">University Policy</a>
        </div>
      </div>
    </div>


    {{--Courses Design--}}
    <div align="center" style="padding:2%">
    <div class="row" style="width:70%">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Course1 </h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go to course</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="width:70%">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Course2</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go to course</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div align="center" style="padding:2%">
      <div class="row" style="width:70%">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Course1 </h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go to course</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="width:70%">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Course2</h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go to course</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div align="center" style="padding:2%">
        <div class="row" style="width:70%">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Course1 </h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go to course</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="width:70%">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Course2</h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go to course</a>
              </div>
            </div>
          </div>
        </div>
        </div>

    {{--Footer Design--}}
     <footer class="text-center text-white" style="background-color: #E91E63;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-facebook"></i
            ></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-twitter"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-linkedin"></i
            ></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fa fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="#">UMS</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>
