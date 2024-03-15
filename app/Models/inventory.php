<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $inventory_home = ["nama","jenis","kode","harga","stock"];
    protected $inventory_kitchen = ["nama","jenis","kode","harga","stock"];
}
