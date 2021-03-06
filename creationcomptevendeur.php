<!DOCTYPE html>
<html>
	<head>
		<title>Créer compte</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		
		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		
		</head>
		
		
		<body background="Image/enchere3.jpg">
			
			<div class="container">
				
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Création d'un compte vendeur !</h1>
									</div>
									<form action="creationVendeur.php" method="post" enctype="multipart/form-data">
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" required="required">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" name="prenom" placeholder="Prénom"required="required">
											</div>
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" name="adresse" placeholder="Adresse"required="required">
										</div>
										<div class="form-group">
											<input type="email" class="form-control form-control-user"  name="email" placeholder="Adresse Email"required="required" onblur="verifMail(this)">
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" name="password" placeholder="Password"required="required">
										</div>
										<div class="form-group row">
											<div class="col-sm-3">
												<div class="text-center">
													<p>Choisissez votre photo de profil</p>
												</div>
											</div>
											<div class="col-sm-6 mb-3 mb-sm-0">
												
												<input type="file"  class="btn btn-secondary" name="photo" value="Insérer votre photo de profil" placeholder="Password">
											</div>
										</div>
										<input  name="CreaCompt" type="submit" class="btn btn-primary btn-user btn-block" value="Créer votre compte Ebay ECE">     
										<hr>
										<a href="error.php" class="btn btn-google btn-user btn-block">
											<i class="fab fa-google fa-fw"></i> Register with Google
										</a>
										<a href="error.php" class="btn btn-facebook btn-user btn-block">
											<i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
										</a>
									</form>
									<div class="text-center">
										<a class="small" href="Connexionvendeur.html">Déja un compte ?! Connectez-vous ici</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			
			
			
			
		</body>
		
	</html>									