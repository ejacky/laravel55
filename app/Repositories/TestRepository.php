<?php
namespace App\Repositories;

class TestRepository implements \App\Utils\ElasticSearch\Contracts\SearchRepository
{
    use \App\Utils\ElasticSearch\SearchableTrait;

    protected $modelClass = \App\User::class;
}