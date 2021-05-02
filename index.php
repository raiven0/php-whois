<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Raiven">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>CTINGG - Whois</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="src/css/raiven.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="https://ctingg.com/img/ctingg_logo.png" alt="CTINGG logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title text-center">CTINGG - Whois</h4>
							<form method="POST" action="whois" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Alan Adı</label>
									<input id="domain" type="text" class="form-control" name="domain" placeholder="ctingg.com" required autofocus>
									<div class="invalid-feedback">
										Geçersiz Domain
									</div>
								</div>

														

								<div class="form-group m-0">
									<button type="submit" name="gonder" class="btn btn-primary btn-block">
										Sorgula
									</button>
								</div>
								
							</form>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="src/js/raiven.js"></script>
</body>
</html>
