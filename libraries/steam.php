<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Steam {

	public function __construct($params){
		$this->mainURL = 'http://api.steampowered.com/';
		$this->key = $params['key'];
    }

    public function getNews($appid,$count,$maxlength){
    	$steamresponse = json_decode(file_get_contents($this->mainURL."ISteamNews/GetNewsForApp/v0002/?appid=".$appid."&count=".$count."&maxlength=".$maxlength."&format=json"));
    	return $steamresponse->appnews;
    }

    public function getGlobalAchievements($appid){
    	$steamresponse = json_decode(file_get_contents($this->mainURL."ISteamUserStats/GetGlobalAchievementPercentagesForApp/v0002/?gameid=".$appid."&format=json"));
    	return $steamresponse->achievementpercentages;
    }

    public function getPlayerSummary($steamid){
    	$steamresponse = json_decode(file_get_contents($this->mainURL."ISteamUser/GetPlayerSummaries/v0002/?key=".$this->key."&steamids=".$steamid));
    	return $steamresponse->response->players;
    }

    public function getPlayerFriends($steamid){
    	$steamresponse = json_decode(file_get_contents($this->mainURL."ISteamUser/GetFriendList/v0001/?key=".$this->key."&steamid=".$steamid."&relationship=friend"));
    	return $steamresponse->friendslist->friends;
    }

    public function getPlayerAchievements($steamid,$appid){
    	$steamresponse = json_decode(file_get_contents($this->mainURL."ISteamUserStats/GetPlayerAchievements/v0001/?appid=".$appid."&key=".$this->key."&steamid=".$steamid."&relationship=friend"));
    	return $steamresponse->playerstats;
    }
}