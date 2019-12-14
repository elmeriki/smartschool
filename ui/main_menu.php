<?php
include '../controller/sessioncontroller.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="boostrap/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="boostrap/bootstrap.js"></script>
    <script src="boostrap/jquery.js"></script>
    <link href="../images/faviclogo.png" rel="shortcut icon" />
    <title>My School App | Dashboard </title>
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
  background-color:#222222;
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
            <li><a href="payment.php">Payment</a></li>
            <li><a href="feed.php">Feed</a></li>
            <li><a href="reporterrors.php">Contact</a></li>
            <li><a href="searchpayment.php">Search Payment</a></li>
            <li><a href="../controller/logoutcontroller.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search student...">
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="list-group-item list-group-item-action" href="dashbaord.php">Dasbaord</a></li>
            <li><a class="list-group-item list-group-item-action" href="createnewstudent.php">Register New Student</a></li>
            <li><a class="list-group-item list-group-item-action" href="updatestudentregistration.php">Update Student Profile</a></li>
            <li><a class="list-group-item list-group-item-action" href="deleteaccount.php">Delete Student Profile</a></li>
            <li><a class="list-group-item list-group-item-action" href="searchstudent.php">Search Student Profile</a></li>
<hr>
          </ul>
          <ul class="nav nav-sidebar">
          <li><a class="list-group-item list-group-item-action" href="registerstaff.php">Register New Teacher</a></li>
            <li><a class="list-group-item list-group-item-action" href="updatestaff.php">Update Teacher Profile</a></li>
            <li><a class="list-group-item list-group-item-action" href="deletestaff.php">Delete Teacher Profile</a></li>
            <li><a class="list-group-item list-group-item-action" href="searchstaff.php">Search Teacher Profile</a></li>
          </ul>
          <hr>
          <ul class="nav nav-sidebar">
            <li><a class="list-group-item list-group-item-action" href="fetchallstudent.php">FetchAll Student</a></li>
            <li><a class="list-group-item list-group-item-action"href="fetchallstaff.php">FetchAll Teachers</a></li>
            <li><a class="list-group-item list-group-item-action" href="feed.php">Student Feed</a></li>
          </ul>
       

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
