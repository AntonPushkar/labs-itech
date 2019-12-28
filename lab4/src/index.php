<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="tableStyle.css" rel="stylesheet">
</head>
<body>
<table class="table">
    <tr class="table-definition-name">
        <th>name</th>
        <th>second name</th>
        <th>phone number</th>
    </tr>
    <?php
    $file = file("tableData.txt");
    for ($i = 0; $i < count($file); $i++) {
        $name = trim(explode(",", $file[$i])[0]);
        $secondName = trim(explode(",", $file[$i])[1]);
        $phoneNumber = trim(explode(",", $file[$i])[2]);
        print "<tr class=\"table-row\">";
        print "<td>$name</td>";
        print "<td>$secondName</td>";
        print "<td>$phoneNumber</td>";
        print "</tr>";
    }
    ?>
</table>
</body>
</html>