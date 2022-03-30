$("#selectItems").change(function () {
    var options = parseInt($(this).children("option:selected").val());
    $('.check').click(() => {
        let totalCost = 0;
        let totalBenefit = 0;
        $('.check:checked').each(() => {
            totalCost += parseInt($('.check:checked').attr("data-cost"));
            totalBenefit += parseInt($('.check:checked').attr("data-benefit"));
        })
        $('#totalOne').html(`$ ${totalCost + options}`)
        $('#totalTwo').html(`$ ${totalBenefit + options}`)
    })

});

