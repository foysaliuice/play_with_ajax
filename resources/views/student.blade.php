<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play with Ajax</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Play With ajax in Laravel project</h2>
              </div>
              <div class="panel-body">
                <input type="text" name="search" class="form-control" id="search_txt" placeholder="Search">
                <table class="table table-hover">
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#search_txt").keyup(function() {
          $txt = $(this).val();
          $.ajax({
            url: '{{ route('result') }}',
            type: 'get',
            data: {'search': $txt},
            success:function(data){
              $("tbody").html(data);
            }
          });
        });
      });
    </script>
  </body>
</html>
