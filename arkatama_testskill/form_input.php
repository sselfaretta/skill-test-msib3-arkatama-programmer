<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEST SKILL</title>

	<!-- link css dari bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css"> -->
</head>

<body>

	<div class="container-fluid pt-5 pb-5 bg-light">
			<div class="container">
				<h2 class="display-3 text-center" id="pesan">Data Diri</h2>
				<p class="text-center">
					Masukkan Data Diri Anda Terlebih Dahulu
				</p>
				<br><br>
				<form action="proses_input" method="post">

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Nama Anda</label>
							<div class="col-sm-10">
								<input type="text" name="name" id="name" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Umur Anda</label>
							<div class="col-sm-10">
								<input type="number" name="age" id="age" class="form-control">
							</div>
						</div>

						<div class="form-group row mb-3">
							<label for="address" class="col-sm-2 col-form-label">Asal Kota</label>
							<div class="col-sm-10">
								<input type="text" name="city" id="city" class="form-control">
							</div>
						</div>


						<div class="form-group row mb-3">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-sm-10">
								<button class="btn btn-danger">Submit</button>
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	<!-- link javascript dari bootsrap 5.2 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>