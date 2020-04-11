<?php include "inc/header.php"; ?>
    <h2 class="page-header">Create Job</h2>
    <form method="post" action="create.php">
        <div class="form-group">
            <label>Company</label>
            <input type="text" name="company" class="form-control">
        </div>
        <div class="form-group">
            <label>Categories</label>
            <select type="text" name="category_id" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?= $category->id;  ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input type="text" name="job_title" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" name="contact_user" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contact_email" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success" name="create">Create</button>
        </div>
    </form>
<?php include "inc/footer.php"; ?>