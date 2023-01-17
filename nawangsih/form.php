<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Kencana</title>
 <link rel="stylesheet" href="style2.css">
</head>
<body>
    </head>
    <style>
        h1{
            color: green;

        }
        button{
            color: black;
            background: green;
        }
        div{
            color:green;
        }
    </style>
</head>
<body>
        <div class="container">
    <h1> Silahkan lakukan regitrasi</h1>
<form action="insert.php" method="POST">
        <div>
        nis: <input type="text" name="nis"  required>
        </div>
        <br>
        <div>
        nama: <input type="text" name="nama" required>
        </div>
        <br>
        <div>
        kelas: <input type="text" name="kelas" required>
        </div>
        <br>
        
        <button type="submit">save</button> 
        
        
    </form>
    <!-- <button type="submit">Delete</button> <button type="submit">Update</button> -->
</body>
</html>