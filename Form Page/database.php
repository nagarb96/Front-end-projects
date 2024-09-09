<!-- database.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Table</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>All Users</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Business Name</th>
                    <th>Speciality</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Establish a database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "formdatabase";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the database
                $sql = "SELECT * FROM contact_messages";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['business_name'] . "</td>";
                        echo "<td>" . $row['speciality'] . "</td>";
                        echo "<td>" . $row['messages'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No data found</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
