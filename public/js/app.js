(function () {

  // Mnemiopsis animation
  // const refreshRate = 1000 / 60;
  // const maxXPosition = window.screen.width;
  // const maxYPosition = window.screen.height;
  // const jellyfish = document.querySelector('.Mnemiopsis');
  // let speedX = 2;
  // let speedY = 2;
  // window.setInterval(() => {
  //   let positionX = jellyfish.getBoundingClientRect().left;
  //   let positionY = jellyfish.getBoundingClientRect().top;
  //   positionX = positionX + speedX;
  //   positionY = positionY + speedY;
  //   if (positionX >= maxXPosition - 120) {
  //     speedX = -2;
  //   } else if (positionX <= 0) {
  //     speedX = 2
  //   }

  //   if (positionY >= maxYPosition - 60) {
  //     speedY = -2;
  //   } else if (positionY <= 0) {
  //     speedY = 2;
  //   }

  //   jellyfish.style.left = positionX + 'px';
  //   jellyfish.style.top = positionY + 'px';
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
  let quizModal = new bootstrap.Modal(document.getElementById('biome-modal'));
  let userPoint = document.querySelector('#user-point');
  const earth = document.querySelector('.circle');
  const seaBtn = document.querySelector('.sea-btn');
  const earthBtn = document.querySelector('.earth-btn')
  const tree = document.querySelector('.tree-btn');
  const canvas = document.querySelector('.canvas');
  const seaBiome = document.querySelector('.sea-biome');
  const evolutionTree = document.querySelector('.evolution-trees');
  seaBtn.addEventListener('click', function () {
    if (userPoint.value < 20) {
      quizModal.toggle();
      document.querySelector('.biome-prerequisite').innerHTML = `Saat ini point kamu ${userPoint.value}, untuk akses biome selanjutnya kamu butuh 20 point!`;
    } else {
      canvas.style.backgroundImage = "url('../assets/ocean-floor-1.jpg')";
      canvas.style.backgroundRepeat = 'no-repeat';
      canvas.style.backgroundSize = '100% 100%';
      earth.style.display = 'none';
      seaBiome.classList.remove('d-none');
      evolutionTree.classList.add('d-none');
    }
  });

  earthBtn.addEventListener('click', function () {
    canvas.style.backgroundImage = "url('../assets/galaxy.jpg')";
    canvas.style.backgroundRepeat = 'repeat';
    canvas.style.backgroundSize = 'auto';
    earth.style.display = 'block';
    seaBiome.classList.add('d-none');
    evolutionTree.classList.add('d-none');
  });

  tree.addEventListener('click', function () {
    canvas.style.background = 'rgb(92,107,40)';
    canvas.style.background = 'radial-gradient(circle, rgba(92,107,40,1) 0%, rgba(0,0,0,1) 100%)';
    earth.style.display = 'none';
    seaBiome.classList.add('d-none');
    evolutionTree.classList.remove('d-none');
    evolutionTree.style.width = '100%';
    evolutionTree.style.height = '100%';
  });

  // quiz modal
  const questionText = document.querySelectorAll('.question-text');
  const question = document.querySelectorAll('#question');
  const answer = document.querySelectorAll('#answer');
  const nextBtn = document.querySelectorAll('.btn-next');
  const point = document.querySelectorAll('#point');
  let feedbackModal = new bootstrap.Modal(document.getElementById('feedback-modal'));
  let wrongAnswer = [];
  for (let i = 0; i < question.length; i++) {
    nextBtn[i].addEventListener('click', function (e) {
      let value = question[i].value;
      if (value.toLowerCase() === answer[i].value.toLowerCase()) {
        let gainedPoint = parseInt(userPoint.value) + parseInt(point[i].value)
        userPoint.value = gainedPoint;
      } else {
        let foo = {
          "question": questionText[i].innerHTML,
          "answer": value
        }

        wrongAnswer.push(foo);
      }

      if (i == question.length - 1) {
        let hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'wrong-answer';
        hiddenInput.value = JSON.stringify(wrongAnswer);
        document.querySelector('#quiz-form').append(userPoint);
        document.querySelector('#quiz-form').appendChild(hiddenInput);
        document.querySelector('#quiz-form').submit();
      }
    });
  }

  if (document.getElementById('feedback-toggle')) {
    let wrongAnswerResponses = JSON.parse(document.getElementById('feedback-toggle').value);
    let feedbackModalTitle = document.querySelector('.feedback-title');
    if (userPoint.value >= 20) {
      feedbackModalTitle.innerHTML = 'Selamat anda telah membuka bioma laut 🌊';
      if (wrongAnswerResponses.length > 0) {
        feedbackModalTitle.innerHTML = 'Selamat anda telah membuka bioma laut 🌊, tapi masih ada yang salah nih. Coba di baca lagi';
        let foo = '';
        for (let wrongAnswerResponse of wrongAnswerResponses) {
          foo += '<tr>';
          foo += `<td scope="row">${wrongAnswerResponse.question}</td>`;
          foo += `<td>${wrongAnswerResponse.answer}</td>`;
          foo += '</tr>'
        }
        document.getElementById('wrong-answer-header').innerHTML = `<tr>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Jawaban kamu</th>
  </tr>`;
        document.getElementById('wrong-answer-table').innerHTML = foo;
      }
    } else {
      feedbackModalTitle.innerHTML = '<i class="bi bi-exclamation-circle-fill text-danger me-2"></i>Ada yang salah, coba di baca lagi';
      let foo = '';
      for (let wrongAnswerResponse of wrongAnswerResponses) {
        foo += '<tr>';
        foo += `<td scope="row">${wrongAnswerResponse.question}</td>`;
        foo += `<td>${wrongAnswerResponse.answer}</td>`;
        foo += '</tr>'
      }
      document.getElementById('wrong-answer-header').innerHTML = `<tr>
      <th scope="col">Pertanyaan</th>
      <th scope="col">Jawaban kamu</th>
  </tr>`;
      document.getElementById('wrong-answer-table').innerHTML = foo;
    }
    feedbackModal.toggle();
  }

  // evolution tree
  const species = document.querySelectorAll('.species-canvas');
  const creatureEvolutions = document.querySelectorAll('.creatureEvolution-canvas');
  const branchDescription = document.querySelector('.branch-description');
  const taxonomyExpand = document.querySelector('.taxonomy-expand');
  const taxonomyClosed = document.querySelector('.taxonomy-close');
  const taxonomyClassification = document.querySelector('.taxonomy-classification');
  const creatureGenus = document.querySelector('.creature-genus');
  const creatureFamily = document.querySelector('.creature-family');
  const creatureOrder = document.querySelector('.creature-order');
  const creatureClass = document.querySelector('.creature-class');
  const creaturePhylum = document.querySelector('.creature-phylum');
  const creatureKingdom = document.querySelector('.creature-kingdom');
  const creatureDomain = document.querySelector('.creature-domain');
  let checker = 1;
  let isExpanded = false;
  for (let i = 0; i < species.length; i++) {
    species[i].addEventListener('click', function () {
      let creature = species[i].querySelector('#creature').value;
      creature = JSON.parse(creature);
      branchDescription.classList.remove('d-none');
      branchDescription.querySelector('.creature-img').src = creature.image_path;
      branchDescription.querySelector('.creature-name').innerHTML = creature.name;
      branchDescription.querySelector('.creature-description').innerHTML = creature.description;
      let genus = species[i].querySelector('#creature').getAttribute('data-genus');
      let family = species[i].querySelector('#creature').getAttribute('data-family');
      let order = species[i].querySelector('#creature').getAttribute('data-order');
      let classes = species[i].querySelector('#creature').getAttribute('data-class');
      let phylum = species[i].querySelector('#creature').getAttribute('data-phylum');
      let kingdom = species[i].querySelector('#creature').getAttribute('data-kingdom');
      let domain = species[i].querySelector('#creature').getAttribute('data-domain');
      creatureGenus.innerHTML = genus;
      creatureFamily.innerHTML = family;
      creatureOrder.innerHTML = order;
      creatureClass.innerHTML = classes;
      creaturePhylum.innerHTML = phylum;
      creatureKingdom.innerHTML = kingdom;
      creatureDomain.innerHTML = domain;
      if (checker == 1) {
        taxonomyExpand.classList.remove('d-none');
      }
    });
  }

  for (let i = 0; i < creatureEvolutions.length; i++) {
    creatureEvolutions[i].addEventListener('click', function () {
      let creatureEvolution = creatureEvolutions[i].querySelector('#creatureEvolution').value;
      dataValue = "";
      creatureEvolution = JSON.parse(creatureEvolution);
      branchDescription.classList.remove('d-none');
      branchDescription.querySelector('.creature-img').src = creatureEvolution.image_path;
      branchDescription.querySelector('.creature-name').innerHTML = creatureEvolution.name;
      branchDescription.querySelector('.creature-description').innerHTML = creatureEvolution.description;
      taxonomyExpand.classList.add('d-none');
      checker = 1;
    });
  }

  branchDescription.addEventListener('click', function () {
    if (checker == 1) {
      if (!isExpanded) {
        branchDescription.style.height = '260px';
        document.querySelector('.inner-branch-description').classList.remove('d-none');
        isExpanded = true;
      } else {
        branchDescription.style.height = '100px';
        document.querySelector('.inner-branch-description').classList.add('d-none');
        isExpanded = false;
      }
    }
  });

  taxonomyExpand.addEventListener('click', function () {
    checker = 0;
    taxonomyClosed.classList.remove('d-none');
    taxonomyClassification.classList.remove('d-none');
    branchDescription.style.bottom = '25%';
    branchDescription.style.right = '25%';
    branchDescription.style.width = '900px';
    branchDescription.style.height = '500px';
    branchDescription.style.backgroundColor = 'rgba(0, 0, 0, 1)';
    branchDescription.style.transition = '0.3s';
    taxonomyExpand.classList.add('d-none');
  });

  taxonomyClosed.addEventListener('click', function () {
    checker = 1;
    taxonomyClassification.classList.add('d-none');
    branchDescription.style.width = '455px';
    branchDescription.style.height = '260px';
    branchDescription.style.position = 'fixed';
    branchDescription.style.bottom = '2%';
    branchDescription.style.right = '6.5%';
    branchDescription.style.backgroundColor = 'rgba(255, 255, 255, .25)';
    branchDescription.style.transition = '0.3s';
    taxonomyClosed.classList.add('d-none');
    taxonomyExpand.classList.remove('d-none');
    isExpanded = false;
  });
})();