<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <!-- Default form contact -->
        <form class="text-center border border-light p-5" action="<?php echo site_url('profile/show') ?>" method="POST">

            <p class="h4 mb-4">ข้อมูลส่วนตัว</p>
            <div class="form-group" align="left">
                <label for="">ชื่อ</label>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" id="name">
                <label for="">นามสกุล</label>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" name="lname" id="lname">
                <label for="">อีเมล์</label>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" name="email" id="email">
                <label for="">เบอร์</label>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" name="phone" id="phone">
                <label for="">ที่อยู่</label>
                <input type="text" id="defaultContactFormName" class="form-control mb-4" name="addr" id="phone">
            </div>
            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Send</button>
        </form>
    </div>
    <!-- Default form contact -->
</body>

</html>