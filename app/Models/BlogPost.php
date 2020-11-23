<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class BlogPost extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * BlogPost constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $currentTimestamp = Carbon::now()->timestamp;
        $this->setAttribute("created", $currentTimestamp);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created' => 'datetime',
    ];
}
