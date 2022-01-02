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
        ['name' => 'Alex', 'surname' => 'James'],
        ['name' => 'Bob', 'surname' => 'Adams']];
    ?>

    <?php foreach($users as $user):?>
        <h3><?php echo $user['name']; ?></h3>
        <p><?php echo $user['surname']; ?></p>
    <?php endforeach;?>   
     
</body>
</html>