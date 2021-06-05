<?php
namespace App\Support;

interface InterfaceFilCommand {
    //Return true if $path is a picture {exist and is picture}
    public function Validation($path): boolean;
    //Return true if file is saved
    public function Store($path): boolean;
    //Return file
    public function Download($path);
    //Return true file is deleted
    public function Delete($path) : boolean;
}

//AbstractFilCommand
