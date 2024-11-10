<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if(!isset($_GET['id'])){
        header("refresh: 0; url=member.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM member WHERE id='$_GET[id]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Edit Member</h1><br>
    <form method="post" action="member.php">
        <p>
            <label>ชื่อ</label>
            <input type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input type="text" name="name" id="name" value="<?=$row['name'];?>" />
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="name" id="surname" value="<?=$row['surname'];?>" />
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="phone" id="phone" value="<?=$row['phone'];?>" />
        </p>
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
        </p>
        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='member.php'><button class="buttonhome"> Home</button></a>
        

</body>
</html>