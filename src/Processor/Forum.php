<?php namespace Laravie\Forum\Processor;

use Laravie\Forum\Model\Topic as TopicModel;
use Laravie\Forum\Model\Conversation as ConversationModel;

class Forum
{
    /**
     * Get forum listing.
     *
     * @param  object  $listener
     * @return mixed
     */
    public function index($listener)
    {
        $topics = TopicModel::all();

        $conversations = ConversationModel::latest()->paginate();

        return $listener->showListing(compact('topics', 'conversations'));
    }
}
