<html lang="en">
<head>
    <title>semangat belajar nawa</title>
    
</head>
<style>
    button{
        color: black;
        background: pink;
    }
    div{
        color:green;
    }
</style>
<body>
    <form action="session.php" method="post">
        <div>
            Username : <input type="text" name="username" id="">
        </div>
        <br>
        <div>
           Password : <input type="password" name="password" id="">
        </div>
        <br>
        <div>
        <label>Role :</label>
        <select>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
        </select>
        </div>
        <br>
        <button type="submit"> log in</button>
    </form>
    
</body>
</html>