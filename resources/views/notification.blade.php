<div id="notifications" class="bg-secondary fixed-bottom">
    <button class="btn btn-primary" id="noti">Get Noti</button>
    <ul>

    </ul>
</div>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}">
</script>
<script type="text/javascript">
    function getNotification() {
        $.ajax(
            {
                //TODO change to post method requires sending csrf token
                url: '/notifications',
                dataType: 'json',
                success: function (response) {
                    response.forEach()
                }
            });
    }
    $("#noti").click(getNotification);

</script>
