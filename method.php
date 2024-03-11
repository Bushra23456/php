

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color:white;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-3">
    <form action="" method="POST">
        <div class="form-grp">
            <label for="">Username</label>
            <input type="text" placeholder="enter your name" class="form-control" autocomplete="off" name="username" id="">
        </div>

        <div class="form-grp">
            <label for="">Email</label>
            <input type="email" placeholder="enter your email" class="form-control" autocomplete="off" name="email" id="">
        </div>

        <div class="form-grp">
            <label for="">Password</label>
            <input type="password" placeholder="enter your password" class="form-control" autocomplete="off" name="password" id="">
        </div>

        <div class="form-grp">
            <label for=""><h3>select your course</h3></label><br>
            <input type="radio" name="course" value="java" id="">java<br>
            <input type="radio" name="course" value="python" id="">python<br>
            <input type="radio" name="course" value="c++" id="">c++<br>
            <input type="radio" name="course" value="sql" id="">sql<br>
        </div>
        <div class="form-grp">
            <label for=""><h2>select your food</h2></label><br>
            <input type="checkbox" name="food[]" value="TIKKA" id="">TIKKA<br>
            <input type="checkbox" name="food[]" value="BIRYANI" id="">BIRYANI<br>
            <input type="checkbox" name="food[]" value="CHINNESE" id="">CHINNESE<br>
            <input type="checkbox" name="food[]" value="ROLL" id="">ROLL<br>
        </div>
        <input type="submit" name="submit" class="btn btn-dark mt-3" value="submit">
    </form>
    </div>
    <div class="col-lg-6 mt-8">
    <?php
     echo "<pre>";
     print_r($_POST);
     echo"</pre>";
    ?>
    </div>
</div>
</div>
</body>
</html>

