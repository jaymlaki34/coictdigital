<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">

    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="index.php" class="nav-link scrollto"> <span>Home</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "department1.php";
                      } else if ($_SESSION["userData"]["role"] == 1) {
                        echo "evaluation1.php";
                      }
                      ?>" class="nav-link scrollto"> <span>Course Evaluation</span></a></li>
        <li><a href="alumnirecords.php" class="nav-link scrollto"><span>Alumni Records</span></a></li>
        <li><a href="teaching.php" class="nav-link scrollto"> <span>Teaching Monitoring</span></a></li>
        <li><a href="courseallocation.php" class="nav-link scrollto"> <span>Course Allocation</span></a></li>
        <li><a href="examinvigilation.php" class="nav-link scrollto"> <span>Exam Invigilation</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->