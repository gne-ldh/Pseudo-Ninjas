<?php
    include 'session.php';
    $qry="select * from teacher";
    $result= $connect->query($qry);
    $i = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td class=\"bg-light\">$row[name]</td>";
        echo "<td class=\"bg-light \">$row[username]</td>";
        echo "<td class=\"bg-light\">$row[email]</td>";
        echo "<td class=\"bg-light\">$row[password]</td>";
        echo "<td class=\"bg-light\"><a href='work.php?sel=0&username=".$row['username']."' class='btn btn-danger'>Delete</a>
        <a href='work.php?sel=1&name=".$row['username']."' class='btn btn-warning'>Edit</a>";
        echo "</tr>";
    }
    ?>