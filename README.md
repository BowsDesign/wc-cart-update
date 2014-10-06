wc-cart-update
==============

Woocommerce - How to trigger automatic totals update in cart page when quantity is modified by user 

This is pretty simple but I hope this will help if needed.

// Code to use with Wordpress Woocommerce - Has been tested with WC 2.1.12

// The point is to automatically update the cart page totals when user modify quantity of an item. This is pretty simple if ajax is ok.

1 - Clone Woocommerce template cart.php into your theme directory /woocommerce/cart/cart.php. This will override default template.

2 - Open cloned template cart.php from your theme to edit it 

3 - Then follow the guide into file named cart-code.php by inserting snippets as indicated inside with comments.
    DO NOT REPLACE THE WHOLE CODE IN CART.PHP
    Juste add snippets where they go as described in php file annotations.

ajax-loader.gif goes in your images directory of your theme
If you want to use it, feel free to use CSS of cart-code.css to style the loading message or to design it by yourself.

