<?php
$members=[
	[
		'firstname'=>'John',
		'lastname'=>'Lennon',
		'date_of_birth'=>'9 October 1940',
		'bio'=>'John Winston Ono Lennon[nb 1] MBE (born John Winston Lennon, 9 October 1940 – 8 December 1980) was an English singer, songwriter and peace activist[2] who gained worldwide fame as the founder, co-lead vocalist, and rhythm guitarist of the Beatles. His songwriting partnership with Paul McCartney remains the most successful in history.[3] In 1969, he started the Plastic Ono Band with his second wife, Yoko Ono. After the Beatles disbanded in 1970, Lennon continued as a solo artist and as Ono\'s collaborator.',
		'picture'=>'https://www.gannett-cdn.com/media/USATODAY/None/2014/10/09/635484412619522719-D06-John-Lennon-older-07.jpg?width=2560'
	],
	[
		'firstname'=>'Paul',
		'lastname'=>'McCartney',
		'date_of_birth'=>'18 June 1942',
		'bio'=>'Sir James Paul McCartney CH MBE (born 18 June 1942) is an English singer, songwriter, musician, composer, and record and film producer who gained worldwide fame as co-lead vocalist and bassist for the Beatles. His songwriting partnership with John Lennon remains the most successful in history.[2] After the group disbanded in 1970, he pursued a solo career and formed the band Wings with his first wife, Linda, and Denny Laine.',
		'picture'=>'https://media.gettyimages.com/photos/1st-january-posed-studio-session-of-paul-mccartney-from-the-beatles-picture-id453928685?s=612x612'
	],
	[
		'firstname'=>'Ringo',
		'lastname'=>'Starr',
		'date_of_birth'=>'7 July 1940',
		'bio'=>'Sir Richard Starkey[2] MBE[3] (born 7 July 1940), known professionally as Ringo Starr, is an English musician, singer, songwriter and actor who gained worldwide fame as the drummer for the Beatles. He occasionally sang lead vocals with the group, usually for one song on each album, including "With a Little Help from My Friends", "Yellow Submarine", "Good Night", "I Wanna Be Your Man", "Boys", and their cover of "Act Naturally". He also wrote and sang the Beatles\' songs "Don\'t Pass Me By" and "Octopus\'s Garden", and is credited as a co-writer of others, including "What Goes On".',
		'picture'=>'https://www.billboard.com/files/styles/article_main_image/public/media/Ringo-Starr-cr-Scott-Robert-Ritchie-2019-billboard-1548.jpg'
	]
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All the Beatles</title>
  </head>
  <body>
  <div class="container">
    <h1>All the Beatles</h1>
	<?php
	for($i=0;$i<count($members);$i++){
		echo '<div class="media">
  <img src="'.$members[$i]['picture'].'" class="mr-3" alt="'.$members[$i]['firstname'].' '. $members[$i]['lastname'].'" width="96">
  <div class="media-body">
    <h5 class="mt-0">'.$members[$i]['firstname'].' '. $members[$i]['lastname'].'</h5>
    <a href="detail.php?id='.$i.'">Visit profile</a>
  </div>
</div>';
		echo '<hr>';
	}

	?>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>