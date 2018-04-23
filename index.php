<!DOCTYPE html>
<html>
	<head>
		<title>Priyanka Henna</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Elsie+Swash+Caps:900" rel="stylesheet">
		<style type="text/css">

			* {
				margin: 0;
				padding: 0;
			}

			body {
				font-family: 'Bree Serif', serif;
			}

			.background-wrap {
				position: fixed;
				width: 100%;
				height: 100%;
				overflow: hidden;
				top: 0;
				left: 0;
				background: #D97884;
			}

			#video-bg-elem {
				position: absolute;
				top: 0;
				left: 0;
				min-height: 100%;
				min-width: 100%;

			}


			.content {
				position: absolute;
				min-width: 100%;
				min-height: 100%;
				z-index: 1000;
				background-color: rgba(76, 189, 255, 0.3);

			}
			.content h1 {
				text-align: center;
				font-family: 'Elsie Swash Caps', cursive;
				font-size: 60px;
				font-weight: 300;
				color: #87273b;
				padding-top: 15%;
				margin-bottom: 10px;
			}
			.content p {
				text-align: center;
				font-size: 20px;
				letter-spacing: 3px;
				color: white;
			}
			.content a {
				text-align: center;
				font-size: 20px;
				letter-spacing: 2px;

			}
			.button {
				text-align: center;
				margin-top: 70px;


			}
			.button a{
				padding-left: 30px;
				padding-right: 30px;
				border-radius: 200px;
				color:#D97884;
				/*#D97884*/

			}
			a.btn.btn-default{
				margin-left: 20px;
				margin-right: 20px;
				 }

			.symbol{
				text-align: center;
				margin-top:120px;

			}
			.symbol ul a{
			display: inline-block;
			padding-left: 30px;
			padding-right: 30px;
						}

			.fa {
				  font-size: 30px;
				  text-align: center;
				  text-decoration: none;
				  border-radius: 50%;

}

/* Add a hover effect if you want */
.fa:hover {
    color: white;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {color: #3B5998;}
.fa-youtube {color: #bb0000;}
.fa-instagram{color: #125688;}
.fa-google{color: #dd4b39;}


		</style>


	</head>
	<body>




		<div class="background-wrasp">
			<video id="video-bg-elem" loop="loop" mute="muted" autoplay="true" >
				<source src="sample 1.mp4"  type="video/mp4">

			</video>
		</div>


		<div class="content">
			<h1>PriyankaHenna</h1>
			<p>Let's explore a beutiful Art form!</p>
			<div class="button"><a href="home.php" class="btn btn-default">Explore</a>
			<a href="shop.php" class="btn btn-default">Shop</a>
				</div>

		<div class="symbol">
		<ul>
					<a href="https://www.facebook.com/priyankahennabrisbane/"><i class="fa fa-facebook" ></i></a>
					<a href="https://www.youtube.com/channel/UCAdQA87jZMgv0cEicsKB_AA?view_as=subscriber"><i class="fa fa-youtube"></i></a>
					<a href="https://www.instagram.com/priyankahenna/"><i class="fa fa-instagram"></i></a>
          <a href="https://www.google.com.au/search?q=priyankaheenna&oq=priyankaheenna&aqs=chrome..69i57j0l2.4790j0j7&sourceid=chrome&ie=UTF-8"><i class="fa fa-google"></i></a>

				</ul>
		</div></div>




	</body>
</html>
