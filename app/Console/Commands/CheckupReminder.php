<?php

namespace App\Console\Commands;
use App\Models\Notification ;
use App\Models\Rdv;
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
        $vehicules = Vehicule::where('visite', '=', Carbon::tomorrow()->toDateTimeString())->get();


        foreach ($vehicules as $vehicule) {
            $notification = new Notification();
            $notification->title = "Date de visite de vehicule ";
            $notification->corps = "la date visite de la vehicule de matricule " . $vehicule->matricule . " est dû demain, le " . $vehicule->visite;
            $notification->user_id = 1;
            $notification->type="rappel" ;
            $notification->save();

        }

        $rdvs = Rdv::where('date_heure','>',Carbon::now())
            ->where('date_heure','<', Carbon::now()->add(2,'days'))
            ->get();

        foreach ($rdvs as $rdv) {
            $notification = new Notification();
            $notification->title = "Rappel seance";
            $notification->corps = "Vous avez une seance de " . $rdv->seance . " le " . $rdv->date_heure;
            $notification->user_id = $rdv->user;
            $notification->type="rappel" ;
            $notification->save();
        }
    }



}
