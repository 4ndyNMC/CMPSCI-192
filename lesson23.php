<?php

require 'Structures/DataGrid.php'; 

$datagrid =new Structures_DataGrid(); 

// database connection 
$options array('dsn' => 'mysql://root:@localhost/LearningDB'); 

$test = Sdatagrid—>bind('SELECT * FROM demo', Soptions,'MDB2'); // Print bindilg error if any 

if (PEAR::isError(Stest)) echo Stest—>getMessage();  

$test = Sdatagrid—>render(); 

if (PEAR::isError(Stest)) echo Stest—>getMessage();
?> 