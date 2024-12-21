<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
	use HasFactory;
	
    protected $table = 'companies';
	protected $fillable = [
		'name', 'description','location'
	];
    /**
     * все игры выпущеные данной компанией
     */
    public function board_games(): HasMany
    {
        return $this->hasMany(BoardGame::class);
    }
}

?>