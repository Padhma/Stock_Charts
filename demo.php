<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<!-- Bootstrap cdn -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

	<!-- End of Bootstrap cdn -->
	<!-- Highcharts cdn -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/highstock.js"></script>
<script type="text/javascript" src="js/exporting.js"></script>
<script type="text/javascript" src="js/export-data.js"></script>
<script type="text/javascript" src="js/demo.js"></script> 
	<!-- end of Highcharts cdn -->
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<style type="text/css">
 .lists {
  font-family: 'Acme', sans-serif;
  font-size: 20px;
} 
.datali {
  font-size: 18px;
  color: darkblue;
  font-weight: bold;
}
</style>
</head>
<body>
	<script type="text/javascript" src="js/dark-blue.js"></script>
	<div class="container">
  <h1 class="title">STOCK CHARTS</h1>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#chart">CHART</a></li>
    <li><a data-toggle="tab" href="#stock">STOCKS</a></li>
  </ul>

  <div class="tab-content">
    <div id="chart" class="tab-pane fade in active">
    	<div id="container"></div>      
    </div>
    <div id="stock" class="tab-pane fade">
        <ul class="accordion">
  <li class="accordion-item">
    <input id="s2" class="hide" type="checkbox" checked>
    <label for="s2" class="accordion-label">APPLE</label>
    <div class="accordion-child">
      <?php 

include('connect.php');

$connection = mysqli_connect($server,$user,$pass);
mysqli_select_db($connection, "stocks") or die ("no database");   

$sql = "SELECT stocks.code,stocks.quote,stocks.prev,stocks.ask,stocks.cap 
FROM stocks
WHERE stocks.id = 1 ";

$query = mysqli_query($connection, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($connection));
}

    $projects = array();
    while ($project =  mysqli_fetch_assoc($query))
    {
        $projects[] = $project;
    }
  
    foreach ($projects as $project)
    {
?>
      
  <ul> 
  <span class="lists">STOCK CODE</span>:<li class="datali"><?php echo $project['code']; ?></li>
  <span class="lists">STOCK QUOTE</span>:<li class="datali"><?php echo "$",$project['quote']; ?></li>
  <span class="lists">PREVIOUS CLOSE</span>:<li class="datali"><?php echo "$",$project['prev']; ?></li>
  <span class="lists">ASK</span>:<li class="datali"><?php echo "$",$project['ask']; ?></li>
  <span class="lists">MARKET CAP</span>:<li class="datali"><?php echo "$",$project['cap']; ?></li>
</ul>
<?php } ?>
</div>
  </li>

  <li class="accordion-item">
    <input id="s1" class="hide" type="checkbox">
    <label for="s1" class="accordion-label">GOOGLE</label>
<div class="accordion-child">
      <?php 

include('connect.php');

$connection = mysqli_connect($server,$user,$pass);
mysqli_select_db($connection, "stocks") or die ("no database");   

$sql = "SELECT stocks.code,stocks.quote,stocks.prev,stocks.ask,stocks.cap 
FROM stocks
WHERE stocks.id = 2 ";

$query = mysqli_query($connection, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($connection));
}

    $projects = array();
    while ($project =  mysqli_fetch_assoc($query))
    {
        $projects[] = $project;
    }
  
    foreach ($projects as $project)
    {
?>
      
  <ul> 
  <span class="lists">STOCK CODE</span>:<li class="datali"><?php echo $project['code']; ?></li>
  <span class="lists">STOCK QUOTE</span>:<li class="datali"><?php echo "$",$project['quote']; ?></li>
  <span class="lists">PREVIOUS CLOSE</span>:<li class="datali"><?php echo "$",$project['prev']; ?></li>
  <span class="lists">ASK</span>:<li class="datali"><?php echo "$",$project['ask']; ?></li>
  <span class="lists">MARKET CAP</span>:<li class="datali"><?php echo "$",$project['cap']; ?></li>
</ul>
<?php } ?>
</div>
  </li>
  </li>
  <li class="accordion-item">
    <input id="s3" class="hide" type="checkbox">
    <label for="s3" class="accordion-label">AMAZON</label>
   <div class="accordion-child">
      <?php 

include('connect.php');

$connection = mysqli_connect($server,$user,$pass);
mysqli_select_db($connection, "stocks") or die ("no database");   

$sql = "SELECT stocks.code,stocks.quote,stocks.prev,stocks.ask,stocks.cap 
FROM stocks
WHERE stocks.id = 3 ";

$query = mysqli_query($connection, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($connection));
}

    $projects = array();
    while ($project =  mysqli_fetch_assoc($query))
    {
        $projects[] = $project;
    }
  
    foreach ($projects as $project)
    {
?>
      
  <ul> 
  <span class="lists">STOCK CODE</span>:<li class="datali"><?php echo $project['code']; ?></li>
  <span class="lists">STOCK QUOTE</span>:<li class="datali"><?php echo "$",$project['quote']; ?></li>
  <span class="lists">PREVIOUS CLOSE</span>:<li class="datali"><?php echo "$",$project['prev']; ?></li>
  <span class="lists">ASK</span>:<li class="datali"><?php echo "$",$project['ask']; ?></li>
  <span class="lists">MARKET CAP</span>:<li class="datali"><?php echo "$",$project['cap']; ?></li>
</ul>
<?php } ?>
</div>
  </li>

  <li class="accordion-item">
    <input id="s4" class="hide" type="checkbox">
    <label for="s4" class="accordion-label">NETFLIX</label>
 <div class="accordion-child">
      <?php 

include('connect.php');

$connection = mysqli_connect($server,$user,$pass);
mysqli_select_db($connection, "stocks") or die ("no database");   

$sql = "SELECT stocks.code,stocks.quote,stocks.prev,stocks.ask,stocks.cap 
FROM stocks
WHERE stocks.id = 4 ";

$query = mysqli_query($connection, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($connection));
}

    $projects = array();
    while ($project =  mysqli_fetch_assoc($query))
    {
        $projects[] = $project;
    }
  
    foreach ($projects as $project)
    {
?>
      
  <ul> 
  <span class="lists">STOCK CODE</span>:<li class="datali"><?php echo $project['code']; ?></li>
  <span class="lists">STOCK QUOTE</span>:<li class="datali"><?php echo "$",$project['quote']; ?></li>
  <span class="lists">PREVIOUS CLOSE</span>:<li class="datali"><?php echo "$",$project['prev']; ?></li>
  <span class="lists">ASK</span>:<li class="datali"><?php echo "$",$project['ask']; ?></li>
  <span class="lists">MARKET CAP</span>:<li class="datali"><?php echo "$",$project['cap']; ?></li>
</ul>
<?php } ?>
</div>
  </li>

  </li>
</ul>
    </div>
  </div>

</div>

</html>


