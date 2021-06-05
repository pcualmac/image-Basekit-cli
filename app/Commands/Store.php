<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Support\Validation;
use Storage;
use Carbon\Carbon;

class Store extends Command
{
    use Validation;
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'command:store
                            {realpath : full path of a picture (required)}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Store file.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $realpath = $this->argument('realpath');
        if($this->validation($realpath))
        {
            Storage::copy($realpath, storage_path().'_'.Carbon::now()->timestamp);
            $this->task("File ".$realpath." Stored?", function (){
                return true;
            });
        }
        else {
            $this->task("File ".$realpath." Stored?", function (){
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
