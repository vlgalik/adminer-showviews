# ShowViews
[Adminer](https://www.adminer.org/) plugin that reverts hiding of database views in [Adminer Editor](https://www.adminer.org/editor/).

## Installation & configuration

Check [how to install plugins to Adminer](http://www.adminer.org/plugins/), *it's the same for Adminer Editor*.

```php
...
$plugins = array(
    // specify enabled plugins here
    new AdminerShowViews()
);
...
// include original Adminer or Adminer Editor
include "./editor.php";
```
