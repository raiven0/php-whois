<?php
include('whois-server.php');
$result = '';
$domain= '';
$message = '';
if(isset($_POST['domain'])){ 
    $domain = $_POST['domain']; 
    $domain = trim($domain);
    if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
    if(substr(strtolower($domain), 0, 8) == "https://") $domain = substr($domain, 8);
    if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
    if(validateDomain($domain)) {
        $result = lookUpDomain($domain);
    } else {
        $message = "Geçersiz Alan Adı";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= $domain; ?> - Sonuç</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="src/css/raiven.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="https://ctingg.com/img/ctingg_logo.png" alt="CTINGG logo">
					</div>
					<div class="card">
						<div class="card-body">
							<h4 class="card-title text-center"><?= $domain; ?> - Sonuç</h4>
							<div class="form-group">
								<small class="form-text" style='color:black;'><font face="monospace">
								SORGULANAN DOMAIN : <?= $domain; ?> 
                                    <?php 
                                    $dns_ns = dns_get_record($domain, DNS_NS);
                                        foreach($dns_ns as $value)
                                        {
                                    ?>

									<br>NAMESERVER :
                                        <?php echo($value['target']); ?>
                                    <?php } ?>       </font>            
								<?php
									ob_start();
									$result = iconv('iso-8859-9','utf-8',$result);
										if($result) {
											echo "<blockquote cite='http://www.worldwildlife.org/who/index.html'><pre style='color:black;'>\n" . $result . "\n</pre></blockquote>\n";
										}
								?>
								 
								</small>
							</div>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 - CTINGG 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="src/js/raiven.js"></script>
</body>
</html>