<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            background-color: #603c96;
        }
        
        
        table {
            background-color:white;
            color:black;
            text-align:center;
            border:none;
            outline:none;
            border-collapse:collapse;
            padding:0;
            margin: 0 auto;
            text-align:center;

        }

        th {
            background-color:purple;
            color:white;
            padding: 8px !important;
        }
        
        td , th {
            padding: 4px;
            border:none;
        }

        tr:nth-child(even) {
            background-color:lightgray;
        }

        p {
            z-index: 2;
           text-align:center;
           font-size:20px;
           color:white;
           font-weight:bold;
           letter-spacing:3px;
        }

        div ,form{
            margin:0 auto;
            text-align:center;
        }

        .sub {
            margin: 5px;
        }
        
        a {
            color: white;
            text-decoration: none;
            display:block;
            margin: 30px auto;
            font-size: 20px;
            font-weight:bold;
            transition-duration:5s;
            width: 217px;
        }

        a:hover {
            animation: colored 3s infinite; 

        }

        @keyframes colored {
            0% {
                color: #02bbf3;
            }
            50% {
                color: black;
            }
            100% {
                color: yellow;
            }
        }
        

    </style>
</head>
<body>
    <?php


    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db,"attendees");
    $today_date_Global='';
    $selected_date_Global='';
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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_date"])) {
        $selected_date = $_POST["selected_date"];


        $selected_date_Global = $selected_date;
    } else {
        $selected_date_Global = $today_date_Global;
    }

    $sql_all_dates = "SELECT DISTINCT Date FROM members ORDER BY Date DESC";
    $result_all_dates = mysqli_query($db, $sql_all_dates);


    echo "<form method='post'>
            <select name='selected_date'>";
                while ($row = mysqli_fetch_assoc($result_all_dates))
                {
                    $date = $row['Date'];
                    echo "<option value='$date'>$date</option>";
                }
    echo "
                <input class='sub' type='submit' value='ok'>
            </select>
        </form>";
    ?>


    <div>
        
<?php
$date = 
    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db,"attendees");
    
    $q = "SELECT * FROM attendees.members WHERE Date = '$selected_date_Global'";
    $result = mysqli_query($db, $q);
    if (mysqli_num_rows($result) > 0) {
        echo "<p>$selected_date_Global</p>";
        echo "<table  width='90%' >";
        echo "<tr><th>اسم الطالب</th><th>الجنسية</th><th>العمر</th><th>رقم التلفون</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Nationality'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
            echo "</tr>";
        }
            echo "</table>";
    } 
    else {
        echo "No data available";
    }

    mysqli_close($db);
?>
<a href="log in.html"> الرجوع الى صفحة التسجيل</a>
</div>
</body>
</html>