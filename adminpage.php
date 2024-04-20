<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminpage.css">
    <title>Admin Page</title>
</head>

<body>
    <h2>Admin Games Nexus 2</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit" name="submit">Search</button>
        <input type="reset" value="Reset">
    </form>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
        </tr>
        <?php
        $sql = "SELECT * FROM user_form";
        $result = mysqli_query($conn, $sql);
        if (isset($_POST["submit"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            if ($name != '') {
                $sql = "SELECT * FROM user_form WHERE name LIKE '%$name%'";
            } else if ($email != "") {
                $sql = "SELECT * FROM user_form WHERE email LIKE '%$email%'";
            } else {
                $sql = "SELECT * FROM user_form WHERE email LIKE '%$name%' and code LIKE '%$email%'";
            }
        }
        if (isset($_POST["reset"])) {
            header("location:adminpage.php");
        }
        $result = mysqli_query($conn, $sql);
        $user = "<XML>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['image'] . "</td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
            $user .= "<user>";
            $user .= "<name>" . $row['name'] . "</name>";
            $user .= "<email>" . $row['email'] . "</email>";
            $user .= "<password>" . $row['password'] . "</password>";
            $user .= "<image>" . $row['image'] . "</image>";
            $user .= "</user>";
        }
        $user .= "</XML>";
        $x = new SimpleXMLElement($user);
        $x->asXML("user.xml");

        mysqli_close($conn);
        ?>
    </table>
</body>

</html>