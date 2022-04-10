# SlugMaker
Create a slug from the title


# install

`composer require devnull-ir/slugmaker`

# Sample

```php
slugMaker('This Test');
```
Execute: `This-Test`

--------
```php
slugMaker('This Test',[
  'concat'=>'*'
]);
```

Execute: `This*Test`

