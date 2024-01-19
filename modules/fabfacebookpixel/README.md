# prestashop-fabfacebookpixel

The module is compliant with Facebook Pixel use.

It sends the following messages to the Facebook Platform:

-	ViewPage

Stardard Actions:

-	ViewContent: on product page.
	Sent parameters:
	
	content_type: product
	content_ids: Product Reference
	value: Product Price
	content_name: Product Name
	currency: Cart Currency
	content_category: Product Default Category
	
-	AddToCart: when a product is added to cart.
	Sent parameters:
	
	content_ids: Product Reference
	content_type: product
	value: Product Price
	currency: Cart Currency
	
-	InitiateCheckout: when checkout process starts
	
-	Purchase: on order confirmation.
	Sent parameters:
	
	value: Cart Amount
	content_ids: Product References
	content_type: product
	currency: Cart Currency
	
-	CompleteRegistration: when user complete registration
	


## Changelog


[1.0.0]	First Commit
[1.1.0] Added Facebook Export Capability, Bug Fixing
[1.1.1] Bug fixing: removed lambda syntax to ease retrocompatibility
[1.2.0] Added support for multistore, compatibility with ie11 improved