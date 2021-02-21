$(function () {
    $(window).resize(function () {
      var reswidth=screen.width;
      if (reswidth<990){
        var x = document.getElementsById("zoeking");
        x.src="./img/winkelmand-icoonwhite.png"
      }
      else{
        var x = document.getElementsById("zoeking");
        x.src="./img/winkelmand-icoon.png"
      }
    });
  });