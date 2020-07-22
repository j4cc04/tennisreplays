function dataTable_date(data, type, row, meta) {
    if(data == null) return formatDate(1595171380000)
    if(data["$date"] == null) return formatDate(data)

    var timestamp = Number(data["$date"]["$numberLong"]);
    return type === 'sort' ? timestamp : formatDate(timestamp);
}


function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear(),
        hours = '' + d.getHours(),
        minutes = '' + d.getMinutes()

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;
    if (hours.length < 2) 
        hours = '0' + hours;
    if (minutes.length < 2) 
        minutes = '0' + minutes;

    return [day, month, year].join('-') + "<br />" + [hours, minutes].join(':');
}


$(document).ready(function() {

	$("body").addClass("loaded");

	$(function () {
		$('a[rel="lightbox"]').fluidbox();
	})

 	var table = $('#match_list').DataTable({
        "ajax": {
            "url": 'list.json',
            "type": 'GET',
            "dataType": "json",
            "cache": false,
            "dataSrc": function (json) {
                return json;
            },
        },
        columns: [
            { data: 'md', render: dataTable_date },
            { data: 'p1' },
            { data: 'p2' },
            { data: 'l' }
        ],
        "order": [[ 0, "desc" ]],
        searching: true
    });

    
    $('body').on('click', '#match_list tbody tr', function() {
		location.href = "mailto:tennisreplays2020@gmail.com?subject="+$(this).text()+'&body='+$(this).text();
    });


});
