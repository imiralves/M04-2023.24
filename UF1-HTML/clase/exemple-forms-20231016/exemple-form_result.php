<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>form_result.php</title> 
	</head> 
	<body>
  	<h1>Valores recibidos del form en el servidor (&lt;name&gt;=&lt;value&gt;)</h1>
		<?php

      echo "<p>form_text = ", filter_input(INPUT_POST, 'form_text'), "</p>";
			echo "<p>form_radio = ", filter_input(INPUT_POST, 'form_radio'), "</p>";
      $checkbox="";
      foreach (filter_input(INPUT_POST, 'form_checkbox', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) as $checkbox_tmp) {
            $checkbox=$checkbox . " " . $checkbox_tmp;
        }
			echo "<p>form_checkbox = ", $checkbox , "</p>";
			echo "<p>form_hidden = ", filter_input(INPUT_POST, 'form_hidden'), "</p>";
			echo "<p>form_password = ", filter_input(INPUT_POST, 'form_password'), "</p>";
			echo "<p>form_select = ", filter_input(INPUT_POST, 'form_select'), "</p>";
      $multiselect="";
        foreach (filter_input(INPUT_POST, 'form_multiselect', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) as $multiselect_tmp) {
            $multiselect=$multiselect . " " . $multiselect_tmp;
        }
      echo "<p>form_multiselect = ", $multiselect , "</p>";
			echo "<p>form_textarea = ",filter_input(INPUT_POST, 'form_textarea'), "</p>"; 
		?>
	</body> 
</html>