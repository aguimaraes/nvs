<?php

namespace App\Console\Commands;

use App\CurrencyRate;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Console\Command;

class LatestExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:latest';

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
        $response = $httpClient->get('latest.json');

        if ($response->getStatusCode() !== 200) {
            throw new ClientException('Status code was not 200.');
        }

        $latest = json_decode((string) $response->getBody(), true);

        if (!array_key_exists('rates', $latest) || empty($latest['rates'])) {
            throw new ClientException('I did not find any rates.');
        }

        $rates = collect($latest['rates']);

        $rates->each(function ($value, $code) {
            CurrencyRate::create([
                'code' => $code,
                'value' => $value,
                'from' => 'USD'
            ]);
        });

        $this->info('Exchange rates updated.');
    }
}
