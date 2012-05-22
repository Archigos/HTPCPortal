#HTPC Portal

HTPCPortal is a PHP based 'wrapper' for use on your home network. Similar to the way [Maraschino](http://maraschinoproject.com) brings together information from multiple HTPC related apps. Portal gives you extra functionality by not limiting the the types of links you use.

![preview thumb](http://archigos.dlinkddns.com/screenshots/portal/portalHome.png)
Disregard the Maraschino 'issues' in the above screenshot, it was taken on a low resolution laptop and the Pre-Frodo 'fix' hadn't been applied to Maraschino yet.

## Dependencies
HTPCPortal requires an Apache/PHP Webserver to be running on the machine or network and must have PHP 5 configured correctly.

## Install
Drop the entire folder structure on to your currently configured server and load the page in your browser.

## Known Issues
This site is currently sending JSON calls to XBMC via the now depreciated HTTP API and need to be converted over to true JSON API calls. This site was tested against a Pre-Frodo Nightly build (May 16, 2012) and all is working.

-----------------------------------------------------------------------------------------------------------------------------------------------------------------
Special Notes:<br />
	Prior to loading the site for the first time, please rename 'settings-default.ini' to 'settings.ini' and fill in each of the fields. If you 'forget' this step, there are defaults built in that 'may' work if you run each app on the same system and with their default port. When entering information in the settings.ini (other than RSS section) do not include special characters or surround your input in quotes.

	[Host]
	xbmc		=	localhost
	xport		=	8080
	xbmcuser	=	xbmc
	xbmcpass	=	xbmc
	[...]
	mara		=	192.168.1.2
	maraport	=	7000
	[...] etc.
	
	[APIKeys]		// This section is not currently used, ignore if you'd like.
	sabapi		=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for SabNZBd+
	sbapi		=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for SickBeard
	matrixapi	=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for NZBMatrix.com
	nzbsuapi	=	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  // API for NZB.su
	
	[RSS]
	rsscount	=	0	// The number of entries you want shown. 0 = All available
	feed1name	=	Movies
	feed1		=	http%3A%2F%2Frss.nzbmatrix.com%2Frss.php%3Fpage%3Ddetails%26subcat%3D1%26english%3D1
	[...]
	feed5name	=	"<img src="includes/images/engadget_iconsm.png" width="14" height="14" />"
	feed5		=	http%3A%2F%2Fwww.engadget.com%2Frss.xml

	/** To get the required format for your RSS feed, open the site and click "Remote" from
	the top navigation. From there click "RSS Editor" and paste the feed url into the box
	and click "Generate Javascript", copy and paste the end result into one of the feeds
	above. You should verify that the RSS feed is valid from the Editor page prior to using
	it. If you'd like to use an image for your RSS Feed, make it 14x14 and mimic 'feed5name'.
	*/

-----------------------------------------------------------------------------------------------------------------------------------------------------------------
More detailed information will be included later...