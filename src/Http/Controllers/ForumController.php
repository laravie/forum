<?php namespace Laravie\Forum\Http\Controllers;

use Laravie\Forum\Processor\Forum;

class ForumController extends Controller
{
    public function index(Forum $processor)
    {
        return $processor->index($this);
    }

    public function showListing(array $data)
    {
        return view('laravie/forum::index', $data);
    }
}
