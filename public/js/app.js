(function () {

  // dna animation
  // const refreshRate = 1000 / 60;
  // const maxXPosition = window.screen.width;
  // const maxYPosition = window.screen.height;
  // const dnas = document.querySelectorAll('#dna');

  // window.setInterval(() => {
  //   for (const dna of dnas) {
  //     let positionX = dna.getBoundingClientRect().left;
  //     let positionY = dna.getBoundingClientRect().top;
  //     let speedX = 1;
  //     let speedY = 2;
  //     positionX = positionX + speedX;
  //     positionY = positionY + speedY;
  //     if (positionX >= maxXPosition - 60) {
  //       speedX = -1;
  //     } else if (positionX <= 0) {
  //       speedX = 1
  //     }

  //     if (positionY >= maxYPosition - 40) {
  //       speedY = -2;
  //     } else if (positionY <= 0) {
  //       speedY = 2;
  //     }

  //     dna.style.left = positionX + 'px';
  //     dna.style.top = positionY + 'px';
  //   }
  // }, refreshRate);

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

    // collapse sidebar
    let isOpen = false;
    const opener = document.querySelector('.open-sidebar');
    const sideBar = document.querySelector('.sidebar');
    const canvas = document.querySelector('.canvas');
    const score = document.querySelector('.score');
    opener.addEventListener('click', function () {
      if (!isOpen) {
        sideBar.style.width = '400px';
        opener.style.left = 'calc(400px - 64px)';
        canvas.style.marginLeft = '400px';
        score.style.marginLeft = '400px';
        isOpen = true;
      } else {
        sideBar.style.width = '0';
        opener.style.left = 'calc(0% - 64px)';
        canvas.style.marginLeft = '0';
        score.style.marginLeft = '0';
        isOpen = false;
      }
    });
  }

  // channging environemnt button
  const earth = document.querySelector('.circle');
  const seaBtn = document.querySelector('.sea-btn');
  const earthBtn = document.querySelector('.earth-btn')
  const tree = document.querySelector('.tree-btn');
  const canvas = document.querySelector('.canvas');
  const evolutionTree = document.querySelector('.evolution-trees');
  seaBtn.addEventListener('click', function () {
    canvas.style.backgroundImage = "url('../assets/ocean-floor-1.jpg')";
    canvas.style.backgroundRepeat = 'no-repeat';
    canvas.style.backgroundSize = '100% 100%';
    earth.style.display = 'none';
    evolutionTree.classList.add('d-none');
  });

  earthBtn.addEventListener('click', function () {
    canvas.style.backgroundImage = "url('../assets/galaxy.jpg')";
    canvas.style.backgroundRepeat = 'repeat';
    canvas.style.backgroundSize = 'auto';
    earth.style.display = 'block';
    evolutionTree.classList.add('d-none');
  });

  tree.addEventListener('click', function () {
    canvas.style.background = 'rgb(92,107,40)';
    canvas.style.background = 'radial-gradient(circle, rgba(92,107,40,1) 0%, rgba(0,0,0,1) 100%)';
    earth.style.display = 'none';
    evolutionTree.classList.remove('d-none');
    evolutionTree.style.width = '100%';
    evolutionTree.style.height = '100%';
  });

  // evolution tree
  const species = document.querySelectorAll('.species-canvas');
  const creatureEvolutions = document.querySelectorAll('.creatureEvolution-canvas');
  const branchDescription = document.querySelector('.branch-description');
  let isExpanded = false;
  for (let i = 0; i < species.length; i++) {
    species[i].addEventListener('click', function () {
      let creature = species[i].querySelector('#creature').value;
      creature = JSON.parse(creature);
      branchDescription.classList.remove('d-none');
      branchDescription.querySelector('.creature-img').src = creature.image_path;
      branchDescription.querySelector('.creature-name').innerHTML = creature.name;
      branchDescription.querySelector('.creature-description').innerHTML = creature.description;
    });
  }

  for (let i = 0; i < creatureEvolutions.length; i++) {
    creatureEvolutions[i].addEventListener('click', function () {
      let creatureEvolution = creatureEvolutions[i].querySelector('#creatureEvolution').value;
      creatureEvolution = JSON.parse(creatureEvolution);
      branchDescription.classList.remove('d-none');
      branchDescription.querySelector('.creature-img').src = creatureEvolution.image_path;
      branchDescription.querySelector('.creature-name').innerHTML = creatureEvolution.name;
      branchDescription.querySelector('.creature-description').innerHTML = creatureEvolution.description;
    });
  }

  branchDescription.addEventListener('click', function () {
    if (!isExpanded) {
      branchDescription.style.height = '260px';
      branchDescription.style.borderRadius = '25px';
      document.querySelector('.inner-branch-description').classList.remove('d-none');
      isExpanded = true;
    } else {
      branchDescription.style.height = '100px';
      branchDescription.style.borderRadius = '25px';
      document.querySelector('.inner-branch-description').classList.add('d-none');
      isExpanded = false;
    }
  });
})();