<?php

namespace App\Console\Commands;

use App\Services\Spekulatius\SpekulatiusService;
use Illuminate\Console\Command;
use Spekulatius\PHPScraper\PHPScraper;

class Spekulatius extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:spekulatius {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Spekulatius';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $url = (string)$this->argument('url');

        $service = new SpekulatiusService(new PHPScraper());

        var_dump($service->getLinks($url));
    }
}
