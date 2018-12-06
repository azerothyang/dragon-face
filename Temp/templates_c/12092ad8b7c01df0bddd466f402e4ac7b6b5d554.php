<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo e($content); ?></h1>
    <?php for($i = 0; $i < 10; $i++): ?>
        The current value is <?php echo e($i); ?> <br>
    <?php endfor; ?>
</body>
</html>