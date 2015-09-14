<?php namespace Laravie\Forum\Http\Controllers;

use Laravie\Forum\Processor\Topic;
use Laravie\Forum\Contracts\Listeners\TopicViewer;

class TopicController extends Controller implements TopicViewer
{
    public function show(Topic $processor, $topic)
    {
        return $processor->show($this, $topic);
    }

    /**
     * Show current topic.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function viewTopic(array $data)
    {
        return view('laravie/forum::topics.show', $data);
    }
}
