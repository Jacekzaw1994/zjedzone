<?php
/**
 * Created by PhpStorm.
 * User: Jacek
 * Date: 2015-11-23
 * Time: 00:37
 */

class Help extends Controller {
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

        require ROOT_DIR . '/models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
    }
}
