<?php
include "converter.php";
$rect = new MoneyConverter('2.77' , 100  );


echo $rect->displayConvert(25, 'usd', 'uah');