<?php

class registerController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('register');
    }

    public function index() {
        $this->view->data['url'] = 'index.php?com=service&cl=register&act=pRegister';
        if (!isset($_GET['service'])) {
            $this->view->data['advisoryNote'] = 'Cần tư vấn mới';
        } else {
            switch ($_GET['service']) {
                case 'web': $this->view->data['advisoryNote'] = 'Web - ' . $this->mc->getWlsPackage($_GET['package']);
                    break;
                case 'soft': $this->view->data['advisoryNote'] = 'Soft - ' . $this->mc->getWlsPackage($_GET['package']);
                    break;
                case 'logo': $this->view->data['advisoryNote'] = 'Logo - ' . $this->mc->getWlsPackage($_GET['package']);
                    break;
                case 'google': $this->view->data['advisoryNote'] = 'Quảng cáo Google - ' . $this->mc->getGgPackage($_GET['package']);
                    break;
            }
        }
        $this->view->show('form');
    }

    public function pRegister() {
        /* get data */
        $data = TMC_DataProcess::getData('advisory', $_POST);

        /* put into database */
        if (!empty($data)) {
            $this->mc->insert($data);
        }

        /* release memory */
        unset($data, $_POST);

        /* redirect */
        $this->view->show('success');
    }

}

?>