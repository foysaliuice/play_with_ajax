<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="">name</label>
                <input type="text" name="emp_name" class="form-control" id="emp_name" placeholder="">
              </div>
              <div class="form-group">
                <label for="">salary</label>
                <input type="text" name="emp_salary" class="form-control" id="emp_salary" placeholder="">
              </div>
              <button type="button" class="btn btn-primary" value="Add" onclick="insert_data()">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function insert_data(){
        var xmlhttp = new XMLHttpRequest();
        var newEmp =new FormData();
        var emp_name = document.getElementById("emp_name").value;
        var emp_salary = document.getElementById("emp_salary").value;
        xmlhttp.open("POST","{{ route('addEmp') }}",true);
        newEmp.append('emp_name',emp_name);
        newEmp.append('emp_salary',emp_salary);
        xmlhttp.send(newEmp);

      }
    </script>
  </body>
</html>
