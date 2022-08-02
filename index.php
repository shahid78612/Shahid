<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <?php
           include 'connect.php';
            $query = "SELECT * FROM `student`";
            $sql = mysqli_query($con,$query)or die('Your Data Not Inseert Check the DATABASE FILED..!');
                   while ($row = mysqli_fetch_assoc($sql)) {

?>
        <tbody>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td>BCA</td>
                <td><?php echo $row['Phone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
          
        </tbody>
        <?php 

                   }
?>
    </table>
</div>
</div>
</body>
</html>
