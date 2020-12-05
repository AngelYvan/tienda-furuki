let images = [
  "menufondo.jpg",
  "menu01.jpg",
  "menu02.jpg",

];

const front = document.querySelector('.photo_front');
const left = document.querySelector('.photo_left');
const right = document.querySelector('.photo_right');
const leftArrow = document.querySelector('.leftarrow');
const rightArrow = document.querySelector('.rightarrow');
const dots = document.querySelectorAll('.dots');
dots[1].classList.add('highlight');
let counter = 1;

const slideRight = (event) => {
  event.preventDefault();
  dotRight();
  for (i = 0; i < images.length; i++) {
    if (front.src === images[i]) {
      if (i + 1 >= images.length) {
        front.src = images[0];
        left.src = images[images.length - 1];
        right.src = images[1];
        break;
      } else {
        front.src = images[i + 1];
        left.src = images[i];
        if (i + 2 >= images.length) {
          right.src = images[0];
        } else right.src = images[i + 2];
        break;
      }
    }
  }
}

const slideLeft = (event) => {
  event.preventDefault();
  dotLeft();
  for (i = 0; i < images.length; i++) {
    if (front.src === images[i]) {
      if (i - 1 < 0) {
        front.src = images[images.length - 1];
        left.src = images[images.length - 2];
        right.src = images[0]
        break;
      } else {
        front.src = images[i - 1];
        if (i - 2 < 0) {
          left.src = images[images.length - 1];
        } else left.src = images[i - 2];
        right.src = images[i]
        break;
      }
    }
  }
}

const removeClasses = () => {
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove('highlight')
  }
};

const dotRight = () => {
  removeClasses();
  if (counter===2) {
    counter-=2;
  } else {
    counter++;
  }
  document.getElementById('dot'+counter).classList.add('highlight');
};

const dotLeft = () => {
  removeClasses();
  if (counter!==0) {
    counter--;
  } else {
    counter+=2;
  }
  document.getElementById('dot'+counter).classList.add('highlight');
};

leftArrow.addEventListener('click', slideLeft);
rightArrow.addEventListener('click', slideRight);

const dotUpdate = () => {
  for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener('click', () => {
      counter = i;
      removeClasses();
      dots[i].classList.add('highlight');
      front.src = images[i];
      if (i===0) {
        left.src = images[2];
      } else {
        left.src = images[i-1];
      }
      if (i===2) {
        right.src = images[0];
      } else {
        right.src = images[i+1];
      }
    });
  };
};

dotUpdate();