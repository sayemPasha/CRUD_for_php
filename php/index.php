<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h3>PHP CRUD Grid</h3>
    </div>
    <div class="row">
        <p>
            <a href="create.php" class="btn btn-success">Create</a>
        </p>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Mobile Number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include '../data/database.php';
            $pdo = Database::connect();
            $sql = 'SELECT * FROM customers ORDER BY id DESC';
            foreach ($pdo->query($sql) as $row) {
                echo '<tr>';
                echo '<td>'. $row['name'] . '</td>';
                echo '<td>'. $row['email'] . '</td>';
                echo '<td>'. $row['mobile'] . '</td>';
//                echo '<td><a class="btn" href="read.php?id='.$row['id'].'">Read</a></td>';
                echo '<td width=250>';
                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                echo ' ';
                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                echo '</td>';
                echo '</tr>';

                echo '</tr>';
            }
            Database::disconnect();
            ?>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->
</body>
</html>