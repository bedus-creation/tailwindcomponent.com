<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'code'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function link()
    {
        return url('editors/' . $this->slug);
    }
}
