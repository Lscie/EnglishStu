<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div id="target-1" class="widget">

	      			<div class="widget-content">

			      		<h1>12 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span12 -->






	      	<div class="span6">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>6 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span6 -->


	      	<div class="span6">

	      		<div id="target-2" class="widget">

	      			<div class="widget-content">

			      		<h1>6 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span6 -->







	      	<div class="span4">

	      		<div id="target-3" class="widget">

	      			<div class="widget-content">

			      		<h1>4 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span4 -->


	      	<div class="span4">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>4 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span4 -->


	      	<div class="span4">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>4 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span4 -->








	      	<div class="span3">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>3 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span3 -->


	      	<div id="target-4" class="span3">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>3 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span3 -->


	      	<div class="span3">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>3 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span3 -->


	      	<div class="span3">

	      		<div class="widget">

	      			<div class="widget-content">

			      		<h1>3 Columns</h1>

			      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

		      		</div> <!-- /widget-content -->

	      		</div> <!-- /widget -->

      		</div> <!-- /span3 -->


	      </div> <!-- /row -->

	    </div> <!-- /container -->

	</div> <!-- /main-inner -->

</div> <!-- /main -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>

<script src="js/guidely/guidely.min.js"></script>

<script>

$(function () {

	guidely.add ({
		attachTo: '#target-1'
		, anchor: 'top-left'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});

	guidely.add ({
		attachTo: '#target-2'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});

	guidely.add ({
		attachTo: '#target-3'
		, anchor: 'middle-middle'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});

	guidely.add ({
		attachTo: '#target-4'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});

	guidely.init ({ welcome: true, startTrigger: false });


});

</script>
