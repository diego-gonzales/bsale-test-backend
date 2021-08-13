<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Esta propiedad especifica el nombre de la tabla que tomará de la DB, en este caso la tabla 'category'
    protected $table = "category";

    /* Esta función se encargará de relacionar mis tablas a nivel de modelos, en
    este caso relacionará de el modelo 'Category' con el modelo 'Product', con una
    relación de 1 a M */
    public function products() {
        // Relación de 1 a M
        return $this->hasMany(Product::class, 'category');
    }
}
