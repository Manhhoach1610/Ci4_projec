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
    <h3>Danh sach user</h3>

    <a href="<?php echo site_url('/user_form') ?>">Create</a>

    <table border="1px solid black">
        <thread>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Dia chi</td>
                <td>Thao tac</td>
            </tr>
        </thread>
        <tbody>
            <?php foreach($db_dsusers as $user): ?>
            <tr>
                <td><?php echo $user['id']  ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['diachi'] ?></td>
                <td>
                    <a href="<?php echo site_url('edit/').$user['id'] ?>">Edit</a>
                    <a href="<?php echo site_url('delete/').$user['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>