<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
<div class="container-fluid">
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
    </tr>
  </tbody>
</table>
</div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="/view/js/mainjs.js"></script>
</body>
</html>