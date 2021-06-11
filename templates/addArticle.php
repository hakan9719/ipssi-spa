<?php 

require "headerView.php";
?>
    <div class="container">
    <form action="index.php?page=ecrireArticle" class="form" method="POST">
        <div class="form-group">
            <label for="title" class="form-label">Titre:</label>
            <input type="text" class="form-control" name="title" id="title" value="Titre">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Contenu:</label>
            <input type="text" class="form-control" name="content" id="content" value="">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>

</html>