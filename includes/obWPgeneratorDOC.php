<?php
defined('ABSPATH') || exit;
function obWPgenerator_doc(){
?>
<style>
#ob-example-gallery .gallery {
    border: 1px solid #ccc;
}

#ob-example-gallery .gallery:hover {
    border: 1px solid #777;
}

#ob-example-gallery .gallery img {
    width: 100%;
    height: auto;
}

#ob-example-gallery .desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

#ob-example-gallery .responsive {
    padding: 4px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    #ob-example-gallery .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    #ob-example-gallery .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style><div class="wrap">
<div clas="main-content-area">
<div class="ob-wp-gen-sidenav">
<div id="OBaccordian">
	<ul>
		<li class="">
			<h3><span class="icon">+</span>Shortcodes</h3>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#api">Shortcode API</a></li>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#defination">Defination</a></li>
				<li><a href="#example">Example</a></li>
				<li><a href="#exampleone">&nbsp;&nbsp;&nbsp;Example One</a></li>
				<li><a href="#exampletwo">&nbsp;&nbsp;&nbsp;Example Two</a></li>
				<li><a href="#examplethree">&nbsp;&nbsp;&nbsp;Example Three</a></li>
				<li><a href="#examplefour">&nbsp;&nbsp;&nbsp;Example Four</a></li>
				<li><a href="#examplefive">&nbsp;&nbsp;&nbsp;Example Five</a></li>
				<li><a href="#examplesix">&nbsp;&nbsp;&nbsp;Example Six</a></li>
			</ul>
		</li>
	</ul>
</div>

</div>

<div class="ob-doc-main-content-area">

<div id="intro">
  <h2>What is a shortcode?</h2>
  <p>A <b>shortcode</b> is a WordPress-specific code that lets you do nifty things with very little effort. Shortcodes can embed files or create objects that would normally require lots of complicated, ugly code in just one line. <b>Shortcode = shortcut.</b></p>

  <div id="api">
  <h2>The Shortcode API</h2>

	<p>The <b>Shortcode API</b> is a simple set of functions for creating WordPress shortcodes for use in posts and pages. For instance, the following shortcode (in the body of a post or page) would add a photo gallery of images attached to that post or page: [gallery]</p>

	<p>The API enables plugin developers to create special kinds of content (e.g. forms, content generators) that users can attach to certain pages by adding the corresponding shortcode into the page text.</p>

	<p>The Shortcode API makes it easy to create shortcodes that support attributes like this:</p>

	<p style="border: 1px solid #000; padding: 5px;">[gallery id="123" size="medium"]</p>

	<p>The API handles all the tricky parsing, eliminating the need for writing a custom regular expression for each shortcode. Helper functions are included for setting and fetching default attributes. The API supports both self-closing and enclosing shortcodes.</p>
  </div>

  <div id="overview">
  <h2>Overview</h2>

	<p>Shortcodes are written by providing a handler function. Shortcode handlers are broadly similar to WordPress filters: they accept parameters (attributes) and return a result (the shortcode output).</p>

	<p>Shortcode names should be all lowercase and use all letters, but numbers and underscores should work fine too. Be wary of using hyphens (dashes), you'll be better off not using them.</p>

	<p>The add_shortcode function is used to register a shortcode handler. It takes two parameters: the shortcode name (the string used in a post body), and the callback function name.</p>

	<p>Three parameters are passed to the shortcode callback function. You can choose to use any number of them including none of them.</p>

	    <p><b>$atts</b> - an associative array of attributes, or an empty string if no attributes are given</p>
	    <p><b>$content</b> - the enclosed content (if the shortcode is used in its enclosing form)</p>
	    <p><b>$tag</b> - the shortcode tag, useful for shared callback functions</p>

	<p>The API call to register the shortcode handler would look something like this:</p>

	<p style="border: 1px solid #000; padding: 5px;">add_shortcode( 'myshortcode', 'my_shortcode_handler' );</p>

  </div>

  <div id="defination">

  <h2>Defination</h2>

  <p><b>Tag Name</b> - Shortcode tag in the content. e.g. [tag]</p>

  <p><b>Function Name</b> - The function used in the code.</p>

  <p><b>Shortcode Type</b> - Self-closing shortcode: [tag] Enclosing shortcode: [tag]content[/tag]</p>

  <p><b>Attributes</b> - Enable attributes such as [tag foo="123" bar="456"].</p>

  <p><b>Add Attributes Filter</b> - Use "shortcode_atts_{$shortcode}" filter, to allow shortcode attributes filtering.</p>

  <p><b>Custom Filter Name</b> - Set custom filter name.</p>

  <p><b>Attribute Name</b> - Attribute name. Lowercase.</p>

  <p><b>Attribute Name</b> - Default value.</p>

  <p><b>Code</b> - Custom code to generate the output. Should only "return" the text, never produce the output directly.</p>

  </div>

  <div id="example">
  <h2>Example</h2>
  <p>If you are still learning how to use this tool, check out the following examples:</p>
  <h2>Instruction :</h2>
	<ul>
	<li>1. Fill the user-friendly form. Click on Update Shortcode Button...</li>
	<li>2. Copy the generated code and paste in your theme's functions.php file...</li>
	<li>3. Write the shortcode in your Post/Page in back-end...</li>
	<li>4. See the magic in your fornt-end...</li>
	<li>5. Have Fun. WordPress for everyone!</li>
	</ul>
  </div>


  <div id="exampleone">
  <h2 style="border: 1px solid #000; padding: 5px;">[video_embed_shortcode src="" width="" height=""]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/attributes.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/attributes.png', dirname(__FILE__) ); ?>" alt="Attributes" width="300" height="200">
    </a>
    <div class="desc">Attributes</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/video-embed-shortcode/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/video-embed-shortcode/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>
</div>

  <div id="exampletwo">
  <h2 style="border: 1px solid #000; padding: 5px;">[image_shortcode width="300" height="300"]https://...[/image_shortcode]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
<div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/attributes.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/attributes.png', dirname(__FILE__) ); ?>" alt="Attributes" width="300" height="200">
    </a>
    <div class="desc">Attributes</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>
<div class="clearfix"></div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/image-shortcode/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/image-shortcode/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

  </div>

<div id="examplethree">
  <h2 style="border: 1px solid #000; padding: 5px;">[bold]Hello World[/bold]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
<div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/bold/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/bold/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/bold/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/bold/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/bold/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/bold/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/bold/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/bold/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
<div class="clearfix"></div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/bold/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/bold/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

  </div>

  <div id="examplefour">
  <h2 style="border: 1px solid #000; padding: 5px;">[link-to-post-by-id id=""]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
<div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/attributes.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/attributes.png', dirname(__FILE__) ); ?>" alt="Attributes" width="300" height="200">
    </a>
    <div class="desc">Attributes</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>
<div class="clearfix"></div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/link-to-post-by-id/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/link-to-post-by-id/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

  </div>

    <div id="examplefive">
  <h2 style="border: 1px solid #000; padding: 5px;">[recent-posts-shortcode]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
<div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/attributes.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/attributes.png', dirname(__FILE__) ); ?>" alt="Attributes" width="300" height="200">
    </a>
    <div class="desc">Attributes</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>
<div class="clearfix"></div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/recent-posts-shortcode/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

  </div>

      <div id="examplesix">
  <h2 style="border: 1px solid #000; padding: 5px;">[cloak-shortcode email="me@email.com"]</h2>
  <div id="ob-example-gallery">
  <div class="responsive">
<div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/shortcode.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/shortcode.png', dirname(__FILE__) ); ?>" alt="Shortcode" width="300" height="200">
    </a>
    <div class="desc">Shortcode</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/attributes.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/attributes.png', dirname(__FILE__) ); ?>" alt="Attributes" width="300" height="200">
    </a>
    <div class="desc">Attributes</div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/code.png', dirname(__FILE__) ); ?>" alt="Code" width="300" height="200">
    </a>
    <div class="desc">Code</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/gen-code.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/gen-code.png', dirname(__FILE__) ); ?>" alt="Gen-Code" width="300" height="200">
    </a>
    <div class="desc">Generated Shortcode</div>
  </div>
</div>
<div class="clearfix"></div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/back-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/back-end.png', dirname(__FILE__) ); ?>" alt="Back-end" width="300" height="200">
    </a>
    <div class="desc">Back-End</div>
  </div>
</div>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo plugins_url( 'assets/images/cloak-shortcode/front-end.png', dirname(__FILE__) ); ?>">
      <img src="<?php echo plugins_url( 'assets/images/cloak-shortcode/front-end.png', dirname(__FILE__) ); ?>" alt="Front-end" width="300" height="200">
    </a>
    <div class="desc">Output</div>
  </div>
</div>
</div>
<div class="clearfix"></div>

  </div>

</div>

</div>
</div>
</div>
<?php
}