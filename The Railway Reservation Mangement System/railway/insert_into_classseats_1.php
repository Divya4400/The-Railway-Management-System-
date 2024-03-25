<html>

<head>
    <title>IRRMS</title>
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="icon" href="public/assets/rail.png" sizes="40x40" type="image/svg">
    <!-- Link to Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Link to font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        $(function() {
            $("#navid").load("partials/header.php");
            $("#footid").load("partials/footer.php");
        });
    </script>
</head>

<body style="background-image: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);">
    <div id="navid"></div>
    <div class="container" style="padding-top:10rem;">
        <form action="insert_into_classseats_2.php" method="post">

            Trains: <select id="tno" name="tno" required>
                <?php

                require "db.php";

                $query = "SELECT * FROM train";
                $result = mysqli_query($conn, $query);

                echo " <option value = \"\" > </option>";

                while ($row = mysqli_fetch_array($result)) {
                    $tno = $row['trainno'];
                    $tn = $row['tname'] . " starting at " . $row['sp'];
                    echo " <option value = \"$tno\" > $tn </option> ";
                }
                ?>
            </select><br>

            Date Of Journey: <input type="date" name="doj" required><br>
            Class Name: <input type="text" name="class" required><br>
            Fare per Seat: <input type="text" name="fps" required><br>
            Total Seats: <input type="text" name="seatsleft" required><br>

            <br><br><input type="submit" value="Add Train Schedule">
    </div>
    <div id="footid"></div>
</body>

</html>