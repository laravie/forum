<?php namespace Laravie\Forum\Processor;

use Laravie\Forum\Model\Topic as TopicModel;
use Laravie\Forum\Contracts\Listeners\TopicViewer;

class Topic
{
    /**
     * Get topic by slug.
     *
     * @param  \Laravie\Forum\Contracts\Listeners\TopicViewer  $listener
     * @param  string  $slug
     *
     * @return mixed
     */
    public function show(TopicViewer $listener, $slug)
    {
        $topics = TopicModel::with('conversations')
                    ->where('slug', '=', $slug)
                    ->firstOrFail();

        return $listener->viewTopic(compact('topics'));
    }
}
