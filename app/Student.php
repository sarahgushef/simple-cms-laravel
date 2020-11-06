<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'sex', 'religion', 'address']; // digunakan untuk memberitahu kalau kolom di database mana saja yang bisa diisi (karena tadi kan ada token setiap submit, sementara di database tidak ada kolom token)
}
