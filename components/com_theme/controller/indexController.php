<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('theme');
    }

    public function index() {
        /* url current component */
        $this->view->data['url'] = 'index.php?com=theme';

        $this->view->paging = new TMC_Paging2();

        $num_row = $this->mc->getNumRow();
        $paging = FALSE;
        if ($num_row > 30) {
            $paging = TRUE;
        }

        if ($paging) {
            $this->view->data['paging'] = $paging;

            /* get list and pagination for menu type */
            $this->view->paging->setup($num_row, 30);
            $this->view->paging->header();
            $this->view->data['list'] = $this->mc->getAll($this->view->paging->start, $this->view->paging->record_in_page);

            /* release memory */
            unset($paging, $num_row);
        } else {
            $this->view->data['list'] = $this->mc->getList();
        }
        
        $this->view->show('list');
    }

}

?>