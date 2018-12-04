<?php
/**
 * Class Reservation
 */

class Reservation
{
    private $numberOfPersons;
    private $client;

    public function __construct($numberOfPersons, Client $client)
    {
        $this->client = $client;
        $this->numberOfPersons = $numberOfPersons;
    }
}