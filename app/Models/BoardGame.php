<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BoardGame extends Model
{
	use HasFactory;
	
    protected $table = 'board_games';
	protected $fillable = [
		'name', 'description','foto','rating'
	];
    /**
     * категории для данной игры.
     */
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class,  'category_board_game');
    }
    /**
     * компания-разработчик для данной игры.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}

?>