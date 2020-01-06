<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Notifications\HelloUser;
use Auth;
use App\Upload;
use Illuminate\Support\Facades\File;
use Image;

class DeleteUploads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:uploads';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command deletes unpaid uploads after 12 hours elapses';

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
      //   $user = Auth::user();

      // $user->notify(new HelloUser());

      $upload =Upload::where('id',4)->first();

      $upload->delete();
      File::delete([public_path($upload->imagePath)]);
        

    }
}
