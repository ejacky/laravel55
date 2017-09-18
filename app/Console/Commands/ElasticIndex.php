<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\Utils\ElasticSearch\Indexer;

class ElasticIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'index data to elastic';

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
        //
        $user = User::all();
        $indexer = new Indexer($user, User::class);
        $indexer->index();
    }
}
