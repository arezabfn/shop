<?php

function cart($nameProduct,$priceProduct,$imgProduct,$product_id){
    $cart = "
                  <div class=\"col-md-3 col-sm-6 my-3 my-md-3\">
            <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=$imgProduct alt=\"Image\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$nameProduct</h5>
                        <h6>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"far fa-star\"></i>

                        </h6>
                        <p class=\"card-text\">
                            Some Quick Example Text To Build On The Card
                        </p>
                        <h5>
                            <small class=\"text-secondary\"><s>$599</s></small>
                            <span class=\"price\">$$priceProduct</span>
                        </h5>
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add To Cart<i class=\"fas fa-shopping\"></i></button>
                        <input type='hidden' name='product_id' value=$product_id>
                    </div>
                </div>
            </form>
        </div>
    ";
    echo $cart;
}

function cartElement($productImage,$productname,$productprice,$productid){
    $elememt = "
    
       <form action=\"./cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"../../shop/$productImage\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-scondary\">Seller:dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save For Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo $elememt;
}

?>