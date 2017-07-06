# yii2-bootstrap-material-design
Composer package for implementing FezVrasta's bootstrap material design in Yii2

INSTALLATION
------------

~~~
composer require "marcelodeandrade/yii2-bootstrap-material-design:dev-master"
~~~

CONFIGURATION
------------

In `AppAsset.php` add a new Asset dependecy:
```
public $depends = [
    'marcelodeandrade\material\BootstrapMaterialDesignInitAsset'
];
```
