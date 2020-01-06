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
        

                \Log::info("Cron is working fine!");

     

        /*

           Write your database logic we bellow:

           Item::create(['name'=>'hello new']);

        */

      

        $this->info('Demo:Cron Cummand Run successfully!');

        $upload =Upload::where('id',5)->first();

      $upload->delete();
      File::delete([public_path($upload->imagePath)]);
    }
}
