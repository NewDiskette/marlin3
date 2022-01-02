<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $users = [
        ['name' => 'Alex', 'surname' => 'James', 'role' => 'admin'],
        ['name' => 'Bob', 'surname' => 'Adams', 'role' => 'user'],
        ['name' => 'Jack', 'surname' => 'Williams', 'role' => 'admin'],
        ['name' => 'Jimmy', 'surname' => 'Otler', 'role' => 'user']
    ];?>
    <h3>Администраторы:</h3>
    <?php foreach($users as $user):?>
        <?php if($user['role'] == 'admin'):?>
            <?php echo $user['name'];?> -
            <?php echo $user['surname'];?><br>
        <?php endif;?>    
    <?php endforeach;?>   
    
    <h3>Пользователи:</h3>
    <?php foreach($users as $user):?>
        <?php if($user['role'] == 'user'):?>
            <?php echo $user['name'];?> -
            <?php echo $user['surname'];?><br>
        <?php endif;?>    
    <?php endforeach;?>   
     
</body>
</html>