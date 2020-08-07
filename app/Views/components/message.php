<!DOCTYPE html>

<script type="text/javascript">
    const showMessage = (message, type) => {
        $('#message_content').html(message);
        $('#message').addClass(type);
        $('#message').show(400);
        setTimeout(function() { 
            $('#message').hide(400);
        }, 3000);            
    };
</script>

<div id="message" class="alert alert-dismissible fade show" role="alert" style="display:none;">
    <span id="message_content"></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>