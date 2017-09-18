<?php

namespace App\Utils\ElasticSearch\Contracts;

/**
 * Class SearchRepository.
 */
interface SearchRepository
{
    public function search($term);
}
