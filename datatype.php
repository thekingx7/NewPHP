<?php
/*
- data type
= bool
= int
= float
=string
= array
= gettype()
*/
echo gettype(true);

echo "<br>";
echo gettype(false);
echo "<br>";
echo gettype(12);
echo "<br>";
echo gettype("true");
echo "<br>";
echo gettype(12.1);
echo "<br>";
echo gettype(['1'=>'12']);
echo "<br>";
echo gettype(array('ff'=>'ff','dd'=>'dd'));
echo "<br>";
echo gettype(array('ff','dd'=>'dd'));
echo "<br>";
echo gettype(array('ff','dd'));
?>