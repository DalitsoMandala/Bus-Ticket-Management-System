<!-- resources/views/livewire/time-difference-counter.blade.php -->

<div wire:ignore x-data="{
    model: @entangle($attributes->wire('model')),

    loadCalendar() {


        let event = this.model;
        var calendarEl = $refs.cal;
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'today',
                center: 'prev title next',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            timeZone: 'UTC',

            events: event,
            eventClick: function(info) {
                let id = info.event.id;

                let eventid = id.replace('event_', '');
                let eventtitle = info.event.title;
                let str = info.el.className;
                let searchTerm = /text-success/g;
                let result = str.search(searchTerm);
                let status = '';
                if (result !== -1) { // if found
                    status = 'success';
                } else {
                    status = 'danger';
                }
                window.livewire.emitTo('customer.view-event', 'showModal', '' + eventid + '',
                    '' +
                    eventtitle + '', '' + status + '');

            }


        });
        calendar.render();




    }



}" x-init="() => {
    loadCalendar();


}">
    <input class="d-none" type="text" {{ $attributes }}>
    <div x-ref="cal"></div>


</div>
