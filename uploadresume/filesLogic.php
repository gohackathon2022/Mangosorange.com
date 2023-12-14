<?php
// connect to the database
$conn = mysqli_connect('localhost', 'ehardco1_mangos', 'Mangos@#123', 'ehardco1_mangosorangedb');

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked

    $cand_name = $_POST['cand_name'];
                $cand_mob_no = $_POST['cand_mob_no'];
                $cand_email = $_POST['cand_email'];
                $cand_designation = $_POST['cand_designation'];
                $cand_expert = $_POST['cand_expert'];
                $cand_exp = $_POST['cand_exp'];
                $cand_ctc = $_POST['cand_ctc'];
                $cand_location = $_POST['cand_location'];
                $cand_org = $_POST['cand_org'];
                $cand_client = $_POST['cand_client'];
                $cand_subm_date = $_POST['cand_subm_date'];
                $cand_remark = $_POST['cand_remark'];	
                $entered_by = $_POST['entered_by'];


    // name of the uploaded file
    $filename = $_FILES['filename']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['filename']['tmp_name'];
    $size = $_FILES['filename']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";
    } elseif ($_FILES['filename']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO employee(cand_name, cand_mob_no, cand_email, cand_designation, cand_expert,
                  cand_exp, cand_ctc, cand_location, cand_org, cand_client, cand_subm_date, cand_remark,
                  entered_by,filename, size, downloads) VALUES('$cand_name','$cand_mob_no','$cand_email','$cand_designation',
                  '$cand_expert','$cand_exp','$cand_ctc','$cand_location','$cand_org','$cand_client', '$cand_subm_date',
                  '$cand_remark','$entered_by','$filename', '$size', 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM employee WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['filename'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['filename']));
        readfile('uploads/' . $file['filename']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE employee SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}