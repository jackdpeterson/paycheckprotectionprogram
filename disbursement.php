<html>
<head>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
	<div class="col">
		<h1>PPP Disbursement date table</h1>
<?php
echo "<table class='table table-striped tableFixHead'>\n";
echo "<tr><th>Disbursement Date</th><th>8 week end</th><th>24 week end</th>\n";


$start_date = new DateTimeImmutable('2020-04-01');



function get_end_date_8w($start_date): string {
	$end_date = $start_date->modify('+8 week')->modify('-1 day');
	return $end_date->format('m/d/Y');
}
function get_end_date_24w($start_date): string {
	$end_date = $start_date->modify('+24 week')->modify('-1 day');
	return $end_date->format('m/d/Y');
}

while ($start_date->format('Y') != 2021) {
	$start_date = $start_date->modify('+1 day');
	echo "<tr><td>" . $start_date->format('m/d/Y'). "<td>" . get_end_date_8w($start_date) . '</td><td>' . get_end_date_24w($start_date) . "</td></tr>\n";
}

echo "</table>";
?>
</div>
</div>

</body>
</html>
