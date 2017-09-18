<?php

namespace App\Http\Controllers;

use App\Utils\ElasticSearch\Contracts\SearchRepository;
use App\Utils\ElasticSearch\SearchableTrait;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use SEOTools;
    //
    public function index()
    {
        $this->seo()->setTitle(ucfirst(trans('test.title')));

        return view('welcome');
    }

}
