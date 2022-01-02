<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form In PHP</title>
</head>
<!-- action,method,name attribute -->
<body>
    <!-- In GET method,data will be shown in url,it's basically used for jump one page to another page -->
    <!-- <form action="" method ="GET">
        <label>Username</lable><br>
        <Input type="text" name="user_name"><br>
        <label>Email</lable><br>
        <Input type="email" name="email"><br>
        <label>Password</lable><br>
        <Input type="password" name="password"><br>
        <br>
        <Input type="submit" value="Submit Data" name="btn">
    </form> -->
    
    <form action="contact.php" method ="POST">
        <label>Username</lable><br>
        <Input type="text" name="user_name"><br>
        <label>Email</lable><br>
        <Input type="email" name="email"><br>
        <label>Password</lable><br>
        <Input type="password" name="password"><br>
        <br>
        <Input type="submit" value="Submit Data" name="btn">
    </form>
</body>
</html>