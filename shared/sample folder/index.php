<!DOCTYPE HTML>
<html>
<head>
<title>Yangrima Computer Lab</title>
<style type="text/css">
.top {
background-color: green;
color: white;
font-size: 20px;
font-family: Calibri Light;
}
.tab {
border-collapse: collapse;
width: 60%;
margin-bottom: 20px;
}
tr {
align: left;
padding-left: 8px;
padding-right: 8px;
border: 2px solid black;
}
td {
align: left;
padding-left: 8px;
padding-right: 8px;
border: 2px solid grey;
}
</style>
</head>
<body bgcolor="tan">
<div align="center">
<h1>Shared Files: <a href=" ../">..back</a></h1>
<table class="tab">
<tr class="top">
<td width="1%"><b>S.N.</b></td>
<td width="49%"><b>Items</b></td>
</tr>
<?php
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
?>
<tr>
<td width="1%"><?php echo $i?></td>
<td width="49%">
<?php
echo "<a href='$path/$file'>$file</a>";
?>
</td>
<?php
        $i++;
    }
}
closedir($dh);
?>
</tr>
</table>
</div>
</body>
</html>
