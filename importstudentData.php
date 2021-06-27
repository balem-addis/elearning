<?php
// Load the database configuration file
include("connection.php");

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $id   = $line[0];
                $fname   = $line[1];
                $mname  = $line[2];
                $lname  = $line[3;
                $age = $line[4];
                $sex = $line[5];
                $depid  = $line[6;
                $year = $line[7];
                $sem = $line[8];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT * FROM student WHERE studentid = '".$line[0]."'";
                $prevResult = mysqli_query($conn, $prevQuery);
                
                if(mysqli_num_rows($prevResult) > 0){
                    // Update member data in the database
                    $query1 = mysqli_query($conn, "UPDATE student SET firstname = '".$fname."', middlename = '".$mname."', lastname = '".$lname."', age = '".$age."', sex = '".$sex."', departmentid = '".$depid."', year = '".$year."', semister = '".$sem."', modified = NOW() WHERE studentid = '".$id."'");
                }else{
                    // Insert member data in the database
                    $query2 = mysqli_query($conn, "INSERT INTO student (studentid, firstname, middlename, lastname, age, sex, departmentid, year, semister) VALUES ('".$id."', '".$fname."', '".$mname."', '".$lname."', '".$age."', '".$sex."', '".$depid."', '".$year."', '".$sem."')");
                    // Insert member data in the database
                   $query3 = mysqli_query($conn, "INSERT INTO account (`instructorid`, `studentid`, `username`, `password`, `usertype`) VALUES ('', '".$id."', '".$fname."', '".$id."', 'student')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
// Redirect to the listing page
header("Location: importstudent.php".$qstring);
?>
