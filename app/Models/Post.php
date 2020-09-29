<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'category_id',
        'user_id',
        "title",
        'content',
        'slug',
        'featured_image',
        'is_featured',
        'is_published'
    ];

    /**
     * Get the user that owns the post.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the posts that are tagged.
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag');
    }
}
