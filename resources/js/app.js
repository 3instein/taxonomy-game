// require('./bootstrap');

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

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

  // let isOpen = true;
  // const opener = document.querySelector('.open-sidebar');
  // const sideBar = document.querySelector('.sidebar');
  // const canvas = document.querySelector('.canvas');
  // const score = document.querySelector('.score');
  // opener.addEventListener('click', function () {
  //   if (!isOpen) {
  //     sideBar.style.width = '400px';
  //     opener.style.left = 'calc(400px - 64px)';
  //     canvas.style.marginLeft = '400px';
  //     score.style.marginLeft = '400px';
  //     isOpen = true;
  //   } else {
  //     sideBar.style.width = '0';
  //     opener.style.left = 'calc(0% - 64px)';
  //     canvas.style.marginLeft = '0';
  //     score.style.marginLeft = '0';
  //     isOpen = false;
  //   }
  // });

  // bg music
  let audio = document.getElementById('bg-music');
  function responseMouse() {
    audio.play();
  }

  document.addEventListener('click', function () {
    responseMouse();
  });

  // leaderboard modal
  let leaderboardModal = new bootstrap.Modal(document.getElementById('leaderboardModal'));
  let leaderboardBtn = document.querySelector('.leaderboard-btn');
  leaderboardBtn.addEventListener('click', function () {
    leaderboardModal.toggle();
  });

  // channging environemnt button
  let quizModal = new bootstrap.Modal(document.getElementById('biome-modal'));
  let userPoint = document.querySelector('#user-point');
  let treeModal = new bootstrap.Modal(document.getElementById('tree-modal'));
  const earth = document.querySelector('.circle');
  const canvas = document.querySelector('.canvas');
  const landBtn = document.querySelector('.land-btn');
  const seaBtn = document.querySelector('.sea-btn');
  const earthBtn = document.querySelector('.earth-btn')
  const tree = document.querySelector('.tree-btn');
  const seaBiome = document.querySelector('.sea-biome');
  const finishBtn = document.querySelector('.finish-btn');
  const evolutionTree = document.querySelector('.evolution-trees');
  if (userPoint.value == 200) {
    const creatureLength = document.getElementById('creature-length').value;
    const userCreatureLength = document.getElementById('creature-length').getAttribute('data-user-creature');
    const evolutionLength = document.getElementById('evolution-length').value;
    const userEvolutionLength = document.getElementById('evolution-length').getAttribute('data-user-evolution');
    document.querySelector('.biome-btn').style.height = '300px';
    finishBtn.addEventListener('click', function () {
      if (userCreatureLength == creatureLength && userEvolutionLength == evolutionLength) {
        quizModal.toggle();
        document.querySelector('.biome-prerequisite').innerHTML = `Saat ini point kamu ${userPoint.value}, untuk menyelesaikan game point kamu butuh 300 point dan membuka semua spesies beserta evolusinya!`;
      } else {
        quizModal.toggle();
        document.querySelector('.prerequisite-modal-title').innerHTML = '<i class="bi bi-exclamation-circle-fill text-danger me-2"></i>Permainan belum berakhir';
        document.querySelector('.biome-prerequisite').innerHTML = `Saat ini kamu belum bisa menyelesaikan game karena kamu belum membuka semua spesies dan evolusinya!`;
        document.querySelector('.accept-quiz-btn').classList.add('d-none')
      }
    });
  } else if (userPoint.value == 300) {
    finishBtn.addEventListener('click', function () {
      quizModal.toggle();
      document.querySelector('.prerequisite-modal-title').innerHTML = '🎉 Permainan sudah berakhir';
      document.querySelector('.biome-prerequisite').innerHTML = `Selamat kamu telah menyelesaikan permainan! Tetap terus belajar ya`;
      document.querySelector('.accept-quiz-btn').classList.add('d-none')
    });
  }

  landBtn.addEventListener('click', function () {
    if (userPoint.value < 200) {
      quizModal.toggle();
      document.querySelector('.biome-prerequisite').innerHTML = `Saat ini point kamu ${userPoint.value}, untuk akses biome selanjutnya kamu butuh 200 point!`;
    } else {
      canvas.style.backgroundImage = "url('../assets/land.jpg')";
      canvas.style.backgroundRepeat = 'no-repeat';
      canvas.style.backgroundSize = '100% 100%';
      earth.style.display = 'none';
      seaBiome.classList.remove('d-none');
      evolutionTree.classList.add('d-none');
    }
  });


  seaBtn.addEventListener('click', function () {
    if (userPoint.value < 100) {
      quizModal.toggle();
      document.querySelector('.biome-prerequisite').innerHTML = `Saat ini point kamu ${userPoint.value}, untuk akses biome selanjutnya kamu butuh 100 point!`;
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
    treeModal.toggle();
    // canvas.style.background = 'rgb(92,107,40)';
    // canvas.style.background = 'radial-gradient(circle, rgba(92,107,40,1) 0%, rgba(0,0,0,1) 100%)';
    // earth.style.display = 'none';
    // seaBiome.classList.add('d-none');
    // evolutionTree.classList.remove('d-none');
    // evolutionTree.style.width = '100%';
    // evolutionTree.style.height = '100%';
  });

  // user creature card
  let userCreature = document.querySelectorAll('.card-user-creature');
  let userCreatureEvolutionSection = document.querySelector('.user-creature-evolution');
  for (let i = 0; i < userCreature.length; i++) {
    userCreature[i].addEventListener('click', function () {
      let creature = userCreature[i].querySelector('#user-creature').value;
      let userCreatureDetailModal = new bootstrap.Modal(document.getElementById('user-creature-detail'));
      creature = JSON.parse(creature);
      let userCreatureEvolution = creature.evolutions;
      let userCreatureName = creature.name;
      let userCreatureCommonName = creature.common_name;
      let userCreatureImage = creature.image_path;
      let userCreatureDescription = creature.description;
      let species = userCreature[i].querySelector('#user-creature').getAttribute('data-species');
      let genus = userCreature[i].querySelector('#user-creature').getAttribute('data-genus');
      let family = userCreature[i].querySelector('#user-creature').getAttribute('data-family');
      let order = userCreature[i].querySelector('#user-creature').getAttribute('data-order');
      let classes = userCreature[i].querySelector('#user-creature').getAttribute('data-class');
      let phylum = userCreature[i].querySelector('#user-creature').getAttribute('data-phylum');
      let kingdom = userCreature[i].querySelector('#user-creature').getAttribute('data-kingdom');
      let domain = userCreature[i].querySelector('#user-creature').getAttribute('data-domain');
      document.querySelector('.user-creature-detail-common-name').innerHTML = userCreatureCommonName;
      document.querySelector('.user-creature-detail-name').innerHTML = userCreatureName;
      document.querySelector('.user-creature-detail-description').innerHTML = userCreatureDescription;
      document.querySelector('.user-creature-detail-domain').innerHTML = `Domain : ${domain}`;
      document.querySelector('.user-creature-detail-kingdom').innerHTML = `Kingdom : ${kingdom}`;
      document.querySelector('.user-creature-detail-phylum').innerHTML = `Phylum : ${phylum}`;
      document.querySelector('.user-creature-detail-classes').innerHTML = `Class : ${classes}`;
      document.querySelector('.user-creature-detail-order').innerHTML = `Order : ${order}`;
      document.querySelector('.user-creature-detail-family').innerHTML = `Family : ${family}`;
      document.querySelector('.user-creature-detail-genus').innerHTML = `Genus : ${genus}`;
      document.querySelector('.user-creature-detail-species').innerHTML = `Species : ${species}`;
      document.querySelector('.user-creature-detail-image').src = userCreatureImage;
      userCreatureEvolutionSection.innerHTML = "";
      for (let j = 0; j < userCreatureEvolution.length; j++) {
        let data = '<div class="row mb-3">';
        data += '<div class="col-lg-12">';
        data += '<div class="d-flex align-items-center">';
        data += `<img src="${userCreatureEvolution[j].image_path}" width="80" height="80" />`;
        data += '<div class="flex-column ms-3">';
        data += `<p class="fw-bold mb-0">${userCreatureEvolution[j].name}</p>`;
        data += `<p class="mb-3">${userCreatureEvolution[j].description}</p>`;
        data += '</div>';
        data += '</div>';
        data += '</div>';
        userCreatureEvolutionSection.innerHTML = userCreatureEvolutionSection.innerHTML + data;
      }

      userCreatureDetailModal.toggle();
    });
  }

  // quiz modal
  const questionText = document.querySelectorAll('.question-text');
  const question = document.querySelectorAll('#question');
  const answer = document.querySelectorAll('#answer');
  const nextBtn = document.querySelectorAll('.btn-next');
  const backBtn = document.querySelectorAll('.btn-back');
  const point = document.querySelectorAll('#point');
  let feedbackModal = new bootstrap.Modal(document.getElementById('feedback-modal'));
  let wrongAnswer = [];
  let correctCounter = 0;
  for (let i = 0; i < question.length; i++) {
    nextBtn[i].addEventListener('click', function (e) {
      let value = question[i].value;
      if (value.toLowerCase() === answer[i].value.toLowerCase()) {
        correctCounter++;
        // let gainedPoint = parseInt(userPoint.value) + parseInt(point[i].value)
        // userPoint.value = gainedPoint;
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
        if (correctCounter == question.length) {
          let gainedPoint = parseInt(userPoint.value) + 100
          userPoint.value = gainedPoint;
          document.querySelector('#quiz-form').submit();
        }
      }
    });

    backBtn[i].addEventListener('click', function () {
      correctCounter--;
    });
  }

  if (document.getElementById('feedback-toggle')) {
    let wrongAnswerResponses = JSON.parse(document.getElementById('feedback-toggle').value);
    let feedbackModalTitle = document.querySelector('.feedback-title');
    if (userPoint.value == 100) {
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
    } else if (userPoint.value == 200) {
      feedbackModalTitle.innerHTML = 'Selamat anda telah membuka bioma darat 🪨';
      if (wrongAnswerResponses.length > 0) {
        feedbackModalTitle.innerHTML = 'Selamat anda telah membuka bioma darat 🪨, tapi masih ada yang salah nih. Coba di baca lagi';
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
    } else if (userPoint.value == 300) {
      feedbackModalTitle.innerHTML = 'Selamat anda telah menyelesaikan permainan 🪨';
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
  // const species = document.querySelectorAll('.species-canvas');
  // const creatureEvolutions = document.querySelectorAll('.creatureEvolution-canvas');
  // const branchDescription = document.querySelector('.branch-description');
  // const taxonomyExpand = document.querySelector('.taxonomy-expand');
  // const taxonomyClosed = document.querySelector('.taxonomy-close');
  // const taxonomyClassification = document.querySelector('.taxonomy-classification');
  // const creatureGenus = document.querySelector('.creature-genus');
  // const creatureFamily = document.querySelector('.creature-family');
  // const creatureOrder = document.querySelector('.creature-order');
  // const creatureClass = document.querySelector('.creature-class');
  // const creaturePhylum = document.querySelector('.creature-phylum');
  // const creatureKingdom = document.querySelector('.creature-kingdom');
  // const creatureDomain = document.querySelector('.creature-domain');
  // let checker = 1;
  // let isExpanded = false;
  // for (let i = 0; i < species.length; i++) {
  //   species[i].addEventListener('click', function () {
  //     let creature = species[i].querySelector('#creature').value;
  //     creature = JSON.parse(creature);
  //     branchDescription.classList.remove('d-none');
  //     branchDescription.querySelector('.creature-img').src = creature.image_path;
  //     branchDescription.querySelector('.creature-name').innerHTML = creature.name;
  //     branchDescription.querySelector('.creature-description').innerHTML = creature.description;
  //     let genus = species[i].querySelector('#creature').getAttribute('data-genus');
  //     let family = species[i].querySelector('#creature').getAttribute('data-family');
  //     let order = species[i].querySelector('#creature').getAttribute('data-order');
  //     let classes = species[i].querySelector('#creature').getAttribute('data-class');
  //     let phylum = species[i].querySelector('#creature').getAttribute('data-phylum');
  //     let kingdom = species[i].querySelector('#creature').getAttribute('data-kingdom');
  //     let domain = species[i].querySelector('#creature').getAttribute('data-domain');
  //     creatureGenus.innerHTML = genus;
  //     creatureFamily.innerHTML = family;
  //     creatureOrder.innerHTML = order;
  //     creatureClass.innerHTML = classes;
  //     creaturePhylum.innerHTML = phylum;
  //     creatureKingdom.innerHTML = kingdom;
  //     creatureDomain.innerHTML = domain;
  //     if (checker == 1) {
  //       taxonomyExpand.classList.remove('d-none');
  //     }
  //   });
  // }

  // for (let i = 0; i < creatureEvolutions.length; i++) {
  //   creatureEvolutions[i].addEventListener('click', function () {
  //     let creatureEvolution = creatureEvolutions[i].querySelector('#creatureEvolution').value;
  //     dataValue = "";
  //     creatureEvolution = JSON.parse(creatureEvolution);
  //     branchDescription.classList.remove('d-none');
  //     branchDescription.querySelector('.creature-img').src = creatureEvolution.image_path;
  //     branchDescription.querySelector('.creature-name').innerHTML = creatureEvolution.name;
  //     branchDescription.querySelector('.creature-description').innerHTML = creatureEvolution.description;
  //     taxonomyExpand.classList.add('d-none');
  //     checker = 1;
  //   });
  // }

  // branchDescription.addEventListener('click', function () {
  //   if (checker == 1) {
  //     if (!isExpanded) {
  //       branchDescription.style.height = '260px';
  //       document.querySelector('.inner-branch-description').classList.remove('d-none');
  //       isExpanded = true;
  //     } else {
  //       branchDescription.style.height = '100px';
  //       document.querySelector('.inner-branch-description').classList.add('d-none');
  //       isExpanded = false;
  //     }
  //   }
  // });

  // taxonomyExpand.addEventListener('click', function () {
  //   checker = 0;
  //   taxonomyClosed.classList.remove('d-none');
  //   taxonomyClassification.classList.remove('d-none');
  //   branchDescription.style.bottom = '25%';
  //   branchDescription.style.right = '25%';
  //   branchDescription.style.width = '900px';
  //   branchDescription.style.height = '500px';
  //   branchDescription.style.backgroundColor = 'rgba(0, 0, 0, 1)';
  //   branchDescription.style.transition = '0.3s';
  //   taxonomyExpand.classList.add('d-none');
  // });

  // taxonomyClosed.addEventListener('click', function () {
  //   checker = 1;
  //   taxonomyClassification.classList.add('d-none');
  //   branchDescription.style.width = '455px';
  //   branchDescription.style.height = '260px';
  //   branchDescription.style.position = 'fixed';
  //   branchDescription.style.bottom = '2%';
  //   branchDescription.style.right = '6.5%';
  //   branchDescription.style.backgroundColor = 'rgba(255, 255, 255, .25)';
  //   branchDescription.style.transition = '0.3s';
  //   taxonomyClosed.classList.add('d-none');
  //   taxonomyExpand.classList.remove('d-none');
  //   isExpanded = false;
  // });
})();