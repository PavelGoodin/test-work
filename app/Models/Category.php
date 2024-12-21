<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
	use HasFactory;
	
    protected $table = 'categories';
	protected $fillable = [
		'name', 'description'
	];

    public function board_games():BelongsToMany
    {
        return $this->belongsToMany(BoardGame::class, 'category_board_game');
    }
}

?>