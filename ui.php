<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="mb-3">
	<h1 class="h3 d-inline align-middle">Buttons</h1>
	<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.php">
		Get more button examples
	</a>
</div>
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Basic Buttons</h5>
				<h6 class="card-subtitle text-muted">Default Bootstrap buttons style.</h6>
			</div>
			<div class="card-body text-center">
				<div class="mb-3">
					<button class="btn btn-primary">Primary</button>
					<button class="btn btn-secondary">Secondary</button>
					<button class="btn btn-success">Success</button>
					<button class="btn btn-danger">Danger</button>
					<button class="btn btn-warning">Warning</button>
					<button class="btn btn-info">Info</button>
				</div>
				<div>
					<button class="btn btn-primary" disabled>Primary</button>
					<button class="btn btn-secondary" disabled>Secondary</button>
					<button class="btn btn-success" disabled>Success</button>
					<button class="btn btn-danger" disabled>Danger</button>
					<button class="btn btn-warning" disabled>Warning</button>
					<button class="btn btn-info" disabled>Info</button>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Button Sizes</h5>
				<h6 class="card-subtitle text-muted">Fancy larger or smaller buttons.</h6>
			</div>
			<div class="card-body text-center">
				<div class="mb-3">
					<button class="btn btn-primary btn-sm">Small</button>
					<button class="btn btn-primary">Medium</button>
					<button class="btn btn-primary btn-lg">Large</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Button Group</h5>
				<h6 class="card-subtitle text-muted">Button group components.</h6>
			</div>
			<div class="card-body">
				<h6 class="card-subtitle mb-2 text-muted">Horizontal button group</h6>
				<div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
					<button type="button" class="btn btn-secondary">Left</button>
					<button type="button" class="btn btn-secondary">Middle</button>
					<button type="button" class="btn btn-secondary">Right</button>
				</div>
				<br>
				<div class="btn-group mb-3" role="group" aria-label="Default button group">
					<button type="button" class="btn btn-secondary">Left</button>
					<button type="button" class="btn btn-secondary">Middle</button>
					<button type="button" class="btn btn-secondary">Right</button>
				</div>
				<br>
				<div class="btn-group btn-group-sm mb-4" role="group" aria-label="Small button group">
					<button type="button" class="btn btn-secondary">Left</button>
					<button type="button" class="btn btn-secondary">Middle</button>
					<button type="button" class="btn btn-secondary">Right</button>
				</div>

				<h6 class="card-subtitle mb-2 text-muted">Button toolbar</h6>
				<div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">
					<div class="btn-group me-2" role="group" aria-label="First group">
						<button type="button" class="btn btn-secondary">1</button>
						<button type="button" class="btn btn-secondary">2</button>
						<button type="button" class="btn btn-secondary">3</button>
						<button type="button" class="btn btn-secondary">4</button>
					</div>
					<div class="btn-group me-2" role="group" aria-label="Second group">
						<button type="button" class="btn btn-secondary">5</button>
						<button type="button" class="btn btn-secondary">6</button>
						<button type="button" class="btn btn-secondary">7</button>
					</div>
					<div class="btn-group" role="group" aria-label="Third group">
						<button type="button" class="btn btn-secondary">8</button>
					</div>
				</div>

				<h6 class="card-subtitle mb-2 text-muted">Vertical button group</h6>
				<div class="btn-toolbar">
					<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
						<button type="button" class="btn btn-primary">Button</button>
						<button type="button" class="btn btn-primary">Button</button>
						<button type="button" class="btn btn-primary">Button</button>
					</div>
					<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
						<button type="button" class="btn btn-success">Button</button>
						<button type="button" class="btn btn-success">Button</button>
						<button type="button" class="btn btn-success">Button</button>
					</div>
					<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
						<button type="button" class="btn btn-warning">Button</button>
						<button type="button" class="btn btn-warning">Button</button>
						<button type="button" class="btn btn-warning">Button</button>
					</div>
					<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
						<button type="button" class="btn btn-danger">Button</button>
						<button type="button" class="btn btn-danger">Button</button>
						<button type="button" class="btn btn-danger">Button</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mb-3">
	<h1 class="h3 d-inline align-middle">Typography</h1>
	<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.php">
		Get more typography examples
	</a>
</div>
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Headings</h5>
				<h6 class="card-subtitle text-muted">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</h6>
			</div>
			<div class="card-body">
				<h1>This is a heading h1</h1>
				<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
					vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero.</p>
				<h2>This is a heading h2</h2>
				<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
					vel, luctus pulvinar, hendrerit id, lorem.</p>
				<h3>This is a heading h3</h3>
				<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, vel.</p>
				<h4>This is a heading h4</h4>
				<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, vel.</p>
				<h5>This is a heading h5</h5>
				<p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
				<h6>This is a heading h6</h6>
				<p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Coloured text</h5>
				<h6 class="card-subtitle text-muted">Contextual text classes.</h6>
			</div>
			<div class="card-body">
				<p class="text-primary">This line of text contains the text-primary class.</p>
				<p class="text-secondary">This line of text contains the text-secondary class.</p>
				<p class="text-success">This line of text contains the text-success class.</p>
				<p class="text-danger">This line of text contains the text-danger class.</p>
				<p class="text-warning">This line of text contains the text-warning class.</p>
				<p class="text-info">This line of text contains the text-info class.</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Inline text</h5>
				<h6 class="card-subtitle text-muted">Styling for common inline HTML5 elements.</h6>
			</div>
			<div class="card-body">
				<p>You can use the mark-tag to <mark>highlight</mark> text.</p>
				<p><del>This line of text can be treated as deleted text.</del></p>
				<p><ins>This line of text can be treated as an addition to the document.</ins></p>
				<p><strong>Bold text using the strong-tag</strong></p>
				<p><em>Italicized text using the em-tag</em></p>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Blockquotes</h5>
				<h6 class="card-subtitle text-muted">For quoting blocks of content from another source within your document.</h6>
			</div>
			<div class="card-body">
				<blockquote>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</p>
					<footer>
						Someone famous in <cite title="Source Title">Source Title</cite>
					</footer>
				</blockquote>
				<p class="text-muted m-b-15 m-t-20">
					Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.
				</p>
				<blockquote class="blockquote-reverse m-b-0">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</p>
					<footer>
						Someone famous in <cite title="Source Title">Source Title</cite>
					</footer>
				</blockquote>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title">List unordered</h5>
				<h6 class="card-subtitle text-muted">The unordered list items will are marked with bullets.</h6>
			</div>
			<div class="card-body">
				<ul>
					<li>
						Lorem ipsum dolor sit amet
					</li>
					<li>
						Consectetur adipiscing elit
					</li>
					<li>
						Nulla volutpat aliquam velit
					</li>
					<li>
						Phasellus iaculis neque
					</li>
					<li>
						Eget porttitor lorem
					</li>
				</ul>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title">List ordered</h5>
				<h6 class="card-subtitle text-muted">The ordered list items will are marked with numbers.</h6>
			</div>
			<div class="card-body">
				<ol>
					<li>
						Lorem ipsum dolor sit amet
					</li>
					<li>
						Consectetur adipiscing elit
					</li>
					<li>
						Nulla volutpat aliquam velit
					</li>
					<li>
						Phasellus iaculis neque
					</li>
					<li>
						Eget porttitor lorem
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="mb-3">
	<h1 class="h3 d-inline align-middle">Forms</h1>
	<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.php">
		Get more form examples
	</a>
</div>
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Input</h5>
			</div>
			<div class="card-body">
				<input type="text" class="form-control" placeholder="Input">
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Textarea</h5>
			</div>
			<div class="card-body">
				<textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Checkboxes</h5>
			</div>
			<div class="card-body">
				<div>
					<label class="form-check">
						<input class="form-check-input" type="checkbox" value="">
						<span class="form-check-label">
							Option one is this and that&mdash;be sure to include why it's great
						</span>
					</label>
					<label class="form-check">
						<input class="form-check-input" type="checkbox" value="" disabled>
						<span class="form-check-label">
							Option two is disabled
						</span>
					</label>
				</div>
				<div>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" value="option1">
						<span class="form-check-label">
							1
						</span>
					</label>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" value="option2">
						<span class="form-check-label">
							2
						</span>
					</label>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" value="option3" disabled>
						<span class="form-check-label">
							3
						</span>
					</label>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Read only</h5>
			</div>
			<div class="card-body">
				<input class="form-control" type="text" placeholder="Readonly input" readonly>
			</div>
		</div>
	</div>

	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Radios</h5>
			</div>
			<div class="card-body">
				<div>
					<label class="form-check">
						<input class="form-check-input" type="radio" value="option1" name="radios-example" checked>
						<span class="form-check-label">
							Option one is this and that&mdash;be sure to include why it's great
						</span>
					</label>
					<label class="form-check">
						<input class="form-check-input" type="radio" value="option2" name="radios-example">
						<span class="form-check-label">
							Option two can be something else and selecting it will deselect option one
						</span>
					</label>
					<label class="form-check">
						<input class="form-check-input" type="radio" value="option3" name="radios-example" disabled>
						<span class="form-check-label">
							Option three is disabled
						</span>
					</label>
				</div>
				<div>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inline-radios-example" value="option1">
						<span class="form-check-label">
							1
						</span>
					</label>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inline-radios-example" value="option2">
						<span class="form-check-label">
							2
						</span>
					</label>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inline-radios-example" value="option3" disabled>
						<span class="form-check-label">
							3
						</span>
					</label>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Selects</h5>
			</div>
			<div class="card-body">
				<select class="form-select mb-3">
					<option selected>Open this select menu</option>
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
				</select>

				<select multiple class="form-control">
					<option>One</option>
					<option>Two</option>
					<option>Three</option>
					<option>Four</option>
				</select>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Disabled</h5>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<label class="form-label">Disabled input</label>
					<input type="text" class="form-control" placeholder="Disabled input" disabled>
				</div>
				<div class="mb-3">
					<label class="form-label">Disabled select menu</label>
					<select class="form-control" disabled>
						<option>Disabled select</option>
					</select>
				</div>
				<label class="form-check">
					<input class="form-check-input" type="checkbox" value="" disabled>
					<span class="form-check-label">
						Can't check this
					</span>
				</label>
			</div>
		</div>
	</div>
</div>
<div class="mb-3">
	<h1 class="h3 d-inline align-middle">Feather</h1>
	<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.php">
		Get more icons
	</a>
</div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Feather Icons</h3>
		<h6 class="card-subtitle text-muted">Simply beautiful open source icons</h6>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="activity"></i> <span class="align-middle">activity</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="airplay"></i> <span class="align-middle">airplay</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="alert-circle"></i> <span class="align-middle">alert-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="alert-octagon"></i> <span class="align-middle">alert-octagon</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="alert-triangle"></i> <span class="align-middle">alert-triangle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="align-center"></i> <span class="align-middle">align-center</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="align-justify"></i> <span class="align-middle">align-justify</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="align-left"></i> <span class="align-middle">align-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="align-right"></i> <span class="align-middle">align-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="anchor"></i> <span class="align-middle">anchor</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="aperture"></i> <span class="align-middle">aperture</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-down"></i> <span class="align-middle">arrow-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-down-circle"></i> <span class="align-middle">arrow-down-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-down-left"></i> <span class="align-middle">arrow-down-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-down-right"></i> <span class="align-middle">arrow-down-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-left"></i> <span class="align-middle">arrow-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-left-circle"></i> <span class="align-middle">arrow-left-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-right"></i> <span class="align-middle">arrow-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-right-circle"></i> <span class="align-middle">arrow-right-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-up"></i> <span class="align-middle">arrow-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-up-circle"></i> <span class="align-middle">arrow-up-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-up-left"></i> <span class="align-middle">arrow-up-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="arrow-up-right"></i> <span class="align-middle">arrow-up-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="at-sign"></i> <span class="align-middle">at-sign</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="award"></i> <span class="align-middle">award</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bar-chart"></i> <span class="align-middle">bar-chart</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bar-chart-2"></i> <span class="align-middle">bar-chart-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="battery"></i> <span class="align-middle">battery</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="battery-charging"></i> <span class="align-middle">battery-charging</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bell"></i> <span class="align-middle">bell</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bell-off"></i> <span class="align-middle">bell-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bluetooth"></i> <span class="align-middle">bluetooth</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bold"></i> <span class="align-middle">bold</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="book"></i> <span class="align-middle">book</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="book-open"></i> <span class="align-middle">book-open</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="bookmark"></i> <span class="align-middle">bookmark</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="box"></i> <span class="align-middle">box</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="briefcase"></i> <span class="align-middle">briefcase</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="calendar"></i> <span class="align-middle">calendar</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="camera"></i> <span class="align-middle">camera</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="camera-off"></i> <span class="align-middle">camera-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cast"></i> <span class="align-middle">cast</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="check"></i> <span class="align-middle">check</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="check-circle"></i> <span class="align-middle">check-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="check-square"></i> <span class="align-middle">check-square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevron-down"></i> <span class="align-middle">chevron-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevron-left"></i> <span class="align-middle">chevron-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevron-right"></i> <span class="align-middle">chevron-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevron-up"></i> <span class="align-middle">chevron-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevrons-down"></i> <span class="align-middle">chevrons-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevrons-left"></i> <span class="align-middle">chevrons-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevrons-right"></i> <span class="align-middle">chevrons-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chevrons-up"></i> <span class="align-middle">chevrons-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="chrome"></i> <span class="align-middle">chrome</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="circle"></i> <span class="align-middle">circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="clipboard"></i> <span class="align-middle">clipboard</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="clock"></i> <span class="align-middle">clock</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud"></i> <span class="align-middle">cloud</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud-drizzle"></i> <span class="align-middle">cloud-drizzle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud-lightning"></i> <span class="align-middle">cloud-lightning</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud-off"></i> <span class="align-middle">cloud-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud-rain"></i> <span class="align-middle">cloud-rain</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cloud-snow"></i> <span class="align-middle">cloud-snow</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="code"></i> <span class="align-middle">code</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="codepen"></i> <span class="align-middle">codepen</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="command"></i> <span class="align-middle">command</span>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="compass"></i> <span class="align-middle">compass</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="copy"></i> <span class="align-middle">copy</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-down-left"></i> <span class="align-middle">corner-down-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-down-right"></i> <span class="align-middle">corner-down-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-left-down"></i> <span class="align-middle">corner-left-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-left-up"></i> <span class="align-middle">corner-left-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-right-down"></i> <span class="align-middle">corner-right-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-right-up"></i> <span class="align-middle">corner-right-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-up-left"></i> <span class="align-middle">corner-up-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="corner-up-right"></i> <span class="align-middle">corner-up-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="cpu"></i> <span class="align-middle">cpu</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="credit-card"></i> <span class="align-middle">credit-card</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="crop"></i> <span class="align-middle">crop</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="crosshair"></i> <span class="align-middle">crosshair</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="database"></i> <span class="align-middle">database</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="delete"></i> <span class="align-middle">delete</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="disc"></i> <span class="align-middle">disc</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="dollar-sign"></i> <span class="align-middle">dollar-sign</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="download"></i> <span class="align-middle">download</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="download-cloud"></i> <span class="align-middle">download-cloud</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="droplet"></i> <span class="align-middle">droplet</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="edit"></i> <span class="align-middle">edit</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="edit-2"></i> <span class="align-middle">edit-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="edit-3"></i> <span class="align-middle">edit-3</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="external-link"></i> <span class="align-middle">external-link</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="eye"></i> <span class="align-middle">eye</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="eye-off"></i> <span class="align-middle">eye-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="facebook"></i> <span class="align-middle">facebook</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="fast-forward"></i> <span class="align-middle">fast-forward</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="feather"></i> <span class="align-middle">feather</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="file"></i> <span class="align-middle">file</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="file-minus"></i> <span class="align-middle">file-minus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="file-plus"></i> <span class="align-middle">file-plus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="file-text"></i> <span class="align-middle">file-text</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="film"></i> <span class="align-middle">film</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="filter"></i> <span class="align-middle">filter</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="flag"></i> <span class="align-middle">flag</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="folder"></i> <span class="align-middle">folder</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="folder-minus"></i> <span class="align-middle">folder-minus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="folder-plus"></i> <span class="align-middle">folder-plus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="git-branch"></i> <span class="align-middle">git-branch</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="git-commit"></i> <span class="align-middle">git-commit</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="git-merge"></i> <span class="align-middle">git-merge</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="git-pull-request"></i> <span class="align-middle">git-pull-request</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="github"></i> <span class="align-middle">github</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="gitlab"></i> <span class="align-middle">gitlab</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="globe"></i> <span class="align-middle">globe</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="grid"></i> <span class="align-middle">grid</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="hard-drive"></i> <span class="align-middle">hard-drive</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="hash"></i> <span class="align-middle">hash</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="headphones"></i> <span class="align-middle">headphones</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="heart"></i> <span class="align-middle">heart</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="help-circle"></i> <span class="align-middle">help-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="home"></i> <span class="align-middle">home</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="image"></i> <span class="align-middle">image</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="inbox"></i> <span class="align-middle">inbox</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="info"></i> <span class="align-middle">info</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="instagram"></i> <span class="align-middle">instagram</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="italic"></i> <span class="align-middle">italic</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="layers"></i> <span class="align-middle">layers</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="layout"></i> <span class="align-middle">layout</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="link"></i> <span class="align-middle">link</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="link-2"></i> <span class="align-middle">link-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="linkedin"></i> <span class="align-middle">linkedin</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="list"></i> <span class="align-middle">list</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="loader"></i> <span class="align-middle">loader</span>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="lock"></i> <span class="align-middle">lock</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="log-in"></i> <span class="align-middle">log-in</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="log-out"></i> <span class="align-middle">log-out</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="mail"></i> <span class="align-middle">mail</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="map"></i> <span class="align-middle">map</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="map-pin"></i> <span class="align-middle">map-pin</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="maximize"></i> <span class="align-middle">maximize</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="maximize-2"></i> <span class="align-middle">maximize-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="menu"></i> <span class="align-middle">menu</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="message-circle"></i> <span class="align-middle">message-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="message-square"></i> <span class="align-middle">message-square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="mic"></i> <span class="align-middle">mic</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="mic-off"></i> <span class="align-middle">mic-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="minimize"></i> <span class="align-middle">minimize</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="minimize-2"></i> <span class="align-middle">minimize-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="minus"></i> <span class="align-middle">minus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="minus-circle"></i> <span class="align-middle">minus-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="minus-square"></i> <span class="align-middle">minus-square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="monitor"></i> <span class="align-middle">monitor</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="moon"></i> <span class="align-middle">moon</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="more-horizontal"></i> <span class="align-middle">more-horizontal</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="more-vertical"></i> <span class="align-middle">more-vertical</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="move"></i> <span class="align-middle">move</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="music"></i> <span class="align-middle">music</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="navigation"></i> <span class="align-middle">navigation</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="navigation-2"></i> <span class="align-middle">navigation-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="octagon"></i> <span class="align-middle">octagon</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="package"></i> <span class="align-middle">package</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="paperclip"></i> <span class="align-middle">paperclip</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="pause"></i> <span class="align-middle">pause</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="pause-circle"></i> <span class="align-middle">pause-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="percent"></i> <span class="align-middle">percent</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone"></i> <span class="align-middle">phone</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-call"></i> <span class="align-middle">phone-call</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-forwarded"></i> <span class="align-middle">phone-forwarded</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-incoming"></i> <span class="align-middle">phone-incoming</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-missed"></i> <span class="align-middle">phone-missed</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-off"></i> <span class="align-middle">phone-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="phone-outgoing"></i> <span class="align-middle">phone-outgoing</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="pie-chart"></i> <span class="align-middle">pie-chart</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="play"></i> <span class="align-middle">play</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="play-circle"></i> <span class="align-middle">play-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="plus"></i> <span class="align-middle">plus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="plus-circle"></i> <span class="align-middle">plus-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">plus-square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="pocket"></i> <span class="align-middle">pocket</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="power"></i> <span class="align-middle">power</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="printer"></i> <span class="align-middle">printer</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="radio"></i> <span class="align-middle">radio</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="refresh-ccw"></i> <span class="align-middle">refresh-ccw</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="refresh-cw"></i> <span class="align-middle">refresh-cw</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="repeat"></i> <span class="align-middle">repeat</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="rewind"></i> <span class="align-middle">rewind</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="rotate-ccw"></i> <span class="align-middle">rotate-ccw</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="rotate-cw"></i> <span class="align-middle">rotate-cw</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="rss"></i> <span class="align-middle">rss</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="save"></i> <span class="align-middle">save</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="scissors"></i> <span class="align-middle">scissors</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="search"></i> <span class="align-middle">search</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="send"></i> <span class="align-middle">send</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="server"></i> <span class="align-middle">server</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="settings"></i> <span class="align-middle">settings</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="share"></i> <span class="align-middle">share</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="share-2"></i> <span class="align-middle">share-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="shield"></i> <span class="align-middle">shield</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="shield-off"></i> <span class="align-middle">shield-off</span>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="shopping-bag"></i> <span class="align-middle">shopping-bag</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="shopping-cart"></i> <span class="align-middle">shopping-cart</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="shuffle"></i> <span class="align-middle">shuffle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="sidebar"></i> <span class="align-middle">sidebar</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="skip-back"></i> <span class="align-middle">skip-back</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="skip-forward"></i> <span class="align-middle">skip-forward</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="slack"></i> <span class="align-middle">slack</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="slash"></i> <span class="align-middle">slash</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="sliders"></i> <span class="align-middle">sliders</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="smartphone"></i> <span class="align-middle">smartphone</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="speaker"></i> <span class="align-middle">speaker</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="square"></i> <span class="align-middle">square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="star"></i> <span class="align-middle">star</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="stop-circle"></i> <span class="align-middle">stop-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="sun"></i> <span class="align-middle">sun</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="sunrise"></i> <span class="align-middle">sunrise</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="sunset"></i> <span class="align-middle">sunset</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="tablet"></i> <span class="align-middle">tablet</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="tag"></i> <span class="align-middle">tag</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="target"></i> <span class="align-middle">target</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="terminal"></i> <span class="align-middle">terminal</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="thermometer"></i> <span class="align-middle">thermometer</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="thumbs-down"></i> <span class="align-middle">thumbs-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="thumbs-up"></i> <span class="align-middle">thumbs-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="toggle-left"></i> <span class="align-middle">toggle-left</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="toggle-right"></i> <span class="align-middle">toggle-right</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="trash"></i> <span class="align-middle">trash</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="trash-2"></i> <span class="align-middle">trash-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="trending-down"></i> <span class="align-middle">trending-down</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="trending-up"></i> <span class="align-middle">trending-up</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="triangle"></i> <span class="align-middle">triangle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="truck"></i> <span class="align-middle">truck</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="tv"></i> <span class="align-middle">tv</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="twitter"></i> <span class="align-middle">twitter</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="type"></i> <span class="align-middle">type</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="umbrella"></i> <span class="align-middle">umbrella</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="underline"></i> <span class="align-middle">underline</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="unlock"></i> <span class="align-middle">unlock</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="upload"></i> <span class="align-middle">upload</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="upload-cloud"></i> <span class="align-middle">upload-cloud</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="user"></i> <span class="align-middle">user</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="user-check"></i> <span class="align-middle">user-check</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="user-minus"></i> <span class="align-middle">user-minus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="user-plus"></i> <span class="align-middle">user-plus</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="user-x"></i> <span class="align-middle">user-x</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">users</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="video"></i> <span class="align-middle">video</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="video-off"></i> <span class="align-middle">video-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="voicemail"></i> <span class="align-middle">voicemail</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="volume"></i> <span class="align-middle">volume</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="volume-1"></i> <span class="align-middle">volume-1</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="volume-2"></i> <span class="align-middle">volume-2</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="volume-x"></i> <span class="align-middle">volume-x</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="watch"></i> <span class="align-middle">watch</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="wifi"></i> <span class="align-middle">wifi</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="wifi-off"></i> <span class="align-middle">wifi-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="wind"></i> <span class="align-middle">wind</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="x"></i> <span class="align-middle">x</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="x-circle"></i> <span class="align-middle">x-circle</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="x-square"></i> <span class="align-middle">x-square</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="zap"></i> <span class="align-middle">zap</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="zap-off"></i> <span class="align-middle">zap-off</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="zoom-in"></i> <span class="align-middle">zoom-in</span>
				</div>
				<div class="mb-2">
					<i class="align-middle me-2" data-feather="zoom-out"></i> <span class="align-middle">zoom-out</span>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>