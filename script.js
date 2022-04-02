$("#selectItems").change(function () {
    $("#selectApplication").change(function () {
        calcSavings();
    })

});

$('.check').click(() => {
    calcSavings();
});
let msg = document.getElementById('message');
function calcSavings() {
    var options = parseInt($("#selectItems").children("option:selected").val());
    var application;

    let totalHours = 0;
    let totalCost = 0;
    let totalBenefit = 0;
    let itemName = "";
    $('.check:checked').each(function () {
        totalHours += parseInt($(this).attr("data-hours"));
        totalCost += parseInt($(this).attr("data-cost"));
        totalBenefit += parseInt($(this).attr("data-benefit"));
        itemName += $(this).attr("data-name");

        application = $("#selectApplication").children("option:selected").val();
        msg.innerHTML = " ";
        msg.append(`Number Of PODs: ${options}, Item name: ${itemName + " "}, Total Hours: ${totalHours * options}, Total Cost: ${totalCost * options}, Total Benefit: ${totalBenefit * options}, Application: ${application}. `)
    })
    $('#totalHours').html(` ${totalHours * options}`)
    $('#totalOne').html(`$ ${totalCost * options}`)
    $('#totalTwo').html(`$ ${totalBenefit * options}`)
}