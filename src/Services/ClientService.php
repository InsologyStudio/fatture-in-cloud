<?php

namespace InsologyStudio\FattureInCloud\Services;
use InsologyStudio\FattureInCloud\Api\PersonalData;

class ClientService extends PersonalData
{   
    protected $subject = 'clienti';

    public function __construct()
    {
        parent::__construct($this->subject);
    }
}