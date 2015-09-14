<?php namespace Laravie\Forum\Model;

use Orchestra\Model\Eloquent;

class Conversation extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forum_conversations';

    /**
     * Return replies on this conversation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany(Reply::class, 'conversation_id');
    }

    /**
     * Return the user owner of this conversation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('auth.model'), 'user_id');
    }

    public function scopeLatest($query)
    {
        $query->orderBy('updated_at', 'DESC');
    }
}
