<?php

namespace App\Providers\Filament;

use App\Http\Middleware\IsAdmin;
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

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('/admin/dashboard')
            ->userMenuItems([
                MenuItem::make()
                    ->label('Dashboard')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/staff')
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
                    ->collapsible(true),
                NavigationGroup::make()
                    ->label('User Management',)
                    ->icon('heroicon-o-user-group')
                    ->collapsible(false),
                NavigationGroup::make()
                    ->label('Blog Management',)
                    ->icon('heroicon-o-pencil-square')
                    ->collapsible(false),
                NavigationGroup::make()
                    ->label('Site Settings',)
                    ->icon('heroicon-o-cog-6-tooth'),

            ])
//            ->collapsibleNavigationGroups(false)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
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
                IsAdmin::class,
            ]);
    }
}
