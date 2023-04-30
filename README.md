# Cara Install

After initializing a fresh instance of Laravel (and making all the necessary configurations), install the preset using one of the provided methods:

## Via Composer

> Clone repo github ke vscode
##### composer install/update
##### npm install
##### npm run dev

> Buat database code dan testing
##### cp .env.example .env

> Setting value .env dan .env.testing
##### php artisan key:generate
##### php artisan migrate
##### php artisan migrate --seed
##### php artisan serve

## Usage

> Masuk menggunakan *nama kalian*@gmail.com dengan password *nama kalian*.
##### Contoh: brian@gmail.com dengan password brian. 

## Dashboard

You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/home** in the url. 

### Profile edit

You have the option to edit the current logged in user's profile (change name, email and password). To access this page just click the "**User profile**" link in the left sidebar or by adding **/profile** in the url.

The `App\Http\Controllers\ProfileController` handles the update of the user information. 

```
public function update(ProfileRequest $request)
{
    auth()->user()->update($request->all());

    return back()->withStatus(__('Profile successfully updated.'));
}
```

Also you shouldn't worry about entering wrong data in the inputs when editing the profile, validation rules were added to prevent this (see `App\Http\Requests\ProfileRequest`). If you try to change the password you will see that other validation rules were added in `App\Http\Requests\PasswordRequest`. Notice that in this file you have a custom validation rule that can be found in `App\Rules\CurrentPasswordCheckRule`.

```
public function rules()
{
    return [
        'old_password' => ['required', 'min:6', new CurrentPasswordCheckRule],
        'password' => ['required', 'min:6', 'confirmed', 'different:old_password'],
        'password_confirmation' => ['required', 'min:6'],
    ];
}
```
## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Useful Links

- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)
- [Affiliate Program](https://www.creative-tim.com/affiliates/new) (earn money)
- [Blog Creative Tim](http://blog.creative-tim.com/)
- [Free Products](https://www.creative-tim.com/bootstrap-themes/free) from Creative Tim
- [Premium Products](https://www.creative-tim.com/bootstrap-themes/premium?ref=mdl-readme) from Creative Tim
- [React Products](https://www.creative-tim.com/bootstrap-themes/react-themes?ref=mdl-readme) from Creative Tim
- [Angular Products](https://www.creative-tim.com/bootstrap-themes/angular-themes?ref=mdl-readme) from Creative Tim
- [VueJS Products](https://www.creative-tim.com/bootstrap-themes/vuejs-themes?ref=mdl-readme) from Creative Tim
- [More products](https://www.creative-tim.com/bootstrap-themes?ref=mdl-readme) from Creative Tim
- Check our Bundles [here](https://www.creative-tim.com/bundles??ref=mdl-readme)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
