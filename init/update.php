<?php
include_once('config.php');
include_once('header.php');


if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
    $query ="SELECT * FROM crud  WHERE id='$id'";
    $statement=$connection->prepare($query);
    $statement->execute();
    $result = $statement->fetch();

if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname  = htmlspecialchars($_POST['lastname']);
    $classroom   = htmlspecialchars($_POST['classroom']);
    $email     = htmlspecialchars($_POST['email']);
    $id = $_GET['id'];
    if (!empty($_POST['firstname'])
        && !empty($_POST['lastname'])
        && !empty($_POST['classroom'])){

        $sql="UPDATE crud SET id='".$id."',firstname='".$firstname."',lastname='".$lastname."',classroom='".$classroom."',
               email='".$email."' WHERE  id='$id'";
        $stmt=$connection->prepare($sql);
        $stmt->execute();

        echo '<body style="background-color:#1df500;"></body>';
        header("refresh:.8;../index.php");
    }
}
?>
    <!--form-->
    <div class="container">
        <form method="POST">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="first" name="firstname" value="<?php echo $result['firstname']; ?>">
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" placeholder="last" name="lastname" value="<?php echo $result['lastname']; ?>">
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="classroom">classroom</label>
                        <input type="text" class="form-control" placeholder="classroom" name="classroom"  value="<?php echo $result['classroom']; ?>">
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="email"  value="<?php echo $result['email']; ?>">
                    </div>
                </div>
                <!--  col-md-6   -->
                <!--  col-md-6   -->
            </div>
            <!--  row   -->
            <div class="row">
                <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
            </div>
        </form>
    </div>



<?php
include_once('footer.php');
