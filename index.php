<?php include 'header.php'; ?>
<?php include 'dbcon.php'; ?>

<div class="box1">
    <h2>ALL STUDENTS</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        ADD STUDENTS
    </button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $query = "select * from `students`";
        $result = mysqli_query($connnection, $query);

        if (!$result) {
            die("query failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

                <?php
            }
        }
        ?>
    </tbody>
</table>
<?php
    if (isset($_GET['message'])) {
        echo "<h6 style='text-align: center; color: red;'>".$_GET['message']."</h6>";
    }
?>

<?php
    if (isset($_GET['Insert_msg'])) {
        echo "<h6 style='text-align: center; color: red;'>".$_GET['Insert_msg']."</h6>";
    }
?>


<?php
    if (isset($_GET['update_msg'])) {
        echo "<h6 style='text-align: center; color: red;'>".$_GET['update_msg']."</h6>";
    }
?>

<?php
    if (isset($_GET['delete_message'])) {
        echo "<h6 style='text-align: center; color: red;'>".$_GET['delete_message']."</h6>";
    }
?>

<!--Modal-->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control" />
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="add_students" value="ADD" class="btn btn-success">
            </div>
        </div>
    </div>
</div>
</form>

<?php include 'footer.php'; ?>