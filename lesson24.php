<?php 
require_once "command.php"; 
require_once "taskfacade.php"; 

class MyDefault extends Command { 
	function doExecute( RequestHelper $requestHelper ) { 
		$requestHelper->setMessage( "welcome" ); 
		$taskfacade = new TaskFacade(); 
		$tasks = $taskfacade->getTasks(); 
		$requestHelper->saveVar( "tasks", $tasks ); 
		return CMD_SUCCESS; 
	}
}
?>
<html> 
	<head> 
		<title>The Task List</title> 
	</head> 
	<body> 
		<div> 
			<h3> <?php print $data->getMessage(); ?> </h3> 
			<p> <b>The tasks</b><br I> <a href="?cmd=AddTask">add a task</a> </p> 
			<table border="1" <tr><
			td><b>owner</b></td>
			<td><b>summary</b></td></tr> 
			<?php foreach ( $tasks as $task ) { 
				print '<<<TASK 
				<tr> <td>{$task[\'person\']}</td><td>{$task[\'summary\']}</td> </tr> 
				TASK'; 
			} ?> 
			</table> 
		</div> 
	</body> 
</html> 
