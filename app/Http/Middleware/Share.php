<?php

namespace App\Http\Middleware;
use App\Models\Setting;
use Closure;
use \Illuminate\Support\Facades\View;

class Share
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data =[];
        $settings = Setting::all();
        $settingsArr = [];

        foreach ($settings as $setting){
            $settingsArr[$setting->key] = $setting->value;
        }

        $data["settings"] = $settingsArr;
        View::share($data);
        return $next($request);
    }
}
