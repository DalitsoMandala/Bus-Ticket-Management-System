<div>


    @foreach ($bookings as $key => $book)
        <div x-data="{
            targetDate: '{{ $book['date'] }}',
            dateDifference: '',
            thirtyMinutesEmitted: false,
            tenMinutesEmitted: false,
            fiveMinutesEmitted: false,
            cleared: false,
            sendNotification(value) {
                $wire.emitSelf('checkTime', value);
            },
        
            clearNotification() {
                $wire.emitSelf('clearTime', '{{ $book['id'] }}');
            },
            calculateDateDifference() {
                const targetTime = new Date(this.targetDate).getTime();
                const currentTime = new Date().getTime();
        
                const difference = targetTime - currentTime;
        
                if (difference < 0) {
                    this.dateDifference = 'Day has long passed';
                    this.clearNotification();
                    return true;
                } else {
                    const seconds = Math.floor(difference / 1000);
                    const minutes = Math.floor(seconds / 60);
                    const hours = Math.floor(minutes / 60);
                    const days = Math.floor(hours / 24);
                    // if days 0 hours 0 ....
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 30 && seconds % 60 === 0) && !this.thirtyMinutesEmitted) {
                        this.thirtyMinutesEmitted = true;
                        this.sendNotification('30min');
        
        
                    }
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 10 && seconds % 60 === 0) && !this.tenMinutesEmitted) {
                        this.tenMinutesEmitted = true;
                        this.sendNotification('10min');
                    }
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 5 && seconds % 60 === 0) && !this.fiveMinutesEmitted) {
                        this.fiveMinutesEmitted = true;
                        this.sendNotification('5min');
                    }
        
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 0 && seconds % 60 === 0) && !this.cleared) {
                        this.cleared = true;
                        this.sendNotification('none');
                        this.clearNotification();
                    }
        
        
        
        
                    this.dateDifference = `${days} day(s), ${hours % 24} hour(s), ${minutes % 60} minute(s), ${seconds % 60} second(s) remaining`;
                    return false;
                }
        
        
            },
        
            init() {
        
        
        
                status = setInterval(() => {
                    this.calculateDateDifference();
                    if (this.dateDifference == 'Day has long passed') {
        
                        clearInterval(status);
                    }
                }, 1000);
        
        
        
        
            }
        
        }">



        </div>
    @endforeach

</div>
@push('scripts')
    <script>
        // check seconds (10)
    </script>
@endpush
