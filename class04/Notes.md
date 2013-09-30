Class Notes
=============

#### Week 3 | 9/18/13

What is the buzz behind responsive design?
--------------
As a class we went through a bunch of buzz words surrounding the web and defined what they were. The list:

**Fixed Layout** - Building a web site entirely in pixels. Very static, very brittle.

**Liquid Layout** - Building a site entirely using percentages. Much more fluid, but might not look great in every context.

**Media Query** - A new CSS technique that, combined with liquid layouts can give a little bit of control over the way a site looks on mobile or tablet or beyond.

**Responsive Design** - Building a site so it automatically corrects itself for any browser context - mobile, tablet, desktop, portrait or landscape.

**Adaptive Design** - The "fixed layout" equivalent of responsive design - building a site, then rebuilding it to adapt to a different browser.

**Mobile First**- A way of thinking about information. If you think about designing for the smallest possible device context then you'll uncover what information is really important to users.


How CSS works
--------------
We went through the guts of how CSS gets processed.

	h1 {
		/* this is worth 1 point and finds any h1 on the page */
		/* <h1>Hello</h1> */
	}

	h1 span {
		/* this is worth 2 points and finds any spans inside of h1 tags */
		/* <h1><span>Hello</span></h1> */
	}

	.a-class {
		/* this is worth 100 points and finds anything on the page with a class of "a-class" */
		/* <h1 class="a-class">Hello</h1> */
		/* <div class="a-class">Also this</div> */
	}

	#an-id {
		/* this is worth 1000 points and finds anything on the page with an ID of "an-id" */
		/* <h1 id="an-id">Hello</h1> */
	}

	h1.a-class {
		/* 101 points, only finds h1 tags with a class of a-class. */
		/* <h1 class="a-class">Hello</h1> */
		/* <div class="a-class">But not this.</div> */
	}

	h1 .a-class {
		/* notice the space. worth 101 points, finds anything with a class of "a-class" inside of an h1 */
		/* <h1><span class="a-class">Hello</span></h1> */

	}


Note carefully the differences between being very general and very specific, like in **h1.a-class** vs. **.a-class** by itself. 

As a general rule of thumb I told the class to try to avoid a score higher than **1103**, meaning an ID, a class and 3 selectors. I made that up, don't treat that as gospel.

SCSS :: A CSS preprocessor
--------------
Other options include LESS and SASS.

CSS Preprocessors take something that looks sort of like CSS and outputs beautiful CSS. There are lots of advantages to this:

###Nesting CSS

	h1 {
		.a-class {
			background:lime;
		}
	}

Outputs:

	h1 .a-class { background:lime; }

Keep in mind the Inception rule here: Never go more than four levels deep.

	h1 {
		.a-class {
			p {
				ul {
					li {
						// good gracious, where are we?!
					}
				}
			}
		}
	}

The same thing, but a little easier on the eyes:

	h1 .a-class {
		p {
			ul {
				li {
					// okay. whew.
				}
			}
		}
	}

####Variables

	$color_megaman_blue: #0000fc;

	body {
		background:$color_megaman_blue;
	}


More examples are in the "scss" folder in the repository.

Assignment
--------------
- Build a responsive site about your favorite animal!