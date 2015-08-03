## Laravel Alerts with SweetAlerts

Add to your composer.json file the package.

```
"socieboy/alerts" : "dev-master"
```

Update your dependencies

```
Composer update
```

After install this package you have to set the service provider on your config/app.php file

```
'Socieboy\Alerts\AlertServiceProvider',
```

Copy the required assets of SweetAlert to your public folder.
```
php artisan vendor:publish --TAG=alerts
```

