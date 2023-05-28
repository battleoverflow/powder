# Powder
Website built to showcase the [Jinx Framework](https://github.com/azazelm3dj3d/jinx) using HTML, Tailwind CSS, and Jinx (PHP).

## Usage
After cloning the repository, all you have to do is install the dependencies and run a local server.

First, install the dependencies (Jinx):

```bash
composer install
```

Make sure you have all migrations applied and a MySQL database available (I prefer XAMPP & TablePlus for quickly configuring and editing databases):

```bash
php migrations.php
```

After everything is installed and configured, you can run a local server:

```bash
php -S localhost:8080
```

NOTE: You must be in the `public/` directory for to properly serve the files.

I'd like to eventually rewrite this in React/TypeScript, but for now, it's in HTML to allow the most flexibility with testing framework changes.

NOTE: While Jinx does have some session/cookie functionality, it may not be the best solution available. An easy workaround is to either clear all cache for `localhost:8080` for major changes (i.e DB edits, type changes, etc.) or run the website in a private browser session which will clear all cache on close.
