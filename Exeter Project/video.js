//const configuration = {'iceServers': [{'urls': 'turn:66.185.195:3478' }] }
  function assignEmptyScreen() {
      for (i = 0; i < numberOfScreens; i++) {
        if (screens[i-1].full == false) {
          currentScreen = (i - 1);
          screens[i-1].full = true;
          console.log("assignEmptyScreen()")
        }
      }
    }

  function logOn() {
    //networking log on
    console.log("logOn()")

    new user
    numberOfUsers += 1;
  
  }
  
  function screenSorting() { // runs continuously
    console.log("screenSorting()")

  }
  
  function logOff() {
    numberOfUsers -= 1;
    console.log("logOff()")

  }


  function switchVideo(){
    console.log("switchVideo()")
    if (videoActive == true) {
      turnOffVideo();
      videoActive = false;
    }else{
      turnOnVideo();
      videoActive = true;
    }
  }
  
  function turnOnVideo(){
    console.log("turnonvideo()")
    navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (videoStream) {
      video.srcObject = videoStream;
    })
    .catch(function (err0r) {
      console.log("Video error");
    });

  }

  function turnOffVideo(){
    console.log("turnoffVideo()")
    video.srcObject = null

  }

  function switchAudio(){
    console.log("switchAudio()")
    if (audioActive == true) {
      audioActive = false;
      turnOffAudio();
    }else{
      audioActive = true;
      turnOnAudio();
    }
  }

  function turnOnAudio() {
    console.log("turnOnAudio()")
    navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function (audioStream) {
      //audio.srcObject = audioStream;
      
    })
    .catch(function (err0r) {
      console.log("Audio error");
    });

  }

  function turnOffAudio(){
    console.log("turnOffAudio()")
    //audio.srcObject = null;

  }


class screen {
  constructor(full = false, stream = null){
    full = full;
    stream = stream;

  }
}


var video = document.querySelector("#videoElement");
//const audio = document.getElementById('player');

var audioActive = false;
var videoActive = false;
var currenScreen = null;
var userNumber = 1;
var numOfScreens = 8;
var numberOfUsers = 1;