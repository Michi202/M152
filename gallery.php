<?php include("header.php") ?>

				<!-- Main -->
                <div id="main">
                    <div class="inner">
                    <header>
                        <h1>Galerie</h1>
                    </header>
    <div class="row">
        <?php
        $dirname = "../images/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            echo '<div style="margin-bottom:42px;" class="col-3"><img width="100%" height="100%" src="'.$image.'" /></div>';
        }

        ?>
    </div>
</div>
</div>

<?php include("footer.php") ?>