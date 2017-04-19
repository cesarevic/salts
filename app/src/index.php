<?php
#phpinfo();

$mysqli = new mysqli("172.17.0.1", "root", "your_mysql_password", "employees");
        $res = $mysqli->query("SELECT * FROM employees where gender = 'M' and birth_date = '1965-02-01' and hire_date > '1990-01-01' order by concat_ws(' ',first_name,last_name) ASC");

echo "<table border='1'>
<tr>
<th>emp_no</th>
<th>birth_date</th>
<th>first_name</th>
<th>last_name</th>
<th>gender</th>
<th>hire_date</th>
</tr>";

while ($row = mysqli_fetch_assoc($res)) {

echo "<tr>";
echo "<td>" . $row['emp_no'] . "</td>";
echo "<td>" . $row['birth_date'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['hire_date'] . "</td>";
echo "</tr>";

};

echo "</table>";
?>
