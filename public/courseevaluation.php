<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");



  if (isset($_SESSION["evaluationFilled"])) {
    $partA = $_SESSION["evaluationFilled"];
    echo "all good";
  } else {
    header("Location:/coictdigital/evaluation.php");
    header("Location: ./evaluation1.php");
  }


  ?>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>

  <main id="main">

    <div class="row">
      <div class="col-md-12">
        <span class="badge alert-success" style="float: right; width: 100px;">Japhet Mlaki</span>
      </div>
    </div>
    <!-- ======= Form Section ======= -->

    <section id="evaluation" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>Quality Assurance Bureau</h3>
          <h3>Undergraduate Programs</h3>
          <h2>STUDENT COURSE EVALUATION QUESTIONNAIRE</h2>

        </div>
        <div class="container">

          <div class="form-group row">
            <h5>Part A: The Participants</h5S>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Code: <?php echo $partA["course_code"]; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Department: <?php echo $partA["department"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Title: <?php echo $partA["course_title"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>College: <?php echo $partA["college"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor's full name: <?php echo $partA["instructor"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Date: <?php echo $partA["date"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Lecture Venue: <?php echo $partA["venue"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Students programme: <?php echo $partA["student_programme"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Class size: <?php echo $partA["class_size"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Study year: <?php echo $partA["study_year"]; ?> </p>
            </div>
          </div>
          <form action="./../login.php" method="POST">
            <div class="form-group row">
              <h5>Please rate the instructor and the course appropriately.Put a tick in the appropiate box found on the extreme right.</h5>
            </div>

            <div class="form-group row">
              <div class="centre">
                <table class="table table-sm">
                  <thead class="table-secondary">
                    <tr>
                      <th scope="col">Part B: The Instructor</th>
                      <th scope="col">Excellent</th>
                      <th scope="col">Very Good</th>
                      <th scope="col">Satisfactory</th>
                      <th scope="col">Poor</th>
                      <th scope="col">Very Poor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Instructor's preparedness on the subject matter</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>Instructor's possession of up-to-date skills and knowledge in the subject matter</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>Instructor's mode of delivery of the subject matter(techniques and styles)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Instructor's management of time during teaching</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Instructor's fairness in grading of assignments and tests against marking scheme</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Instructor's capacity to provide timely feedback on assigments and tests(within 2 weeks)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Instructor's attendance in the class</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Instructor's availability for consultations</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Manner in which instructor interacts with students in class?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Generally, how do you rate the competency of the instructor to meet your learning satisfaction?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault1"></td>
                    </tr>

                  </tbody>
                </table>

                <p>Instructor observed or complied with UDSM Sexual Harassment Code?</p>

                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="flexRadioDefault11" value="1" id="flexRadioDefault1">
                  <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="flexRadioDefault11" value="2" id=" flexRadioDefault1">
                  <label class="form-check-label">No</label>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="4" name="harrassmentExplanation" value="" placeholder="If the answer is No, explain how:"></textarea>
                </div>

                <table class="table table-sm">
                  <thead class="table-secondary">
                    <tr>
                      <th scope="col">Part C: The Course</th>
                      <th scope="col">Excellent</th>
                      <th scope="col">Very Good</th>
                      <th scope="col">Satisfactory</th>
                      <th scope="col">Poor</th>
                      <th scope="col">Very Poor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>How clear was the objective of the course</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How well was the course content coverage</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How well was the mode of assessment?(e.g sufficient tests, assignments, timed essays)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How well were the teaching methods(Class participation, demonstration, etc )</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How well(updated) were the lecture notes and handouts?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How well did the course link theory and practise?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>How adequate were the tutorials, seminars and practicals</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>Generally, how do you rate the relevance of the course to meet your expectations?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" id="flexRadioDefault1"></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>


            <div class="form-group">
              <!-- <a href="#evaluationModal" data-toggle="modal" data-target="#evaluationModal"> -->
              <button type="submit" class="mx-auto button1" name="evaluationQn" value="submit">Submit</button>
            </div>



          </form>
        </div>

        <!-- fading evaluation submit-->
        <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button> -->
              </div>
              <div class="modal-body text-center">
                <p>Thank you for your response. </p>
                <p>You and other <?php echo ($_SESSION["studentFilledCount"] - 1);
                                  echo $_SESSION["studentFilledCount"] - 1 > 1 ?  " students " : " student "   ?>have filled this form.</p>

                <button type="submit" class="mx-auto button2"><a href="./index.php">Exit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Form Section -->


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



  <?php

  require_once("./../includes/scripts.php");
  ?>

  <?php if (isset($_SESSION["studentFilledCount"])) { ?>
    <script>
      $("#evaluationModal").modal('show')
    </script>
  <?php  } ?>

</body>

</html>