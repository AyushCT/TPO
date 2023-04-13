<?php

//To Handle Session Variables on This Page
session_start();

if (empty($_SESSION['id_admin'])) {
  header("Location: ../index.php");
  exit();
}


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");



$sql1 = "SELECT * FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE id_jobpost='$_GET[id]'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  $row = $result1->fetch_assoc();
}
$company = $row['company'];
$sql2 = "SELECT * FROM placed  INNER JOIN job_post ON jobtitle = cname" ;
$result2 = $conn->query($sql2);
if ($result1->num_rows > 0) {
  $row1 = $result1->fetch_assoc();
  echo$row1['cname'];
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
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <?php

    include 'header.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">

      <section id="candidates" class="content-header">
        <div class="container">
          <div class="row">
            <div class=" col-md-2">

            </div>
           
            <div class="col-md-8 bg-white padding-2">
              <div class="pull-left">
                <h2><b><?php echo $row['jobtitle']; ?></b></h2>
              </div>
              <div class="pull-right">
                <a href="active-jobs.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
              </div>
            
                      
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px; margin-top:100px;">

<section id="candidates" class="content-header">
    <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col md-1"></div> -->



        <div class="col md-4">
            <h3 style="margin-left:200px;" >Students Registered For Drive </h3>
        <br>
           
        </div>



        <div class="row margin-top-20">
            <div class="col-md-12">
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-hover" style="width:685px;">
                        <tr class="header">



                            <th style="width:20%;">Student Name</th>
                            <th style="width:30%;">Student Email</th>
                            <th style="width:30%;">Department</th>


                        </tr>
                        <!-- <thead>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Company Name</th>
                                <th>Role</th>
                                <th>CTC</th>
                             



                            </thead> -->
                        <tbody>
                            <?php
                            // selecting student record via option 
                            // fetching placed students from placed table &user table
                            $cp = $row['jobtitle'];
                            $sql = "SELECT * FROM users
                            JOIN apply_job_post ON users.id_user = apply_job_post.id_user where id_jobpost='$_GET[id]'";
                                                        
                            $_SESSION['QUERY'] = $sql;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {


                            ?>
                                    <tr>
                                        <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['stream']; ?></td>


                                    </tr>


                            <?php

                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>



    <!-- <div class="col-md-2 ">


<section id="candidates" class="content-header">
    <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col md-1"></div> -->



        <div class="col md-4 " style="margin-top:100px; border-top:20px solid white;">
            <h3 style="margin-left:240px; " >Students  Who Don't Apply  </h3>
        <br>
           
        </div>



        <div class="row margin-top-20">
            <div class="col-md-12">
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-hover" style="width:685px;">
                        <tr class="header">



                            <th style="width:20%;">Student Name</th>
                            <th style="width:30%;">Student Email</th>
                            <th style="width:30%;">Department</th>
                         


                        </tr>
                        <!-- <thead>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Company Name</th>
                                <th>Role</th>
                                <th>CTC</th>
                             



                            </thead> -->
                        <tbody>
                            <?php
                            // selecting student record via option 
                            // fetching placed students from placed table &user table
                            $cp = $row['jobtitle'];
                            // $sql = "SELECT * FROM users 
                            // INNER JOIN apply_job_post ON users.id_user = apply_job_post.id_user
                            // WHERE id_user NOT IN apply_job_post AND id_jobpost='$_GET[id]'";

                            $sql = "SELECT * FROM users 
                           
                            WHERE id_user NOT IN(SELECT id_user FROM apply_job_post WHERE  id_jobpost='$_GET[id]')  ";
                                                        
                            $_SESSION['QUERY'] = $sql;
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) {


                            ?>
                                    <tr>
                                        <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['stream']; ?></td>


                                    </tr>


                            <?php

                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>



    <!-- <div class="col-md-2 ">



        </div> -->
</div>
</div>
</section>

        </div> -->
</div>
</div>
</section>



</div>
<!-- /.content-wrapper -->

            </div>
            
            <div class=" col-md-2">

              </div>
            </div>
          </div>
          
      </section>
   


    </div>
    <!-- /.content-wrapper -->
 
    <footer class="main-footer" style="margin-left: 0px;">
      <div class="text-center mb-0">
        <strong>Copyright &copy; 2022 <a href="#">Placement Portal</a>.</strong> All rights
        reserved.
      </div>
    </footer>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../js/adminlte.min.js"></script>
</body>

</html>