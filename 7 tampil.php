<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tes_arkademi";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
}


$query = mysqli_query($connection,"SELECT (product_categories.category_id) as p_id ,(product_categories.name)p_name, COUNT(products.category_id) as jumlah from product_categories LEFT JOIN products on product_categories.category_id = products.category_id GROUP BY product_categories.category_id asc");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ARKADEMI</h2>
  <p>JAWABAN NO 7</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>JUMLAH PRODUCTS</th>
      </tr>
    </thead>
    <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
   <thead>
        <tr align="center">
            <td ><?php echo $data["p_id"];?></td>
            <td><?php echo $data["p_name"];?></td>
            <td><?php echo $data["jumlah"];?></td>
        
        </tr>
     </thead>
        <?php $no++; } ?>
        <?php } ?>
  </table>
</div>

</body>
</html>