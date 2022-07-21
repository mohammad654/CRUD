

<?php

$viewTitle='Index';
include_once('init/header.php');
include_once('init/config.php');

// ID   Generate random (15)
$length = 15;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

if (isset($_POST['submit'])){

if (!empty($_POST['firstname'])
    && !empty($_POST['lastname'])
    && !empty($_POST['classroom'])){
    $firstname  = trim(htmlspecialchars($_POST['firstname'])) ;
    $lastname   = trim(htmlspecialchars($_POST['lastname']));
    $classroom  = trim(htmlspecialchars($_POST['classroom']));
    $email      = trim(htmlspecialchars($_POST['email']));

    $sql='INSERT INTO crud (id,firstname, lastname, classroom,email)VALUES (:id,:firstname,:lastname,:classroom,:email)';
    $stmt=$connection->prepare($sql);
    $stmt->bindParam(':id', $randomString);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':classroom', $classroom);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    }else{
    echo '<body style="background-color:#fd1010;"></body>';
    header("Location:.3;index.php");
}
}

?>
<!--form-->
<div class="container mt-5 pt-5 vh-75 shadow">
    <h1 class="text-center bg-danger">CRUD</h1>
    <form method="POST">
        <div class="row ">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first">First Name</label>
                    <input type="text" class="form-control" placeholder="first" name="firstname">
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">Last Name</label>
                    <input type="text" class="form-control" placeholder="last" name="lastname">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="classroom">classroom</label>
                    <input type="text" class="form-control" placeholder="classroom" name="classroom">
                </div>

            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
            </div>
            <!--  col-md-6   -->
            <!--  col-md-6   -->
        </div>
        <!--  row   -->

        <!--  row   -->
        <div class="row">
            <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
        </div>

    </form>
</div>
<!-- table -->
<div class="container shadow p-5 border rounded mt-2">
    <div class="col">
        <table class="table table table-bordered border-primary mt-5 table-hover rounded-3 ">
            <thead>
            <tr class="">
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">classroom</th>
                <th scope="col">Email address</th>
                <th scope="col" class='text-success'>Up date</th>
                <th scope="col" class='text-danger'>Delete</th>
                <th scope="col" class='text-secondary'>Lorem Ipsum</th>
            </tr>
            </thead>
            <tbody class="shadow">
            <?php     $query ="SELECT * FROM crud";?>
            <?php     $statement=$connection->prepare($query); ?>
            <?php     $statement->execute();?>
            <?php     $result = $statement->fetchAll(); ?>
            <?php forEach ($result as $row) { ?>
                <tr class="">
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['classroom']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td class=" px-3 text-center "><a href="init/update.php?id=<?php echo$row['id']; ?>" class='text-success '>Update</a></td>
                    <td class="text-center"><a href="init/delete.php?id=<?php echo $row['id']; ?>" class='text-danger '>Detele</a></td>
                    <td class="text-center"><a href="done.php?id=<?php echo $row['id']; ?>" class='text-secondary '>Lorem Ipsum  </a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<?php
include_once('init/footer.php');
