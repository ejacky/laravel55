<?php
namespace App\Http\Controllers\Api;

use App\Repositories\TestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestApiController extends Controller
{
    public function search(TestRepository $repository, Request $request)
    {
        $term = $request->get('term');

        return response()->json($repository->search($term, 10)->toArray());
    }

}