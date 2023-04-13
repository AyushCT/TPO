<?php

session_start();

if (isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) {
  header("Location: index.php");
  exit();
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Placement Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">

  <?php
  include 'uploads/register_page_header.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <div class=" content-wrapper" style="margin-left: 0px;">

      <section class="content-header">
        <div class="container">
          <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
            <h3 class="text-center margin-bottom-20">Create Your Profile</h3>
            <form method="post" id="registerCandidates" action="adduser.php" enctype="multipart/form-data">
              <div class="col-md-6 latest-job ">
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="fname" name="fname" placeholder="First Name *" required>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="lname" name="lname" placeholder="Last Name *" required>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="email" name="email" placeholder="Email *" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="aboutme" name="aboutme" placeholder="Brief intro about yourself *" required></textarea>
                </div>
                <div class="form-group">
                  <label>Date Of Birth</label>
                  <input class="form-control input-lg" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="dob" placeholder="Date Of Birth">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="age" name="age" placeholder="Age" readonly>
                </div>
                <div class="form-group">
                  <label>Passing Year</label>
                  <input class="form-control input-lg" type="date" id="passingyear" name="passingyear" placeholder="Passing Year">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="qualification" name="qualification" placeholder="Highest Qualification">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="stream" name="stream" placeholder="Stream">
                </div>
               
                <div class="form-group">
                  <button class="btn btn-flat btn-success">Register</button>
                </div>
                <?php
                //If User already registered with this email then show error message.
                if (isset($_SESSION['registerError'])) {
                ?>
                  <div class="form-group">
                    <label style="color: red;">Email Already Exists! Choose A Different Email!</label>
                  </div>
                <?php
                  unset($_SESSION['registerError']);
                }
                ?>

                <?php if (isset($_SESSION['uploadError'])) { ?>
                  <div class="form-group">
                    <label style="color: red;"><?php echo $_SESSION['uploadError']; ?></label>
                  </div>
                <?php unset($_SESSION['uploadError']);
                } ?>

              </div>
              <div class="col-md-6 latest-job ">
                <div class="form-group">
                  <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Password *" required>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="password" id="cpassword" name="cpassword" placeholder="Confirm Password *" required>
                </div>
                <div id="passwordError" class="btn btn-flat btn-danger hide-me">
                  Password Mismatch!!
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="contactno" name="contactno" minlength="10" maxlength="10" onkeypress="return validatePhone(event);" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="address" name="address" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="city" name="city" placeholder="City">
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="state" name="state" placeholder="State">
                </div>
                <div class="form-group">
                  <textarea class="form-control input-lg" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control input-lg" type="text" id="designation" name="designation" placeholder="Designation">
                </div>

                <div class="form-group">
                  <label style="color: red;">File Format PDF Only!</label>
                  <input type="file" name="resume" class="btn btn-flat btn-danger" required>
                </div>
                <div class="form-group">
                 Agree with Consent Form ? <a href ="#" id="myBtn">View Consent Form</a>
                <div class="radio">
      <label><input type="radio" name="consent" checked value="yes">Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="consent" value ="no">No</label>
    </div>
                </div>
              </div>
              <div class="form-group checkbox">
                  <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content " style=" padding:40px; height:90%; width: 60%;margin-top:5%; margin-left:20%;">
    <span class="close">&times;</span>
    <h1 class="text-center mt-5">Consent Form </h1>
    <p>I ________________________________, Registration No. _______________ student of ________
want to avail all the placement opportunities that will be provided by the college. To avail these
opportunities, I am committing for the following:
A. I will appear for each and every activity organized through T&P Cell, which will include <br>
1) Placement drives (on /off campus) <br>2) PD Training / Preparatory classes<br>
3) Seminars / workshops /guest lectures <br>
4) Industrial Visits / Internship programs<br>
5) Assessment tests (online / off line) 
6) any other activity arranged by T&P department
B. I will regularly update the T&P department during and after graduation on all information with
respect to <br>
1) Updated % of marks & result <br>
2) Contact details <br>
3) Any additional course / other information <br>
C. I will follow all the instructions given by Training and Placement cell and coordinators during
placement drives. <br>
1) I will appear for all placement drive at BCET Gurdaspur and /or at any outside pool campus. <br>
D. All the training and placement related activities which will be conducted by training and placement
cell during academic year are only for my enhancing employability index. <br>
E. I assure to maintain 100% attendance in all activities conducted by the T&P department, failing
which I may be debarred from T&P activities. I am aware that in case if I fail to deliver on my
 commitments made above and if I fail to participate in given chances by T & P cell, I will not be
eligible for any placement support from T & P cell. <br>
G. I will abide by all rules and regulations of T & P cell as decided and amended from time to time.</p>
  </div>


                </div>
            </form>

          </div>
        </div>
      </section>



    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer" style="margin-left: 0px;">
      <div class="text-center">
        <strong>Copyright &copy; 2022 <a href="learningfromscratch.online">Placement Portal</a>.</strong> All rights
        reserved.
      </div>
    </footer>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>

  <script type="text/javascript">
    function validatePhone(event) {

      //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
      //event.which will return key for mouse events and other events like ctrl alt etc. 
      var key = window.event ? event.keyCode : event.which;

      if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
        // 8 means Backspace
        //46 means Delete
        // 37 means left arrow
        // 39 means right arrow
        return true;
      } else if (key < 48 || key > 57) {
        // 48-57 is 0-9 numbers on your keyboard.
        return false;
      } else return true;
    }
  </script>

  <script type="text/javascript">
    $('#dob').on('change', function() {
      var today = new Date();
      var birthDate = new Date($(this).val());
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();

      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }

      $('#age').val(age);
    });
  </script>
  <script>
    $("#registerCandidates").on("submit", function(e) {
      e.preventDefault();
      if ($('#password').val() != $('#cpassword').val()) {
        $('#passwordError').show();
      } else {
        $(this).unbind('submit').submit();
      }
    });
  </script>
</body>

</html>