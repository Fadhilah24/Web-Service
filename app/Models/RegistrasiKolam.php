<?php
 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RegistrasiKolam extends Model
{
    protected $table = 'registrasi_kolam';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kolam', 'lokasi'
    ];

}