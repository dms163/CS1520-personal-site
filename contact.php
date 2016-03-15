<?php
$pageTitle = 'Contact me';
include('header.html');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    DEFINE('DB_USER', 'david');
    DEFINE('DB_PASSWORD', 'cs1520isawesome');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'personalsite');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR
    die('Could not establish connection to SQL server: ' . mysqli_connect_error());

    mysqli_set_charset($dbc, 'utf8');

    $Name = mysqli_real_escape_string($dbc, trim(stripslashes($_POST['Name'])));
    $Email = mysqli_real_escape_string($dbc, trim(stripslashes($_POST['Email'])));
    $Phone = mysqli_real_escape_string($dbc, trim(stripslashes($_POST['Phone_Number'])));
    $ContactReason = mysqli_real_escape_string($dbc, trim(stripslashes($_POST['Contact_Reason'])));

    $q = "INSERT INTO contacts(name, email, phone, reason)
          VALUES ('$Name', '$Email','$Phone', '$ContactReason') ";

    $r = mysqli_query($dbc, $q);

    if ($r && mysqli_affected_rows($dbc) == 1) {

        # tell user they are registered successfully
        echo "<p>Contact Received Thank You!</p>";

    } else {

        # tell user their profile could not be created
        echo "<p>Contact info not received.</p>";

        # give debug info
        echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    }
}
?>
<form id="center" method="post" action="#">
    <br>
    <label for="Name">Name:</label>
    <input type="text" name="Name" required>
    <br>
    <label for="Email">Email:</label>
    <input type="email" name="Email" required>
    <br>
    <label for="Phone_Number"> Phone Number:</label>
    <input type ="text" name="Phone_Number">
    <br>
    <label for="Contact_Reason">Reason for Contact:</label>
    <input type="text" name="Contact_Reason">
    <br>
    <button type="submit">Add Contact</button>
</form>
</body>

