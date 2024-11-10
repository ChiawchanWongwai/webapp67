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
    <h1>Add Movie</h1><br>
    <form method="post" action="movie.php">
        <p>
            <label>ID</label>
            <input type="text" name="movieid" id="movieid">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="namemovie" id="namemovie">

        </p>
        <p>
            <label>ปี</label>
            <input type="text" name="year" id="year">
        </p>
        <p>
            <label>นักแสดง</label>
            <input type="text" name="celebrity" id="celebrity">
        </p>
        <p>
            <label>ราคา</label>
            <input type="text" name="price" id="price">
        </p>
        <p>
            <label>จำนวน</label>
            <input type="text" name="quantity" id="quantity">
        </p>
        
        <input type="submit" value="บันทึก">
        <input type="reset" name="reset" value="ยกเลิก">
    </form>
    <a href='movie.php'> <button class="buttonhome"> Home </button></a>

</body>
</html>