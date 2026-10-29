// Yellow Coop site behavior: mobile menu, spectrum tabs, old blog pillar links.
(function () {
  var toggle = document.querySelector('.nav-toggle');
  var links = document.getElementById('nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var open = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  // Spectrum: buttons with [data-pillar] swap the text in .band-panel.
  var band = document.querySelector('.band');
  if (band) {
    var panels = document.querySelectorAll('.band-panel [data-panel]');
    band.querySelectorAll('button').forEach(function (b) {
      b.addEventListener('click', function () {
        band.querySelectorAll('button').forEach(function (x) { x.setAttribute('aria-selected', x === b ? 'true' : 'false'); });
        panels.forEach(function (p) { p.hidden = p.getAttribute('data-panel') !== b.getAttribute('data-pillar'); });
      });
    });
  }

  // Old pillar links like /blog.php#secure go to the server-side filter.
  if (document.querySelector('.filters') && !location.search) {
    var map = { operate: 'operate', secure: 'secure', innovate: 'innovate' };
    var h = location.hash.replace('#', '');
    if (map[h]) location.replace('/blog.php?pillar=' + map[h]);
  }
})();
