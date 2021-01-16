<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Kavenegar\KavenegarApi;

class Sendsms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send in one h to user sms';

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
        
        $api = new KavenegarApi("476765746743734A3176442F6D34657064785A62383369626E3361756A54706A6C416A4E6F59336538506B3D"); 
        $sender = "1000596446"; $receptor = "09116140145"; 
        $message = "لطفا صورت حساب را از لینک زیر پرداخت کنید."." "."http://127.0.0.1:8000/payment";
        $api -> Send ( $sender,$receptor,$message); 
        
       
        
    }
}
