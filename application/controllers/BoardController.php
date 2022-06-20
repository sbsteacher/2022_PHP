<?php
namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller {  

    public function index() {
        return $this->list();
    }

    public function list() {
        $model = new BoardModel();
        $list = $model->selBoardList();        

        $this->addAttribute("list", $list);
        return "board/list.php";
    }

    public function detail() {
        $css = ['board/index', 'board/detail'];
        $js = ['board'];
        $param = ["i_board" => $_GET["i_board"]];          
        $model = new BoardModel();
        $data = $model->selBoard($param);
        $this->addAttribute("data", $data);
        $this->addAttribute(_CSS, $css);
        $this->addAttribute(_JS, $js);
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/detail.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function delete() {
        $param = ["i_board" => $_GET["i_board"]];
        $model = new BoardModel();
        $model->delBoard($param);
        return "redirect:/board/list";
    }

    public function mod() {
        $param = ["i_board" => $_GET["i_board"]];
        $model = new BoardModel();
        $model->selBoard($param);
        $data = $model->selBoard($param);
        $this->addAttribute("data", $data);

        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }

    public function modProc() {
        $param = [
            "i_board" => $_POST["i_board"],
            "title" => $_POST["title"],
        ];
        $model = new BoardModel();
        $model->updBoard($param);
        return "redirect:/board/detail?i_board=" . $param["i_board"];
    }
}