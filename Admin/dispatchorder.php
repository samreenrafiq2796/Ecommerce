<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,tr,h1
        {
            text-align: center;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            text-align: center;     
            transition: background-color 0.3s ease;
            
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-primary a {
            color: white;
            text-decoration: none;
        }

        .btn-primary a:hover {
            color: white;
        }
        .button-container {
            display: flex;
            justify-content: flex-end; 
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php include("header.php")?>
<div class="container">
    <h1>Dispatched Orders</h1>
    <br><br>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Cart ID</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Update</th>
    </tr>
    <?php
    $query="SELECT * FROM order_info where status='Order Dispatched'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    {
        $user_query=mysqli_query($conn,"select * from user where id=".$row[1]."");
        $data=mysqli_fetch_array($user_query);
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$data[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo '<td><a href="dispatchupdate.php?update='.$row[0].'">Shipped<i class="fas fa-solid fa-truck-ramp-box"></i></a></td>';
        echo "</tr>";
    }
    ?>
</table>

</div>
<?php include("footer.php")?>
</body>
</html>