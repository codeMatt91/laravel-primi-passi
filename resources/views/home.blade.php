<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <h1>La prima pagina Laravel</h1>
    <p>Studenti della classe #52</p>
    <ul>
    <?php foreach($students as $student) :?> 
    <li>{{ $student }}</li>
    <?php endforeach;?>
    </ul>
</body>
</html>
