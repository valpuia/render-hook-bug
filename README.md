## Install

- `git clone`
- `composer install`
- `copy .env.example .env`
- `php artisan key:generate`
- `php artisan serve`

## How to

After running the project, notice the theme-switcher on right side of navigation
- `Click link (Inside page) on Dashboard page and you can see the render-hook is gone inside that page`
- `If you navigate from top navigation and the render-hook is still displaying`

## Play along

- `Remove custom url from 'web.php'`
- `Click link on dashboard, if the page is not access from custom url then render-hook is working correctly`