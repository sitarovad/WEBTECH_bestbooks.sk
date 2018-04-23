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