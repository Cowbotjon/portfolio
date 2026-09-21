(function (window, document) {
  "use strict";

  window.renderSiteTitle = function (containerId, imagePath, linkPath) {
    var container = document.getElementById(containerId);
    if (!container) {
      return;
    }

    var link = document.createElement("a");
    var image = document.createElement("img");

    link.href = linkPath;
    image.src = imagePath;
    image.width = 400;
    image.height = 91;
    image.alt = "Jon Keane Art";

    link.appendChild(image);
    container.appendChild(link);
  };
}(window, document));
