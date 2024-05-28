<?php

$json_data = json_decode('[
	{
		"name": "Denton Fisher",
		"phone": "1-626-873-8284",
		"email": "primis.in@aol.com",
		"address": "123-4495 Orci. Road",
		"postalZip": "302270",
		"list": 5
	},
	{
		"name": "Brian Key",
		"phone": "1-210-914-6461",
		"email": "egestas.blandit@protonmail.net",
		"address": "Ap #489-7110 Sit Av.",
		"postalZip": "65133-708",
		"list": 15
	},
	{
		"name": "Roanna Morin",
		"phone": "(649) 788-2278",
		"email": "vel@protonmail.com",
		"address": "P.O. Box 100, 3077 Ridiculus Rd.",
		"postalZip": "785987",
		"list": 7
	},
	{
		"name": "Veronica Pugh",
		"phone": "(228) 378-7537",
		"email": "ac.feugiat@aol.com",
		"address": "Ap #134-116 Pede. Rd.",
		"postalZip": "819836",
		"list": 11
	},
	{
		"name": "Ivory Underwood",
		"phone": "1-250-793-4035",
		"email": "orci.ut.semper@google.net",
		"address": "Ap #307-829 Vitae Avenue",
		"postalZip": "40509",
		"list": 3
	}
]');

// echo "<pre>";
// print_r($json_data);
?>
<html>
    <table>
        <th>
            <td>Name</td>
            <td>phone</td>
            <td>email</td>
            <td>address</td>
            <td>ZIP</td>
            <td>list</td>
        </th>
        <?php 
        $newArr = ["fav"=>1];
        array_push($json_data,$newArr);
        echo "<pre>";
print_r($json_data);
die;
        foreach($json_data as $val){
            
            ?>
        <tr>
            <td><?php echo $val->name;  ?></td>
            <td><?php echo $val->phone;  ?></td>
            <td><?php echo $val->email;  ?></td>
            <td><?php echo $val->address;  ?></td>
            <td><?php echo $val->postalZip;  ?></td>
            <td><?php echo $val->list;  ?></td>
            <td><?php echo $val->fav;  ?></td>
        </tr>
        <?php } ?>
    </table>
</html>
