<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/base.js') }}"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="navcontainer">
      <nav id="navbar" class="navbar navbar-expand-sm navbar-light navbar-custom">
          <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
            <div class="brandcontainer">
              <a class="navbar-brand" href="#">
                <img id="logoimg" class="homelogo" src="{{ asset('img/logo.png') }}"  alt="">
              </a>
            </div>
            <div class="textcenter">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlinks" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
            </div>
              <div class="collapse navbar-collapse text-center" id="navbarlinks">
                  <ul class="navbar-nav flex-wrap">
                      <li class="nav-item">
                          <a class="nav-link rounded" href= "{{ route ('home') }}">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route ('history') }}">School History</a>
                          <a class="dropdown-item" href="{{ route ('ero') }}">ERO Report</a>
                          <a class="dropdown-item" href="{{ route ('showteachingstaff') }}">Teaching Staff</a>
                          <a class="dropdown-item" href="{{ route ('showsupportstaff') }}">Support  Staff</a>
                          <a class="dropdown-item" href="{{ route ('vaccancy') }}">Vaccancy</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          School Information
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route ('curriculum') }}">Curriculum</a>
                          <a class="dropdown-item" href="{{ route ('timetable') }}">Time Table</a>
                          <a class="dropdown-item" href="{{ route ('codeofconduct') }}">Code of Conduct</a>
                          <a class="dropdown-item" href="{{ route ('lunchordders') }}">Lunch Orders</a>
                          <a class="dropdown-item" href="{{ route ('afterschoolcare') }}">After Shool Care</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Enrollment
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route ('enrollment') }}">Enrollment</a>
                          <a class="dropdown-item" href="{{ route ('uniform') }}">Uniform</a>
                          <a class="dropdown-item" href="{{ route ('newentrants') }}">New Entrants</a>
                          <a class="dropdown-item" href="{{ route ('internationalstudents') }}">International Students</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Our Student
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Start Student</a>
                          <a class="dropdown-item" href="#">ESOL</a>
                          <a class="dropdown-item" href="#">School Leaders</a>
                          <a class="dropdown-item" href="#">Writers' Club</a>
                          <a class="dropdown-item" href="#">Chess & Robotics</a>
                          <a class="dropdown-item" href="#">Music</a>
                          <a class="dropdown-item" href="#">Sports</a>
                          <a class="dropdown-item" href="#">School Production</a>
                        </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link rounded" href="#">News</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link rounded" href="#">Team blog</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Contact Us
                        </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>

    @yield('content')

    <div class="tab3">
      <div class="container">
        <div class="row">
          <div class="col-md-8  marginpadding0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.983467417739!2d172.58173461591062!3d-43.52353747912598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318aea173f5f2f%3A0x3a80c4e3f5a00123!2z5Z2O54m55Lyv6Zu35aSn5a2m!5e0!3m2!1szh-CN!2snz!4v1548728792431" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-4  textleft padding10 addressframe">
            <h4>Contact us:</h4>
            <p>Email: abc@smart.edu.ca.nz</p>
            <p>Phone: 123456789</p>
            <p>Fax:987564321</p>
            <p>Address: 99 High Mouantian Road, City Center, Christchurch, New Zealand</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer ">
       <div class="container text-center">
         <p class="">Ji Xiang Primary Shcool | 99 High Mouantian Road, City Center, Christchurch, New Zealand.</p>
         <p class="">WebSite Created By Will</p>
       </div>
     </footer>
  </body>
</html>
