<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5" align="center">
        <div class="card " style="width: 500px;">
            <div class="card card-cascade wider " style="padding: 10px;">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="text ml-3 mt-3" align="left" >
                <label for=""><?php echo $show['name']; ?></label><br>
                <label for=""><?php echo $show['lname']; ?></label><br>
                <label for=""><?php echo $show['email']; ?></label><br>
                <label for=""><?php echo $show['phone']; ?></label><br>
                <label for=""><?php echo $show['addr']; ?></label><br>
            </div>
            </div>
        </div>
    </div>

</body>

</html>