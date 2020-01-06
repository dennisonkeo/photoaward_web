<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Auth;
use App\Upload;
use Illuminate\Support\Facades\File;
use Image;

class DeleteCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to delete unpaid uploads when 12 hours elapses';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        

                // \Log::info("Cron is working fine!");     

        // $this->info('Demo:Cron Cummand Run successfully!');

         // Current date and time
      $datetime = date("Y-m-d H:i:s");

      // Convert datetime to Unix timestamp
      $timestamp = strtotime($datetime);

      // Subtract time from datetime
      $time = $timestamp - (12 * 60 * 60);

      // Date and time after subtraction
      $datetime = date("Y-m-d H:i:s", $time);

      $uploads = Upload::where('updated_at',$datetime)->where('uploaded', 'no')->get();

      if($uploads)
      {
        foreach ($uploads as $upload) {
            
            $upload->delete();
            File::delete([public_path($upload->imagePath)]);
        }
      }
     
    }
}
