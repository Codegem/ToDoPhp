<div class="button-list text-center m-2">
<a class="btn btn-warning new-prideti" href="<?='?p=add-task'?>">Add New Task</a>
</div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"><i class="fas fa-chart-bar"></i></th>
      <th scope="col">Subject</th>
      <th scope="col">Priority</th>
      <th scope="col">Due Date</th>
      <th scope="col">Status</th>
      <th scope="col">Percent Complete</th>
      <th scope="col">Modified On</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(getAllTasks() as $task) :?>
    <tr>
      <th scope="row"><i class="fas fa-check-square number-icon"></i></th>
      <td class=""><i class="fas fa-check"></i><?=$task['subject']; ?></td>
      <td class="text-center"><p class="bg-primary rounded"><?=$task['priority']; ?></p></td>
      <td><?=$task['duedate']; ?></td>
      <td><?php if($task['status'] == 0){echo('In Progress');}else{echo('Completed');}?></td>
      <td>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%;" 
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
      </div>  
      </td>
      <td><?=$task['modifiedon']?></td>
      <td>
      <a class="btn btn-success" href="?p=complete-task&id=<?=$task['id']; ?>">Complete</a>
      <a class="btn btn-danger" href="?p=delete-task&id=<?=$task['id']; ?>">Delete</a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>



