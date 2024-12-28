<!-- a) write a PHP program to handle file uploads, restricting file types to PNG, JPG and GIF, and 
limiting file size to 2 MB, error handling and a success message upon successful upload. -->

<?php
$allowed_types = array("png", "jpg", "jpeg", "gif");
$max_size = 2 * 1024 * 1024;
$upload_dir = "../upload-image"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["fileToUpload"])) {
        $file = $_FILES["fileToUpload"];
        $file_name = $file["name"];
        $file_tmp_name = $file["tmp_name"];
        $file_size = $file["size"];
        $file_type = $file["type"];
        $target_file = $upload_dir . basename($file_name);

        $upload_error = "";

        if (!in_array($file_type, $allowed_types)) {
            $upload_error = " only PNG, JPG, JPEG, and GIF files are allowed.";
        }
        
        if ($file_size > $max_size) {
            $upload_error = "Your file is too large. Maximum allowed size is 2MB.";
        }

        if (empty($upload_error)) {
            if (move_uploaded_file($file_tmp_name, $target_file)) {
                echo "The file " . htmlspecialchars($file_name) . " has been uploaded successfully.";
            } else {
                $upload_error = "There was an error uploading your file.";
            }
        }
        if (!empty($upload_error)) {
            echo "<p>$upload_error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="fileToUpload">Select image to upload:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" required>
    <br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
