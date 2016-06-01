<?php namespace Arbud\Enquire\Models;

use Model;

/**
 * Enquire Model
 */
class Enquire extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mindi_enquire';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}