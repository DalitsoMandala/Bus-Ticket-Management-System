     <div wire:ignore x-data="{
     
         targetDate: '{{ $attributes['data-targetDate'] }}',
         remainingTime: '',
         isExpired: false,
     
     
         startTimer() {
             this.calculateTimeDifference(); // Initial calculation
     
             // Check and update every second
             let intervalId = setInterval(() => {
                 this.calculateTimeDifference();
                 if (this.isExpired) {
                     clearInterval(intervalId);
                     // Stop the interval once the target date has passed
                 }
             }, 1000);
     
             return this.isExpired;
     
         },
         calculateTimeDifference() {
             const targetTime = new Date(this.targetDate).getTime();
             const now = new Date().getTime();
             const difference = targetTime - now;
     
             if (difference > 0) {
                 const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                 const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                 const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                 const seconds = Math.floor((difference % (1000 * 60)) / 1000);
     
                 this.remainingTime = `${days} days, ${hours} hours, ${minutes} minutes, ${seconds} seconds`;
             } else {
                 this.remainingTime = 'The other day has long passed.';
                 this.isExpired = true;
     
     
     
             }
         }
     }" x-init="expired = startTimer();
     
     if (expired === true) {
         console.log('is has changed on load');
     }
     $watch('isExpired', value => {
         if (value !== false) {
             console.log('is has changed');
         }
     });">

         <input class="" type="text" {{ $attributes }} x-model="targetDate">
         <p class="badge badge-phoenix fs--2 badge-phoenix-warning" x-show="isExpired == false">
             <i class="fa-regular fa-clock"></i>
             <span x-text="remainingTime"></span>
         </p>

         <p class="badge badge-phoenix fs--2 badge-phoenix-success" x-show="isExpired">
             <i class="fa-regular fa-circle-check"></i> Departed
         </p>
         <input class="" type="text" x-model="isExpired">


     </div>
