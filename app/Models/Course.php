<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method find($id)
 * @method create(array $all)
 * @method paginate(int $int)
 * @method findOrFail($id)
 */
class Course extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = ['name', 'description', 'body', 'price'];
}
