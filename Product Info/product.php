<?php

    $product=array(
        "id"=>1,
        "name"=>"samsung S26",
        "price"=>600000000
    );
    echo "This is my Product: <hr>";
    echo "Title: {$product["name"]}<br>Price: ".number_format($product["price"]);
?>