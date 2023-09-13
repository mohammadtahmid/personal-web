<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name, email, mobile, password) values('$name', '$email', '$email', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
    } else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud operation</title>
</head>

<body>

    <div class="container my-5">
        <button class="btn btn-primary"><a href="user.php" class="text-light">Add user</a>

        </button>

        <table class="table caption-top">
            <caption>List of users</caption>
            <thead>

                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    // $row = mysqli_fetch_assoc($result);
                    // echo $row['name'];
                    // $row = mysqli_fetch_assoc($result);
                    // echo $row['name'];
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $mobile . '</td>
                                    <td>' . $password . '</td>
                                    <td>
                                        <button class="btn btn-primary">
                                            <a href="update.php?Updateid='.$id.'" class="text-light">Update</a>
                                        </button>
                                        <button class="btn btn-danger">
                                            <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                                        </button>
                                    </td>
                                </tr>';
                    }
                }

                ?>


                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->

            </tbody>
        </table>
    </div>






</body>

</html>