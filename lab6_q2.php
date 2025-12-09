<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            text-align: left;
        }
        th, td {
            border: 2px solid black;
            padding: 6px;
        }
    </style>
</head>

<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                "program" => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Alice',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIP',
                'age' => 21
            ]
        ];
    ?>

    <h2>Student Details</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>

        <?php 
        foreach ($students as $s) {
            echo "<tr>";
            echo "<td> {$s['name']}</td>";
            echo "<td>{$s['program']}</td>";
            echo "<td>{$s['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>