<div class="button-list text-center m-2">
<a class="btn btn-success new-prideti" href="<?php echo 'pages/add-task.view.php';?>">Add New Task</a>
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
      <th scope="col">Delete/Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><i class="fas fa-check-square number-icon"></i></th>
      <td class="done"><i class="fas fa-check"></i> Random Text</td>
      <td class="text-center"><p class="bg-primary rounded">Normal</p></td>
      <td>2020 09 08 | 21:00</td>
      <td>Complete</td>
      <td>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%;" 
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
      </div>  
      </td>
      <td>2020 09 08 | 21:00</td>
      <td>
      <a class="btn btn-warning">Edit</a>
      <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row"><i class="far fa-gem number-icon"></i></th>
      <td><i class="fas fa-check"></i> Mark</td>
      <td class="text-center"><p class="bg-danger rounded">High</p></td>
      <td>2020 09 08 | 21:00</td>
      <td>In Progress</td>
      <td>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%;" 
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
      </div>  
      </td>
      <td>2020 09 08 | 21:00</td>
      <td>
      <a class="btn btn-warning">Edit</a>
      <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <tr>
      <th scope="row"><i class="fas fa-check-square number-icon"></i></th>
      <td><i class="fas fa-check"></i> Otto</td>
      <td class="text-center"><p class="bg-success rounded">Low</p></td>
      <td>2020 09 08 | 21:00</td>
      <td>New</td>
      <td>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 40%;" 
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
      </div>  
      </td>
      <td>2020 09 08 | 21:00</td>
      <td>
      <a class="btn btn-warning">Edit</a>
      <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
