<div>
    <!--
  <options=bold>“ You must be the change you wish to see in the world. ”</>
  <fg=gray>— Mahatma Gandhi</>
 -->

    <input type="tel" x-data="{ value: @entangle($attributes->wire('model')) }" x-ref="input" x-init="window.intlTelInput($refs.input, {
        initialCountry: 'auto',
        nationalMode: false,
        autoHideDialCode: false,
        geoIpLookup: function(callback) {
            $.get('http://ip-api.com/json',
                function() {}, 'jsonp').always(function(resp) {
    
                var countryCode = (resp && resp.country) ? resp.countryCode : 'MW';
                callback(countryCode);
            });
    
    
        },
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/utils.js',
    
    })"
        x-on:change="value = $event.target.value" {!! $attributes->merge([
            'class' => 'form-control',
        ]) !!} />
</div>
