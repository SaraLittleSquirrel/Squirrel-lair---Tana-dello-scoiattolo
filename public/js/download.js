window.jsPDF = window.jspdf.jsPDF;

function download() {
    var doc = new jsPDF();

    let title = $.trim($('#title_table').text());

    //titolo scheda allenamento
    doc.text(title, doc.internal.pageSize.width/2, 20, {align: 'center'});
    doc.autoTable({
        startY: 25,
    });

    //tabelle giorni 
    $("[id^=table_day]").each(function (index) {
        doc.autoTable({
            html: '#' + $(this).attr('id'),
            styles: {
                lineColor: [0,0,0],
                lineWidth: .1
            },
            headStyles: {
                halign: 'center',
                textColor: [255,255,255],
                fillColor: [206,99,36]
            },
            bodyStyles: {
                halign: 'center'
            },

        });
    });

    //scarica documento
    doc.save();
}
