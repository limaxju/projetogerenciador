<?php
session_start();
if (!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = array ();
}
if (isset ($_GET['task_name'])){
    array_push($_SESSION['tasks'],$_GET['task_name']);
    unset($_GET['tasks_name']);
}
if ( isset($_GET['clear'])){
    unset($_SESSION['tasks']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>gerenciador de tarefas</h1>
</div>
<div class="form">
    <form action="" method="get">
        <label for="task_name">TAREFA:</label>
    <input type="text" name="task_name" placeholder="nome da tarefa">
    <button type="submit">cadastrar</button>
</form>
</div>
<div claas="separator">
</div>
<div class= "list-tasks">
    <?php
    if (isset($_SESSION['tasks'])) {
        echo "<ul>";
        foreach ($_SESSION['tasks'] as $key => $task){
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }
    ?>
    <form action="" method="get">
        <input type= "hidden" name="clear" value="clear">
        <button type="submit" class="btn-clear"> limpar tarefas</button>

    </form>
</div>
<div class="footer">
    <p>desenvolvido por Julia Lima </p>
</div>
</div>
</body>
</html>