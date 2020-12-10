<?php
/**
 *  app/Models/Localization.php
 *
 * User:
 * Date-Time: 07.12.20
 * Time: 11:59
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'abbreviation',
        'native',
        'locale',
        'status',
        'default'
    ];
    protected $table = 'localizations';
}
