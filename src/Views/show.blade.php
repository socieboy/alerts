@if( session()->has('sweet_alert_message'))
    <script>
            swal(
                {
                    title: "{{ session('sweet_alert_message.title')}}",
                    text: "{{ session('sweet_alert_message.message')}}",
                    type: "{{ session('sweet_alert_message.type')}}",
                    timer: 1500,
                    showConfirmButton: false
                }
            );
    </script>
@endif

@if( session()->has('sweet_alert_message_overlay'))
    <script>
            swal(
                {
                    title: "{{ session('sweet_alert_message_overlay.title')}}",
                    text: "{{ session('sweet_alert_message_overlay.message')}}",
                    type: "{{ session('sweet_alert_message_overlay.type')}}",
                    confirmButtonText: "Okay!"
                }
            );
    </script>
@endif