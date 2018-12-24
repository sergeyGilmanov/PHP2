<?php

class Autoload
{
    public function loadClass($className) {
            $classNameRp = str_replace("\\", "/", $className);
            $fileName = "../{$classNameRp}.php";
            if (file_exists($fileName)) {
                include $fileName;
                return;
            }
        }
}