<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        table{
            background-color:black;
            color:white;
            margin:5%;
            text-align:center;
        }
    </style>

    
</head>
<body>
    <script>
        window.location.href="log in.html";
        var form = document.getElementById("MyForm");
        form.reset();
    </script>
    
    <?php
        $db = mysqli_connect("localhost", "root", "");
        mysqli_select_db($db,"attendees");

        $today_date_Global;
        $sql_today_date = "SELECT CURDATE() AS today_date";
        $result_today_date = mysqli_query($db, $sql_today_date);
        if ($result_today_date) 
        {
            $row = mysqli_fetch_assoc($result_today_date);
            $today_date = $row['today_date'];
            $today_date_Global = $today_date;
        } 
        else 
        {
            echo "Error executing the query: " . mysqli_error($conn);
        }

        $name = $_POST['name'];
        $age = $_POST['age'];
        $nationality = $_POST['nat'];
        $phone = $_POST['phone'];
        
        $q2="INSERT INTO attendees.members(
            Name,
            Nationality,
            Age,
            Phone,
            Date
        )
        VALUES (
            '$name', 
            '$nationality', 
            '$age', 
            '$phone',
            '$today_date_Global'
        );";
        mysqli_query($db,$q2);        
        mysqli_close($db);
    ?>

</body>
</html>