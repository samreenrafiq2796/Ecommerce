<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            <button class="btn btn-primary"><a href="contact.php">Add contact</a></button>
        </div>
    <h1>Message</h1>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>Message</th>
    </tr>
    <?php
    $conn=mysqli_connect("localhost","root","","ecommerce");
    $query="SELECT * FROM `contact`";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "</tr>";
    }
    ?>
</table>

</div>
    <?php include("footer.php")?>
</body>
</html>
