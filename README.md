
# DeepDiveMKB - CaptainVR


## Installeren

Om te installeren heb je het volgende nodig; 

* [Composer](https://getcomposer.org/)
* [NodeJs](https://nodejs.org/en/)


Al geinstalleerd? Clone dit project en run;

```composer i```
of
```composer install```

Dit download de nodige "packages" om het project te kunnen runnen.

In dit project gebruiken we [TailwindCSS](https://tailwindcss.com/), dat wordt dus uitgevoerd door [Vite](https://vitejs.dev). Om vite te activeren gebruik je;

```npm run dev```


## Localhost

Als je dit wil runnen op localhost kan je het volgende in typen in je terminal

```php artisan serve```

Gooit hij een error? Dan heb je geen ```.env``` file in je folder.
Er zit een example versie in de folder. Copy and paste de file en hernoem het naar ```.env```.

Daarna geef je deze command mee;

```php artisan key:generate```

Dit maakt een nieuwe key aan zodat jij dit op je server kan runnen. Vervolgens gebruik je;

```php artisan serve``` met daarnaast ```npm run dev```.

Zie je geen TailwindCSS? Vergeet dan niet ```@vite(resources/css/app.css)``` in je HTML of Blade file te stoppen.
