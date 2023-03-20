<div>
    <!--
  <options=bold>“ You must be the change you wish to see in the world. ”</>
  <fg=gray>— Mahatma Gandhi</>
 -->

    <input x-data="{ value: @entangle($attributes->wire('model')) }" x-ref="input" x-init="window.intlTelInput($refs.input, {
        initialCountry: 'auto',
        nationalMode: false,
        autoHideDialCode: false,
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io?token=token_number',
                function() {}, 'jsonp').always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : 'mw';
                callback(countryCode);
            });
        },
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/utils.js',
    
    })" x-on:change="value = $event.target.value"
        type="tel" {!! $attributes->merge([
            'class' =>
                'form-control',
        ]) !!} />
</div>
