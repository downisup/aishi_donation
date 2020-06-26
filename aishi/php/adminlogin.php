


<?php

$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');

//-----------------------------validation -----------------------------------

		if($username=="admin" && $password=="admin") : ?>
<div><a href="newsletter_show.php">registered for newsletter table</a></div><br>
<div><a href="basic_info_show.php">registration basic </a></div><br>
<div><a href="donors_list_show.php">donors list</a></div>
<br>
<!------hide the block if validation is wrong--------------------->
<?php endif; ?>
<a href="../aishi.html">return home!</a>