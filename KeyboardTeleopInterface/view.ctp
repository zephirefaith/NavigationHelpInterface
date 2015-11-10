<script type="text/javascript" src="http://cdn.robotwebtools.org/keyboardteleopjs/current/keyboardteleop.min.js"></script>
<?php
// connect to ROS
echo $this->Rms->ros($environment['Rosbridge']['uri']);

//add teleop
echo $this->Rms->keyboardTeleop($environment['Teleop'][0]['topic'], $environment['Teleop'][0]['throttle']);
?>

<header class="special container">
        <span class="icon fa-cloud"></span>
        <h2>CameraFeed and Teleop</h2>
</header>

<section class="wrapper style4 container">
	<div class="content center">
		<section>
			<div class="row">
				<section class="6u stream">
					<?php
						echo $this->Rms->mjpegStream(
							$environment['Mjpeg']['host'],
							$environment['Mjpeg']['port'],
							$environment['Stream'][0]['topic'],
							$environment['Stream'][0]
						);
					?>
				</section>
				<section class="6u">
					<br />
					Use the <strong>W, A, S, D</strong> keys to drive the robot.
					<br />
				</section>
			</div>
		</section>
	</div>
</section>
