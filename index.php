<?php

$array = [
    'Name'=> "Felipe",
    'Age'=> 31,
    'Company'=> "B7Web",
    'Color'=> "Blue",
    'Profession'=> "Development Web"
];
?>

<table border="1">
    <?php foreach( $array as $key => $value ): ?>
        <tr>
            <th><?php echo $key ?></th>
            <td><?php echo $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>