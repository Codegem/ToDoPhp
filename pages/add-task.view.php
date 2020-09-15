<?php
if(isset($_POST['btnsubmit'])){
    foreach ($_POST as $data){
        echo $data."<br>";
        } 
        createTask($_POST['subject'],$_POST['priority']);

}
else{
?>
<form method="post">
    <div class="form-group">
        <label for="id">Id</label>
        <select name="googlefont" id="id">
            <option selected disabled>Select id logo</option>
            <option value="1">1.<span><i class="fas fa-check-square number-icon"></i></span></option>
            <option value="2">2.<span><i class="far fa-gem number-icon"></i></span></option>
        </select>
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject">
    </div>
    <div class="form-group">
        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            <option selected disabled>Select Priority</option>
            <option value="low">Low</option>
            <option value="normal">Normal</option>
            <option value="high">High</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Due-Date">Due Date</label>
        <select name="Due-Date" id="Due-Date">
            <option selected disabled>Select Status</option>
            <option value="New">New</option>
            <option value="InProgres">InProgres</option>
            <option value="Complete">Complete</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-success" name="btnsubmit" type="submit">Submit</button>
        <a href="<?='?p=home'?>" class="btn btn-danger">Grizti i pagrindini</a>
    </div>
</form>
<?php } ?>