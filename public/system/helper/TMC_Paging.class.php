<?php

class TMC_Paging {

    public $record_in_page;
    public $page_in_group;
    public $total_record;
    public $total_page;
    public $total_group;
    public $page;
    public $group;
    public $start;
    public $first_page;
    public $last_page;
    public $next_group;
    public $previous_group;
    private static $instance;

    public static function getInstance() {
        /* check exists object */
        if (!self::$instance) {
            self::$instance = new TMC_Paging();
        }

        /* return an object */
        return self::$instance;
    }

    public function setup($total_record, $record_in_page, $page_in_group) {
        /* total record */
        $this->total_record = $total_record;

        /* number record in a page */
        $this->record_in_page = $record_in_page;

        /* number page in a group */
        $this->page_in_group = $page_in_group;

        /* release memory */
        unset($total_record, $record_in_page, $page_in_group);
    }

    public function header() {
        if (!isset($_GET['total_page'])) {
            /* calc total page */
            $this->total_page = ceil($this->total_record / $this->record_in_page);

            /* calc total group via total page and page in a group */
            $this->total_group = ceil($this->total_page / $this->page_in_group);
        } else {
            /* total page from $_GET */
            $this->total_page = intval($_GET['total_page']);

            /* calc total group via total page and page in a group */
            $this->total_group = ceil($this->total_page / $this->page_in_group);
        }

        if (!isset($_GET['page'])) {
            if (!isset($_GET['group'])) {
                /* default value */
                $this->page = 1;
                $this->group = 1;
            } else {
                /* parameter value */
                $this->group = intval($_GET['group']);
                $this->page = $this->group * $this->page_in_group - $this->page_in_group + 1;
            }
        } else {
            /* parameter value */
            $this->page = $_GET['page'];
            $this->group = ceil($this->page / $this->page_in_group);
        }

        /* calc start offset for selecting */
        $this->start = ($this->page - 1) * $this->record_in_page;
    }

    public function footerCustom($url, $arrLeft = '«', $arrRight = '»', $disableClass = 'disabled', $activeClass = 'active', $aClass = 'page-link', $liClass = 'page-item', $ulClass = 'pagination') {
        /* container paging */
        echo '<ul class="', $ulClass, '">';

        /* previous group */
        if ($this->group > 1) {
            $this->previous_group = $this->group - 1;
            echo '<li class="', $liClass, '"><a href="', $url, 'group=', $this->previous_group, '&total_page=', $this->total_page, '" class="', $aClass, ' previous">', $arrLeft, '</a></li>';
        }

        /* first page every group */
        $this->first_page = ($this->group - 1) * $this->page_in_group + 1;

        /* last page in group */
        if ($this->group < $this->total_group) {
            $this->last_page = $this->first_page + $this->page_in_group - 1;
        } else {
            $this->last_page = $this->total_page;
        }

        /* number paging item */
        for ($i = $this->first_page; $i <= $this->last_page; $i++) {
            if ($i == $this->page) {
                echo '<li class="', $liClass, ' ', $activeClass, '"><span class="page-link">', $i, '</span></a></li>';
            } else {
                echo '<li class="', $liClass, '"><a href="', $url, 'page=', $i, '&total_page=', $this->total_page, '" class="', $aClass, '">', $i, '</a></li>';
            }
        }

        /* next group */
        if ($this->group < $this->total_group) {
            $this->next_group = $this->group + 1;
            echo '<li class="', $liClass, '"><a href="', $url, 'group=', $this->next_group, '&total_page=', $this->total_page, '" class="', $aClass, ' next">', $arrRight, '</a></li>';
        }

        /* end container paging */
        echo '</ul>';
    }

    public function footer($path) {
        /* container paging */
        echo '<ul class="pagination">';

        /* previous group */
        if ($this->group > 1) {
            $this->previous_group = $this->group - 1;
            echo '<li class="paging_item"><a href="', $path, 'group=', $this->previous_group, '&total_page=', $this->total_page, '" class="btu_pagination">«</a></li>';
        }

        /* first page every group */
        $this->first_page = ($this->group - 1) * $this->page_in_group + 1;

        /* last page in group */
        if ($this->group < $this->total_group) {
            $this->last_page = $this->first_page + $this->page_in_group - 1;
        } else {
            $this->last_page = $this->total_page;
        }

        /* number paging item */
        for ($i = $this->first_page; $i <= $this->last_page; $i++) {
            if ($i == $this->page) {
                echo '<li class="pagination_button active"><a href="#" class="disabled">', $i, '</a></li>';
            } else {
                echo '<li class="pagination_button"><a href="', $path, 'page=', $i, '&total_page=', $this->total_page, '" class="btu_pagination">', $i, '</a></li>';
            }
        }

        /* next group */
        if ($this->group < $this->total_group) {
            $this->next_group = $this->group + 1;
            echo '<li class="paging_item"><a href="', $path, 'group=', $this->next_group, '&total_page=', $this->total_page, '" class="btu_pagination">»</a></li>';
        }

        /* end container paging */
        echo '</ul>';
    }

    public function footerRouting($path, $title = '') {
        /* container paging */
        echo '<ul class="pagination">';

        /* previous group */
        if ($this->group > 1) {
            $this->previous_group = $this->group - 1;
            $temp = (!empty($title)) ? '/' . $title : NULL;
            echo '<li class="paging_item"><a href="', $path, '/p', $this->previous_group, '/', $this->total_page, $temp, '" class="btu_pagination"><i class="fa fa-angle-double-left"></i></a></li>';
        }

        /* first page in group */
        $this->first_page = ($this->group - 1) * $this->page_in_group + 1;

        /* last page in group */
        if ($this->group < $this->total_group) {
            $this->last_page = $this->first_page + $this->page_in_group - 1;
        } else {
            $this->last_page = $this->total_page;
        }

        /* number paging item */
        for ($i = $this->first_page; $i <= $this->last_page; $i++) {
            if ($i == $this->page) {
                echo '<li class="pagination_button active"><a href="#" class="disabled">', $i, '</a></li>';
            } else {
                $temp = (!empty($title)) ? '/' . $title : NULL;
                echo '<li class="pagination_button"><a href="', $path, '/', $i, '/', $this->total_page, $temp, '" class="btu_pagination">', $i, '</a></li>';
            }
        }

        /* next group */
        if ($this->group < $this->total_group) {
            $this->next_group = $this->group + 1;
            $temp = (!empty($title)) ? '/' . $title : NULL;
            echo '<li class="paging_item"><a href="', $path, '/p', $this->next_group, '/', $this->total_page, $temp, '" class="btu_pagination"><i class="fa fa-angle-double-right"></i></a></li>';
        }

        /* end container paging */
        echo '</ul>';
    }

}

?>