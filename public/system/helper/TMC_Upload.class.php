<?php

class TMC_Upload {

    private $file_size;
    private $file_upload;
    private $file_extension;
    private static $instance;

    public static function getInstance() {
        /* check exists object */
        if (!self::$instance) {
            self::$instance = new TMC_Upload();
        }

        /* return an object */
        return self::$instance;
    }

    public function filter($fileName) {
        /* exception */
        if (empty($fileName)) {
            return NULL;
        }

        /* result */
        $result = array();

        if (is_array($_FILES[$fileName]['name'])) {
            /* number item */
            $number = count($_FILES[$fileName]['name']);

            /* visit all file in the list */
            for ($i = 0; $i < $number; $i++) {
                /* extension of an item */
                $extension = $this->getFileExtension($_FILES[$fileName]['name'][$i]);

                /* check extention and size */
                if ($this->isFileExtension($extension) && $this->isFileSize($_FILES[$fileName]['size'][$i])) {
                    $result['name'][] = $_FILES[$fileName]['name'][$i];
                    $result['tmp_name'][] = $_FILES[$fileName]['tmp_name'][$i];
                }
            }
        } else {
            $extension = $this->getFileExtension($_FILES[$fileName]['name']);
            if ($this->isFileExtension($extension) && $this->isFileSize($_FILES[$fileName]['size'])) {
                $result['name'] = $_FILES[$fileName]['name'];
                $result['tmp_name'] = $_FILES[$fileName]['tmp_name'];
            }
        }

        /* release memory */
        unset($fileName, $extension, $number, $i, $_FILES);

        /* return an array */
        return $result;
    }

    public function getFileExtension($file_name) {
        $pattern = '#.([^\.]+)$#i';
        preg_match($pattern, $file_name, $matches);
        unset($file_name, $pattern);
        return $matches[1];
    }

    //$value:ex (gif|jpg|png)
    public function isFileExtension($value) {
        /* result is OK */
        $result = 1;

        /* pattern */
        $pattern = '#(' . $value . ')#i';

        /* compare pattern with file extension */
        if (preg_match($pattern, $this->file_extension) != 1) {
            /* result is not OK */
            $result = 0;
        }

        /* return result */
        return $result;
    }

    public function setFileExtension($value) {
        $this->file_extension = $value;
    }

    public function isFileSize($value) {
        /* result is OK */
        $result = 1;

        /* check */
        if ($this->file_size < $value) {
            /* result is not OK */
            $result = 0;
        }

        /* return result */
        return $result;
    }

    public function setFileSize($value) {
        $this->file_size = $value * 1024;
    }

    public function setUploadPath($value) {
        $this->file_upload = $value;
    }

    public function upload($data = array(), $rename = FALSE, $prefix = 'file_') {
        /* rename */
        $prefix = ($rename == TRUE) ? $prefix . time() : NULL;

        if (is_array($data['name'])) {
            /* number item of data array */
            $number = count($data['name']);

            /* visit all file upload item */
            for ($i = 0; $i < $number; $i++) {
                /* set source path */
                $source = $data['tmp_name'][$i];

                /* set destination path */
                $dest = $this->file_upload . $prefix . $data['name'][$i];

                /* copy processing */
                copy($source, $dest);
            }
        } else {
            /* set source path */
            $source = $data['tmp_name'];

            /* set destination path */
            $dest = $this->file_upload . $prefix . $data['name'];

            /* copy processing */
            copy($source, $dest);
        }
    }

}

?>