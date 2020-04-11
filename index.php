<?php include_once "config/init.php"; 

$jobs = new Job();

$template = new Template('templates/find-job.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->jobs = $jobs->getByCategory($category);
    $template->title = "Jobs In ".$jobs->getCategory($category)->name;
} else {
    $template->title = "Latest jobs";
    $template->jobs = $jobs->getAllJobs();
}

$template->categories = $jobs->getCategories();

echo $template;

