<?php
/**
 * This class shows how to use the Eloquent ORM to manage a database.
 * See http://laravel.com/docs/5.1/eloquent to view documentation on the ORM.
 *
 * @author Xavier Seymour (Xseymour3@gmail.com)
 * Date: 7/13/15
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * App\Model\Song
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $lyrics
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereLyrics($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Song whereUpdatedAt($value)
 */
class Song extends Eloquent{
    /**
     * Note that we did not tell Eloquent which table to use for our Flight model.
     * The "snake case", plural name of the class will be used as the table name
     * unless another name is explicitly specified. So, in this case, Eloquent
     * will assume the Song model stores records in the songs table. You may
     * specify a custom table by defining a table property on your model like so:
     */
    protected $table      = 'songs_scratch';

    /**
     * Eloquent will also assume that each table has a primary key column named id.
     * You may define a $primaryKey property to override this convention like so:
     */
//    protected $primaryKey = 'new_primary_key';

    /**
     * By default, Eloquent expects created_at and updated_at columns to exist on
     * your tables. If you do not wish to have these columns automatically managed
     * by Eloquent, set the $timestamps property on your model to false:
     */
//    public $timestamps    = false;

    /**
     * If you need to customize the format of your timestamps, set the
     * $dateFormat property on your model. This property determines how date
     * attributes are stored in the database, as well as their format when the
     * model is serialized to an array or JSON:
     */
//    protected $dateFormat   = 'U';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'lyrics'];
}