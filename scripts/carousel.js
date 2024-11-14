const disableButtonIfUnnecessary = (carousel) => {
  const nav = carousel.querySelector('.carousel__nav');
  const previousButton = nav.querySelector('.carousel__button--prev')
  const nextButton = nav.querySelector('.carousel__button--next')
  const imgAmount = carousel.querySelectorAll('.carousel__img').length;

  const maxItems = parseInt(/\d+/.exec(carousel.getAttribute('style'))[0]);

  if (imgAmount <= maxItems) {
    previousButton.style = 'display: none';
    nextButton.style = 'display: none';
  } else {
    previousButton.style = 'display: initial';
    nextButton.style = 'display: initial';
  }
}

const setPageIndicators = (carousel, index) => {
  const pageIndicators = carousel.querySelector('.carousel__page-indicator').children;

  for (let i = 0; i < pageIndicators.length; i++) {
    if (i === index) {
      pageIndicators[i].classList.add('carousel__page-indicator-dot--active');
      continue;
    }
    pageIndicators[i].classList.remove('carousel__page-indicator-dot--active');
  };
}

const setupPageIndicator = (carousel) => {
  const nav = carousel.querySelector('.carousel__nav');
  const pageIndicator = document.createElement('div');
  pageIndicator.className = 'carousel__page-indicator';
  const imgAmount = carousel.querySelectorAll('.carousel__img').length;
  const maxItems = parseInt(/\d+/.exec(carousel.getAttribute('style'))[0]);
  const maxIndex = Math.ceil(imgAmount / maxItems) - 1;
  for (let i = 0; i <= maxIndex; i++) {
    const dot = document.createElement('span');
    dot.className = 'carousel__page-indicator-dot';
    dot.addEventListener('click', _ => {
      nav.style = `--slider-index: ${i}`;
      setPageIndicators(carousel, i);
    });
    pageIndicator.appendChild(dot);
  }
  carousel.appendChild(pageIndicator);
}

const setupButtons = (carousel) => {
  const nav = carousel.querySelector('.carousel__nav');
  const imgAmount = carousel.querySelectorAll('.carousel__img').length;

  nav.querySelector('.carousel__button--prev').addEventListener('click', _ => {
    const maxItems = parseInt(/\d+/.exec(carousel.getAttribute('style'))[0]);
    const maxIndex = Math.ceil(imgAmount / maxItems) - 1;
    const index = parseInt(/\d+/.exec(nav.getAttribute('style'))[0]);
    if (index === 0) {
      nav.style = `--slider-index: ${maxIndex}`;
      setPageIndicators(carousel, maxIndex);
      return
    };
    nav.style = `--slider-index: ${index - 1}`;
    setPageIndicators(carousel, index - 1);
  });
  nav.querySelector('.carousel__button--next').addEventListener('click', _ => {
    const maxItems = parseInt(/\d+/.exec(carousel.getAttribute('style'))[0]);
    const maxIndex = Math.ceil(imgAmount / maxItems) - 1;
    const index = parseInt(/\d+/.exec(nav.getAttribute('style'))[0]);
    if (index === maxIndex) {
      nav.style = `--slider-index: 0`;
      setPageIndicators(carousel, 0);
      return
    }
    nav.style = `--slider-index: ${index + 1}`;
    setPageIndicators(carousel, index + 1);
  });

  disableButtonIfUnnecessary(carousel);
  setPageIndicators(carousel, 0);
}

const setupImageSelection = (carousel) => {
  const figureImg = carousel.querySelector('.carousel__preview img');
  const figureCaption = carousel.querySelector('.carousel__preview figcaption p');
  const images = carousel.querySelectorAll('.carousel__img');

  images.forEach(image => {
    image.addEventListener('click', _ => {
      if (image.classList.contains('carousel__img--active')) return;
      images.forEach(img => img.classList.remove('carousel__img--active'));
      image.classList.add('carousel__img--active');

      figureImg.src = image.getAttribute('src');
      figureImg.alt = image.getAttribute('caption');
      figureCaption.textContent = image.getAttribute('caption');
    });
  });
}

const toggleOverlay = (enable = false) => {
  const overlay = document.querySelector('.preview-overlay');
  if (!enable) {
    overlay.style = 'display: none';
    return;
  };
  overlay.style = 'display: flex';
}

const setupImagePreviewOverlay = (carousel) => {
  const figureImg = carousel.querySelector('.carousel__preview img');
  const figureCaption = carousel.querySelector('.carousel__preview figcaption');
  const overlayCloseBg = document.querySelector('.preview-overlay__close');
  const overlayCloseIcon = document.querySelector('.preview-overlay__close-icon');
  const overlayImg = document.querySelector('.preview-overlay__img');

  figureImg.addEventListener('click', _ => {
    toggleOverlay(true);
    overlayImg.src = figureImg.src;
    overlayImg.alt = figureCaption.textContent;
  });
  overlayCloseBg.addEventListener('click', _ => toggleOverlay());
  overlayCloseIcon.addEventListener('click', _ => toggleOverlay());
}

const setupInitPreview = (carousel) => {
  const figureImg = carousel.querySelector('.carousel__preview img');
  const figureCaption = carousel.querySelector('.carousel__preview figcaption p');
  const images = carousel.querySelectorAll('.carousel__img');

  figureImg.src = images[0].getAttribute('src');
  figureImg.alt = images[0].getAttribute('caption');
  figureCaption.textContent = images[0].getAttribute('caption');
  images[0].classList.add('carousel__img--active');
}

const initCarousels = _ => {
  document.querySelectorAll('.carousel').forEach(carousel => {
    setupPageIndicator(carousel);
    setupButtons(carousel);
    setupInitPreview(carousel);
    setupImageSelection(carousel);
    setupImagePreviewOverlay(carousel);
  });
}

const onBodyResize = _ => {
  const carousels = document.querySelectorAll('.carousel');
  carousels.forEach(carousel => {
    if (window.innerWidth <= 639) {
      carousel.style = '--amount-carousel-images: 3;';
    } else if (window.innerWidth <= 767) {
      carousel.style = '--amount-carousel-images: 4;';
    } else if (window.innerWidth <= 991) {
      carousel.style = '--amount-carousel-images: 5;';
    } else {
      carousel.style = '--amount-carousel-images: 6;';
    }

    disableButtonIfUnnecessary(carousel);
  });
}

document.addEventListener('DOMContentLoaded', _ => {
  initCarousels();
  onBodyResize()
});

window.addEventListener("resize", onBodyResize);
