// Yellow Coop site behavior: mobile menu, spectrum tabs, blog filters.
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

  // Blog filter: buttons [data-filter] show/hide .post-card[data-pillar]; supports #operate etc. in the URL.
  var filters = document.querySelector('.filters');
  if (filters) {
    var cards = document.querySelectorAll('.post-card[data-pillar]');
    var apply = function (val) {
      filters.querySelectorAll('button').forEach(function (x) { x.setAttribute('aria-pressed', x.getAttribute('data-filter') === val ? 'true' : 'false'); });
      cards.forEach(function (c) { c.hidden = !(val === 'all' || c.getAttribute('data-pillar') === val); });
    };
    filters.querySelectorAll('button').forEach(function (b) {
      b.addEventListener('click', function () {
        var v = b.getAttribute('data-filter');
        apply(v);
        if (history.replaceState) history.replaceState(null, '', v === 'all' ? location.pathname : '#' + v.toLowerCase());
      });
    });
    var h = location.hash.replace('#', '');
    var map = { operate: 'Operate', secure: 'Secure', innovate: 'Innovate' };
    if (map[h]) apply(map[h]);
  }
})();
