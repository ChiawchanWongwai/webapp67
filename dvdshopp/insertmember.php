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
    <h1>Add Member</h1><br>
    <form method="post" action="member.php">
        <p>
            <label>ID</label>
            <input type="text" name="id" id="id">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="surname" id="surname">
        </p>
        <p>
            <label>เบอร์โทร</label>
            <input type="text" name="phone" id="phone">
        </p> 
        <p>
            <label>ที่อยู่</label>
            <input type="text" name="address" id="address">
        </p>  
        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='member.php'> <button class="buttonhome"> Home </button></a>

</body>
</html>