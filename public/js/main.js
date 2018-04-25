$('#cathegory').change(function () {
    var cathegory_name = $('#cathegory > option:selected').text();
    GetSubcategoriesOf(cathegory_name);
});

function GetSubcategoriesOf(cathegory) {
    jQuery.ajax({
        url:'http://localhost:8000/getsubcategories',
        type: 'GET',
        data: { cathegory: cathegory },
        success: function( data ){
            var subcathegories = data.subcathegories;
            $('#subcathegory').html("");
            for(var i = 0; i < subcathegories.length; i++) {
                $('#subcathegory').append('<option value="' + subcathegories[i].id + '">' + subcathegories[i].name + '</option>');
            }
        },
        error: function (xhr, b, c) {
            console.log("xhr=" + xhr + " b=" + b + " c=" + c);
        }
    })};

$('.count_of_products').change(function(event) {
    var total_price = 0;
    var count = $(event.target).val();
    $(event.target)[0].setAttribute("value", count);
    var price_of_single_product = parseFloat($(event.target).parent().next().children()[1].textContent);
    $(event.target).parent().next().next().children()[1].textContent = (price_of_single_product * count) + '€';

    var prices = $('.total-price-for-book');
    for(var i = 0; i < prices.length; i++) {
        var pr = parseFloat(prices[i].textContent);
        total_price += pr;
    }
    $('#total-price')[0].textContent = 'Spolu: ' + total_price + ' €';
});