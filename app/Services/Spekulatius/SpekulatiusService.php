<?php

namespace App\Services\Spekulatius;

use Spekulatius\PHPScraper\PHPScraper;

class SpekulatiusService
{
    protected PHPScraper $scraper;

    public function __construct(PHPScraper $scraper)
    {
        $this->scraper = $scraper;
    }

    public function getLinks(string $url) :array
    {
        $this->scraper->go($url);

        return $this->scraper->links;
    }
}
