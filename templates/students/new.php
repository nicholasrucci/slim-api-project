<?php include 'includes/header.php' ?>

<h2>Add a Student</h2>


<form method="post" action="/index.php/students">

    <p>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name">
    </p>

    <p>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age">
    </p>

    <p>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email">
    </p>

    <p>
        <label for="ssn">Social Security Number:</label><br>
        <input type="text" id="ssn" name="ssn">
    </p>

    <p>
        <a href="/students" class="btn btn-primary">Back to all students</a>
        <input type="submit" name="submit" value="Add Student" class="btn btn-success">
    </p>

</form>

<?php include 'includes/footer.php' ?>
