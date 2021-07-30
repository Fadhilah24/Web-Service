<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InfoIkan extends Model
{
    protected $table = 'infoikan';
    
   protected $fillable = [
        'jenisikan', 'jumlahikan','tanggalikanmasuk'
    ];

}