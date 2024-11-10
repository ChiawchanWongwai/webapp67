<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movies page </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
</head>
<body>

    <?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    ?>

    <h1>Movies</h1><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อภาพยนต์</th>
                <th>ปี</th>
                <th>นักแสดง</th>
                <th>ราคา</th>
                <th>จำนวน</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo"<tr>
                        <td>".$row["movieid"]."</td>"."<td>".$row["namemovie"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["celebrity"].
                        "</td>"."<td>".$row["price"]."</td>"."<td>".$row["quantity"]."</td>"."<td>"."<a href='editmovie.php?movieid=".$row["movieid"]."'><button> Edit </button></a>"."</td>";
                        echo "</tr>";    
                    }
                }
                else {
                    echo "0 results";
                }
                $conn->close();
                ?>
                </tbody>
            </table>
            <br>
            <div class="button_container">
            <a href='insertmovie.php'><button class="buttonadd"> Add </button></a>
            <a href='member.php'><button class="buttonadd"> Go to Member </button></a>
            </div>
            
</body>
</html>