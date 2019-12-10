<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>My School App | Dashboard </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link href="../images/faviclogo.png" rel="shortcut icon" />
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
  <style>

body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
  
  </style>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MySchool App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Send Message</a></li>
            <li><a href="#">Report</a></li>
            <li><a href="#">Update Admin Profile</a></li>
            <li><a href="../controller/logoutcontroller.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Register New Student</a></li>
            <li><a href="#">Update Student Profile</a></li>
            <li><a href="#">Delete Student Profile</a></li>
            <li><a href="#">Search Student Profile</a></li>
<hr>
          </ul>
          <ul class="nav nav-sidebar">
          <li><a href="#">Register New Teacher</a></li>
            <li><a href="#">Update Teacher Profile</a></li>
            <li><a href="#">Delete Teacher Profile</a></li>
            <li><a href="#">Search Teacher Profile</a></li>
          </ul>
          <hr>
          <ul class="nav nav-sidebar">
            <li><a href="">Report</a></li>
            <li><a href="">Payment</a></li>
            <li><a href="">Attendance</a></li>
            <li><a href="">Downlaod Center</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <p class="page-header"> 
          The easiest solution to take your school to the next level My Smart School is the easiest and 
          complete system to manage the school better, make communication effortless and effective,
           improve student’s performances and increase the efficiency of teachers.
 </p>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/iconimages.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>STUDENT</h4>
              <span class="text-muted">90</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/iconimages.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>TEACHERS</h4>
              <span class="text-muted">80</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/iconimages.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>PRINCIPAL</h4>
              <span class="text-muted">08</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/iconimages.png" width="100" height="100" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>PARENT</h4>
              <span class="text-muted">5</span>
            </div>
          </div> 

          <h2 class="sub-header">Register Student</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Surname</th>
                  <th>Names</th>
                  <th>Email</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
</tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
            <hr>
<center>
<p> 
A powerful solution to simplify the complexity of running a school. A friendly app that connects all core areas of the school, manages all records, analyze the data and gives important insights to greatly improve the performance
 of the students, teachers, and school in general.
</p>

</center>
<hr>
          </div>
        </div>
      </div>
      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
