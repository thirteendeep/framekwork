<div class="row">
    <div class="large-12 column">
        <h1>Documentation</h1>

        <br>
        <br>
        <br>

        <h2>Block grid</h2>
        <p>
            Block grids give you a way to evenly split contents of a list within the grid. If you wanted to create a row of five images or paragraphs that need to stay evenly spaced no matter the screen size, the block grid is for you.
        </p>
        <div class="row">
            <div class="large-6 columns">
                <?php include('/application/layouts/docs/components/block-grid.php'); ?>
            </div>
            <div class="large-6 columns">
                <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
                    <li>Bloc 1</li>
                    <li>Bloc 2</li>
                    <li>Bloc 3</li>
                    <li>Bloc 4</li>
                    <li>Bloc 5</li>
                    <li>Bloc 6</li>
                </ul>
            </div>

        </div>
    </div>
</div>



<div class="row">
    <div class="large-12 column">
        <h1>Mixins</h1>
        <?php
        include('/application/layouts/docs/components/px-to-rem.php');
        ?>
    </div>
</div>