<li class="nav-item btn-check-preso dropdown text-center"
    onclick="notificationsRead({{ Auth::user()->id }})"
>
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
    function countUnread(response) {
        let count = 0;
        for(var i = 0; i < response.length; i++){
            if(!response[i].status)
                count++;
        }
        return count;
    }

    function getNotification() {
        $.ajax(
            {
                url: '/notifications',
                dataType: 'json',
                type: 'post',
                data: { "_token": "{{ csrf_token() }}"},
                success: function (response) {
                    $("#notificationsdropdown").html('');
                    var counter = $("#notificationcounter");
                    var count = countUnread(response);
                    if(count){
                        counter.show();
                        counter.html(count);
                    }else{
                        counter.hide();
                        //$("#notificationsdropdown").hide();
                    }
                    $.each(response, function(index, notification){
                        if(notification.status) {
                            $("#notificationsdropdown").append('<div class="toast-container" style="width: 300px; display: block;" aria-live="assertive" aria-atomic="true">' +
                                '<div class="toast-header">' +
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-bell-fill" viewBox="0 0 16 16">' +
                                '<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>' +
                                '</svg>' +
                                '<strong class="me-auto">' + notification.title + '</strong>' +
                                '<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>' +
                                '</div>' +
                                '<div class="toast-body hovereffect">' +
                                '<h6 class=" fw-bold ">' + notification.corps + '</h6>' +
                                '</div>' +
                                '</div>');
                        }
                        else {
                            $("#notificationsdropdown").append('<div class="toast-container border border-1 border-primary" style="width: 300px; display: block;" aria-live="assertive" aria-atomic="true">'+
                                '<div class="toast-header">'+
                                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-bell-fill" viewBox="0 0 16 16">'+
                                '<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>'+
                                '</svg>'+
                                '<strong class="me-auto">' + notification.title + '</strong>'+
                                '<small>11 mins ago</small>'+
                                '<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>'+
                                '</div>'+
                                '<div class="toast-body hovereffect">'+
                                '<h6 class=" fw-bold ">' + notification.corps + '</h6>'+
                                '</div>'+
                                '</div>');
                        }
                    })
                }
            });
    }
    const interval = setInterval(getNotification, 5000);
    $(document).ready(getNotification);

    function notificationsRead(id){
        $.ajax({
            url : '/notifications/' + id,
            type: 'post',
            data: { "_token": "{{ csrf_token() }}" },
            success: function (response) {
                console.log(response);
            }
        });
    }
</script>
