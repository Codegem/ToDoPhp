<?php
        if (isset($_POST['submit'])) {
            deleteTask($_GET['id']);
            
        }
?>
<a href="<?='?p=home' ?>" class="btn btn-danger">Grizti</a>
<h1>Ar Norite Panaikinti Si TASK'A?</h1>
<form method="post">
<button name="submit" type="submit" href="<?='?p=home' ?>">Taip</button>
</form>