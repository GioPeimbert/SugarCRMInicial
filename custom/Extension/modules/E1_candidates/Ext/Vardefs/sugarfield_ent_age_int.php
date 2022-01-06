<?php
 // created: 2021-12-29 17:02:49
$dictionary['E1_candidates']['fields']['ent_age_int']['calculated']='1';
$dictionary['E1_candidates']['fields']['ent_age_int']['formula']='floor(divide(abs(daysUntil($ent_birthday_dat)),365))';

 ?>