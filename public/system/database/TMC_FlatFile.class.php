<?php

class TMC_FlatFile {

    private static $instance;
    private $input = array();
    private $result = array();
    private $table;
    private $pkey;
    private $fkey;
    private $path;
    private $autoId = FALSE;
    private $extFile;
    private $error = array();
    private $permission = TRUE;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new TMC_FlatFile();
        }
        return self::$instance;
    }

    public function setPath($path = NULL) {
        $this->path = $path;
        unset($path);
        return $this;
    }

    public function autoId($auto = TRUE) {
        $this->autoId = $auto;
        unset($auto);
    }

    public function getTable($table, $pkey = NULL, $fkey = NULL) {
        if (empty($table)) {
            die('getTable: Your table name is empty');
        }
        $this->table = $table;
        $this->pkey = $pkey;
        $this->fkey = $fkey;
        unset($table, $pkey, $fkey);
        return $this;
    }

    public function getAttribute() {
        if (!isset($this->input[$this->table])) {
            return FALSE;
        }
        return $this->input[$this->table]['attribute'];
    }

    public function setAttribute($attribute) {
        if (!isset($this->input[$this->table])) {
            return $this;
        }
        $this->input[$this->table]['attribute'] = $attribute;
        return $this;
    }

    private function clearCache() {
        $this->result = array();
        $this->input = array();
        $this->table = NULL;
        $this->pkey = NULL;
        $this->fkey = NULL;
        $this->error = array();
    }

    private function isPublicPermission($group) {
        if (!isset($this->getAttribute()['permission']['gp'])) {
            $this->permission = TRUE;
            return $this;
        }

        $attr = $this->getAttribute()['permission']['gp'];

        if (isset($attr[$group])) {
            $perlist = explode(',', $attr[$group]);
            if (in_array(3, $perlist) || in_array(2, $perlist)) {
                $this->permission = TRUE;
            } else {
                $this->permission = FALSE;
            }
        } else {
            $this->permission = FALSE;
        }
        return $this;
    }

    private function isPrivatePermission($user) {
        if (!isset($this->getAttribute()['permission']['up'])) {
            $this->permission = TRUE;
            return $this;
        }

        $attr = $this->getAttribute()['permission']['up'];

        if (isset($attr[$user])) {
            $perlist = explode(',', $attr[$user]);
            if (in_array(3, $perlist) || in_array(2, $perlist)) {
                $this->permission = TRUE;
            } else {
                $this->permission = FALSE;
            }
        } else {
            $this->permission = FALSE;
        }
        return $this;
    }

    public function isPermission($group, $user) {
        $this->isPublicPermission($group);
        $this->isPrivatePermission($user);
        return $this;
    }

    public function setDataSource($data = array()) {
        $this->input[$this->table] = $data;
    }

    public function createIndex($column = array()) {
        /* exception */
        if (empty($this->input[$this->table]['item'])) {
            return $this;
        }

        /* list record in database */
        $list = $this->input[$this->table]['item'];
        $n = count($list);

        /* temp result */
        $data = array();

        /* set index point to pkey */
        foreach ($column as $col_index => $col_value) {
            for ($i = 0; $i < $n; $i++) {
                $data[$col_index][strtolower($list[$i][$col_index])] = $list[$i][$col_value];
            }
        }


        /* result */
        $this->result = $data;

        /* release memory */
        unset($column, $colName, $n, $list, $i);

        /* return an object */
        return $this;
    }

    public function saveIndex() {
        $options = ['gs' => ['Content-Type' => 'text/plain']];
        $context = stream_context_create($options);

        /* execute */
        return file_put_contents($this->path . $this->table . $this->extFile, json_encode($this->result), 0, $context);
    }

    public function getInputData() {
        return $this->input;
    }

    public function loadFile($fileName, $getType = TRUE, $extFile = '.txt') {
        /* clear cache */
        $this->clearCache();

        /* extension file */
        $this->extFile = $extFile;

        if (!file_exists($this->path . $fileName . $this->extFile)) {
            die('loadFile: does not exist file');
        }

        /* read file into array. Get type is TRUE return array or reverse return object */
        $this->input[$fileName] = json_decode(file_get_contents($this->path . $fileName . $this->extFile), $getType);

        /* release memory */
        unset($fileName, $extFile, $getType);

        /* return an object */
        return $this;
    }

    public function loadFileSP($listFile = array(), $getType = TRUE, $extFile = '.txt') {
        if (empty($listFile)) {
            die('loadFileSP: your list_file is empty');
        }

        /* clear cache */
        $this->clearCache();

        /* extension file */
        $this->extFile = $extFile;

        /* read file into array. Get type is TRUE return array or reverse return object */
        foreach ($listFile as $fileItem) {
            if (!file_exists($this->path . $fileItem . $this->extFile)) {
                continue;
            }
            $this->input[$fileItem] = json_decode(file_get_contents($this->path . $fileItem . $this->extFile), $getType);
        }

        /* release memory */
        unset($listFile, $extFile, $getType);

        /* return an object */
        return $this;
    }

    public function loadFileDP($listFiles = array(), $getType = TRUE, $extFile = '.txt') {
        if (empty($listFiles)) {
            die('loadFileDP: your list_file is empty');
        }

        /* clear cache */
        $this->clearCache();

        /* extension file */
        $this->extFile = $extFile;

        foreach ($listFiles as $path => $listFile) {
            /* set path */
            $this->path = $path;

            /* read file into array. Get type is TRUE return array or reverse return object */
            foreach ($listFile as $fileItem) {
                if (!file_exists($this->path . $fileItem . $this->extFile)) {
                    continue;
                }
                $this->input[$fileItem] = json_decode(file_get_contents($this->path . $fileItem . $this->extFile), $getType);
            }
        }
        
        /* release memory */
        unset($listFiles, $extFile, $getType, $listFile, $path, $fileItem);

        /* return an object */
        return $this;
    }

    public function gettest() {
        return $this->input;
    }

    public function select($column = '*') {
        if (!isset($this->input[$this->table]['item']) || empty($this->input[$this->table]['item'])) {
            return $this;
        }

        if ($column == '*') {
            /* get all record */
            $this->result = $this->input[$this->table]['item'];
        } else {
            /* number of record */
            $num_record = count($this->input[$this->table]['item']);

            for ($i = 0; $i < $num_record; $i++) {
                /* reset var */
                $temp = NULL;

                /* get data */
                foreach ($column as $col_index => $col_name) {
                    $temp[$col_name] = $this->input[$this->table]['item'][$i][$col_name];
                }

                /* put data to array */
                $this->result[] = $temp;
            }

            /* release memory */
            unset($column, $temp, $col_index, $col_name, $num_record, $i);
        }

        /* return an object */
        return $this;
    }

    public function filter($data = array()) {
        if (empty($data)) {
            die('filter: your filter is empty');
        }

        /* visit all table */
        foreach ($data as $table_name => $column_need) {
            /* get data of table_name */
            if (!isset($this->input[$table_name]['item']) || empty($this->input[$table_name]['item'])) {
                break;
            }

            foreach ($this->input[$table_name]['item'] as $item) {
                /* var */
                $temp = NULL;

                /* get column you need */
                if (is_string($column_need) && $column_need == '*') {
                    $temp = $item;
                } else {
                    foreach ($column_need as $col_index => $col_name) {
                        $temp[$col_name] = $item[$col_name];
                    }
                }

                /* put data into result array */
                $this->result[$table_name][] = $temp;
            }
        }

        /* release memory */
        unset($data, $table_name, $column_need, $col_index, $col_name, $temp);

        /* return an object */
        return $this;
    }

    private function mergeDataSC($table1, $table2, $pkey) {
        $n1 = is_countable($table1) ? count($table1) : 0;
        $n2 = is_countable($table2) ? count($table2) : 0;
        $result = array();
        for ($i1 = 0; $i1 < $n1; $i1++) {
            for ($i2 = 0; $i2 < $n2; $i2++) {
                if ($table1[$i1][$pkey] == $table2[$i2][$pkey]) {
                    $result[] = array_merge($table1[$i1], $table2[$i2]);
                }
            }
        }
        return $result;
    }

    public function joinTableSC($table = array()) {
        if (empty($table)) {
            die('joinTableSC: table for joining is empty');
        }

        /* data var */
        $data = $this->result;

        $result = array();
        if (!empty($data)) {
            foreach ($table as $main => $arrSub) {
                if (empty($data[$main])) {
                    break;
                }
                $result = $data[$main];
                foreach ($arrSub as $subName => $pkey) {
                    $result = $this->mergeDataSC($result, $data[$subName], $pkey);
                }
            }
        }

        $this->result = $result;
        return $this;
    }

    private function mergeDataDC($table1, $table2, $pkey) {
        $sub_table = explode('/', $table2);
        //name of hyperlink table
        $sub_name = (isset($sub_table[0]) && !empty($sub_table[0])) ? $sub_table[0] : $sub_name;
        $sub_key = (isset($sub_table[1]) && !empty($sub_table[1])) ? $sub_table[1] : $pkey;

        $n1 = count($table1);
        $n2 = count($sub_name);
        $result = array();
        for ($i1 = 0; $i1 < $n1; $i1++) {
            for ($i2 = 0; $i2 < $n2; $i2++) {
                if ($table1[$i1][$pkey] == $sub_name[$i2][$sub_key]) {
                    $result[] = array_merge($table1[$i1], $sub_name[$i2]);
                }
            }
        }
        return $result;
    }

    public function joinTableDC($table = array()) {
        if (empty($table)) {
            die('joinTableDC: table for joining is empty');
        }

        /* data var */
        $data = $this->result;

        $result = array();
        if (!empty($data)) {
            foreach ($table as $main => $arrSub) {
                $result = $data[$main];
                foreach ($arrSub as $subName => $pkey) {
                    $result = $this->mergeDataDC($result, $subName, $pkey);
                }
            }
        }

        $this->result = $result;
        return $this;
    }

    public function where($where = array()) {
        if (empty($where)) {
            die('where: condition for filter is empty');
        }

        if (empty($this->result)) {
            return $this;
        }

        /* number record in result array */
        $number_record = count($this->result);

        /* container record properly */
        $data = array();

        /* visit all record in database */
        for ($i = 0; $i < $number_record; $i++) {
            /* expression */
            $exp = NULL;

            /* filter via condition */
            foreach ($where as $index => $value) {
                //index process
                $ipars = explode('//', $index);
                $idata = $this->result[$i][$ipars[0]];

                //idata = null
                $idata = (empty($idata)) ? 0 : $idata;

                //value process
                if (is_array($value)) {
                    $med = strtolower(TMC_String::getString($ipars[1]));
                    if (isset($ipars[1]) && $med == 'in') {
                        if (in_array($idata, $value)) {
                            //in
                            $exp[] = 1;
                        } else {
                            //not in
                            $exp[] = 0;
                        }
                    } else {
                        if (!in_array($idata, $value)) {
                            //in
                            $exp[] = 0;
                        } else {
                            //not in
                            $exp[] = 1;
                        }
                    }
                } else {
                    //index process
                    $exp[] = TMC_String::getString($idata);

                    //operator
                    if (isset($ipars[1])) {
                        $exp[] = $ipars[1];
                    }

                    //value process
                    $exp[] = TMC_String::getString($value);
                }

                if (isset($ipars[2])) {
                    $exp[] = $ipars[2];
                }
            }

            /* result from expression */
            $rs_exp = eval('return ' . implode(' ', $exp) . ';');

            if ($rs_exp) {
                $data[] = $this->result[$i];
            }
        }

        /* result */
        $this->result = $data;

        /* release memory */
        unset($where, $med, $data, $exp, $rs_exp, $number_record, $index, $value);

        /* return an object */
        return $this;
    }

    public function whereNot($data = array()) {
        if (empty($data)) {
            die('whereNot: condition for filter is empty');
        }

        /* main table */
        $m_table = $this->input[$this->table]['item'];
        $m_item = count($m_table);
        $result = array();

        /* visit all record in main table */
        for ($i = 0; $i < $m_item; $i++) {
            /* not exist */
            $flag = 0;
            /* check exists */
            foreach ($data as $column => $table) {
                if (!isset($this->input[$table]['item']) || !isset($m_table[$i][$column])) {
                    break;
                }

                $s_table = $this->input[$table]['item'];
                $s_item = count($s_table);


                for ($j = 0; $j < $s_item; $j++) {
                    if ($m_table[$i][$column] == $s_table[$j][$column]) {
                        /* exist */
                        $flag = 1;
                        break;
                    }
                }
            }

            /* get record */
            if ($flag == 0) {
                $result[] = $m_table[$i];
            }
        }

        /* result */
        $this->result = $result;

        /* release memory */
        unset($m_table, $m_item, $s_table, $s_item, $i, $j, $flag, $column, $table, $data, $result);

        /* return an object */
        return $this;
    }

    public function limit($start_offset, $need_number) {
        if (!empty($this->result)) {
            $data = array();

            /* number record of result */
            $number_item = count($this->result);

            /* check error */
            $start_offset = ($start_offset < 0) ? 0 : $start_offset;
            $need_number = (($need_number + $start_offset ) >= $number_item) ? ($number_item - $start_offset) : $need_number;

            while ($need_number > 0) {
                $data[] = $this->result[$start_offset];
                $start_offset++;
                $need_number--;
            }

            /* result */
            $this->result = $data;

            /* release memory */
            unset($data, $start_offset, $number_item, $need_number);
        }

        /* return an object */
        return $this;
    }

    public function like($keyword, $column = array()) {
        /* check data source */
        if (!empty($this->result)) {
            $data = array();

            /* number record of result */
            $number_item = count($this->result);

            for ($i = 0; $i < $number_item; $i++) {
                $flag = 0;
                /* remove vietnammese and convert all to lowercase */
                $keyword = strtolower(TMC_String::getUnsignString($keyword));

                //find
                foreach ($column as $col) {
                    $record = strtolower(TMC_String::getUnsignString($this->result[$i][$col]));
                    /* does not exists */
                    if (stristr($record, $keyword) != NULL) {
                        $flag = 1;
                    }
                }
                if ($flag == 1) {
                    $data[] = $this->result[$i];
                }
            }

            /* result */
            $this->result = $data;

            /* release memory */
            unset($keyword, $column, $number_item, $data, $record);
        }

        /* return an object */
        return $this;
    }

    public function order($column, $type = 'ASC') {
        if (!empty($this->result)) {
            /* data var */
            $data = array();
            $i = 0;
            /* visit to all record in result array */
            $number_record = count($this->result);
            for ($j = 0; $j < $number_record; $j++) {
                $column_data = $this->result[$j][$column];

                /* if it's date, convert it to timestamp */
                if (TMC_Datetime::isDate($column_data)) {
                    $column_data = strtotime($column_data);
                }

                if (isset($data[$column_data])) {
                    $data[$column_data . '_dup_' . $i] = $this->result[$j];
                    $i = $i + 1;
                } else {
                    $data[$column_data] = $this->result[$j];
                }
            }

            /* data sort */
            if ($type == 'DESC') {
                krsort($data);
            } else {
                ksort($data);
            }

            /* result */
            $this->result = array_values($data);

            /* release memory */
            unset($data, $column, $type, $i, $number_record, $column_data);
        }

        /* return an object */
        return $this;
    }

    public function getNumRow() {
        return (empty($this->result)) ? 0 : count($this->result);
    }

    public function getLastId() {
        if ($this->pkey == NULL) {
            die('getLastId: pkey does not exist');
        }

        /* number item of result */
        $number_item = count($this->input[$this->table]['item']);

        //last id
        $last_id = ($number_item == 0) ? 0 : $this->input[$this->table]['item'][$number_item - 1][$this->pkey[0]];

        /* release memory */
        unset($number_item);

        /* result */
        return $last_id;
    }

    private function autoIncreasement(&$data = array()) {
        /* number item of data */
        $number_data = count($data);

        if ($number_data > 0) {
            /* last id from database */
            $last_id = $this->getLastId();

            /* var */
            $t = 0;
            while ($t < $number_data) {
                /* next last id */
                $last_id = $last_id + 1;
                /* add id into current data array */
                $data[$t][$this->pkey[0]] = $last_id;
                /* increase var to an unit */
                $t++;
            }

            /* release memory */
            unset($number_data, $last_id, $t);
        }
    }

    public function groupBy($column = array()) {
        if (!isset($column['group'])) {
            die('groupBy: your group column is empty');
        }

        if (!isset($column['count'])) {
            $column['count'] = array();
        }

        if (!isset($column['sum'])) {
            $column['sum'] = array();
        }

        if (empty($this->result)) {
            return $this;
        }

        /* number record */
        $num_rec = count($this->result);

        //array truncate
        $arr_merge = array_merge($column['group'], $column['count'], $column['sum']);
        $arr_truncate = TMC_Array::arrayTruncate($arr_merge);

        /* result */
        $result['item'] = array();

        //visit all record from database
        for ($i = 0; $i < $num_rec; $i++) {

            $flag = 0;

            $this->result[$i]['number'] = 1;

            //current data you got
            $n = count($result['item']);

            foreach ($arr_truncate as $ind) {

                //set sum
                $this->result[$i]['total'] = (in_array($ind, $column['sum']) == 1) ? $this->result[$i][$ind] : 0;
                $pos = -1;

                $g_flag = in_array($ind, $column['group']);

                for ($k = 0; $k < $n; $k++) {
                    //nhom
                    if ($result['item'][$k][$ind] == $this->result[$i][$ind] && $g_flag == 1) {
                        $result['item'][$k]['number']++;
                        $flag = 1;
                        $pos = $k;
                        break;
                    }
                }

                if ($flag == 1 && $pos != -1) {
                    //count
                    if (in_array($ind, $column['count'])) {
                        $result['item'][$k]['number']++;
                    }

                    //sum
                    if (in_array($ind, $column['sum'])) {
                        $result['item'][$k]['total'] += $this->result[$i]['total'];
                    }
                }
            }

            //get data
            if ($flag == 0) {
                $result['item'][] = $this->result[$i];
            }
        }

        /* result */
        $this->result = $result['item'];

        /* release memory */
        unset($column, $num_rec, $ind, $result, $flag, $i, $k);

        /* return an object */
        return $this;
    }

    public function insert($data = array()) {
        if (empty($data)) {
            die('insert: your data is empty');
        }

        /* not allow to access to database */
        if ($this->permission == FALSE) {
            return $this;
        }

        /* get primary key */
        $this->pkey = $this->input[$this->table]['attribute']['pkey'];

        /* insert pkey and autoIncreasement */
        if (!empty($this->pkey[0]) && $this->isUnique($data) == 0) {
            /* auto pkey */
            if ($this->autoId == TRUE) {
                $data[$this->pkey[0]] = $this->getLastId() + 1;
            }

            /* insert into database */
            $this->input[$this->table]['item'][] = $data;
        }

        /* release memory */
        unset($data);

        /* return an object */
        return $this;
    }

    public function inserts($data = array()) {
        if (empty($data)) {
            die('inserts: your data is empty');
        }

        /* not allow to access to database */
        if ($this->permission == FALSE) {
            return $this;
        }

        /* get primary key */
        $this->pkey = $this->input[$this->table]['attribute']['pkey'][0];

        /* autoIncreasement */
        if (!empty($this->pkey)) {
            /* auto pkey */
            if ($this->autoId == TRUE) {
                $this->autoIncreasement($data);
            }

            /* insert data */
            $number_data = count($data);

            /* visit to all data */
            for ($i = 0; $i < $number_data; $i++) {

                /* check unique */
                if ($this->isUnique($data[$i]) == 0) {

                    /* add new item */
                    $this->input[$this->table]['item'][] = $data[$i];
                }
            }
        }

        /* release for memory */
        unset($number_data, $data, $i);

        /* return an object */
        return $this;
    }

    private function getKey($data = array()) {
        //pkey
        $pkey = $this->input[$this->table]['attribute']['pkey'];
        $key_list = array();

        foreach ($data as $index => $value) {
            if (is_array($pkey) && in_array($index, $pkey)) {
                $key_list[$index] = $value;
            } else {
                if ($index == $pkey) {
                    $key_list[$index] = $value;
                }
            }
            unset($data[$index]);
        }

        return $key_list;
    }

    public function update($data = array()) {
        if (empty($data)) {
            die('update: your data is empty');
        }

        /* not allow to access to database */
        if ($this->permission == FALSE) {
            return $this;
        }

        /* table attribute */
        $attr = $this->input[$this->table]['attribute'];

        /* unique column */
        $uni_col = NULL;

        /* get unique column */
        if (isset($attr['unique'])) {
            $uni_col = $attr['unique'];
        }

        /* get key */
        $key_list = $this->getKey($data);

        /* check key */
        if (is_array($key_list) && count($key_list) == 0) {
            die('update: does not exist primary key');
        }

        /* number table of input data */
        $number_item = count($this->input[$this->table]['item']);

        $pos = array();
        $uni = 0;

        for ($i = 0; $i < $number_item; $i++) {
            $flag = 0;

            //record
            $item = $this->input[$this->table]['item'][$i];

            /* find data to edit */
            foreach ($key_list as $key_name => $key_value) {
                //tìm được dữ liệu chứa khóa
                if ($item[$key_name] != $data[$key_name]) {
                    $flag = 1;
                }
            }

            //vị trí dữ liệu chứa khóa
            if ($flag == 0) {
                $pos = $i;
            }

            //bỏ qua khóa chính khi so sánh dữ liệu unique
            if ($pos == $i) {
                continue;
            }

            //lọc dữ liệu unique
            $n_uni_col = is_countable($uni_col) ? count($uni_col) : 0;
            if ($n_uni_col > 0) {
                /* find unique */
                for ($j = 0; $j < $n_uni_col; $j++) {
                    if (!(isset($item[$uni_col[$j]])) || !isset($data[$uni_col[$j]])) {
                        continue;
                    }
                    if ($item[$uni_col[$j]] == $data[$uni_col[$j]]) {
                        $uni = 1;
                    }
                }
            }
        }
        //edit data
        if ($uni == 0) {
            foreach ($data as $data_column => $data_value) {
                $this->input[$this->table]['item'][$pos][$data_column] = $data_value;
            }
        }

        /* release memory */
        unset($data, $index, $value, $key_index, $key_list, $i, $number_item, $key_name, $key_value, $pos, $uni, $n_uni_col, $data_column, $data_value, $item, $j);

        /* return an object */
        return $this;
    }

    public function delete($data = array()) {
        if (empty($data)) {
            die('delete: your data is empty');
        }

        /* not allow to access to database */
        if ($this->permission == FALSE) {
            return $this;
        }

        $key_list = $this->getKey($data);

        /* check key */
        if (is_array($key_list) && count($key_list) == 0) {
            die('delete: does not exist primary key');
        }

        /* number table of input data */
        $number_item = count($this->input[$this->table]['item']);

        /* visit to all record with pkey */
        for ($i = 0; $i < $number_item; $i++) {

            /* enable edit record */
            $flag = 0;

            /* find data to edit */
            foreach ($key_list as $key_name => $key_value) {

                /* record */
                $item = $this->input[$this->table]['item'][$i][$key_name];

                /* check exists */
                if ((is_array($key_value) && in_array($item, $key_value)) || $item == $key_value) {
                    $flag = 1;
                } else {
                    $flag = 0;
                }
            }

            /* delete data */
            if (($flag == 1) && ($this->isRelative($data) == 0)) {

                /* remove item */
                unset($this->input[$this->table]['item'][$i]);
            }
        }

        /* release memory */
        unset($data, $key_list, $key_index, $index, $value, $key_value, $item, $flag, $i, $number_item);

        /* return an object */
        return $this;
    }

    public function execute() {
        /* result */
        $result = array();

        /* set attribute */
        if (isset($this->input[$this->table]['attribute'])) {
            $result['attribute'] = $this->input[$this->table]['attribute'];
        }

        /* set item list */
        if (isset($this->input[$this->table]['item'])) {
            $result['item'] = array_values($this->input[$this->table]['item']);
        }

        $options = ['gs' => ['Content-Type' => 'text/plain']];
        $context = stream_context_create($options);
        //file_put_contents("gs://${my_bucket}/hello_options.txt", $newFileContent, 0, $context);

        /* execute */
        return file_put_contents($this->path . $this->table . $this->extFile, json_encode($result), 0, $context);
    }

    public function isUnique($data = array()) {
        /* table attribute */
        $attr = $this->input[$this->table]['attribute'];

        /* list record */
        $list = $this->input[$this->table]['item'];

        /* unique column */
        $uni_col = NULL;

        /* not unique */
        $flag = 0;

        if (isset($attr['unique'])) {
            /* get unique column */
            $uni_col = $attr['unique'];

            /* number of item in list */
            $number_item = count($list);

            /* visit all record in database */
            for ($i = 0; $i < $number_item && $flag == 0; $i++) {
                /* visit all unique column */
                for ($j = 0; $j < count($uni_col); $j++) {
                    /* check exists data */
                    if (!isset($list[$i][$uni_col[$j]]) || !isset($data[$uni_col[$j]])) {
                        continue;
                    }

                    /* found */
                    if ($list[$i][$uni_col[$j]] == $data[$uni_col[$j]]) {
                        /* unique */
                        $flag = 1;
                        break;
                    }
                }
            }

            /* release memory */
            unset($list, $i, $j, $uni_col, $attr, $number_item);
        }

        /* result */
        return $flag;
    }

    public function isDupplicate($data = array()) {
        /* table attribute */
        $attr = $this->input[$this->table]['attribute'];

        /* list record */
        $list = $this->input[$this->table]['item'];

        /* unique column */
        $dup_col = NULL;

        /* not dup */
        $flag = 0;

        /* result */
        $result = array();

        if (isset($attr['dupplicate'])) {
            /* get unique column */
            $dup_col = $attr['dupplicate'];

            /* number of item in list */
            $number_item = count($list);

            /* visit all record in database */
            for ($i = 0; $i < $number_item && $flag == 0; $i++) {
                /* visit all unique column */
                for ($j = 0; $j < count($dup_col); $j++) {
                    /* check exists data */
                    if (!(isset($list[$i][$dup_col[$j]])) || !isset($data[$dup_col[$j]])) {
                        continue;
                    }
                    /* found */
                    if ($list[$i][$dup_col[$j]] == $data[$dup_col[$j]]) {
                        /* unique */
                        $result[] = 1;
                    } else {
                        $result[] = 0;
                    }
                }
            }

            $exp = implode(' && ', $result);
            $flag = eval('return ' . $exp . ';');

            /* release memory */
            unset($list, $i, $j, $dup_col, $attr, $number_item, $result, $exp, $rs_exp);
        }

        /* result */
        return $flag;
    }

    public function isRelative($data = array()) {
        /* table attribute */
        $attr = $this->input[$this->table]['attribute'];

        /* not relative */
        $flag = 0;

        /* table relationship */
        $table = NULL;

        if (isset($attr['relative'])) {
            /* table list */
            $table = $attr['relative'];

            /* visit table */
            foreach ($attr['relative'] as $index => $relative) {
                foreach ($relative as $path => $table) {
                    /* get record from table */
                    $result = json_decode(file_get_contents(database . '/' . $path . '/' . $table . '.txt'), TRUE)['item'];
                    /* number record in database */
                    $number_item = is_array($relative) ? count($result) : 0;
                    /* visit all record in a table */
                    for ($j = 0; $j < $number_item && $flag == 0; $j++) {
                        /* if deleted item isset in any relationship table, doesn't */
                        foreach ($data as $key_name => $key_value) {
                            /* check exists data */
                            if (!isset($result[$j][$key_name]))
                                continue;

                            /* found */
                            if ((is_array($key_value) && in_array($result[$j][$key_name], $key_value) ) || ($result[$j][$key_name] == $key_value)) {
                                $flag = 1;
                                break;
                            }
                        }
                    }
                }
            }
        }

        /* release memory */
        unset($table, $attr, $i, $j, $number_item, $result, $key_name, $key_value, $relative, $index, $path, $table);

        /* return result */
        return $flag;
    }

    public function getResult() {
        return $this->result;
    }

    public function getObject() {
        /* convert to object */
        foreach ($this->result as $index => $value) {
            $this->result[$index] = (object) $value;
        }

        /* result */
        return $this->result;
    }

    public function getAssoc() {
        /* convert to array */
        foreach ($this->result as $index => $value) {
            $this->result[$index] = (array) $value;
        }

        /* result */
        return $this->result;
    }

    public function test($data = array()) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    function __destruct() {
        
    }

}

?>