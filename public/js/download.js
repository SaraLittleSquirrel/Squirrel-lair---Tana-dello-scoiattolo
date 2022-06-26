window.jsPDF = window.jspdf.jsPDF;

function download() {
    var doc = new jsPDF();

    let title = $.trim($('#title_table').text());

    doc.text(title, doc.internal.pageSize.width/2, 20, {align: 'center'});
    doc.autoTable({
        startY: 25,
    });

    $("[id^=table_day]").each(function (index) {
        doc.autoTable({
            html: '#' + $(this).attr('id'),
            styles: {
                lineColor: [0,0,0],
                lineWidth: .1
            },
            headStyles: {
                halign: 'center',
            },
            bodyStyles: {
                halign: 'center'
            },

        });
    });

    doc.save();
}
