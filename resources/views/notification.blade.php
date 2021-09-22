<li class="nav-item btn-check-preso dropdown text-center">
    <a href="#" class="nav-link active notif text-center" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-bell-fill ml-2 color" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
        </svg><span class="badge2 text-center" id="notificationcounter" style="display: none;"></span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="notificationsdropdown"></ul>
</li>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}">
</script>
<script type="text/javascript">
    function getNotification() {
        $.ajax(
            {   //todo read notification
                url: '/notifications',
                dataType: 'json',
                success: function (response) {
                    var counter = $("#notificationcounter");
                    if(response.length){
                        counter.show();
                        counter.html(response.length);
                    }
                    $.each(response, function(index, notification){
                        $("#notificationsdropdown").append("<li class=\"dropdown-item overflow-auto\">"+notification.corps+"</li>");
                    })
                }
            });
    }
    $(document).ready(getNotification);
</script>