function openCity(evt, cityName) {
    var i, pr0_tabcontent, pr0_tablinks;
    pr0_tabcontent = document.getElementsByClassName("pr0_tabcontent");
    for (i = 0; i < pr0_tabcontent.length; i++) {
      pr0_tabcontent[i].style.display = "none";
    }
    pr0_tablinks = document.getElementsByClassName("pr0_tablinks");
    for (i = 0; i < pr0_tablinks.length; i++) {
      pr0_tablinks[i].className = pr0_tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }