function onYouTubeIframeAPIReady() {
  for(var i = 0; i < playerInfoList.length; i++) {
    if (playerInfoList[i]['source'] == 'y') {
      var curplayer = createPlayer(playerInfoList[i]);
    } else {
      var curplayer = createVimeoPlayer(playerInfoList[i]);
    }
  }
}

function createPlayer(playerInfo) {
  return new YT.Player(playerInfo.id, {
    videoId: playerInfo.videoId,
    width: 560,
    height: 316,
    playerVars: {
      autoplay: 1,
      controls: 0,
      showinfo: 0,
      modestbranding: 1,
      loop: 1,
      playlist: playerInfo.videoId, // Needed to make the looping work
      fs: 0,
      cc_load_policty: 0,
      iv_load_policy: 3,
      autohide: 0,
      rel: 0
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
}

function createVimeoPlayer(playerInfo) {
  var options = {
    id: playerInfo.videoId,
    width: 640,
    autoplay: true,
    loop: true,
    title: false,
    byline: false,
    portrait: false
  };
  
  var player = new Vimeo.Player(playerInfo.id, options);

  player.ready().then(function() {
    player.setVolume(0);
  });
}