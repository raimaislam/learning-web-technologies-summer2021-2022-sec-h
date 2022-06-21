<?php
if(!isset($_COOKIE['status']))
{
header('location:login.html');
}


?>
<html>
<head>
<title>Users</title>
</head>
<body>
<table border="1">
<tr>
<th>Users</th>
</tr>
<tr>
<td>ID</td>
<td>NAME</td>
<td>USER TYPE</td>
</tr>
<tr>
<td>12-40121-3</td>
<td>Cleark</td>
<td>Admin</td>
</tr>
<tr>
<td>18-19992-2</td>
<td>Flora</td>
<td>User</td>
</tr>
<tr>
<td>19-415793-2</td>
<td>Guzman</td>
<td>user</td>
</tr>
<tr>
<td>16-10904-3</td>
<td>Lara</td>
<td>Admin</td>
</tr>
<tr>
<td><a href="home.php">Go home</a></td>
</tr>

</table>