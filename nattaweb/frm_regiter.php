<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="contrainner-mb">
        <div class="text-bg-dark p-3"><center><h1>สมัครสมาชิก</h1></center></div>
    </div>
    <center><div class="contrainner-sm">
    <ul class="list-group">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
    </div></center>
       
    <h1>สมัครสมาชิก</h1>
    <form action="save_regis.php" method="post">
        <label for="code">รหัสนักศึกษา</label>
        <input type="text" name="code" id="code">
        <label for="name">ชื่อสกุล</label>
        <input type="text" name="name" id="name">
        <label for="password">รหัสผ่าน</label>   
        <input type="password" name="password" id="password">
        <button type="submit">บันทึกข้อมูล</button>
        <button type="reset">ล้างข้อมูล</button>

        <div class="text-bg-dark p-3">Dark with contrasting color</div> 
    </form>
</body>
</html>