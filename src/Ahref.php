<?php

declare(strict_types=1);

namespace kingzamzon\Ahref;

use AhrefContract;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class Ahref implements AhrefContract
{
    /**
     * Issue Ahref Token from your Ahref Dashboard
     * @var string
     */
    protected $ahrefToken;

    public function __construct()
    {
        $this->setAhrefToken();
    }

    /**
     * Get Ahref Token from Ahref config file
     */
    public function setAhrefToken()
    {
        $this->ahrefToken = Config::get('ahref.ahrefToken');
    }

    public function fetchForDomainRating(
        string $value,
    ) {
        return [];
    }
}
