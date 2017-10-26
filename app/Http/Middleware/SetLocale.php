<?php

namespace App\Http\Middleware;

use App;
use Closure;

class SetLocale
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
    // Get request locale
    $locale = $request->locale;

    if($locale === null || !array_key_exists($locale, config('app.locales')))
    {
      // If not set or not found set to en
      $locale = 'en';

      // Try to guess it from HTTP headers
      $temp_locale = locale_accept_from_http($request->server('HTTP_ACCEPT_LANGUAGE'));
      if($temp_locale !== null)
      {
        // If found, get first 2 characters
        $temp_locale = substr($temp_locale, 0, 2);
        if(array_key_exists($temp_locale, config('app.locales')))
        {
          // If supported set
          $locale = $temp_locale;
        }
      }
    }

    // Set in App
    App::setLocale($locale);

    return $next($request);
  }
}
