<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <div class="container py-3">
        <?php require "blocks/header.php" ?>

        <form action="check.php" method="post" class="form">
            <h3>Контактная форма</h3>
            <input type="email" name="email" placeholder="Email" class="form-control" />
            <br>
            <textarea name="message" placeholder="Сообщение" class="form-control"></textarea>
            <br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>

        <?php require "blocks/footer.php" ?>
    </div>
</body>

</html>