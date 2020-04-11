<?php include_once "config/init.php"; 

$jobs = new Job();

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($jobs->delete($del_id)){
        redirect("index.php", "Job Deleted", "success");
    } else {
        redirect("index.php", "Job Not Deleted", "danger");
    }
}

$template = new Template('templates/job-single.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $jobs->getJob($id);

echo $template;