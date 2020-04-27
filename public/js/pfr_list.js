jQuery(document).ready(function(){
    $('.tracking_log').on('click', function(){
        var url = $(this).data('url');
        var id = $(this).data('id');
        var type = $(this).data('type');
        var data = "type="+type+"&id="+id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: url,
            data: data,
            dataType: 'json',
            success: function(res){
                if(res['error']){
                    if(!$.isPlainObject(res.message)){
                        swal(res.message);
                    }else{
                        $.each(res.message, function(key,value){
                            swal(value[0]);
                            return false;
                        });
                    }
                }else{
                    $('#modal_tracking_log').find('tbody').html(res.data);
                    $('#modal_tracking_log').modal('show');
                    // swal(res['message'], 'success');
                }
            }
        });
    });
    $('.pfr_action').on('click', function(){
        var url = $(this).data('url');
        var id = $(this).data('id');
        var type = $(this).data('type');
        var data = "type="+type+"&id="+id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: url,
            data: data,
            dataType: 'json',
            success: function(res){
                if(res['error']){
                    if(!$.isPlainObject(res.message)){
                        alert(res.message);
                    }else{
                        $.each(res.message, function(key,value){
                            alert(value[0]);
                            return false;
                        });
                    }
                }else{
                    location.reload();
                    alert(res['message']);
                }
            }
        });
    });
    $('.delete').on('click', function(){
        if(confirm("Do you want delete this pfr??")){
            var url = $(this).data('url');
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        if(!$.isPlainObject(res.message)){
                            alert(res.message);
                        }else{
                            $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                        }
                    }else{
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        }
    });
    $('.restore').on('click', function(){
        alert('sá');
        var url = $(this).data('url');
        var tr = $(this).closest('tr');
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function(res){
                if(res['error']){
                    swal(res['message']);
                }else{
                    tr.remove();
                    swal(res['message']);
                }
            }
        });
    });
});