# BSALE-TEST-BACKEND
## Documentación de Backend

Para realizar el API Rest se usó como framework de backend a LARAVEL. A continuación de explica de manera resumida lo que se realizó:

1. Para empezar se crearon las rutas tanto para manejar a los productos y a las categorías, estas se encuentran en el archivo *'api.php'* (dentro de carpeta routes).
2. Además de esto se creo una ruta extra para obtener los productos de acuerdo a una categoría (ruta *category/{category}*).
3. Se creó los modelos para los productos y categorías (*Product* y *Category* respectivamente, dentro de la carpeta *app/Models*).
4. Los modelos mencionados en el punto anterior son necesarios para que los controlares *ProductController* y *CategoryController* (dentro de app/Http/Controllers) puedan interactuar con la base de datos. Lo que esta dentro de los controladores simplemente es lógica de programación.
    - Un punto a tener en cuenta es que no he usado todos los métodos dentro de los controladores, ya que no se requiere realizar un crud completo.
5. Para realizar el filtro de búsqueda que se pide, hice uso Eloquent ORM de Laravel, usando su método *'where()'* y haciendo un filtrado de acuerdo a lo que viene como un query param desde el cliente (ver método *'index'* en el *ProductController*); además allí mismo también se realizó la paginación de los productos, gracias al método *'paginate()'* que nos ofrece Laravel.

6. Y por último también vale la pena mencionar que la conexión a la base de datos se encuentra dentro del archivo *'database.php'* (dentro de la carpeta *config*).
7. Creo que eso es lo básico que hay que explicar ya que lo demás es lógica de programación.

