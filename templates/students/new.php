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
        <input type="number" id="ssn" name="ssn">
    </p>

    <p>
        <input type="submit" name="submit" value="Add Student">
    </p>

</form>