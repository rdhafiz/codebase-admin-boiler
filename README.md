# mAdmin

## Development Configuration
```
composer install
```
```
npm install
```

### Link Storage
```
php artisan storage:link
```

### Generate Initial Data
```
php artisan db:seed
```

## Run Project as DEV
```
php artisan serve
npm run dev
```


## CMS Portal
`http://localhost:8000/secure/administration`
```
Email Address: secure@admin.com
Password: 123asd123
```


## Recruiter Portal
`http://localhost:8000/recruiter/portal`
```
Create Recruiter from CMS panel and login with the credential
```

## Passport OAuth2

```composer require laravel/passport```
```php artisan fix:passport```
