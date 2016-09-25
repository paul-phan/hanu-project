<?php
/**
 * This source code may regarded as a mini PHP framework designed with MVC pattern
 * providing basic CRUD method and some useful components.
 * @author Phan Thế Minh
 * Date: 8/9/2016
 * @copyright Copyright (c) 2016 by Phan Thế Minh - 4C13 Hanoi University, all rights reserved.
 * @version 1.0.0.2
 */

namespace Library\Tools;


class Upload
{
    /**
     * Property that will contain execution errors
     *
     * @var array
     */
    private $errors;

    /**
     * Copy an uploaded image to the destination path
     *
     * $data['file']    -> array with image data (found in $_FILES)
     * $data['path']    -> destination path
     * $data['name']    -> name file
     *
     * @param array $data
     * @return mixed
     */
    public function copy($data, $allow_type = null)
    {
        // Verify file and path
        if (!isset($data['file']) || !is_array($data['file'])) {
            $this->errors[] = 'Cannot upload! Name or path not found!';
            return false;
        }
        if (!isset($data['path'])) {
            $data['path'] = '';
        }

        if (!is_writable(UPLOAD_ROOT . $data['path'])) {
            $this->errors[] = 'Cannot upload! Destination path is not writable!';
            return false;
        }

        if (!$this->_verifyMime($data['file']['name'], $allow_type)) {
            $this->errors[] = 'Cannot upload! The file type not allow!';
            return false;
        }

        // Generate filename and move file to destination path
        $filename_array = explode('.', $data['file']['name']);
        $ext = end($filename_array);
        $ext = strtolower($ext);

        if (!empty($data['name'])) {
            $name = $data['name'] . '.' . $ext;
        } else {
            $name = date('Y/m/d') . '/' . time() . '.' . $ext;
        }

        $complete_path = UPLOAD_ROOT . $data['path'] . $name;

        // create folder
        $folder = explode('/', $name);
        if (count($folder) > 1)    // if filename in subfolder -> create folder
        {
            array_pop($folder);
            $dir = UPLOAD_ROOT . $data['path'] . implode('/', $folder);
            if (!file_exists($dir) && !is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
        }

        // -- it's been uploaded with php
        if (is_uploaded_file($data['file']['tmp_name'])) {
            if (!move_uploaded_file($data['file']['tmp_name'], $complete_path)) {
                $this->errors[] = 'Error while upload the image!';
                return false;
            } else {
                chmod(UPLOAD_ROOT . $data['path'] . $name, 0644);
            }
        } else {
            $this->errors[] = 'Cannot upload! The uploaded file exceeds the upload_max_filesize directive ' . ini_get('upload_max_filesize');
            return false;
        }

        // Return image filename
        return $name;
    }

    /**
     * Verifies the mime-type of a file
     *
     * @param string $file
     * @return bool
     */
    private function _verifyMime($file, $type_allow = null)
    {

        $filename_array = explode('.', $file);

        $extension = end($filename_array);

        $extension = strtolower($extension);

        if (empty($type_allow))    // default image
        {
            $mimes = array('jpeg', 'jpg', 'png', 'gif');
        } else {
            $mimes = $type_allow;
        }

        if (in_array($extension, $mimes)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get errors
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}