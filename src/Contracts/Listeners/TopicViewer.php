<?php namespace Laravie\Forum\Contracts\Listeners;

interface TopicViewer
{
    /**
     * Show current topic.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function viewTopic(array $data);
}
