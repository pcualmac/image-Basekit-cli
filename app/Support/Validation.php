<?php
namespace App\Support;
use App;

trait Validation {
    public function validation($realpath)
    {
        $exists = Storage::has($realpath);

        if(!$exists)
        {
            return false;
        }
        $Validator = app()->make('ClassValidation');
        $this->info('Is realpath path to a picture?');
        $data = [
            'file' => Storage::get($realpath),
            'MIME_types' => Storage::mimeType($realpath),
            'size' => Storage::size($realpath)
        ];
        $Validator->name('Mimetype')->value($data['MIME_types'])->pattern('Mimetype')->required();
        $Validator->name('size')->value($data['size'])->min(config('file_validator.Memorisize_min_kb'))->max(config('file_validator.Memorisize_max_kb'));

        if($Validator->isSuccess()){
            return true;
        }else{
            return false;
        }
    }
}
