<?php 
require 'paypal/autoload.php';
define('URL_SITIO','http://localhost/proyecto');
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
		'AUKZqfmpqHgl_TH1dYpc4VxYFY7sgr2usiAOjRPsDdDw_VywOupBh9MAYklRjWXltcpW5GuRKL1u1K-t',//ClienteID
		'ENQovnb5_AVeH8s4DslH3Hd6_dVDMf6eRuUOJ50R9ki-kjdb_dxVoy0xOo3Z9WQriWpMweVTIOeUTnSm'//Secret
	)
	);