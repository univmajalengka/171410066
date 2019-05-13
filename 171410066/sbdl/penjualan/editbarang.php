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
    <?php
        
        $query = "SELECT * FROM barang WHERE id = '$_GET[id]'";
        $edit = mysqli_query($connect_db,$query);
        while($t=mysqli_fetch_array($edit)){
    ?>
    <form action="aksieditbrg.php" method="post" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $t['id'];?>">
        <div class="container">
        <center><h3>Edit Data Barang Baru</h3></center><br/>            

            <div class="form-group">
                <label class="control-label col-sm-2">
                    Nama Barang :
                </label>
                <div class="col-sm-4">
                    <input type="hidden" class="form-control" name="id" value="<?php  echo $t['id'];?>">
                    <input type="text" class="form-control" name="barang" value="<?php echo $t['nama_barang'];?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">
                    Kategori :
                </label>
                <div class="col-sm-4">
                    <select class='form-control' name="kategori">
        
                        <?php
                              $tampil=mysqli_query($connect_db,"SELECT * FROM kategori ORDER BY nama_kategori");
                              if ($t['id_kategoris']==0){
                                echo "<option value=0 selected>- Pilih Kategori -</option>";
                              }
                    
                              while($w=mysqli_fetch_array($tampil)){
                                if ($t['id_kategoris']==$w['id']){
                                  echo "<option value=$w[id] selected>$w[nama_kategori]</option>";
                                }
                                else{
                                  echo "<option value=$w[id]>$w[nama_kategori]</option>";
                                }
                              }
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2">
                    Stok :
                </label>
                <div class="col-sm-4">
                    <input type="text" name="stock" class="form-control" value="<?php echo $t['stock'];?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">
                    Harga :
                </label>
                <div class="col-sm-4">
                    <input type="text" name="harga" class="form-control" value="<?php echo $t['harga'];?>">
                </div>
            </div>

        <input style='float:right;' type="submit" class="btn btn-success" value="Simpan" name="simpan">
        <input style='float:right;' class='btn btn-danger' type=button value=Batal onclick=self.history.back()>
        </div>              
    </form> 
    <?php } ?>
</body>
</html>