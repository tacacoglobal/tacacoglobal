<?php

class TMC_Paging2 {

    public $record_in_page;
    public $total_record;
    public $total_page;
    public $page;
    public $start;
    public $first_page;
    public $last_page;
    private static $instance;

    public static function getInstance() {
        /* check exists object */
        if (!self::$instance) {
            self::$instance = new TMC_Paging2();
        }

        /* return an object */
        return self::$instance;
    }

    public function setup($total_record, $record_in_page) {
        /* total record */
        $this->total_record = $total_record;

        /* number record in a page */
        $this->record_in_page = $record_in_page;

        /* release memory */
        unset($total_record, $record_in_page);
    }

    public function header() {
        $this->total_page = (!isset($_GET['total_page'])) ? ceil($this->total_record / $this->record_in_page) : $_GET['total_page'];

        $this->page = (!(isset($_GET['page']))) ? 1 : $_GET['page'];

        /* calc start offset for selecting */
        $this->start = ($this->page - 1) * $this->record_in_page;
    }

    public function footerCustom($url, $arrLeft = '«', $arrRight = '»', $disableClass = 'disabled', $activeClass = 'active', $aClass = 'page-link', $liClass = 'page-item', $ulClass = 'pagination') {
        /* container paging */
        echo '<ul class="', $ulClass, '">';

        /* previous page */
        if ($this->page > 1) {
            echo '<li class="', $liClass, '"><a href="', $url, 'page=', $this->page - 1, '&total_page=', $this->total_page, '" class="', $aClass, '">', $arrLeft, '</a></li>';
        }

        /* first page */
        $this->first_page = 1;


        /* last page */
        $this->last_page = $this->total_page;

        /* number paging item */
        echo '<li class="', $liClass, ' ', $activeClass, '">', $this->page, ' / ', $this->total_page, '</li>';

        /* next group */
        if ($this->page < $this->total_page) {
            echo '<li class="', $liClass, '"><a href="', $url, 'page=', $this->page + 1, '&total_page=', $this->total_page, '" class="', $aClass, '">', $arrRight, '</a></li>';
        }

        /* end container paging */
        echo '</ul>';
    }

    public function footer($path) {
        /* container paging */
        echo '<ul class="pagination">';

        /* previous page */
        if ($this->page > 1) {
            echo '<li class="paging_item"><a href="', $path, 'page=', $this->page - 1, '&total_page=', $this->total_page, '" class="btu_pagination">«</a></li>';
        }

        /* first page every group */
        $this->first_page = 1;

        /* last page in group */
        $this->last_page = $this->total_page;

        /* number paging item */
        echo '<li class="page-item mx-2 font-weight-bold">', $this->page, '/', $this->total_page, '</li>';

        /* next page */
        if ($this->page < $this->total_page) {
            echo '<li class="paging_item"><a href="', $path, 'page=', $this->page + 1, '&total_page=', $this->total_page, '" class="btu_pagination">»</a></li>';
        }

        /* end container paging */
        echo '</ul>';
    }

}

?>