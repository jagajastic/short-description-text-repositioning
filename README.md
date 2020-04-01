# Short Description Text Plugin

This plugin is made to reposition the short description text in a single product page below the thumbnail

## How it Works

This plugin work with a simple CSS styling that power the position effectively.

```cs
.woocommerce-product-gallery{
	grid-area: topL;
}
.summary{
	grid-area: topR;
}
.woocommerce-tabs{
	grid-area:	bottomTop;
}
.woocommerce-product-details__short-description{
	grid-area: bottomBottom;
}

.product {
	display: grid;
	grid-template-columns: 50% 50% ;
  grid-template-rows: auto;
  grid-template-areas:
		"topL topR"
		"bottomBottom bottomBottom"
		"bottomTop bottomTop";
}

/* on small screen 768 */
@media screen and (max-width: 768px) {
	.product {
	display: grid;
	grid-template-columns: 100%;
  grid-template-rows: auto;
  grid-template-areas:
		"topL"
		"topR"
		"bottomBottom"
		"bottomTop";
}
}


```

As you can see the 'woocommerce-product-gallery', 'summary' which is the product summary section that contains price, add to cart button etc. 'woocommerce-tabs', and the 'woocommerce-product-details\_\_short-description' css classes.

The classes is used to target the DIVs that are reposible for the thumbnail, product summary and the tabs that shows below thumbnail section. but if you have any other section you can add it to the CSS if and only if you understand CSS grid, you can learn it here --> [CSS GRID](https://css-tricks.com/snippets/css/complete-guide-grid/)

## Where to add the CSS

You add the above CSS in the additional CSS section of your Wordpress site before installing the plugin.

### How to get to the additional css in Wordpress

```
1. Got to your Dashboard in your wordpress site
2. Look for Appearance at the left side menu, click it or hover on it
3. You will see customize, click it
4. it will take you to a new window for customization
5. At the left hand side of the window, you will see menu items,
6. click on the last item in the list (Additional css)
7. Copy and paste the above CSS code into the section. then publish it.
```

Note: if you notice some funnyy width to the div pr section in the single product page. just target the div and give it 100% !important.

## What else do I need to do

Now Installl the plugin.



Feel free to contribut to this plugin if you feel the plugin needs more functionality.

Note: This plugin is still undergoing improvement but it works effectively