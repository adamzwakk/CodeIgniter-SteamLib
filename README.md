Codeigniter SteamLib
--------------------------

Load the library with:

	$this->load->library('steam', array('key'=>'your steam api key'));

There are currently 5 functions that return an object.

getNews($appid,$count,$maxlength)
---------------------------------------

This will return news from an appid, you can specify number of posts and the maximum post length

getGlobalAchievements($appid)
--------------------------------------

This will return the global achievement stats for an appid

getPlayerSummary($steamid)
--------------------------------------

Returns the public profile info of a steamid

getPlayerFriends($steamid)
--------------------------------------

Returns all friends from a player's steamid

getPlayerAchievements($steamid,$appid)
----------------------------------------------

Returns the achievement progress for a game via the user's steamid