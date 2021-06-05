<?php
namespace App\Support;

use App\Support\InterfaceFilCommand;

abstract class AbstractFilCommand implements  InterfaceFilCommand
{
    //Return true if $path is a picture {exist and is picture}
    public function Validation($path): boolean
    {
        return false;
    }
    //Return true if file is saved
    public function Store($path): boolean
    {
        return false;
    }
    //Return file
    public function Download($path)
    {
        dd('Error');
    }
    //Return true file is deleted
    public function Delete($path) : boolean
    {
        return false;
    }
}
