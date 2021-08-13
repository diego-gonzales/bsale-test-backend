<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Esta propiedad especifica el nombre de la tabla que tomará de la DB, en este caso la tabla 'product'
    protected $table = "product";

    /* Esta función se encargará de relacionar mis tablas a nivel de modelos, en
    este caso relacionará de el modelo 'Product' con el modelo 'Category', con una
    relación de 1 a M pero inversa*/
    public function category() {
        // 1 a M (reverse)
        return $this->belongsTo(Category::class);
    }
}
