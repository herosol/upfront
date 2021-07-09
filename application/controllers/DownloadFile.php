<?php

defined('BASEPATH') or exit('No direct script access allowed');


class DownloadFile extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('chat_model');
    }

    function index($id)
    {
        $this->load->helper('file');
        $id = doDecode($id);
        $fileData = $this->master->getRow('chat_attachments', ['id'=> $id]);
        $path = $_SERVER['DOCUMENT_ROOT'].'/work/upfront/uploads/chat/'.$fileData->name;
        // make sure it's a file before doing anything!
        if(is_file($path))
        {
            // required for IE
            if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }

            // get the file mime type using the file extension
            $mime = get_mime_by_extension($path);

            // Build the headers to push out the file properly.
            header('Pragma: public');     // required
            header('Expires: 0');         // no cache
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($path)).' GMT');
            header('Cache-Control: private',false);
            header('Content-Type: '.$mime);  // Add the mime type from Code igniter.
            header('Content-Disposition: attachment; filename="'.basename($fileData->original_name).'"');  // Add the file name
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: '.filesize($path)); // provide file size
            header('Connection: close');
            ob_clean();
            readfile($path); // push it out
            exit();    
        }

    }

}