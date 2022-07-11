# SlugMaker
Creates a slug from a string


# install

`composer require devnull-ir/slugmaker`

# Examples

```php
slugMaker('This Test');
```
Output: `This-Test`

--------
```php
slugMaker('This Test',[
  'concat'=>'*'
]);
```

Output: `This*Test`

