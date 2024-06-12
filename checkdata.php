<?php
print("<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Table Display</title>
    <style>

    </style>
</head>
<body>");
    $name = $_POST['name'];
    $nationality = $_POST['nat'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $bol = false;
        $db = mysqli_connect("localhost","root","");
        mysqli_select_db($db,"attendees");
        
        $q = "SELECT * from members";
        $result= mysqli_query($db,$q);
        mysqli_close($db);

        print("<table border='1'>") ;

            print("<tr>") ;
            print("<th>Name</th>") ;
            print("<th>Nationality</th>") ;
            print("<th>Age</th>") ;
            print("<th>Phone</th>") ;
            print("</tr>") ;
            print("<tr>") ;
                while($a = mysqli_fetch_row($result)){
                    print("<tr>");
                        print("<td>$name</td>");    
                        print("<td>$nationality</td>");
                        print("<td>$age</td>");   
                        print("<td>$phone</td>");
                    print("</tr>");
                }
        print("</table>");
    print("</body>
    </html>");
?>