<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RegistrasiKolam extends Model
{
    protected $table = 'registrasi_kolam';
    
    protected $fillable = [
        'nama_kolam', 'lokasi'
    ];

}