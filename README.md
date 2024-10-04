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

## usage

```blade

<x-skeleton-loading pattern="abab|abba|aaab" />

```
