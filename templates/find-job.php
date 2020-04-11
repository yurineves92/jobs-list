<?php include "inc/header.php"; ?>
    <div class="jumbotron">
        <h1 class="display-3">Find A Job</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?= $category->id;  ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select><br>
            <button type="submit" class="btn btn-lg btn-success">Find Job!</button>
        </form>
    </div>
    <h3><?= $title; ?></h3>
    <?php foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-lg-10">
        <h4><?= $job->job_title; ?></h4>
        <p><?= $job->description; ?></p>
        </div>
        <div class="col-md-2">
        <a class="btn btn-primary" href="job.php?id=<?= $job->id; ?>">View</a>
        </div>
    </div>
    <?php endforeach; ?>

    <?php include "inc/footer.php"; ?>
</div> <!-- /container -->