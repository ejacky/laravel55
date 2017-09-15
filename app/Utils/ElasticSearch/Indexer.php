<?php

namespace App\Utils\ElasticSearch;

use Illuminate\Support\Collection;

class Indexer
{
    /**
     * @var Collection
     */
    protected $items;

    /**
     * @var string
     */
    protected $type;

    /**
     * Indexer constructor.
     *
     * @param Collection $items
     * @param string     $type
     */
    public function __construct(Collection $items, $type)
    {
        $this->items = $items;

        $this->type = $type;
    }

    public function index()
    {
        $elastic = app('elastic');

        $this->items->each(function ($item) use ($elastic) {
            $item->track_title = $item->track ? $item->track->title : '';

            $elastic->index([
                'index' => 'demo',
                'type'  => $this->type,
                'id'    => $item->id,
                'body'  => $item->toArray(),
            ]);
        });
    }

}