<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Laravel CRUD - Jquery Ajax using Bootstrap Modal</title>
  </head>
  <body>


    <div class="w-100">
        <div class="jumbotron">
            <div class="row">
                <h1>Laravel CRUD - Jquery Ajax using Bootstrap Modal</h1>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentform">
                Student Add Form
            </button>

            <table class="table table-striped mt-5" id="studentTable">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Section</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
        </div>
    </div>



 
    <!-- Modal -->
    <div class="modal fade" id="studentform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form id="studentAddForm">
                {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="firstname">Student First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Enter Student First Name">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Student Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Enter Student Last Name">
                        </div>

                        <div class="form-group">
                            <label for="course">Student Course</label>
                            <input type="text" class="form-control" id="course" name="course" required placeholder="Enter Student Course">
                        </div>

                        <div class="form-group">
                            <label for="section">Student Section</label>
                            <input type="text" class="form-control" id="section" name="section" required placeholder="Enter Student Section">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    {{-- Add User Data --}}
    <script type="text/javascript">
        $(document).ready(function() {

            $('#studentAddForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '/studentAdd',
                    data: $('#studentAddForm').serialize(),
                    success: function (response) {
                        console.log(response);
                        $('#studentform').modal('hide');
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

  </body>
</html>