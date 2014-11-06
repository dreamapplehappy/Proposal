$(document).ready(function(){
    var $flag = $('#vote').data('vote');
    $.goup({
        bottomOffset: 50,
        containerRadius: 30
    });

    $('#vote').click(function(e){
        e.preventDefault();
        var $url = '/vote';
        var $data = {
        'user_id' : $(this).data('user'),
        'topic_id' : $(this).data('topic')
        };
        $.ajax({
          type:"POST",
          data: $data,
          url:$url,
          success:function(data){$flag = changeIcon($flag);changeNum(data);},
          error:function(){return location.href='/login'}
        });
    });

    $('[data-delete]').click(function(e){
        e.preventDefault();
        if (confirm('Are you sure to delete?')) {
            var url = $(this).prop('href');
            var token = $(this).data('delete');
            var $form = $('<form/>', {action: url, method: 'post'});
            var $inputMethod = $('<input/>', {type: 'hidden', name: '_method', value: 'delete'});
            var $inputToken = $('<input/>', {type: 'hidden', name: '_token', value: token});
            $form.append($inputMethod, $inputToken).hide().appendTo('body').submit();
        }
    });
});

function changeIcon(flag){
    if(flag){
        $('.vote-icon').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
        flag = !flag;
    }
    else{
        $('.vote-icon').removeClass('fa-thumbs-up').addClass('fa-thumbs-up');
        flag = !flag;
    }
    return flag;
}

function changeNum(data){
   $num = $('#vote-count');
   $num.text(data.count);
}
