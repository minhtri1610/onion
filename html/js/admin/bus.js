//format 24h time
$('input[type=asia-time]').w2field('time',  { format: 'h24' });

//append row table bus_route
$("#insert-more").click(function () {
    $("#mytable").each(function () {
        var tds = '<tr>';
            jQuery.each($('tr:last td', this), function () {
                tds += '<td>' + $(this).html() + '</td>';
            });
            tds += '</tr>';
            if ($('tbody', this).length > 0) {
                $('tbody', this).append(tds).find("td:last").css("border", "none");
            } else {
                $(this).append(tds);
            }
    });
});
//delete row bus_route
$(document).ready(function(){
    $("#mytable").on('click','.btnDelete',function(e){
        $this  = $(this);
        e.preventDefault();
        var id=$(this).attr("id")+' #mytable';
        var url = $(this).attr("href");
        $.get(url, function(r){
            $this.closest('tr').remove().find("td:first").css("border","none");
            $( "#mytable" ).load(id);
        })
    });
});

$(document).ready(function(){
    $("#mytable").on('click','.btnDelete1',function(e){
        var id=$(this).attr("id")+' #mytable';
        $this  = $(this);
        e.preventDefault();
        var url = $(this).attr("href");
            $this.closest('tr').remove();
    });
});

//