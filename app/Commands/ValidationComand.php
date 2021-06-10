<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use Validetor;
use App\Support\Validation;

use Storage;
// use \Illuminate\Contracts\Validation\Validator;

class ValidationComand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'command:validation
                            {realpath : linux full path of a picture (required)}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Is realpath path to a picture?';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd(app('validator'));
        $realpath = $this->argument('realpath');
        $exists = Storage::has($realpath);

        if(!$exists)
        {
            $this->task("Is ".$realpath." a file?", function (){
                return false;
            });
            return;
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
            $this->task("Is ".$realpath." a valid image?", function () {
                return true;
            });
        }else{
            $this->task("Is ".$realpath." a valid image?", function () {
                return false;
            });
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
