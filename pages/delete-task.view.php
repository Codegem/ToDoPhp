<?php
        if (isset($_POST['submit'])) {
            deleteTask($_GET['id']);
            
        }
?>
<h1 style="text-align: center; margin-top: 10rem;">Ar Norite Panaikinti Si TASK'A?</h1>
<form method="post">
<button name="submit" type="submit" class="btn btn-success">Taip</button>
<a href="<?='?p=home' ?>" class="btn btn-danger">Grizti</a>
</form>