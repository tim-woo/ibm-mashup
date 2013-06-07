<?php

$searchTerms = $_GET['artistName'];

// Set path
$clientLibraryPath = 'libraries/gdata/library';
$oldPath = set_include_path(get_include_path() . PATH_SEPARATOR . $clientLibraryPath);


// Load data
require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
$yt = new Zend_Gdata_YouTube();

// Set up query
$yt->setMajorProtocolVersion(2);
$query = $yt->newVideoQuery();
$query->setOrderBy('viewCount');
$query->setSafeSearch('none');
$query->maxResults = 10;
$query->setVideoQuery($searchTerms);

// Note that we need to pass the version number to the query URL function
// to ensure backward compatibility with version 1 of the API.
$videoFeed = $yt->getVideoFeed($query->getQueryUrl(2));

// Iterate through feed printing title and url?
$count = 1;
$videoCount =  sizeof($videoFeed);
echo '[';
foreach ($videoFeed as $videoEntry) {

	echo '{';
	echo '"id": "';
	echo $videoEntry->getVideoId();
	echo '"}';
	if ($count != $videoCount)
		echo ',';
	
   $count++;
 }
 echo ']';


// Search function
function searchAndPrint($searchTerms)
{
  $yt = new Zend_Gdata_YouTube();
  $yt->setMajorProtocolVersion(2);
  $query = $yt->newVideoQuery();
  $query->setOrderBy('viewCount');
  $query->setSafeSearch('none');
  $query->setVideoQuery($searchTerms);

  // Note that we need to pass the version number to the query URL function
  // to ensure backward compatibility with version 1 of the API.
  $videoFeed = $yt->getVideoFeed($query->getQueryUrl(2));
  printVideoFeed($videoFeed, 'Search results for: ' . $searchTerms);
}

// Display functions
function getAndPrintVideoFeed($location = Zend_Gdata_YouTube::VIDEO_URI)
{
  $yt = new Zend_Gdata_YouTube();
  // set the version to 2 to receive a version 2 feed of entries
  $yt->setMajorProtocolVersion(2);
  $videoFeed = $yt->getVideoFeed($location);
  printVideoFeed($videoFeed);
}
 
function printVideoFeed($videoFeed)
{
  $count = 1;
  foreach ($videoFeed as $videoEntry) {
    echo "Entry # " . $count . "\n";
    printVideoEntry($videoEntry);
    echo "\n";
    $count++;
  }
}

function printVideoEntry($videoEntry) 
{
  // the videoEntry object contains many helper functions
  // that access the underlying mediaGroup object
  echo 'Video: ' . $videoEntry->getVideoTitle() . "\n";
  echo 'Video ID: ' . $videoEntry->getVideoId() . "\n";
  echo 'Updated: ' . $videoEntry->getUpdated() . "\n";
  echo 'Description: ' . $videoEntry->getVideoDescription() . "\n";
  echo 'Category: ' . $videoEntry->getVideoCategory() . "\n";
  echo 'Tags: ' . implode(", ", $videoEntry->getVideoTags()) . "\n";
  echo 'Watch page: ' . $videoEntry->getVideoWatchPageUrl() . "\n";
  echo 'Flash Player Url: ' . $videoEntry->getFlashPlayerUrl() . "\n";
  echo 'Duration: ' . $videoEntry->getVideoDuration() . "\n";
  echo 'View count: ' . $videoEntry->getVideoViewCount() . "\n";
  echo 'Rating: ' . $videoEntry->getVideoRatingInfo() . "\n";
  echo 'Geo Location: ' . $videoEntry->getVideoGeoLocation() . "\n";
  echo 'Recorded on: ' . $videoEntry->getVideoRecorded() . "\n";
  
  // see the paragraph above this function for more information on the 
  // 'mediaGroup' object. in the following code, we use the mediaGroup
  // object directly to retrieve its 'Mobile RSTP link' child
  foreach ($videoEntry->mediaGroup->content as $content) {
    if ($content->type === "video/3gpp") {
      echo 'Mobile RTSP link: ' . $content->url . "\n";
    }
  }
  
  echo "Thumbnails:\n";
  $videoThumbnails = $videoEntry->getVideoThumbnails();

  foreach($videoThumbnails as $videoThumbnail) {
    echo $videoThumbnail['time'] . ' - ' . $videoThumbnail['url'];
    echo ' height=' . $videoThumbnail['height'];
    echo ' width=' . $videoThumbnail['width'] . "\n";
  }
}

?>