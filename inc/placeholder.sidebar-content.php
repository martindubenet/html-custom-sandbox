
	<h3>SIDEBAR_H3</h3>
	<article id="doctypeList" class="module">
		<h3>Doctypes Sidebar Module</h3>
		<p><strong>Other doctypes available</strong> in this sandbox. They all share the same CSS architecture.</p>
		<nav>
			<ul class="list-group">
				<li class="list-group-item first"><h4><a href="type-html5-bootstrap4.php">type-html5 + Bootstrap v.4</a></h4></li>
				<li class="list-group-item"><h4><a href="type-html5-bootstrap3.php">type-html5 + Bootstrap v.3</a></h4></li>
				<li class="list-group-item text-inline"><h4><a href="type-html5.php">Type HTML5</a></h4></li>
				<li class="list-group-item"><h4><a href="type-xhtml-trans.html">Type XHTML Transitionnel</a></h4></li>
				<li class="list-group-item"><h4><a href="type-xhtml-strict.html">Type XHTML Strict</a></h4></li>
				<li class="list-group-item"><h4><a href="type-html4.html">Type HTML 4</a></h4></li>
			</ul>
		</nav>
	</article>
	<article id="phpVar" class="module">
		<h3>My PHP Variables</h3>
		<p><strong>Language</strong> related var declared in this file</p>
		<nav>
			<dl>
				<dt><code>$siteUi</code></dt><dd><?= $siteUi; ?></dd>
				<dt><code>$theTitle</code></dt><dd><?= $theTitle; ?></dd>
				<dt><code>$hdMeta_description</code></dt><dd><?= $hdMeta_description; ?></dd>
				<dt><code>$hdMeta_keywords</code></dt><dd><?= $hdMeta_keywords; ?></dd>
				<dt><code>$siteTitle</code></dt><dd><?= $siteTitle; ?></dd>
				<dt><code>$siteURL</code></dt><dd><?= $siteURL; ?></dd>
				<dt><code>$siteUi</code></dt><dd><?= $siteUi; ?></dd>
				<dt><code>$langTag</code></dt><dd><?= $langTag; ?></dd>
				<dt><code>$langPath</code></dt><dd><?= $langPath; ?></dd>
				<dt><code>$filePath</code></dt><dd><?= $filePath; ?></dd>
				<dt><code>$altLangTag</code></dt><dd><?= $altLangTag; ?></dd>
				<dt><code>$altLangLabel</code></dt><dd><?= $altLangLabel; ?></dd>
				<dt><code>$culture</code></dt><dd><?= $culture; ?></dd>
			</dl>
		</nav>
	</article>
	<article id="stylesheetList" class="module">
		<h3>Stylesheets Sidebar Module</h3>
		<p><strong>Show different style</strong></p>
		<nav>
			<ol>
				<li class="first"><a class="f-href" id="show-style-1" title="Activate style 1"><strong>CSS Style 1</strong></a><p>Grille graphique 2/3 + 1/3 avec <strong>collonne à droite</strong>.</p></li>
				<li><a class="f-void" id="show-style-2" title="Activate style 2"><strong>CSS Style 2</strong></a><p>Grille graphique 1/3 + 2/3 avec <strong>collonne à gauche</strong>.</p></li>
			</ol>
		</nav>
	</article>
	<article class="module">
		<h3>Other Sidebar Module</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<img src="<?= $siteUi; ?>img/_img100.png" alt="Image placeholder">
	</article>
	<article class="module">
		<h3>Last Sidebar Module</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare, massa vel interdum bibendum, nisl nulla sollicitudin est, sed imperdiet est ligula eu elit.</p>
	</article>
