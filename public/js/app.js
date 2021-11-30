const object = document.getElementById('object-follow');
const popup = document.getElementById('popup-text');

document.addEventListener('mousemove', function (e) {
  object.style.cssText = `
    left: ${e.clientX - 25}px;
    top: ${e.clientY - 25}px;
  `;

  popup.style.cssText = `
    left: ${e.clientX - 5}px;
    top: ${e.clientY - 45}px;
  `;
});

document.addEventListener('click', function () {
  popup.style.visibility = 'visible';
});