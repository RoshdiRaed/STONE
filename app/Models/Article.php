<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Model
{
    use HasFactory;


    // Add the fillable property to allow mass assignment
    protected $fillable = ['title', 'category', 'content', 'tags', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->text('content');
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ensure the user is linked
            $table->timestamps();
        });
    }
}
