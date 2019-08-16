
$(document).on('click', "#getPlaylist", function(){
    $.ajax({
        url: '/index.php?r=site/get-random-playlist',
        type: 'post',
        dataType: 'json',
        success: function(response) {
            if(response){
                $('#modal_playlist').modal('hide')
                $('#playlistTable').html('<table id="playlistTable" class="table table-striped table-sm table-dark">')
                $('#playlistTable').html('<thead><tr><th>#</th><th>Música</th><th>Duração (min)</th><th>Gênero</th><th>Artista</th></tr></thead><tbody>')
                $.each(response, function(i, e) {
                    tr = $('<tr>').append( $('<td>').text(e.id), $('<td>').text(e.name), $('<td>').text(e.time), $('<td>').text('Folk'), $('<td>').text('Bob Dylan'));
                    $('#playlistTable').append(tr)
                });
            }
        }
    })
});