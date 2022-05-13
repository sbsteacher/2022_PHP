<?php
    include_once "db/db_board.php";

    $page = 1;
    if(isset($_GET["page"])) {       
        $page = intval($_GET["page"]);
    }     

    $row_count = 20;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);

    
    $jsonObj = array();
    $jsonObj["body"] = array();

    foreach($list as $item) {
        array_push($jsonObj["body"], $item);
    }

    header("Content-Type:application/json");
    echo json_encode($jsonObj);