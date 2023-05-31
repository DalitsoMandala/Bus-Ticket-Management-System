<div x-data="{ currentTimeApp: '', newDate: '' }" x-init="  (function() {
      function currentTime() {

          newDate = new Date().toLocaleTimeString();


      }

      currentTime();

      setInterval(currentTime, 1000);


  })();">
    <span x-text="newDate"></span>
</div>
