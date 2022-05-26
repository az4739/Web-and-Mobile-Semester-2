<?php
$path = './';
$title = 'Forum Page';
include $path . 'header.php';
?>



<div class="headerText">
    <h1>FORUM</h1>
</div>

<?php
function sanatize($str, $lenght = 50)
{
    $str = trim($str);
    $str = htmlentities($str, ENT_QUOTES);
    return substr($str, 0, $lenght);
}
?>

<!-- Header ends -->



<!-- content with pictures -->
<diV class="picture-content">

    <!-- input part -->

    <h3>Contact Form</h3>

    <div class="container">

        <form name="myForm" action="forum.php" onsubmit="return validateForm()" method="get">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            <br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            <br>
            <br>

            <label for="subject">Tell us what you think</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>

    </div>




    <!-- review part -->
    <div class="containerInput">

        <h1>What do you think ?</h1>

        <?php

        // connecting to the database

        include('../../dbcom.php');

        // selecting attributes from database
        $sql = "SELECT id, firstName, LastName, comment, dateP FROM project2";
        $result = $mysqli->query($sql);

        // checking for errors
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        if ($result = $mysqli->query($sql)) {
            // $result is an object and can be used to fetch row here
        } else {
            printf("Query failed: %s\n", $mysqli->error);
        }

        if ($result->num_rows > 0) {
            // printing
            while ($row = $result->fetch_assoc()) {

                echo "<ol><li class='fromDB'> Visior: " . $row["id"] . "<br>"  . $row["firstName"] . "<br>" . $row["LastName"] . "<br>" . "<br>" .  $row["comment"] . "<br>" . " @: " . $row["dateP"] . "</li></ol>";
            }
        } else {
            echo "0 results";
        }

        ?>

    </div>

    <?php

    // adding data to the database from the forum
    if ($mysqli) {

        if (!empty($_GET['firstname']) && !empty($_GET['lastname']) && !empty($_GET['subject'])) {


            $fname = sanatize($_GET['firstname']);
            $lname = sanatize($_GET['lastname']);
            $sub = sanatize($_GET['subject']);




            $stmt = $mysqli->prepare("INSERT into project2 (firstName, LastName, comment) values (?, ?, ?)");

            $stmt->bind_param("sss", $fname, $lname, $sub);
            $stmt->execute();
            $stmt->close();
            $mysqli->close();
        }
    }

    ?>

</diV>

<!-- content with pictures end-->

<?php
$path = './';
include $path . 'footer.php';
?>