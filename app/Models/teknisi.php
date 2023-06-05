<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teknisi extends Model
{
    use HasFactory;
    protected $table = 'teknisi';
    public $timestamps = false;
    protected $fillable = ['nama', 'tlp', 'id_prov', 'id_kab'];
    public function prov()
    {
        return $this->belongsTo(provinsi::class, 'id_prov', 'id');
    }
    public function kab()
    {
        return $this->belongsTo(kabupaten::class, 'id_kab', 'id');
    }
}
