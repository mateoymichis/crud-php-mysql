<?php include("db.php") ?>

<?php include("includes/header.php") ?>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group p-1">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group p-1">
                        <textarea name="description"  rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <div class="d-grid gap-2 p-1">
                        <input type="submit" class="btn btn-success" name="save_task" value="Save Task">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8">

        </div>
    </div>
    
</div>

<?php include("includes/footer.php") ?>