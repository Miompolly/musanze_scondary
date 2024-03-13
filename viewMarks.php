<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "msanzeschool";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

$sql_internal = "SELECT id_no, management, accounting, cpp, geography, economics,
                 (management + accounting + cpp + geography + economics) AS total_internal
                 FROM internal_exam";

$sql_external = "SELECT id_no, political_science, general_knowledge, oral,
                 (political_science + general_knowledge + oral) AS total_external
                 FROM external_exam";

$result_internal = $conn->query($sql_internal);
$result_external = $conn->query($sql_external);

if ($result_internal->num_rows > 0) {
    echo "<h2>Internal Exam Data:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Course</th><th>Marks</th><th>Grade</th></tr>";
    $total_internal_marks = 0;
    while($row = $result_internal->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Management</td><td>".$row["management"]."</td><td>".calculateGrade($row["management"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Accounting</td><td>".$row["accounting"]."</td><td>".calculateGrade($row["accounting"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>CPP</td><td>".$row["cpp"]."</td><td>".calculateGrade($row["cpp"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Geography</td><td>".$row["geography"]."</td><td>".calculateGrade($row["geography"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Economics</td><td>".$row["economics"]."</td><td>".calculateGrade($row["economics"])."</td>";
        echo "</tr>";
        $total_internal_marks += $row["total_internal"];
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Total Internal Marks</td><td>".$row["total_internal"]."</td><td>".calculateGrade($row["total_internal"])."</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>Total Internal Marks: $total_internal_marks</p>";
} else {
    echo "No data found in the internal_exam table";
}

if ($result_external->num_rows > 0) {
    echo "<h2>External Exam Data:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Course</th><th>Marks</th><th>Grade</th></tr>";
    $total_external_marks = 0;
    while($row = $result_external->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Political Science</td><td>".$row["political_science"]."</td><td>".calculateGrade($row["political_science"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>General Knowledge</td><td>".$row["general_knowledge"]."</td><td>".calculateGrade($row["general_knowledge"])."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Oral</td><td>".$row["oral"]."</td><td>".calculateGrade($row["oral"])."</td>";
        echo "</tr>";
        $total_external_marks += $row["total_external"];
        echo "<tr>";
        echo "<td>".$row["id_no"]."</td>";
        echo "<td>Total External Marks</td><td>".$row["total_external"]."</td><td>".calculateGrade($row["total_external"])."</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>Total External Marks: $total_external_marks</p>";
} else {
    echo "No data found in the external_exam table";
}

$totalCourses=8;
$total_marks = $total_internal_marks + $total_external_marks;
$average=$total_marks/$totalCourses;
echo "<p>Total Marks: $total_marks</p>";
echo "<p> Average:$average </p>";

$conn->close();

function calculateGrade($marks) {
    if ($marks >= 80) {
        return 'A';
    } elseif ($marks >= 70) {
        return 'B';
    } elseif ($marks >= 60) {
        return 'C';
    } elseif ($marks >= 50) {
        return 'D';
    } elseif ($marks >= 40) {
        return 'E';
    } else {
        return 'F';
    }
}
?>
