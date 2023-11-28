<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container">
    
    <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>address</th>
            
               </tr>
</thead>
<?php
$con=mysqli_connect("localhost","root","","php");
$query="select * from emp";
$sql=mysqli_query($con,$query);
while($row=mysqli_fetch_array($sql))
{
    $id=$row[0];
    $name=$row[1];
    $address=$row[2];
    ?>
    
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $address;?></td>
            

</tr>
<?php
}
?>
</table>
  </div>  

</body>
</html>