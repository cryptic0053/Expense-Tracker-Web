<?php

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Http\Middleware\MirrorConfigToSubpackages;
use Filament\Pages;
use Filament\Resources;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Path
    |--------------------------------------------------------------------------
    |
    | The default is `admin` but you can change it to whatever works best and
    | doesn't conflict with the routing in your application.
    |
    */

    'path' => env('FILAMENT_PATH', 'admin'),


    /*
    |--------------------------------------------------------------------------
    | Filament Core Path
    |--------------------------------------------------------------------------
    |
    | This is the path which Filament will use to load it's core routes and assets.
    | You may change it if it conflicts with your other routes.
    |
    */

    'core_path' => env('FILAMENT_CORE_PATH', 'filament'),


    /*
    |--------------------------------------------------------------------------
    | Filament Domain
    |--------------------------------------------------------------------------
    |
    | You may change the domain where Filament should be active. If the domain
    | is empty, all domains will be valid.
    |
    */

    'domain' => env('FILAMENT_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Homepage URL
    |--------------------------------------------------------------------------
    |
    | This is the URL that Filament will redirect the user to when they click
    | on the sidebar's header.
    |
    */

    'home_url' => '/',



    'brand' => env('APP_NAME'),



    'auth' => [
        'guard' => env('FILAMENT_AUTH_GUARD', 'web'),
        'pages' => [
            'login' => \Filament\Http\Livewire\Auth\Login::class,
        ],
    ],



    'pages' => [
        'namespace' => 'App\\Filament\\Pages',
        'path' => app_path('Filament/Pages'),
        'register' => [
            Pages\Dashboard::class,
        ],
    ],



    'resources' => [
        'namespace' => 'App\\Filament\\Resources',
        'path' => app_path('Filament/Resources'),
        'register' => [],
    ],



    'widgets' => [
         'namespace' => 'App\\Filament\\Widgets',
         'path' => app_path('Filament/Widgets'),
        'register' => [
            App\Filament\Widgets\StatsOverview::class,
            App\Filament\Widgets\RecentActivity::class,
        ],
    ],



    'livewire' => [
        'namespace' => 'App\\Filament',
        'path' => app_path('Filament'),
    ],



    'dark_mode' => true,



    'layout' => [
        'forms' => [
            'actions' => [
                'alignment' => 'left',
            ],
        ],
        'footer' => [
            'should_show_logo' => true,
        ],
        'max_content_width' => 'full',
        'tables' => [
            'actions' => [
                'type' => \Filament\Tables\Actions\LinkAction::class,
            ],
        ],
        'sidebar' => [
            'is_collapsible_on_desktop' => true,
        ],
        'notifications' => [
            'vertical_alignment' => 'top',
            'alignment' => 'center',
        ],
    ],


    'favicon' => null,



    'default_avatar_provider' => \Filament\AvatarProviders\UiAvatarsProvider::class,


    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DRIVER', 'public'),


    'middleware' => [
        'auth' => [
            Authenticate::class,
        ],
        'base' => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
            DispatchServingFilamentEvent::class,
            MirrorConfigToSubpackages::class,
        ],
    ],

];
