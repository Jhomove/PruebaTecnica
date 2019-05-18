$('.name').on('keyup', function () {
    let filter = $(this).val(); 
    if(filter.length > 3){
        let url = route('live_search.action');
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            data: { query: filter},
            success:function(data){
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        });
        // $.get(url, filter, function(){
            
        // });
    }
});