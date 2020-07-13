<?php
	//phpinfo();
	$rootPath	= '';
	require_once ($rootPath .'inc/vars.php');
?><!doctype html>
<html lang="<?= $culture; ?>">
<head>
	<meta charset="UTF-8" />
	<title>html5.<?= $theTitle; ?> | <?= $siteTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $hdMeta_description; ?>" />
	<meta name="keywords" content="<?= $hdMeta_keywords ?>" />
	<meta name="author" content="MartinDube.net" />
	<meta name="robots" content="index,follow,noodp,noydir" />
	<!--[if lte IE 8]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/0-reset.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/1-base.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/2-forms.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/3-jquery.slick.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/3-jquery.visualize.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/4-modules.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/5-grid.css" />
	<link rel="stylesheet" media="all" href="<?= $siteUi; ?>css/fontfaces.css" />
	<link rel="stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/style-1.css" title="Default style" />
	<link rel="alternate stylesheet" media="screen" href="<?= $siteUi; ?>css/screen/style-2.css" />
	<!--[if lte IE 9]><link rel="stylesheet" media="all" href="<?= $siteUi; ?>css/if-ie9.css" /><![endif]-->
	 <link rel="stylesheet" media="print" type="text/css" href="<?= $siteUi; ?>css/print/0-reset-base.css" />
	 <link rel="stylesheet" media="print" type="text/css" href="<?= $siteUi; ?>css/print/1-modules-grid.css" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $siteUi; ?>img/logo/favicon.ico" />
	<link rel="icon" type="image/png" href="<?= $siteUi; ?>img/logo/favicon.png" />
	<style type="text/css">
		/* pour demo */ 
		#content, #sidebar { background-color: white; }
		select .today { font-weight:bold; background-color:yellow; }
	</style>
</head>
<body class="<?= $langTag; ?>">
	<div id="doc">
		<header id="header" class="main">
			<a id="logo" href="#" title="<?= $siteTitle; ?>"><img src="<?= $siteUi; ?>img/logo/<?= $siteTitle; ?>-small.png" alt="logo" /><span><strong><?= $siteTitle; ?></strong></span></a>
			<form id="searchForm">
				<fieldset>
					<div class="inPlaceholder">
						<input type="search" class="text" id="searchField" name="searchField" accesskey="f" tabindex="1" placeholder="<?= $p6_title; ?>">
						<button type="submit" class="submit" title="Search your query"><span>Go</span></button>
					</div>
				</fieldset>
			</form><!-- /#searchForm -->
			<nav id="mainMenu">
				<ul>
					<li class="first"><a href="#"><span><?= $p2_title; ?></span></a></li>
					<li><a href="#"><span><?= $p3_title; ?></span></a></li>
					<li><a href="#"><span><?= $p4_title; ?></span></a></li>
					<li><a href="#"><span><?= $p5_title; ?></span></a></li>
				</ul>
			</nav><!-- /#mainMenu -->
			<nav id="topMenu">
				<ul>
					<li class="first"><a href="type-html5.php"><span>Reset page</span></a></li>
					<li><a href="type-html5.php?lang=<?= $altLangTag; ?>"><span><?= $altLangLabel; ?></span></a></li>
				</ul>
			</nav><!-- /#topMenu -->
			<hr />
		</header><!-- /#header -->
		<main class="core">
			<div id="content">
				<article>
					<header>
						<a class="aboveTheTitle" href="#"><?= $theParentTitle; ?></a>
						<h1 class="theTitle"><a href="#"><?= $theTitle; ?></a></h1>
						<p class="subTitle">Sub-title lorem ipsum</p>
					</header>
					<hr />
					<h2>Level 02 Heading</h2> 
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p> 
					<h3>Level 03 Heading</h3> 
					
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p> 
					<h4>Level 04 Heading</h4> 
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p> 
					<h5>Level 05 Heading</h5> 
					
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p> 
					<h6>Level 06 Heading</h6> 
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p> 
					<blockquote> 
						<p>Paragraph inside Blockquote: Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Sed scelerisque sagittis lorem.</p>
						<p>Paragraph inside Blockquote: Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Sed scelerisque sagittis lorem.</p>
						<cite>the cite tag</cite>
					</blockquote> 
					
					<address>Address: Example address 224, Sweden</address> 
					<pre><strong>Preformated:</strong>Testing one row
						and another</pre>
				</article>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<section class="column x2col">
					<article class="first col">
						<h2>First of 2 columns layout</h2> 
						<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
					</article>
					<article class="col">
						<h2>Second of 2 columns layout</h2> 
						<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
					</article>
				</section>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<section class="column x3col">
					<article class="first col">
						<h2>First of 3 columns layout</h2> 
						<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
					</article>
					<article class="col">
						<h2>Second of 3 columns layout</h2> 
						<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
					</article>
					<article class="col">
						<h2>Third of 3 columns layout</h2> 
						<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
					</article>
				</section>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<article id="tagList">
					<h2>Tags</h2>
					<p>
						I am <a href="?abc123">the a tag</a> example<br /> 
						
						I am <abbr title="test">the abbr tag</abbr> example<br /> 
						
						<em style="color:red;">The &#60;acronym&#62; tag is obsolete in HTML5. It is replaced by the abbr tag</em><br /> 
						I am <b>the b tag</b> example<br /> 
						<em style="color:red;">The &#60;big&#62; tag is obsolete in HTML5</em><br /> 
						
						I am <cite>the cite tag</cite> example<br /> 
						
						I am <code>the code tag</code> example<br /> 
						I am <del>the del tag</del> example<br /> 
						I am <dfn>the dfn tag</dfn> example<br /> 
						
						I am <em>the em tag</em> example<br /> 
						
						<em style="color:red;">The &#60;font&#62; tag is obsolete in HTML5</em><br /> 
						I am <i>the i tag</i> example<br /> 
						I am <ins>the ins tag</ins> example<br /> 
						
						I am <kbd>the kbd tag</kbd> example<br /> 
						
						I am <q>the q tag <q>inside</q> a q tag</q> example<br /> 
						<em style="color:red;">The &#60;s&#62; tag is obsolete in HTML5</em><br /> 
						I am <samp>the samp tag</samp> example<br /> 
						
						I am <small>the small tag</small> example<br /> 
						I am <span>the span tag</span> example<br /> 
						<em style="color:red;">The &#60;strike&#62; tag is obsolete in HTML5</em><br /> 
						I am <strong>the strong tag</strong> example<br /> 
						
						I am <sub>the sub tag</sub> example<br /> 
						I am <sup>the sup tag</sup> example<br /> 
						<em style="color:red;">The &#60;tt&#62; tag is obsolete in HTML5</em><br /> 
						I am <var>the var tag</var> example<br /> 
						
						<em style="color:red;">The &#60;u&#62; tag is obsolete in HTML5</em>
					</p>
				</article>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<article id="listList">
					<h2>Lists</h2>
					<ul>
						<li>Unordered list 01</li>
						<li>Unordered list 02</li>
						<li>Unordered list 03
							<ul>
								<li>Unordered list inside list level 2</li>
								<li>Unordered list inside list level 2
									<ul>
										<li>Unordered list inside list level 3</li>
										<li>Unordered list inside list level 3</li>
									</ul> 
								</li>
							</ul>
						</li>
					</ul>
					<ol>
						<li>Ordered list 01</li>
						<li>Ordered list 02</li>
						<li>Ordered list 03
							<ol>
								<li>Ordered list inside list level 2</li>
								<li>Ordered list inside list level 2
									<ol>
										<li>Ordered list inside list level 3</li>
										<li>Ordered list inside list level 3</li>
									</ol>
								</li>
							</ol>
						</li>
					</ol>
					<ul>
						<li>Unordered list 01</li>
						<li>Unordered list 02
							<ol>
								<li>Unordered list inside list level 2</li>
								<li>Unordered list inside list level 2
									<ol>
										<li>Ordered list inside list level 3</li>
										<li>Ordered list inside list level 3</li>
									</ol>
								</li>
							</ol>
						</li>
					</ul>
					<dl>
						<dt>Description list A title-01</dt>
							<dd>Description list A description-01</dd>
						<dt>Description list B title-02</dt>
							<dd>Description list B description-02</dd>
							<dd>Description list B description-03</dd>
						<dt>Description list C title-03</dt>
							<dd>Description list C description-04</dd>
							<dd>Description list C description-05</dd>
					</dl>
				</article>
				<article id="tableList">
					<h2>Table</h2>
					<table role="grid">
						<caption>Table Caption</caption> 
						<thead>
							<tr>
								<td>Table thead td</td>
								<th scope="col">Table thead tH</th>
								<th scope="col">Table thead tH</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th scope="row">Table tfoot tH</th>
								<td colspan="2">Table tfoot td (colspan)</td>
							</tr>
						</tfoot>
						<tbody> 
							<tr>
								<th scope="row">Table tbody tH</th>
								<td>Table tbody td</td>
								<td>Table tbody td</td>
							</tr>
							<tr>
								<th scope="row">Table tbody tH</th>
								<th scope="col">Table tbody tH</th>
								<th scope="col">Table tbody tH</th>
							</tr>
							<tr>
								<th scope="row">Table tbody tH</th>
								<td>Table tbody td</td>
								<td>Table tbody td</td>
							</tr>
						</tbody>
					</table>
				</article>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<article id="alertMessage">
					<h2>Alert message <em>(not related to forms)</em></h2>
					<div class="alert" title="&lt;div class=&quot;alert&quot;&gt;">
						<span class="ico"></span>
						<h3>404 Error (alert message)</h3>
						<p>Sorry, this page does not seem to exist or is temporarily unavailable.</p>
					</div>
				</article>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<article id="formList">
					<h2>Form validation</h2>
					<form action="#">
						<p class="required">Fields marked with <abbr title="Asterisk character">(*)</abbr> are required.</p>

						<div class="validation errorValidation" title="&lt;div class=&quot;validation errorValidation&quot;&gt;">
							<span class="ico"></span>
							<h3>Error... (Negative action)</h3>
							<p>Please correct the following errors to complete the sending of your message.</p>
							<ul>
								<li>Please enter your <strong>last name</strong>.</li>
								<li>The indicated <strong>email</strong> is <strong>not valid</strong>.</li>
							</ul>
						</div>
						<div class="validation successValidation" title="&lt;div class=&quot;validation successValidation&quot;&gt;">
							<span class="ico"></span>
							<h3>Thank you! (Positive action)</h3>
							<p>We will communicate with you as soon as possible.</p>
						</div>
						<div class="validation alertValidation" title="&lt;div class=&quot;validation alertValidation&quot;&gt;">
							<span class="ico"></span>
							<h3>Attention! (Positive action + warning)</h3>
							<p>Your request was successful but <strong>it will expire</strong> in less than 5 minutes.</p>
						</div>
					<h2>Form markup</h2>
						<fieldset>
							<legend>Form legend (fields wrap within DIVs)</legend>
							<div>
								<label for="noValue"><abbr class="required">*</abbr>Label input (no value):</label> 
								<input type="text" id="noValue" value="" placeholder="Basic input" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f1"><abbr class="required">*</abbr>Label for type=text inputs:</label> 
								<input type="text" id="f1" placeholder="input text" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f2"><abbr class="required">*</abbr>Label for type=password inputs:</label> 
								<input type="password" id="f2" placeholder="input password" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f3a"><abbr class="required">*</abbr>Label for type=radio inputs:</label> 
									<label class="radio"><input type="radio" id="f3a" name="radioButtons">Label Radio1</label> 
									<label class="radio"><input type="radio" id="f3b" name="radioButtons">Label Radio2</label>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f4" class="checkbox"><abbr class="required">*</abbr>Label for type=checkbox input: <input type="checkbox" id="f4"></label>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f5" class="select"><abbr class="required">*</abbr>Label for select field:</label>
								<select id="f5" name="f5" required="required">
									<option value="" class="first">Select option (empty value)</option>
									<option value="01">Option 01</option>
									<option value="02">Option 02 lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porta tempus feugiat. Aenean sed purus non libero tempus lacinia eget vel nunc.</option>
									<option value="03">Option 03</option>
								</select>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f6" class="textarea"><abbr class="required">*</abbr>Label for textarea:</label>
								<textarea id="f6" cols="30" rows="5" placeholder="Textarea" required></textarea>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f7"><abbr class="required">*</abbr>Label for type=button inputs:</label> 
								<input type="button" id="f7" value="input button text" required>
								<aside class="invalid"></aside>
							</div>
						</fieldset>
						<fieldset>
							<legend>2nd Form legend: New HTML5 input types</legend>
							<div>
								<label for="f8"><abbr class="required">*</abbr>Label for type=color inputs:</label> 
								<input type="color" id="f8" placeholder="#faffaf" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f9"><abbr class="required">*</abbr>Label for type=date (YYYY-MM-DD) inputs:</label> 
								<input type="date" id="f9" placeholder="9999-12-31" title="YYYY-MM-DD" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f10"><abbr class="required">*</abbr>Label for type=datetime (YYYY-MM-DDThh:mm:ssZ) inputs:</label> 
								<input type="datetime" id="f10" value="9999-12-31T23:59:00Z" placeholder="YYYY-MM-DDThh:mm:ssZ" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f11"><abbr class="required">*</abbr>Label for type=datetime-local (YYYY-MM-DDThh:mm:ss) inputs:</label> 
								<input type="datetime-local" id="f11" value="9999-12-31T23:59:00" placeholder="YYYY-MM-DDThh:mm:ss" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f12"><abbr class="required">*</abbr>Label for type=email inputs:</label> 
								<input type="email" id="f12" placeholder="email text" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f14"><abbr class="required">*</abbr>Label for type=month inputs:</label> 
								<input type="month" id="f14" placeholder="YYYY-MM">
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f15"><abbr class="required">*</abbr>Label for type=number inputs:</label> 
								<input type="number" id="f15" placeholder="999" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f16"><abbr class="required">*</abbr>Label for type=tel inputs:</label> 
								<input type="tel" id="f16" placeholder="tel text">
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f17"><abbr class="required">*</abbr>Label for type=time inputs:</label> 
								<input type="time" id="f17" placeholder="23:59:00" required></div>
								<aside class="invalid"></aside>
							<div>
								<label for="f18"><abbr class="required">*</abbr>Label for type=url inputs:</label> 
								<input type="url" id="f18" placeholder="http://example-url.com/example-page" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f19"><abbr class="required">*</abbr>Label for type=week inputs:</label> 
								<input type="week" id="f19" placeholder="9999-W01" required>
								<aside class="invalid"></aside>
							</div>
							<div>
								<label for="f20">Label for type=range inputs:</label> 
								<input type="range" id="f20">
							</div>
						</fieldset>
						<fieldset class="action">
							<legend>3rd Form legend CLASS=ACTION</legend>
							<input type="button" class="button" value="input type=button + class button">
							<input type="button" class="button" value="2nd input type=button + class button">
							<br />
							<button type="button" title="button">button (HTML tag)</button>
							<button type="button" title="button">2nd button (HTML tag)</button>
							<br />
							<button type="button" title="button + span"><span>span within button tag</span></button>
							<button type="button" title="button + span"><span>2nd span within button tag</span></button>
							<br />
							<a class="button" title="a.button + span" href="#"><span>span within A class button</span></a><a class="button" title="a.button + span" href="#"><span>2nd span within A class button</span></a>
							<hr />
							<button type="submit" class="submit"><span>Submit form button</span></button>
							<button type="reset" class="reset"><span>Reset fileds button</span></button>
						</fieldset>
					</form> 
					<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
				<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
				<div class="hr"><hr /><a href="#content" title="Back to top"><span>&uarr;</span></a></div>
				<p>Sed scelerisque sagittis lorem. Phasellus sodales. Nulla urna justo, vehicula in, suscipit nec, molestie sed, tellus. Quisque justo. Nam libero leo, elementum in, dapibus a, suscipit vitae, purus. Duis arcu. Integer dignissim fermentum enim. Morbi convallis felis vel nibh. Etiam viverra augue non enim.</p>
				</article>
			</div><!-- /#content -->
			<div id="sidebar">
				<aside>

					<?php
					include 'inc/placeholder.sidebar-content.php';
					?>

				</aside>
			</div><!-- /#sidebar -->
		</main><!-- /.core -->
		<footer id="footer" class="main">
			<hr />
			<p>Footer text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare, massa vel interdum bibendum, nisl nulla sollicitudin est, sed imperdiet est ligula eu elit.</p>
			<nav id="footMenu">
				<ul>
					<li class="first"><a href="#p1"><span><?= $p1_title; ?></span></a></li>
					<li><a href="#p2"><span><?= $p2_title; ?></span></a></li>
					<li><a href="#p3"><span><?= $p3_title; ?></span></a></li>
					<li><a href="#p4"><span><?= $p4_title; ?></span></a></li>
					<li><a href="#p5"><span><?= $p5_title; ?></span></a></li>
					<li><a href="type-html5.php?lang=<?= $altLangTag; ?>"><span><?= $altLangLabel; ?></span></a></li>
				</ul>
			</nav><!-- /#footMenu -->
			<nav id="copyright">
				<ul>
					<li class="first"><abbr title="Tous droits réservés">&copy;</abbr> <?= $siteTitle; ?>, <?php echo date('Y'); ?></li>
					<li><a href="http://www.1idweb.com" class="external" title="Ce site web est une conception et réalisation de 1idweb (www.1idweb.com)">Crédits</a></li>
				</ul>
			</nav><!-- /#copyright -->
		</footer><!-- /#footer -->
		<div class="clear"></div>
	</div><!-- /#doc -->

<!-- SCRIPT -->
<script src="<?= $siteUi; ?>script/jquery.switchStylesheet.js" charset="utf-8" ></script>
<script src="<?= $siteUi; ?>script/ui.js" charset="utf-8" ></script>
<script>
	// jquery.switchStylesheet.js
	$("#show-style-1").click(function() {
		$("link[title='Default style']").attr("href", "<?= $siteUi; ?>css/screen/style-1.css");
		$("link[title='Alt style']").attr("href", "<?= $siteUi; ?>css/screen/style-2.css");
	});
	$("#show-style-2").click(function() {
		$("link[title='Default style']").attr("href", "<?= $siteUi; ?>css/screen/style-2.css");
		$("link[title='Alt style']").attr("href", "<?= $siteUi; ?>css/screen/style-1.css");
	});
</script>
<!--[if lte IE 7]> <script src="<?= $siteUi; ?>script/ui.ieCssFix.js" charset="utf-8"></script> <![endif]-->
<!--[if lte IE 8]> <script src="<?= $siteUi; ?>script/html5.excanvas.compiled.js"></script> <![endif]-->
</body>
</html>
