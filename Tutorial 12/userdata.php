<html>

<head>
    <title>User info</title>
</head>

<body>
    <?php
    $connection = mysqli_connect("localhost","root","","register");
    $query = "SELECT * FROM users";
    $query_run = mysqli_query($connection, $query);
    ?>
    <tr>
        <td><b>First Name</b></td>
        <td><?php echo $row['fname']; ?></td>
    </tr>
    <tr>
        <td><b>Last Name</b></td>
        <td><?php echo $row['lname']; ?></td>
    </tr>
    <tr>
        <td><b>Username</b></td>
        <td><?php echo $row['username']; ?></td>
    </tr>
    <tr>
        <td><b>Password</b></td>
        <td><?php echo $row['password']; ?></td>
    </tr>
    <tr>
        <td><b>Gender</b></td>
        <td><?php echo $row['gender']; ?></td>
    </tr>
    <tr>
        <td><b>Academic Year</b></td>
        <td><?php echo $row['acedemic_year']; ?></td>
    </tr>
    <tr>
        <td><b>Phone No</b></td>
        <td><?php echo $row['phone']; ?></td>
    </tr>
</body>

</html>