<?php
include "header.php";
?>

<?php
include "sidebar.php";
?>

<div class="content-wrapper">
    <div class="container-fluid pt-2">
        <div class="content">
        <div class="d-flex justify-content-between">
                <div>
                    Category List
                </div>
                <div>
                    <a href="category_add.php" class="btn btn-primary">+ Add Category</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-light table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>SR.NO.</th>
                            <th>category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include "db_connection.php";
                        $query = "SELECT * FROM book_category";
                        $count = 1;
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $count++ ?></td>

                               

                                <td><?php echo $row['category_name']; ?></td>
                                <td><?php echo $row["category_status"] == 1 ? "<div class='badge bg-success'>Active</div>" : "<div class='badge bg-danger'>InActive</div>"; ?>
                                </td>
                               
                                <td>
                     
                 
                          <a onclick="if(confirm('Are you Sure?')){}else{return false;}" href="category_delete.php?category_id=<?php echo $row['category_id'];?>" class="btn btn-danger">
                            <i class= "fas fa-trash nav-icon"></i>
                            </a>
                            
                      </td>

                            </tr>
                            </tbody>
                            <?php
                        }
                        ?> 

                </table>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>