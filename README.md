# magento2-hello-world
Magento 2 basic module development tutorial

Installation
----------
Add this in your root magento composer.json
```javascript
{
  "repositories": [
    .....
    {
      "type": "vcs",
      "url": "https://github.com/suite900/magento2-hello-world"
    }
  ],
  
  "require": {
    .....
    "suite900/magento2-hello-world": "dev-master"
  }
}
```

Then run:
```php
composer update
```
