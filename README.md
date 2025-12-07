<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Routes

```bash
<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
        return view('contact');
});
```

## Components

```bash
<?php

<body class="bg-black flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<nav class="bg-white">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
</nav>

<?php echo $slot ?>
</body>


// caller components

<x-layout>
    <h1 class="text-5xl text-white font-semibold">Hello from Home page</h1>
</x-layout>


// instea of this -> <?php echo // anthing  ?>
// we can use -> {{  }}
// because {{ }} = <?php echo ?>
```

## What is a Namespace?

// A namespace is like a folder path for PHP classes. namespaces are used to organize your classes and avoid naming conflicts. 
They follow PHP's namespace system and help Laravel automatically load classes using PSR-4 autoloading.
