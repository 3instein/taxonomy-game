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

  // dna animation
  const refreshRate = 1000 / 60;
  const maxXPosition = window.screen.width;
  const maxYPosition = window.screen.height;
  const dnas = document.querySelectorAll('#dna');

  window.setInterval(() => {
    for (const dna of dnas) {
      let positionX = dna.getBoundingClientRect().left;
      let positionY = dna.getBoundingClientRect().top;
      let speedX = 1;
      let speedY = 2;
      positionX = positionX + speedX;
      positionY = positionY + speedY;
      if (positionX >= maxXPosition - 60) {
        speedX = -1;
      } else if (positionX <= 0) {
        speedX = 1
      }

      if (positionY >= maxYPosition - 40) {
        speedY = -2;
      } else if (positionY <= 0) {
        speedY = 2;
      }

      dna.style.left = positionX + 'px';
      dna.style.top = positionY + 'px';
    }
  }, refreshRate);

  // sidebar page changing
  const sidebarLinks = document.querySelectorAll('.sidebar-link');
  for (let i = 0; i < sidebarLinks.length; i++) {
    sidebarLinks[i].addEventListener('click', function () {
      if (!sidebarLinks[i].classList.contains('sidebar-active')) {
        for (let j = 0; j < sidebarLinks.length; j++) {
          if (sidebarLinks[j].classList.contains('sidebar-active')) {
            sidebarLinks[j].classList.remove('sidebar-active');
          }
        }
        if (sidebarLinks[i].innerHTML == 'Creatures') {
          document.querySelector('.creatures-wrapper').classList.remove('d-none');
          document.querySelector('.upgrades-wrapper').classList.add('d-none');
        } else if (sidebarLinks[i].innerHTML == 'Upgrades') {
          document.querySelector('.creatures-wrapper').classList.add('d-none');
          document.querySelector('.upgrades-wrapper').classList.remove('d-none');
        }
        sidebarLinks[i].classList.add('sidebar-active');
      } else {
        sidebarLinks[i].classList.remove('sidebar-active');
      }
    });
  }
})();