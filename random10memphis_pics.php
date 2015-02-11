<?php


$photo_array = array();
$photo_array['1']['links'] = "http://www.flickr.com/photos/16801915@N06/5981610199/";
$photo_array['1']['title'] = "Memphis Tram by Reading Tom, on Flickr";
$photo_array['1']['photo'] = "http://farm7.staticflickr.com/6143/5981610199_69ca171bb6_b.jpg";
$photo_array['2']['links'] = "http://www.flickr.com/photos/16801915@N06/5981616389/";
$photo_array['2']['title'] = "The Lorraine Motel by Reading Tom, on Flickr";
$photo_array['2']['photo'] = "http://farm7.staticflickr.com/6123/5981616389_6d9827b3ce_z.jpg";
$photo_array['3']['links'] = "http://www.flickr.com/photos/kylemonahan/3747855752/";
$photo_array['3']['title'] = "Downtown Memphis by Kyle Monahan, on Flickr";
$photo_array['3']['photo'] = "http://farm3.staticflickr.com/2630/3747855752_ca300a9a8b_z.jpg";
$photo_array['4']['links'] = "http://www.flickr.com/photos/bridgman/96882411/";
$photo_array['4']['title'] = "Power House, Blue Monkey, Trolley, The Corkscrew (South Main - Memphis) by Gary Bridgman, on Flickr";
$photo_array['4']['photo'] = "http://farm1.staticflickr.com/34/96882411_c60f8951e1_z.jpg";
$photo_array['5']['links'] = "http://www.flickr.com/photos/carlwwycoff/5289659288/";
$photo_array['5']['title'] = "BB Kings Blues Club...Memphis, TN by cwwycoff1, on Flickr";
$photo_array['5']['photo'] = "http://farm6.staticflickr.com/5287/5289659288_4bd1c9451c_z.jpg";
$photo_array['6']['links'] = "http://www.flickr.com/photos/carlwwycoff/5289658942/";
$photo_array['6']['title'] = "Sun Recording Studio - Memphis TN by cwwycoff1, on Flickr";
$photo_array['6']['photo'] = "http://farm6.staticflickr.com/5204/5289658942_7328298b27_z.jpg";
$photo_array['7']['links'] = "http://www.flickr.com/photos/carlwwycoff/5289056743/";
$photo_array['7']['title'] = "Smooth Talkin Trumpet Player by cwwycoff1, on Flickr";
$photo_array['7']['photo'] = "http://farm6.staticflickr.com/5242/5289056743_205091726b_z.jpg";
$photo_array['8']['links'] = "http://www.flickr.com/photos/carlwwycoff/5291323984/";
$photo_array['8']['title'] = "Blues City Blues by cwwycoff1, on Flickr";
$photo_array['8']['photo'] = "http://farm6.staticflickr.com/5081/5291323984_67724e00b7_z.jpg";
$photo_array['9']['links'] = "http://www.flickr.com/photos/carlwwycoff/5295261488/";
$photo_array['9']['title'] = "Memphis, TN - Autozone Park by cwwycoff1, on Flickr";
$photo_array['9']['photo'] = "http://farm6.staticflickr.com/5049/5295261488_756b5a34c6_z.jpg";
$photo_array['0']['links'] = "http://www.flickr.com/photos/carlwwycoff/5338941749/";
$photo_array['0']['title'] = "B.B.King - Memphis DOT Welcome Center by cwwycoff1, on Flickr";
$photo_array['0']['photo'] = "http://farm6.staticflickr.com/5165/5338941749_5610ccfa04_z.jpg";




	$random_image = rand(0, 9);
	//echo $second;
	echo'
	<div  class="no_hover">
			<a href="'.$photo_array[$random_image]['links'].'"
				title="'.$photo_array[$random_image]['title'].'">
		<img 	src="'.$photo_array[$random_image]['photo'].'" class="content-image"
					alt="'.$photo_array[$random_image]['title'].'"></a>
					</div>
					'
;
?>


