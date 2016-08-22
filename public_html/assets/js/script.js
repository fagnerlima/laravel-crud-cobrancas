$(function () {
    // MaskMoney
    $('.currency').maskMoney({
        //'prefix': 'R$ ',
        'thousands': '.',
        'decimal': ',',
        'allowZero': true,
        'affixesStay': false
    });

    // DatePicker
    !function (a) {
        a.fn.datepicker.dates["pt-BR"] = {
            days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
            daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
            daysMin: ["Do", "Se", "Te", "Qu", "Qu", "Se", "Sa"],
            months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            today: "Hoje",
            monthsTitle: "Meses",
            clear: "Limpar",
            format: "dd/mm/yyyy"
        }
    }(jQuery);
    $('.date-picker').datepicker({
        'format': 'dd/mm/yyyy',
        'language': 'pt-BR',
        'todayHighlight': true
    });
});