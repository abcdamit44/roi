$("#selectItems").change(function () {

    let options = parseInt($(this).children("option:selected").val());
    $('.check').click(() => {
        let totalCost = 0;
        let totalBenefit = 0;
        $('.check:checked').each(() => {
            totalCost += parseInt($('.check:checked').attr("data-cost"));
            totalBenefit += parseInt($('.check:checked').attr("data-benefit"));
        })
        console.log(totalCost + options);
        $('#totalOne').html(`$ ${totalCost + options
            }`)
        $('#totalTwo').html(`$ ${totalBenefit + options}`)


    })

});

