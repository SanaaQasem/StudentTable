<?php
$students = [
  ['stdNo' => '20003','stdName' => 'Ahmed Ali','stdEmail' => 'ahmed@gmail.com','stdGPA' => 88.7],
  ['stdNo' => '30304','stdName' => 'Mona Khalid','stdEmail' => 'mona@gmail.com','stdGPA' => 78.5],
  ['stdNo' => '10002','stdName' => 'Bilal Hmaza','stdEmail' => 'bilal@gmail.com','stdGPA' => 98.7],
  ['stdNo' => '10005','stdName' => 'Said Ali','stdEmail' => 'said@gmail.com','stdGPA' => 98.7],
  ['stdNo' => '10007','stdName' => 'Mohammed Ahmed','stdEmail' => 'mohamed@gmail.com','stdGPA' => 98.7],
];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>List of students</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(to bottom, #bedbf8ff, #f7faff); }
    .table-container { background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 20px; }
    .table thead th { background: linear-gradient(to bottom, #5dade2, #3498db); color: #fff; text-align: center; }
    .table tfoot td { background: linear-gradient(to bottom, #5dade2, #3498db); color: #fff; font-weight: bold; text-align: center; }
    h2 { color: #2874a6; margin-bottom: 20px; text-align: center; }
    #searchInput { margin-bottom: 20px; }
    .table tbody tr {
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .table tbody tr:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      z-index: 1;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <input type="text" id="searchInput" class="form-control" placeholder="Search by name">

  <div class="table-container">
    <h2>قائمة الطلاب لعام 2024/2025</h2>
    <table class="table table-bordered table-striped text-center align-middle" id="studentsTable">
      <thead>
        <tr>
          <th>#</th>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>GPA</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; foreach($students as $student) { ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $student["stdNo"]; ?></td>
          <td><?php echo $student["stdName"]; ?></td>
          <td><?php echo $student["stdEmail"]; ?></td>
          <td><?php echo $student["stdGPA"]; ?></td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5">Total number of students: <?php echo count($students); ?></td>
                </tr>
      </tfoot>
    </table>
  </div>
</div>

<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#studentsTable tbody tr');
    rows.forEach(row => {
        let nameCell = row.cells[2].textContent.toLowerCase();
        row.style.display = nameCell.includes(filter) ? '' : 'none';
    });
});
</script>

</body>
</html>
