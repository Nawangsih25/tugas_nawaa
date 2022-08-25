<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="get">
        <div>
            <label>id</label>
        <input type="number" name="id">
    </div>

    <div>
        <label>nama :</label>
        <input type="text" name="nama">
    </div>

    <div>
    <label>Kelas :</label>
    <select name="kelas">
        <option value="10 RPL">10 RPL</option>
        <option value="11 RPL">11 RPL</option>
        <option value="12 RPL">12 RPL</option>
    </select>
</div>

<input type="submit" value="simpan">
    </form>
  
</body>
</html>