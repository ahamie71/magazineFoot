<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./../src/View/css/style.css">
    <title>modfier le contenu et le titre de monarticke</title>
</head>

<body>
    <form action="index.php?action=Edit&id=<?=$post->getId()?>" method="POST">
        <div class="container">
            <label for="content" class="form-label">TITLE</label>
            <input type="text" class="form-control" name="title" value="<?= $post->getTitle()?>" ;>
            <label for="content" class="form-label">content</label>
            <div class="form-group">
                <textarea class="form-control" name="content" rows="4" value=""><?= $post->getContent()?></textarea>
            </div>
            <div class="envoyer">
                <button type="submit" class="btn btn-primary" name="edit">Modifier</button>
            </div>
    </form>
    </div>

    Cristiano Ronaldo dos Santos Aveiro, couramment appelé Cristiano Ronaldo ou Ronaldo et surnommé CR7, né le 5 février 1985 à Funchal, est un footballeur international portugais qui évolue au poste d'attaquant à Al-Nassr FC.

Considéré comme l'un des meilleurs footballeurs de l'histoire, il est avec Lionel Messi (avec qui il entretient une rivalité sportive) l’un des deux seuls à avoir remporté le Ballon d'or au moins cinq fois. Auteur de plus de 800 buts en plus de 1 100 matchs en carrière, Ronaldo est le meilleur buteur de l'histoire du football selon la FIFA. Il est également le meilleur buteur de la Ligue des champions de l'UEFA, des coupes d'Europe, du Real Madrid, du derby madrilène, de la Coupe du monde des clubs de la FIFA et de la sélection portugaise, dont il est le capitaine officiel depuis 2008. Premier joueur à avoir remporté le Soulier d'or européen à quatre reprises, il est également le meilleur buteur de l'histoire du championnat d'Europe des nations devant Michel Platini et détient le record de buts en équipe nationale, avec 122 réalisations.
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>

</html>