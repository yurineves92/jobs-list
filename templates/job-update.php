<?php include "inc/header.php"; ?>
    <h2 class="page-header">Update Job</h2>
    <form method="POST" action="edit.php?id=<?= $job->id; ?>">
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" class="form-control" value="<?= $job->company; ?>">
        </div>
        <div class="form-group">
            <label>Categories</label>
            <select type="text" name="category_id" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id): ?>
                        <option value="<?= $category->id;  ?>" selected><?= $category->name ?></option>
                    <?php else: ?>
                        <option value="<?= $category->id;  ?>"><?= $category->name ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" name="job_title" class="form-control" value="<?= $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="form-control"><?= $job->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="<?= $job->location; ?>">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" class="form-control" value="<?= $job->salary; ?>">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" name="contact_user" class="form-control" value="<?= $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contact_email" class="form-control" value="<?= $job->contact_email; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
        </div>
    </form>
<?php include "inc/footer.php"; ?>