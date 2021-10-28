<?php

$array = [
    'Name'=> "Felipe",
    'Age'=> 31,
    'Company'=> "B7Web",
    'Color'=> "Blue",
    'Profession'=> "Development Web"
];

$keys = array_keys($array);
$values = array_values($array);
?>



<table border="1">
    <tr>
        <?php foreach( $keys as $key ): ?>
            <th><?php echo $key; ?></th>
        <?php endforeach; ?>
    </tr>

    <tr>
        <?php foreach( $values as $value ): ?>
            <th><?php echo $value; ?></th>
        <?php endforeach; ?>
    </tr>
</table>