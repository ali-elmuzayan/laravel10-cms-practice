 <a {{  $attributes->merge(['class' => 'text-muted  btn']) }} href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="langSwitcher">
              {{ strtoupper($locale) }}
            </a>
