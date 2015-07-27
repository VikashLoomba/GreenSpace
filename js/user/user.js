$(document).ready(function(){
        $.get("/users/user_information", function(user){
            $("#user-container").html(user);
        });
        return false;
    });

$(document).ready(function(){
        $.get("/users/current_reservations", function(reservations){
            $("#reservation-container").html(reservations);
        });
        return false;
    });

$(document).on('click', '#update_information', function(){
        $.get("/users/edit", function(product){
            $("#user-container").html(product);
        });
        return false;
    });

$(document).on('click', '#see_information', function(){
        $.get("/users/user_information", function(product){
            $("#user-container").html(product);
        });
        return false;
    });

$(document).on('click', '#confirm-update', function(){
        $.post("/users/user_update", function(update){
            $("#user-container").html(update);
        });
        return false;
    });

$(document).ready(function(){
        $.get("/users/user_coins", function(coins){
            $("#coin-container").html(coins);
        });
        return false;
    });

