$(function () {
    // MaskMoney
    $('.currency').maskMoney({
        //'prefix': 'R$ ',
        'thousands': '.',
        'decimal': ',',
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

    // Modal de exclusão de título
    $('#modalExcluirTitulo').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var descricao = button.data('descricao');
        var modal = $(this);
        var form = modal.find('form');
        var baseUrl = form.data('baseurl');

        if(!baseUrl.endsWith('/'))
            baseUrl += '/';

        form.attr('action', baseUrl + id);
        modal.find('.modal-body span').html('Tem certeza que deseja excluir o título <b>' + id + '</b> (<b>' + descricao + '</b>)?');
    });
});