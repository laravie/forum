<?php namespace Laravie\Forum\Model;

class Topic extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forum_topics';

    /**
     * Return the conversation parent of this reply.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversations()
    {
        return $this->hasMany(Conversation::class, 'topic_id');
    }
}
