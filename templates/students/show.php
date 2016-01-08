<?php include 'includes/header.php' ?>

<h2>Showing Student</h2>

<strong>Name: </strong><?= $student['name'] ?><br><br>
<strong>Age: </strong><?= $student['age'] ?><br><br>
<strong>Email: </strong><?= $student['email'] ?><br><br>
<strong>SSN: </strong><?= $student['ssn'] ?><br><br>

<a href="/students" class="btn btn-primary">Back to all students</a>

<?php include 'includes/footer.php' ?>