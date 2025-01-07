<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        var_dump($_POST);
        $id = $_POST['id'];
        // var_dump(file_get_contents('php://input'));
    }
?><time data-id="<?=$id?>"><?=date('Y-m-d H:i:s');?></time>