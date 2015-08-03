## Laravel 5.1 Alerts with SweetAlerts

### Installation

Add to your composer.json file the package.

```
"socieboy/alerts" : "dev-master"
```

Update your dependencies

```
composer update
```

After install this package you have to set the service provider on your config/app.php file

```
Socieboy\Alerts\AlertServiceProvider::class
```

Copy the required assets of SweetAlert to your public folder.
Those assets would be place in the css and js respective directory.

```
php artisan vendor:publish --TAG=alerts
```


Then in your master view add those styles and scripts.
Put this style between the \<head\> \</head\> tags
```
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
```
Add the JS script before close your </body> tag.
```
<script src="js/sweetalert.js"></script>
```

The last step in to include the alerts view to your master view.
Add this code right after set the JS script file.
```
@include('Alerts::show')
```


### Usage

On your controllers is a perfect place to use it, any way you can fire the alerts from jobs or events.

```
alert('Title', 'Message')

alert()->error('Title', 'Message')

alert()->success('Title', 'Message')

alert()->overlay('Title', 'Message')
```


