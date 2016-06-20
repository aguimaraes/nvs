<?php

namespace App\Console\Commands;

use App\Stock;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class UpdateStockSymbols extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stock:symbols';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update available symbols';

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
        $response = file_get_contents('ftp://ftp.nasdaqtrader.com/symboldirectory/nasdaqlisted.txt');
        if (!$response) {
            throw new \Exception('NASDAQ Listed Symbols not found.');
        }
        $rows = collect(explode("\r\n", $response));
        $rows->each(function ($row, $key) {
            if (0 === $key) {
                return;
            }
            $columns = explode('|', $row);
            if (empty($columns[0]) || empty($columns[1])) {
                return;
            }
            $exists = Stock::find($columns[0]);
            if ($exists) {
                return;
            }
            $stock = Stock::create([
                'acronym' => $columns[0],
                'name' => $columns[1]
            ]);
            if (!$stock) {
                $this->error('Could not find or create the Stock Symbol: ' . $columns[1]);
                return;
            }
            $this->info('Imported: ' . $columns[0]);
        });
        $this->info('Done.');
    }
}
