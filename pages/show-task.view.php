<!-- modal part 00 -->
  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Summary of: <?=$_GET['id']?></h5>
        <a href="<?='?p=home' ?>" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
      <?php foreach(taskSummary($_GET['id']) as $sumary) :?>
        <p>Subject: <?=$sumary['subject']?></p> 
        <p>Priority: <?=$sumary['priority']?></p>
        <p>Due Date: <?=$sumary['duedate']?></p>
        <p>Status: <?php if($sumary['status'] == 0){echo('In Progress');}else{echo('Completed');}?></p>
      <?php endforeach?>
      </div>
      <div class="modal-footer">
        <a href="<?='?p=home' ?>" class="btn btn-danger" data-dismiss="modal">Close</a>
      </div>
<!-- end of modal part  -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>
