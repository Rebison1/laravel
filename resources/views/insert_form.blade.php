<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/create" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <label>name<input type="text" name='student_name'></label><br>
        <label>age<input type="text" name='student_age'></label><br>
        <label>email<input type="text" name='student_email'></label><br>
        <label>mobile<input type="text" name='student_mobile'></label><br>
        <label>address<input type="text" name='student_address'></label><br>


        <input type="submit" value ="add student">

</body>
</html>
