<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationGroup;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class StaffPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('staff')
            ->path('staff')
            ->login()
            ->registration()
            ->profile()
            ->userMenuItems([
                MenuItem::make()
                    ->label('Admin')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/dashboard')
                    ->visible(fn (): bool => auth()->user()->is_admin)
            ])
            ->colors([
                'primary' => Color::Amber,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->darkMode(false)
            ->navigationGroups([

                NavigationGroup::make()
                    ->label('Posts Management',)
                    ->icon('heroicon-o-newspaper')
                    ->collapsible(false),
                NavigationGroup::make()
                    ->label('User Management',)
                    ->icon('heroicon-o-user-group'),
                NavigationGroup::make()
                    ->label('Settings',)
                    ->icon('heroicon-o-cog-6-tooth')

            ])
//            ->collapsibleNavigationGroups(false)
            ->discoverResources(in: app_path('Filament/Staff/Resources'), for: 'App\\Filament\\Staff\\Resources')
            ->discoverPages(in: app_path('Filament/Staff/Pages'), for: 'App\\Filament\\Staff\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Staff/Widgets'), for: 'App\\Filament\\Staff\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
