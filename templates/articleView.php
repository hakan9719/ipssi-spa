<?php 

require "headerView.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mt-2">
                <h2><?=$articles->getTitle()?></h2>
                <p style="text-align:justify"><?=$articles->getContent()?></p>
            </div>
        </div>
    </div>
</body>
</html>