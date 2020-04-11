<?php include_once "config/init.php"; 

$jobs = new Job();

$id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['update'])){
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category_id'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($jobs->update($id, $data)){
        redirect('index.php', 'Your job has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'danger');
    }
}

$template = new Template('templates/job-update.php');

$template->job = $jobs->getJob($id);
$template->categories = $jobs->getCategories();

echo $template;