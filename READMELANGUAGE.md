# Insertado utilidad de traduccion

**Instalo el paquete de gestión de idiomas**

```bash
composer require laravel-lang/common
```

**Añado idioma**

```bash
php artisan lang:add es
php artisan lang:add fr
php artisan lang:add en
```

## Accciones en el back

**Creo un controlador**

```bash
php artisan make:Controller SetLanguageController -i
```

**Contenido del método del controldor**

```php
 public function __invoke(Request $request, string $locale)
    {
        session()->put('locale', $locale);
        app()->setLocale($locale);
        
        return redirect()->back();
        
        
        //
    }
```

**Creamos la ruta para este controlador**
En web.php añadimos

```php
use App\Http\Controllers\SetLanguageController;

Route::get("lang/{lang}", [SetLanguageController::class])->name("set_lang");

```

un middleware**

```bash
php artisan make:Middleware SetLanguageMiddleware
```

**Escribimos el contenido del middleware**

```php
  public function handle(Request $request, Closure $next): Response
    {
        $locale = session()->get('locale') ?? config('app.locale');
        app()->setLocale($locale);
        
        return $next($request);
    }

```

## Ahora el front

**Creamos un fichero de configuración**
Para establecer los idiomas disponibles

```php
<?php
return [
    "es" => [
        "name" => "Español",
        "flag" => "🇪🇸",
    ],
    "fr" => [
        "name" => "France",
        "flag" => "🇫🇷",
    ],
    "en" => [
        "name" => "Enghis",
        "flag" => "🇬🇧",
    ],
];
?>
```

**Creamos el componente html**

```html
<select name="lang" onchange="window.location.href=this.value" id="">
    <option value="" disabled checked>Selecciona un idioma</option>
    @foreach(config("languages") as $code =>$content)
    <option value="{{route(" set_lang
    ", $code)}}">{{$content['name']}} {{$content['flag']}}</option>
    @endforeach
</select>
```