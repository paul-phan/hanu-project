<?php

/**
 * This is an example of upload action, paste the uploadAction function to a controller class to see how it work.
 */
use Library\Tools as Tool;

class Test
{
    public function uploadAction()
    {
        if ($_POST) {
            $image = $_FILES['image'];
            $upload = new Tool\Upload();
            $name = $upload->copy(array(
                'file' => $image,
                'path' => 'path/to/your/', //name your optional folder if needed
                'name' => 'somename' // name your file name if needed
            ));
            var_dump($name);
            var_dump(UPLOAD_ROOT);
            if ($upload->getErrors()) {
                foreach ($upload->getErrors() as $error) {
                    Tool\Alert::render($error, 'danger');
                    var_dump($error);
                }
            }
        }
    }
}