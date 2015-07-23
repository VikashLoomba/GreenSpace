/*Orders Partial*/
    $(document).ready(function(){
        console.log('here');
        $.get("products/effects", function(res){
            $("#effects_div").html(res);
        });
    });
    /*LOAD products partial (if clicked)*/
    // $(document).on('click', '#product', function(){
    //     $.get("/products/products", function(product){
    //         $("#primary").html(product);
    //     });
    // });
    /*End load products partial*/

    /*LOAD products partial (if clicked)*/
    $(document).on('click', '#search', function(query){
        $.post( "/products/search", $( "#product_search" ).serialize() );
        $.get("/products/search", function(query){
            $("#primary").html(query);
        });
    });
    /*End load products partial*/

    $(document).on('click', '#effects_tab', function(){
        $.get("/products/partials/effects", function(res){
            $("#effects_div").html(res);
        });
    });