<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Add New Member</title>
</head>
<body>
    <h1>Web Development - Lab 4</h1>
    <h2>Add New VIP Member</h2>
    <form action="member_add.php" method="post">
        <p><label>First Name: <input type="text" name="fname"></label></p>
        <p><label>Last Name: <input type="text" name="lname"></label></p>
        <p><label>Gender:
            <select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </label></p>
        <p><label>Email: <input type="text" name="email"></label></p>
        <p><label>Phone: <input type="text" name="phone"></label></p>
        <input type="submit" value="Add Member">
    </form>
    <p><a href="vip_member.php">Back to Home</a></p>
</body>
</html>
