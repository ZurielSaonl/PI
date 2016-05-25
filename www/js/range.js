
$(function() {
    $("#slider-range").slider({
        range: true,
        min: 100,
        max: 1000,
        values: [200, 500],
        slide: function(event, ui) {
            $("#amount").val(ui.values[ 0 ] + "MXN-" + ui.values[ 1 ] + "MXN");
        }
    });

    $( "#amount" ).val($("#slider-range").slider("values", 0) + "MXN-" + $("#slider-range").slider( "values", 1) + " MXN");
});
