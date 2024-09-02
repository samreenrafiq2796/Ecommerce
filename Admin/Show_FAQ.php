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
<div class="button-container">
    <button class="btn btn-primary"><a href="FAQ.php">Add FAQ</a></button>
    </div>
    <h1>Frequently Asked Question</h1>
    <br><br>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Question</th>
        <th>Answer</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    $conn=mysqli_connect("localhost","root","","ecommerce");
    $query="SELECT * FROM faq";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo '<td><a href="update.php?update='.$row[0].'"><i class="bi bi-pencil-square"></i></a></td>';
        echo '<td><a href="deleteFAQ.php?delete='.$row[0].'"><i class="bi bi-trash3-fill"></i></a></td>';
        echo "</tr>";
    }
    ?>
</table>

</div>
<?php include("footer.php")?>
</body>
</html>