<?php namespace Laravie\Forum\Model;

use Orchestra\Model\Eloquent;

class Reply extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forum_replies';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'answer' => 'boolean',
    ];

    /**
     * Return the conversation parent of this reply.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversation()
    {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }

    /**
     * Return the user owner of this reply.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('auth.model'), 'user_id');
    }

    /**
     * Is reply the correct answer?.
     *
     * @return bool
     */
    public function isCorrect()
    {
        return $this->getAttribute('answer');
    }
}
