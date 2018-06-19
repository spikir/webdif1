<?php
	if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3'])) {
		if ($_POST['field1'] != '' && $_POST['field2'] != '' && $_POST['field3'] != '') {
			$admin_email = '';
			$name = $_POST['field1'];
			$email = $_POST['field2'];
			$comment = $_POST['field3'];
			
			mail($admin_email, 'Contact', $comment, 'From: ' .$email);
			
			echo '<html>';
				echo '<head>';
					echo '<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />';
				echo '</head>';
				echo '<body>';
					echo '<div class="header">';
						echo '<div class="title">';
							echo '<h2>WebDif</h2> ';
						echo '</div>';
						echo '<div class="navi">';
							echo '<ul>';
								echo '<li><a href="index.html">Home</a></li>';
								echo '<li><a href="projects.html">Projects</a></li>';
								echo '<li><a href="contact.html">Contact</a></li>';
							echo '</ul>';
						echo '</div>';
					echo '</div>';
					echo '<div class="picture" style="background-image: url(\'img/pexels-photo-477790.jpeg\')">';
						echo '<h2>Let\'s get some work together!</h2>';
						echo '<p>';
							echo 'For hiring or any suggestions for my projects, please contact me.';
						echo '</p>';
					echo '</div>';
					echo '<div class="wrp">';
						echo '<div class="content">';
							echo '<div class="contenttitle">';
								echo '<h2>Contact</h2>';
							echo '</div>';
							echo '<p>';
								echo 'Thank you for contact!';
							echo '</p>';
						echo '</div>';
					echo '</div>';
					echo '<div class="footer">';
					
					echo '</div>';
				echo '</body>';
			echo '</html>';
		} else {
			echo '<html>';
			echo '<head>';
				echo '<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />';
			echo '</head>';
			echo '<body>';
				echo '<div class="header">';
					echo '<div class="title">';
						echo '<h2>WebDif</h2>'; 
					echo '</div>';
					echo '<div class="navi">';
						echo '<ul>';
							echo '<li><a href="index.html">Home</a></li>';
							echo '<li><a href="projects.html">Projects</a></li>';
							echo '<li><a href="contact.html">Contact</a></li>';
						echo '</ul>';
					echo '</div>';
				echo '</div>';
				echo '<div class="picture" style="background-image: url(\'img/pexels-photo-477790.jpeg\')">';
					echo '<h2>Let\'s get some work together!</h2>';
					echo '<p>';
						echo 'For hiring or any suggestions for my projects, please contact me.';
					echo '</p>';
				echo '</div>';
				echo '<div class="wrp">';
					echo '<div class="content">';
						echo '<div class="contenttitle">';
							echo '<h2>Contact</h2>';
						echo '</div>';
						echo '<p>';
							echo 'Please fill out the form!';
						echo '</p>';
					echo '</div>';
				echo '</div>';
				echo '<div class="footer">';
					echo '<p>';
						echo 'Copyright by WebDif';
					echo '</p>';
					echo '<p>';
						echo '2017';
					echo '</p>';
				echo '</div>';
			echo '</body>';
		echo '</html>';
		}
	}
?>