<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <center>



        <!-- Button trigger modal -->
       {{-- /* <button type="button" class="btn btn-primary fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Record Of Students
        </button>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm mx-4 my-0" role="alert">
                <i class="bi bi-check-square-fill me-2"></i>
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Student Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="insertData" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <span class="material-icons">face</span>
                            <input type="text" placeholder="Student Name" class="form-control" name="Student_Name" id="">
                        </div>

                        <div class="mb-2">
                            <input type="text" placeholder="Student Email" class="form-control" name="Student_Email" id="">
                        </div>
                        <div class="mb-2">
                            <input type="file"  class="form-control" name="Student_Image" id="">
                        </div>

                        <button type="submit" class="btn btn-primary fw-bold rounded-pill" data-bs-dismiss="modal">Add Record</button>
                    </form>


                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary fw-bold rounded-pill" data-bs-dismiss="modal">Submit</button>

                </div>
            </div>
            </div>
        </div> --}}





        {{-- <div class="bg-dark py-3">
            <div class="container">
                <div class="h4 text-black">Exam Portal</div>
            </div>

        </div>

        <div class="container py-3 w-75">
            <div class="d-flex justify-content-between py-3">
                <div class ="h4">Student List</div>
                <div>
                    <a href="#" class="btn btn-primary fw-bold"><span class="material-icons">  person_add</span></a>
                </div>
            </div>
            <div class="mx-auto  pm-2 w-80 card border-0 shadow-lg">
                <table class="table table-hover mb-2 mx-auto center">

                    <thead>
                        <tr>
                          <th>ID</th>
                          <th> Name</th>
                          <th> Email</th>
                          <th> Image</th>
                          <th> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <th scope="row">1
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <a href="#" class="btn btn-primary fw-bold btn-sm"><span class="material-icons">edit</span></a>
                                <a href="#" class="btn btn-danger fw-bold btn-sm"><span class="material-icons">delete</span></a>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>
                            <a href="#" class="btn btn-primary fw-bold btn-sm"><span class="material-icons">edit</span></a>
                            <a href="#" class="btn btn-danger fw-bold btn-sm"><span class="material-icons">delete</span></a>
                        </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <a href="#" class="btn btn-primary fw-bold btn-sm"><span class="material-icons">edit</span></a>
                            <a href="#" class="btn btn-danger fw-bold btn-sm"><span class="material-icons">delete</span></a>
                        </td>
                        </tr>
                      </tbody>
                  </table>
            </div>
        </div>





        </center> --}}


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
