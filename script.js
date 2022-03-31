// $("#selectItems").change(function () {

//     let options = parseInt($(this).children("option:selected").val());
//     $('.check').click(() => {
//         let totalCost = 0;
//         let totalBenefit = 0;
//         $('.check:checked').each(() => {
//             totalCost += parseInt($('.check:checked').attr("data-cost"));
//             totalBenefit += parseInt($('.check:checked').attr("data-benefit"));
//         })
//         console.log(totalCost + options);
//         $('#totalOne').html(`$ ${totalCost + options
//             }`)
//         $('#totalTwo').html(`$ ${totalBenefit + options}`)


//     })

// });

$("#selectItems").change(function () {
    calcSavings();
});

$('.check').click(() => {
    calcSavings();
});

function calcSavings() {
    var options = parseInt($("#selectItems").children("option:selected").val());
    // let totalHours = 0;
    let totalCost = 0;
    let totalBenefit = 0;
    $('.check:checked').each(function () {
        // totalHours += parseInt($('.check:checked').attr("data-hours"));
        totalCost += parseInt($(this).attr("data-cost"));
        console.log($(this));
        totalBenefit += parseInt($('.check:checked').attr("data-benefit"));
    })
    // $('#totalHours').html(` ${totalHours * options}`)
    $('#totalOne').html(`$ ${totalCost * options}`)
    $('#totalTwo').html(`$ ${totalBenefit * options}`)
}