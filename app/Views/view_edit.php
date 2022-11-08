<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="<?= site_url('/update')?>" method="post">
    <input type="hidden" name="id" value="<?= $db_dsusers['id'] ?>">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $db_dsusers['name'] ?>">
    </div>
    <div>
        <label for="diachi">Dia chi</label>
        <input type="text" name="diachi" value="<?= $db_dsusers['diachi'] ?>">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
    </form>
</body>
</html>