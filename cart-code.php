# Code to use with Wordpress Woocommerce
# The point is to automatically update the cart page totals when user modify quantity of an item. This is pretty simple if ajax is ok.

# 1 - Clone Woocommerce template cart.php into your theme directory /woocommerce/cart/cart.php. This will override default template.
# 2 - Open template cart.php from your theme to edit it 
# 3 - Insert snippets as explicated below (do not copay paste this file, just follow comments)

# LET'S GO!


# Just after code 

	<?php do_action( 'woocommerce_before_cart' ); ?>

# and before form opening // Open ID Div to target with jQuery 
<div id="ajaxreload">

#Then add zone to display alert zone while reload is running to keep user posted about what's happening, to use GIF, download it and then place it in images files in your theme -->
```php
<div class="loading"><img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" class="loader" /> <?php _e('Udpating your cart...'); ?></div>
```

# Let's now define which part of form is triggered by quantity modification, the function which is interesting is to trigger submit "update_cart" 
# We are going to add an ID to this submit button in way of targeting it with JS 
```php
<input type="submit" class="button" name="update_cart" id="calculation" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" />
```

# Just before code 
``` php
<?php do_action( 'woocommerce_after_cart_table' ); ?>
```
# / Close ID Div
</div>

# Then do not edit anything else and go to the end of the page to add script 
# IMPORTANT in my project I prefered to propose user to select quantity instead of traditional Woocomerce input, if you are using input, please simply replace "select.qty" by "input.qty" in JS Code below
<script>
jQuery(document).ready(function($) {
	$('.loading').hide(); // Is hiding your alert display by default
	$("#ajaxreload").on("change", "select.qty", function() { // Define when cart update is needed, here when user modify quantity for an item
		    $('#calculation').click(); // Do automatic action and reload zone inside #ajaxreload div
			$('.loading').show(); // Display alert and GIF loader while zone is reloading
	});
});
</script>

# And that's all... You may use CSS styling and GIF loader attached or tyle your own message. 
