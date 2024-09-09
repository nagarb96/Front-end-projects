
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="flex justify-center items-center w-screen h-screen bg-white">
        <!-- COMPONENT CODE -->
        <div class="container mx-auto my-4 px-4 lg:px-20"><?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

                // Retrieve form data
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $business_name = $_POST['business_name'];
                $speciality = $_POST['speciality'];
                $messages = $_POST['messages'];

                // Insert form data into the database
                $sql = "INSERT INTO contact_messages (first_name, last_name, email, phone, business_name, speciality, messages)
                VALUES ('$first_name', '$last_name', '$email', '$phone', '$business_name', '$speciality', '$messages')";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // ... (your database insertion logic)

                    if ($conn->query($sql) === TRUE) {
                        $message = "Data inserted successfully.";
                    } else {
                        $message = "Error: " . $sql . "<br>" . $conn->error;
                    }

                    // Close the database connection
                    $conn->close();
                }

            }
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" name="first_name" placeholder="First Name*" required/>
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" name="last_name" placeholder="Last Name*" required/>
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="email" name="email" placeholder="Email*" required/>
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="number" name="phone" placeholder="Phone*" required/>
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="business_name" placeholder="Business Name*" required/>
                        <select class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            name="speciality">
                            <option value="Owner">Owner</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Practice Manager">Practice Manager</option>
                            <option value="IT Department">IT Department</option>
                            <option value="Front Desk">Front Desk</option>
                            <option value="Other">Other</option>
                            
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="my-4">
                        <textarea name="messages" placeholder="Message*"
                            class="w-full h-30 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" required></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button type="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                    <!-- Display the message here -->
    <div class="my-2 w-1/2 lg:w-1/4">
        <!-- Display the message here only if it's not empty -->
        <?php if (!empty($message)) { ?>
            <div id="message" class="text-green-600 text-sm mt-2"><?php echo $message; ?></div>
        <?php } ?>
    </div>
                </div>
            </form>
            <script>
    // Check if the message div is present and not empty
    var messageDiv = document.getElementById("message");
    if (messageDiv && messageDiv.innerHTML.trim() !== "") {
        // Set a timeout to redirect to index.php after 3 seconds (3000 milliseconds)
        setTimeout(function () {
            window.location.href = "index.php"; // Replace "index.php" with the desired URL
        }, 3000);
    }
</script>

			<div
				class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
				<div class="flex flex-col text-white">
					<h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
						tincidunt arcu diam,
						eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
					</p>

					<div class="flex my-4 w-2/3 lg:w-1/2">
						<div class="flex flex-col">
							<i class="fas fa-map-marker-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Main Office</h2>
              <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
            </div>
          </div>
          
          <div class="flex my-4 w-2/3 lg:w-1/2">
            <div class="flex flex-col">
              <i class="fas fa-phone-alt pt-2 pr-2" />
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Call Us</h2>
              <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
              <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
</div>

</body>
</html>
