<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="./../src/View/css/style.css">

    <!-- Admin Styling -->

    <title>modfier le contenu et le titre de monarticke</title>
</head>

<body>
  
    <form action="index.php?action=edit&id=<?= $post->getId(); ?>" method="POST">
          <
        <label for="content" class="form-label">TITLE</label>
        <input type="text" class="form-control" name="title" value="<?= $post->getTitle(); ?>" >
        <label for="content" class="form-label">content</label>
        <div class="form-group">
            <textarea class="form-control" name="content" rows="4" value=""><?= $post->getContent(); ?></textarea>
        </div>
        <div class="envoyer">
            <button type="submit" class="btn btn-primary" name="edit">Modifier</button>

        </div>

    </form>
    gggg
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>

</html>