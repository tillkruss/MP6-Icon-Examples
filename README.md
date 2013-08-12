# MP6 Icon Examples

The code examples in this repository demonstrate how to set scalable/colorable admin menu icons for MP6, the experimental interface for WordPress.


## Method A: Dashicons

The easiest way to set an icon for plugin/theme menu items, is picking a [Dashicon](http://melchoyce.github.io/dashicons/) and setting it the way `mp6-dashicon.php` illustrates.


## Method B: Custom Icon Font

Using another icon font is easy, too. The code in `mp6-font-icon.php` demonstrates how to do it.


## Method C: SVG as Background Image

Adding a custom SVG as CSS background image is a little trickier. Because [SVG browser support](http://caniuse.com/svg-css) is limited, this method requires a Dashicon as fallback. The example code in `mp6-svg-icon.php` shows how to do that and contains a few more details about this method.