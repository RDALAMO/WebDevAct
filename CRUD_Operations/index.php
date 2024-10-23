<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE Operation: User Profile</title>
</head>
<body>
    <h1>User Profile: Login</h1>
    <form action="create_function.php" method="POST">
        <label for="ID">StudentID:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="contact_number">Contact_Number:</label>
        <input type="number" id="contact_number" name="contact_number" required><br><br>


        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <h1>Read Operation</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Contact_Number</th>
            </tr>
        </thead>

        <tbody>

            <?php

                $result = mysqli_query($con,"SELECT * FROM users");

                if(mysqli_num_rows($result) != 0){

                    $count = 0;

                    while($users = mysqli_fetch_array($result)){
                        $count++;
                        echo "<tr>
                                <td>".$count."</td>
                                <td>".$users['id']."</td>
                                <td>".$users['name']."</td>
                                <td>".$users['age']."</td>
                                <td>".$users['address']."</td>
                                <td>".$users['contact_number']."</td>
                          </tr>";
                    }

                }else{
                    echo "<tr>
                            <td colspan='4'>No Records Found</td>
                          </tr>";
                } 


            ?>

        </tbody>
    </table>
</body>
</html>