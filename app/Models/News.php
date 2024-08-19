<?php
/**
 *     $table->string('title');
            $table->string('content',2400);
            $table->date('createdAt');
            $table->string('photo', 300);
 */
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'createdAt','photo'];
}