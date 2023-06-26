

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


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>

</html>