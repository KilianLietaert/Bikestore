$(function () {
    $(window).resize(function () {
      var reswidth=screen.width;
      if (reswidth<990){
        var x = document.getElementsById("zoekimg");
        x.src="../images/colbysmall.png"
      }
      else
    });
  });