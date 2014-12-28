<div class="shopping_cart">
    <div class="cart_title">Shopping cart</div>
    <div class="cart_details"> {{ $cartCount }} item(s) <br />
        <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
    <div class="cart_icon">
        <a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]">
            {{ HTML::image('images/shoppingcart.png', '', array("width" => "48", "height" => "48")) }}
        </a>
    </div>
    <div style="clear: both;">
        <a class="defaultButton" style="width: 60px; float:left; margin: 5px;" href="/cart">Bekijken</a>
        <a class="defaultButton" style="width: 60px; float:left; margin: 5px;" href="">Afrekenen</a>
    </div>

</div>