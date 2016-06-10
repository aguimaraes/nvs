<?php

namespace App\Console\Commands;

use App\Currency;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;

class UpdateCurrencies extends Command
{
    use DispatchesJobs;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $httpClient = new Client([
            'base_uri' => 'https://openexchangerates.org/api/',
//            'debug' => true,
            'query' => [
                'app_id' => 'b7d5c5ececa14461876fa1dfcecf443d'
            ]
        ]);
        $response = $httpClient->get('currencies.json');

        if ($response->getStatusCode() !== 200) {
            throw new ClientException('Status code was not 200.');
        }

        $currencies = collect(json_decode((string) $response->getBody(), true));

        $currencies->each(function ($name, $code) {
            $currency = Currency::find($code);
            if ($currency) {
                return;
            }
            Currency::create([
                'name' => $name,
                'code' => $code
            ]);
        });

        $this->info('Currencies updated.');
    }
}
