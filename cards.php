<?php
	session_start();
	$_SESSION['currentPage'] = "studrecs";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<h2>Card</h2>

<div class="card">
  <div class="container">
    <h4><b>KBTC</b></h4> 
    <p>ID </p> <p>Kbtc-100</p>
    <p>Name: </p> <p>John</p>
    <p>Department: </p> <p>John</p>
    <p>Position: </p> <p>John</p>
    <p>NRC: </p> <p>John</p>
  </div>
</div>

</body>
</html> 