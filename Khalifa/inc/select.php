<?php
$sql = 'SELECT * FROM users order by RAND() LIMIT 1';
$result = mysqli_query($conn,$sql);
$users =  mysqli_fetch_all($result,MYSQLI_ASSOC);
