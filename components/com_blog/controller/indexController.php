<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('blog');
    }

    public function index() {
        /* url current component */
        $this->view->data['url'] = 'index.php?com=blog';

        $this->view->paging = new TMC_Paging2();

        $num_row = $this->mc->getNumRow();
        $paging = FALSE;
        if ($num_row > 18) {
            $paging = TRUE;
        }

        if ($paging) {
            $this->view->data['paging'] = $paging;

            /* get list and pagination for menu type */
            $this->view->paging->setup($num_row, 18);
            $this->view->paging->header();
            $this->view->data['list'] = $this->mc->getAll($this->view->paging->start, $this->view->paging->record_in_page);

            /* release memory */
            unset($paging, $num_row);
        } else {
            $this->view->data['list'] = $this->mc->getList();
        }

        /* show view */
        $this->view->show('list');
    }

    public function view() {
        $this->view->data['item'] = $this->mc->getBlogItem();
        $this->view->data['type'] = $this->mc->getBlogType();
        $this->view->data['relative'] = $this->mc->getBlogRelative();
        $this->view->data['lastest'] = $this->mc->getBlogLastest();
        $this->view->show('view');
    }

    public function getByType() {
        $this->view->data['url'] = 'index.php?com=blog';

        $this->view->paging = new TMC_Paging2();

        $num_row = $this->mc->getNumForType();
        $paging = FALSE;
        if ($num_row > 18) {
            $paging = TRUE;
        }

        if ($paging) {
            $this->view->data['paging'] = $paging;

            /* get list and pagination for menu type */
            $this->view->paging->setup($num_row, 18);
            $this->view->paging->header();
            $this->view->data['list'] = $this->mc->getByType($this->view->paging->start, $this->view->paging->record_in_page);

            /* release memory */
            unset($paging, $num_row);
        } else {
            $this->view->data['list'] = $this->mc->getByTypeAll();
        }

        $this->view->data['typeName'] = $this->mc->getTypeName();
        $this->view->show('bytype');
    }

}

?>