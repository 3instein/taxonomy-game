// const object = document.getElementById('object-follow');
// const popup = document.getElementById('popup-text');

// document.addEventListener('mousemove', function (e) {
//   object.style.cssText = `
//     left: ${e.clientX - 25}px;
//     top: ${e.clientY - 25}px;
//   `;

//   popup.style.cssText = `
//     left: ${e.clientX - 5}px;
//     top: ${e.clientY - 45}px;
//   `;
// });

// document.addEventListener('click', function () {
//   popup.style.visibility = 'visible';
// });
(function () {
  const refreshRate = 1000 / 60;
  const maxXPosition = window.screen.width;
  const dna = document.getElementById('dna');
  let speedX = 10;
  let positionX = 0;

  window.setInterval(() => {
    positionX = positionX + speedX;
    if (positionX >= maxXPosition - 60) {
      speedX = -10;
    } else if (positionX <= 0) {
      speedX = 10
    }
    dna.style.left = positionX + 'px';
  }, refreshRate);
})();