<div>

    <div x-data="{ currentTimeApp: '' }" x-init="  (function() {
          function currentTime() {
    
              currentTimeApp = new Date();
    
    
          }
    
          currentTime();
    
          setInterval(currentTime, 5000);
    
    
      })();
      $watch('currentTimeApp', value => $wire.emitSelf('checkTime', value))">
        <span x-text="currentTimeApp"></span>

    </div>

</div>
@push('scripts')
    <script></script>
@endpush
