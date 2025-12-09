<?php

namespace App\Providers;

use App\Models\User;
use Filament\Navigation\NavigationGroup;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Lunar\Admin\Support\Facades\LunarPanel;
use Lunar\Shipping\ShippingPlugin;
use NumaxLab\Lunar\Geslib\Admin\Filament\GeslibPlugin;
use Testa\Admin\Filament\TestaPlugin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        LunarPanel::panel(function ($panel) {
            return $panel
                ->path('admin')
                ->brandName(config('app.name'))
                ->navigationGroups([
                    'Catálogo',
                    'Ventas',
                    'Formación',
                    'Mediateca',
                    'Membresía',
                    NavigationGroup::make()
                        ->label('Geslib')
                        ->collapsed(),
                    NavigationGroup::make()
                        ->label('Envío')
                        ->collapsed(),
                    NavigationGroup::make()
                        ->label('Configuraciones')
                        ->collapsed(),
                ])
                ->plugins([
                    GeslibPlugin::make(),
                    TestaPlugin::make(),
                    ShippingPlugin::make(),
                    SpatieLaravelTranslatablePlugin::make()
                        ->defaultLocales(['es']),
                ]);
        })->register();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('viewPulse', function (?User $user) {
            return Auth::guard('staff')->check() && Auth::guard('staff')->user()->admin;
        });
    }
}
