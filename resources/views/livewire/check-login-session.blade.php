<div>

</div>
@push('scripts')
    <script>
        let inactivityTime = function() {
            let time;

            window.onmousemove = resetTimer;
            window.onkeydown = resetTimer;
            if (document.hidden == false) {
                resetTimer();
            }


            function logout() {
                window.location = '/';


            }


            function resetTimer() {
                clearTimeout(time);
                time = setTimeout(logout, 300000); //10 min
            }
        };


        window.onload = function() {
            inactivityTime();

        }
    </script>
@endpush
