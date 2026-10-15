/* ===================================================
   TRISTARA IT SOLUTIONS — airplane-workflow.js
   Dynamic SVG curved flight path computation & 
   smooth scroll-driven paper airplane flight animation.
   =================================================== */

(function initAirplaneWorkflow() {
  'use strict';

  var airplane = document.getElementById('paperAirplane');
  var section  = document.getElementById('how-it-works');
  if (!airplane || !section) return;

  function updateFlightPath() {
    var sectionRect = section.getBoundingClientRect();
    var steps       = section.querySelectorAll('.step-row');
    if (steps.length < 2) return '';

    var w = sectionRect.width;
    var h = section.scrollHeight;

    var points = [];
    steps.forEach(function (step, i) {
      var stepRect = step.getBoundingClientRect();
      var y = stepRect.top - sectionRect.top + stepRect.height / 2;
      var x = (i % 2 === 0) ? w * 0.35 : w * 0.65;
      points.push({ x: x, y: y });
    });

    if (points.length >= 2) {
      var d = 'M ' + points[0].x + ' ' + points[0].y;
      for (var i = 1; i < points.length; i++) {
        var prev = points[i - 1];
        var curr = points[i];
        var cpY  = (prev.y + curr.y) / 2;
        d += ' C ' + prev.x + ' ' + cpY + ', ' + curr.x + ' ' + cpY + ', ' + curr.x + ' ' + curr.y;
      }

      var pathEl = document.getElementById('flightPath');
      if (pathEl) {
        pathEl.setAttribute('d', d);
        pathEl.parentElement.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
      }
      return d;
    }
    return '';
  }

  function positionAirplane() {
    var sectionRect = section.getBoundingClientRect();
    var sectionTop  = sectionRect.top + window.scrollY;
    var sectionH    = section.scrollHeight;
    var scrollY     = window.scrollY;

    var offset   = scrollY - sectionTop + window.innerHeight * 0.5;
    var progress = Math.max(0, Math.min(1, offset / sectionH));

    var pathEl = document.getElementById('flightPath');
    if (!pathEl || !pathEl.getAttribute('d')) return;

    try {
      var totalLen = pathEl.getTotalLength();
      var pt  = pathEl.getPointAtLength(progress * totalLen);
      var pt2 = pathEl.getPointAtLength(Math.min(progress * totalLen + 2, totalLen));
      var angle = Math.atan2(pt2.y - pt.y, pt2.x - pt.x) * 180 / Math.PI;

      airplane.style.left    = (pt.x - 18) + 'px';
      airplane.style.top     = (pt.y - 18) + 'px';
      airplane.style.transform = 'rotate(' + angle + 'deg)';
      airplane.style.opacity   = (progress > 0.02 && progress < 0.98) ? '1' : '0';
    } catch (e) {
      /* flight path geometry pending calculation */
    }
  }

  // Initialize after rendering cycle
  setTimeout(function () {
    updateFlightPath();
    positionAirplane();
  }, 400);

  window.addEventListener('resize', function () {
    updateFlightPath();
    positionAirplane();
  });

  window.addEventListener('scroll', function () {
    requestAnimationFrame(positionAirplane);
  }, { passive: true });
})();
