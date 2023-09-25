## Install

- `git clone`
- `composer install`
- `copy .env.example .env`
- `php artisan key:generate`
- `php artisan serve`

## How to

After running the project, notice the theme-switcher on right side of navigation
- Click link (Inside page) on Dashboard page and you can see the render-hook is gone from navigation
- If you navigate from pages (not custom url) and the render-hook is displaying correctly

## Play along

- Remove custom url from 'web.php'
- Click link on dashboard, if the page is not access from custom url then render-hook is working correctly
