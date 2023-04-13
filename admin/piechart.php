<?php
// Step 1: Retrieve data from the database
$servername = "localhost";
$username = "at";
$password = "root";
$dbname = "tpo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT consent FROM users";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM users WHERE consent='yes' AND active='1'";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    $totalConsent = $result->num_rows;
} else {
    $totalConsent = 0;
}

$sql3 = "SELECT * FROM placed ";
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
    $totalPlaced = $result->num_rows;
} else {
    $totalPlaced = 0;
}

// Step 2: Prepare data for chart
$data1 = array();
$num_yes1 = 0;
$num_no1 = 0;

while ($row1 = mysqli_fetch_assoc($result1)) {
  if ($row1['consent'] == "yes") {
    $num_yes1++;
  } else {
    $num_no1++;
  }
}

$data1[] = array("Yes", $num_yes1);
$data1[] = array("No", $num_no1);

$data2 = array();
$data2[] = array("Students Placed", $totalPlaced);
$data2[] = array(" Students Unplaced", $totalConsent);


$total = $totalConsent + $totalPlaced;
$variable1_percentage = round(($totalConsent / $total) * 100, 2);
$variable2_percentage = round(($totalPlaced / $total) * 100, 2);

// Step 3: Generate charts
?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart1);
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart1() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Response');
      data.addColumn('number', 'Count');
      data.addRows(<?php echo json_encode($data1); ?>);

      var options = {
        'title': 'Consent Form',
        'width': 500,
        'height': 300
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
      chart.draw(data, options);
    }

    function drawChart2() {
        var data = new google.visualization.DataTable();
      data.addColumn('string', 'Variable');
      data.addColumn('number', 'Percentage');
      data.addRows(<?php echo json_encode($data2); ?>);

      var options = {
        'title': 'Placement Percentage',
        'width': 570,
        'height': 300
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
      chart.draw(data, options);
    }
  </script>
  <style>
    .chart {
      display: inline-block;
      margin-right: 20px;
    }
    @media only screen and (max-width:1200px){
  .chart-2{
    margin-top:-100px;
  }
}
  </style>

</head>
<body>
   <div class="container">
   <div class="row">
    <h2 class="">&nbsp&nbsp  Placement Statistics</h2>
  <div class="col-6" >
  <div class="chart chart-1" id="chart_div1"  style="margin-top:20px; z-index:1;margin-left:-5px;"></div>
  </div>
  <div class="col-6" style="margin-top:-19px;">
  <div class="chart chart-2 border" id="chart_div2" style="margin-top:-323px; margin-left:290px; z-index:2;"></div>
  </div>
  </div>
   </div>
</body>
</html>
