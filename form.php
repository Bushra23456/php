<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
 <div class="container">
    <div class="row">
        <div class="col-lg-6 mt-5">
            <form action="" method="POST">
                <div class="form-grp">
                    <label for="">USERNAME</label>
                    <input type="username" class="form-control" placeholder="ENTER YOUR NAME" name="username" id="">
                </div>
                <div class="form-grp">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="ENTER YOUR EMAIL" name="email" id="">
                </div>
                <div class="form-grp">
                    <label for="">password</label>
                    <input type="password" class="form-control" placeholder="ENTER YOUR PASSWORD" name="password" id="">
                </div>
                <div class="form-grp">
                <label for=""><h2>SELECT YOUR FOOD</h2></label><br>

                  <input type="checkbox" name="food[]" value="burger" id="">burger<br>
                  <input type="checkbox" name="food[]" value="Pizza" id="">Pizza<br>
                  <input type="checkbox" name="food[]" value="biryani" id="">biryani<br>
                  <input type="checkbox" name="food[]" value="roll" id="">roll<br>

                    
                </div>
                <div class="form-grp">
                    <label for=""><h2>SELECT YOUR COURSE</h2></label>
                  <input type="radio" name="course[]" value="java" id="">java<br>
                  <input type="radio" name="course[]" value="php" id="">Php<br>
                  <input type="radio" name="course[]" value="sql" id="">sql<br>
                  <input type="radio" name="course[]" value="java" id="">java<br>

                    
                </div>
                <div class="form-grp">
                    <input type="submit"  value="submit">
                </div>
            </form>
        </div>
        <div class="col-lg-6">
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