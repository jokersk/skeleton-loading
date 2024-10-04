## laravel, tailwindcss, skeleton loading

## install

```
composer require joe.szeto/skeleton-loading
```

## tailwindcss
in tailwind.config.js
```
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        ...
        "./vendor/joe.szeto/skeleton-loading/resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

```

## Service Provider
in providers.php ( laravel 11 ), in app.php ( laravel 10 )  add
```JoeSzeto\SkeletonLoading\SkeletonServiceProvider::class```




## usage

```blade

<x-skeleton-loading pattern="abab|abba|aaab" />

```
