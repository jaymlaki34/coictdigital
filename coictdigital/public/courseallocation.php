<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  
<?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    unset($_SESSION["studentFilledCount"]);

    ?>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
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
            ?>" class="nav-link scrollto  "> <span>Course Evaluation</span></a></li>        
          <li><a href="alumnirecords.php" class="nav-link scrollto"><span>Alumni Records</span></a></li>
          <li><a href="teaching.php" class="nav-link scrollto"> <span>Teaching Monitoring</span></a></li>
          <li><a href="courseallocation.php" class="nav-link scrollto" active> <span>Course Allocation</span></a></li>
          <li><a href="examinvigilation.php" class="nav-link scrollto"> <span>Exam Invigilation</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main">

    <div class="row" >
      <div class="col-md-12">
       <span class="badge alert-success" style="float: right; width: 100px;">Admin</span>
      </div>
    </div>
       <!-- ======= Form Section ======= -->
       <section id="allocation" class="services">
        <div class="container-fluid">            
         <div class="section-title">
            <h2>COURSE ALLOCATION</h2>
          </div>
          <div class="container">
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              <div class="col-sm-5 mb-1">
                <a href="#addnewModal"  data-toggle="modal" data-target="#addnewModal" > 
                  <button type="submit" class="mx-auto button" style="float: right; height: 40px;">Add New</button>
                </a>
                </div>

            </div>
           <div class="form-group row">
              <h5>Table of course allocation for staff</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                  <tr>
                    <th scope="col">Staff Name</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                  <tr>
                    <td>Mlaki Japhet</td>
                    <td>IS 345</td>
                    <td>Information Systems</td>
                    <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          
          </form>
        </div>


        
        </div>
      </section><!-- End Form Section -->
       <!-- fading addnew form-->
       <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Add New Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading aadnew form-->
      
      <!-- fading edit form-->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Edit Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="New Course Name">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading edit form-->


  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>coictdigital@udsm.co.tz</span></strong>
      </div> -->
     
    </div>
  </footer><!-- End  Footer -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

  <script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
   <!-- main js file -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

</body>

</html>