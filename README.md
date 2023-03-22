# Laravel Realtime
This laravel template provides an easy way to get started with real-time data in your laravel applications.
It uses [Soketi](https://soketi.app/), an open-source WebSockets server and [Livewire](https://laravel-livewire.com) to provide Laravel Echo integration for your frontend.

## Installation
To get started you need to run a few commands in your terminal.

- `cp .env.example .env`
- `composer install`
- `./vendor/bin/sail up --build`
- `./vendor/bin/sail npm install`
- `./vendor/bin/sail npm run dev` or `./vendor/bin/sail npm run build`
- `./vendor/bin/sail artisan key:generate`

And then you should be all set to visit [your site](http://127.0.0.1/) and start developing!

---

To learn more about [Livewire](https://laravel-livewire.com/docs/2.x/quickstart), [Laravel Broadcasting](https://laravel.com/docs/10.x/broadcasting) and [Soketi](https://docs.soketi.app/) I recommend checking out their documentation.
