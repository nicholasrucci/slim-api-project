<?php include 'includes/header.php' ?>


<h2>Listing Students</h2>

<table class="table table-striped table-hover">

    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>SSN</th>
    </tr>

    <?php foreach($students as $student): ?>
        <tr>
            <td><a href="/students/<?= $student['id'] ?>"><?= $student['name'] ?></a></td>
            <td><?= $student['age'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['ssn'] ?></td>
        </tr>
    <?php endforeach ?>

</table>

<?php include 'includes/footer.php' ?>