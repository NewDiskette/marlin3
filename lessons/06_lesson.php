<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $names = ['Alex', 'John', 'Bob', 'Jane'];?>

    <?php foreach($names as $name):?>
        <h3><?php echo $name; ?></h3>
    <?php endforeach;?>   
     
</body>
</html>