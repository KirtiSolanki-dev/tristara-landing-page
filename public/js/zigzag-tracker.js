/* ===================================================
   TRISTARA IT SOLUTIONS — zigzag-tracker.js
   Dynamic SVG zig-zag path connector & smooth node tracking.
   =================================================== */

(function initZigZagTracker() {
  'use strict';

  var container = document.querySelector('.pipeline-spine-wrapper');
  var svg = document.getElementById('zigzagSvg');
  var bgPath = document.querySelector('.zigzag-track-bg');
  var flowPath = document.querySelector('.zigzag-track-flow');
  var milestones = document.querySelectorAll('.pipeline-milestone');

  if (!container || !svg || !bgPath || milestones.length < 2) return;

  function recalculateZigZag() {
    if (window.innerWidth <= 900) return;

    var containerRect = container.getBoundingClientRect();
    var cW = container.offsetWidth;
    var cH = container.offsetHeight;

    svg.setAttribute('viewBox', '0 0 ' + cW + ' ' + cH);

    var points = [];

    milestones.forEach(function (m, idx) {
      var nodeCircle = m.querySelector('.node-pulse-circle');
      if (!nodeCircle) return;
      var circleRect = nodeCircle.getBoundingClientRect();

      var cx = circleRect.left - containerRect.left + circleRect.width / 2;
      var cy = circleRect.top - containerRect.top + circleRect.height / 2;

      points.push({ x: cx, y: cy });
    });

    if (points.length >= 2) {
      // Build a smooth cyber zig-zag trajectory with rounded elbow joints
      var d = 'M ' + points[0].x + ' ' + (points[0].y - 30) + ' L ' + points[0].x + ' ' + points[0].y;

      for (var i = 1; i < points.length; i++) {
        var pPrev = points[i - 1];
        var pCurr = points[i];

        // Diagonal zig-zag connector between milestone nodes
        d += ' L ' + pCurr.x + ' ' + pCurr.y;
      }

      d += ' L ' + points[points.length - 1].x + ' ' + (points[points.length - 1].y + 40);

      bgPath.setAttribute('d', d);
      if (flowPath) {
        flowPath.setAttribute('d', d);
      }
    }
  }

  // Recalculate on load and resize with debounce
  window.addEventListener('load', recalculateZigZag);
  window.addEventListener('resize', function () {
    clearTimeout(window._zzResizeTimer);
    window._zzResizeTimer = setTimeout(recalculateZigZag, 100);
  });

  // Initial calculation
  setTimeout(recalculateZigZag, 200);
})();
