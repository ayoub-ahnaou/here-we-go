<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'city',
        'disponibility',
        'equipements',
        'price',
        'user_id',
        'category_id',
        'images'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favoris', 'annonce_id', 'user_id');
    }

    public function isFavoritedBy(User $user)
    {
        return $this->favoritedBy()->where('user_id', $user->id)->exists();
    }

    public static function search($query = null, $date = null)
    {
        $searchQuery = self::query();

        if (!empty($query)) {
            $searchQuery->where(function ($search) use ($query) {
                $search->where('title', 'like', "%$query%")
                    ->orWhere('city', 'like', "%$query%")
                    ->orWhere('country', 'like', "%$query%")
                    ->orWhere('equipements', 'like', "%$query%")
                    ->orWhere('price', intval($query));
            });
        }

        if ($date) {
            $searchQuery->where(function ($search) use ($date) {
                $search->where('disponibility', $date);
            });
        }

        return $searchQuery->orderBy('created_at', 'desc')
            ->paginate(12);
    }
}
