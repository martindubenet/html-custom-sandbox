<?php
$demo6col = "<code>col</code> + <code>col-12</code> + <code>col-sm-6</code> + <code>col-md-4</code> + <code>col-lg-3</code> + <code>col-xl-2</code>";
?>
<a href="../cheatsheet/bootstrap4-breakpoints.pdf" target="breakpoints">Bootstrap 4 breakpoints cheatsheet (pdf)</a>

<div class="row demo">
	<div class="col">

		<section>
			<h5>Only one col</h5><code>col</code>
		</section>

	</div><!-- /.col -->
</div><!-- /.row -->
<div class="row demo">
	<div class="col">

		<section>
			<h5>Two col auto width</h5><code>col</code>
		</section>

	</div><!-- /.col -->
	<div class="col">

		<section>
			<h5>Two col auto width</h5><code>col</code>
		</section>

	</div><!-- /.col -->
</div><!-- /.row -->
<div class="row demo">
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>1st of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>2nd of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>3rd of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>4th of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>5th of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
	<div class="col col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">

		<section>
			<h5>6th of 6</h5><?= $demo6col ?>
		</section>

	</div><!-- /.col -->
</div><!-- /.row -->
