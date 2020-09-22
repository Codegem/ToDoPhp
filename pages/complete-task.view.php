<?php
        if (isset($_POST['submit'])) {
            completeTask($_GET['id']); ?>
            <div style="color: green; text-align:center; margin-top:10rem;">
                <h2>Success</h2>
                <a href="<?='?p=home' ?>" class="btn btn-danger" id="test">Grizti</a>
                </div>
        <?php 
        } 
        else {
?>
<div class="div" style="margin-top: 10rem;"></div>
<h1 style="color: green; text-align:center;">Compleetinti Task?</h1>
<form method="post">
<button class="btn btn-success" name="submit" type="submit">Taip</button>
<a href="<?='?p=home' ?>" class="btn btn-danger">Atsaukti</a>
</form>
<?php } ?>