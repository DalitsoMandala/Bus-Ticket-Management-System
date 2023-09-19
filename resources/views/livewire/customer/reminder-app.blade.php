<div>


    @foreach ($bookings as $key => $book)
        <div x-data="{
            targetDate: '{{ $book['date'] }}',
            dateDifference: '',
            thirtyMinutesEmitted: false,
            tenMinutesEmitted: false,
            fiveMinutesEmitted: false,
            cleared: false,
            time: @entangle('time'),
            sendNotification(value, desc) {
                $wire.emitSelf('checkTime', value, desc);
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
        
                        setTimeout(() => {
                            this.thirtyMinutesEmitted = true;
                            this.sendNotification('30min', '{{ $book['description'] }}');
                        }, 5000);
        
                    }
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 10 && seconds % 60 === 0) && !this.tenMinutesEmitted) {
        
        
                        setTimeout(() => {
                            this.tenMinutesEmitted = true;
                            this.sendNotification('10min', '{{ $book['description'] }}');
                        }, 5000);
                    }
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 5 && seconds % 60 === 0) && !this.fiveMinutesEmitted) {
        
                        setTimeout(() => {
                            this.fiveMinutesEmitted = true;
                            this.sendNotification('5min', '{{ $book['description'] }}');
                        }, 5000);
                    }
        
                    if ((days % 60 === 0 && hours % 60 === 0 && minutes % 60 === 0 && seconds % 60 === 0) && !this.cleared) {
        
                        setTimeout(() => {
                            this.cleared = true;
                            this.sendNotification('none', '{{ $book['description'] }}');
                            this.clearNotification();
                        }, 5000);
                    }
        
        
        
        
                    this.dateDifference = `${days} day(s), ${hours % 24} hour(s), ${minutes % 60} minute(s), ${seconds % 60} second(s) remaining`;
                    return false;
                }
        
        
            },
        
            init() {
                this.calculateDateDifference();
        
                if (this.dateDifference != 'Day has long passed') {
                    status = setInterval(() => {
                        this.calculateDateDifference();
                        if (this.dateDifference === 'Day has long passed') {
        
                            clearInterval(status);
                        }
                    }, 1000);
        
                }
        
        
        
        
        
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
