<?php namespace oppressed;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Profile extends Model {

    use SoftDeletes;
    protected $table = 'profiles';
    protected $fillable = [
        'slug',
        'name',
        'address1',
        'address2',
        'address3',
        'city',
        'state',
        'zip',
        'country',
        'summary',
        'details',
        'charged_at',
        'sentenced_at',
        'expected_release_at',
        'released_at'
    ];

    protected $dates = ['charged_at', 'sentenced_at', 'expected_release_at', 'released_at'];

    public function scopeNotReleased($query)
    {
        $query->whereNull('released_at');

    }

    public function scopeReleased($query)
    {
        $query->whereNull('released_at');

    }

    public function setChargedAtAttribute($date)
    {
        $this->attributes['charged_at'] = Carbon::parse($date);
    }

    public function setSentencedAtAttribute($date)
    {
        $this->attributes['sentenced_at'] = Carbon::parse($date);
    }

    public function setExpectedReleaseAtAttribute($date)
    {
        $this->attributes['expected_release_at'] = Carbon::parse($date);
    }

    public function setReleasedAtAttribute($date)
    {
        $this->attributes['released_at'] = Carbon::parse($date);
    }

}
