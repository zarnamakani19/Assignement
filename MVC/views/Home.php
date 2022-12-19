<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="<?php echo $this->url. 'Contoller/LandingController.php/addproduct' ?>" class="btn btn-primary mt-4 mb-4">ADD</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scop="col">Id</th>
                            <th scop="col">Name</th>
                            <th scop="col">Price</th>
                            <th scop="col">Description</th>
                            <th scop="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>mdo</td>
                            <td>
                                <a href="<?php echo $this->url.'controller/LandingController.php/edit?eid=1'?>" class="btn btn-info">EDIT</a>
                                <a href="" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>

                    <?php ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>