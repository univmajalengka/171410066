<?php include "config/conection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <script type="text/javascript" src="css/js/highslide-with-html.js"></script>
    <script type="text/javascript" src="css/js/slideshow.js"></script>
    <script type="text/javascript" src="css/js/utilities.js"></script>
    <title>Penjualan Online</title>
</head>
<body>
    <form action="aksiusertambah.php" method="post" class="form-horizontal">
		<div class="container">
        <center><h3>Input Data User Baru</h3></center><br/>			

			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama User :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="users" placeholder="Nama User Yang Akan Diinput">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Username :
				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="username" placeholder="Username Yang Akan Diinput">
				</div>
            </div>
            
            <div class="form-group">
				<label class="control-label col-sm-2">
				Password :
				</label>
				<div class="col-sm-4">
					<input type="text" name="password" class="form-control" placeholder="Password Yang Akan Diinput">
				</div>
            </div>

            <div class="form-group">
				<label class="control-label col-sm-2">
					Alamat :
				</label>
				<div class="col-sm-4">
					<input type="text" name="alamat" class="form-control" placeholder="Alamat Yang Akan Di Input">
				</div>
            </div>
        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="submit">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>				
	</form>	
</body>
</html>