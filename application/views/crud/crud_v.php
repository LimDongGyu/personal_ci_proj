<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">CODEIGNITER</a>
    </nav>

    <div class="container">
    <br>
    <br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Crud/create')?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthdate</label>
                        <input type="date" class="form-control" name="birthdate" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" class="form-control" name="contactNo" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" class="form-control" name="bio" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Contact No</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($result as $row){ ?>

                <tr>
                <th scope="row"><?php echo $row->id;?></th>
                <td><?php echo $row->lastName;?></td>
                <td><?php echo $row->firstName;?></td>
                <td><?php echo $row->birthdate;?></td>
                <td><?php echo $row->contactNo;?></td>
                <td><?php echo $row->bio;?></td>
                <td>actions</td>
                </tr>
                
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>