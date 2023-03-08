function toggleShow () {
    var el = document.getElementById("box");
    el.classList.toggle("show");
  }

  $(window).on('load', function () {
    $(".pre-loader").delay(2000).addClass("hidded");
  })