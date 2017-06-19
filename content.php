<?php 
	$tetap = $_POST['spp-tetap'];
	$variable = $_POST['spp-variable'];
	$total_sks = $_POST['input-sks'];

	$totalspp_variable = $total_sks*$variable;

	if ($tetap) //echo "SPP Tetap : ".number_format($tetap,1,',',',');
	// echo "<br>";
	if ($total_sks) //echo "SPP Variable  : ".$total_sks.' X '.number_format($variable,1,',',',')." : ".number_format($totalspp_variable,1,',',',');
	// echo "<br>";
	$grand_total = $tetap+$totalspp_variable;
	// echo "Total = ".number_format($grand_total,1,',',',');
	// echo "<hr>";
 ?>
