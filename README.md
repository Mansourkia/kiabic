# kiabic

Bootstrap icons for WordPress developers.

## Usage

1. Download the latest version of the framework.
2. Copy the files `kiabic.php` and `library.json` into a folder in your project (Both of these files must be placed in the same folder).
3. Include the kiabic.php file.


## Dsiplaying An Icon

```php
<?php
require 'kiabic.php'; // path to kiabic.php
?>

<div>
  <?php Kiabic::icon('sun-fill'); ?>
</div>
```

## Icons Source

```php
<?php
require 'kiabic.php'; // path to kiabic.php
$icon = Kiabic::get_icon('moon');

echo '<div>' . $icon . '</div>';
```
