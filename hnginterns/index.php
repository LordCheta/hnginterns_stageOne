<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <style>
            #hng {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                width: 100%;
                border-collapse: collapse;
            }

            #hng td, #customers th {
                font-size: 1em;
                border: 1px solid #98bf21;
                padding: 3px 7px 2px 7px;
            }

            #hng th {
                font-size: 1.1em;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 4px;
                background-color: #A7C942;
                color: #ffffff;
            }

            #customers tr.alt td {
                color: #000000;
                background-color: #EAF2D3;
            }
        </style>
    </head>
    <body>
        <?php 

                // Making a connection to the database.

                $conn = mysqli_connect("localhost","root", "12345678", "hnginterns");

                // Checking if connection was succesfull or not.

                if (!$conn) {
                    die ("<p style='font-family:Trebuchet MS; font-size:15px; margin-top:15%; color:#fff;
                                    background: maroon; padding:10px 10px; text-align:center; width:20%; margin-left:37.5%;'>Ooops! This is embarassing. <br>Failed to connect to the database</p>");
                }

                //Querying the database, interns table to retrieve all the records.

                $result = mysqli_query($conn, "SELECT * FROM interns");

                //Checking if records are found

                if($result) {

                //Looping through the records to display them on the page.

                    echo '<table id="hng"><tr><th>S/N</th><th>Name</th><th>Slack Username</th></tr>';
                    while ($row = mysqli_fetch_assoc($result)){
                        echo'<tr><td>' . $row['id'] . '</td>';
                        echo'<td>' . $row['name'] . '</td>';
                        echo'<td>' . $row['slack_name'] . '</td></tr>';
                    }
                    echo '</table>';
                }

        ?>    
    </body>
</html>
