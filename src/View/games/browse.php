<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <section class="row row-cols-1 row-cols-lg-3">
            <?php foreach ($games as $game) : ?>
            <article class="card col">
                <img src="<?= $game['picture'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $game['name'] ?></h5>
                    <p class="card-text"><?= $game['description'] ?></p>
                    <a href="/games?id=<?= $game['id'] ?>" class="btn btn-primary">More infos...</a>
                </div>
            </article>
            <?php endforeach; ?>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>