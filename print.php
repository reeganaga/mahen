<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

// handle post
if (isset($_POST['process-spp'])) {
	echo "<pre>";
	// var_dump($_POST); // to display all POST data
	echo "</pre>";

	//include content pdf
	ob_start();
	require 'content.php';
	require 'print2.php';
	$content = ob_get_clean(); 
	

	//for generate pdf
	$mpdf = new mPDF();
	$mpdf->WriteHTML($content);
	$mpdf->Output();
}

 ?>