<?php

namespace App\Console\Commands;

use App\Models\Vehicule;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;


class CheckupReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Users:checkupVehicule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'notify admin  of the vehicules\'s checkup date ';

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
     * @return int
     */
    public function handle()
    {
        $vehicule = Vehicule::where('visite' ,'=' , Carbon::tomorrow()->toDateTimeString())->get();
        log::info($vehicule);



    }

}
