document.addEventListener('DOMContentLoaded', _ => {
  const header = document.querySelector('.site-header');
  const heroSection = document.querySelector('.page-design section.hero-section');

  if (heroSection !== null)
    heroSection.style = `margin-top: -${header.clientHeight}px;`;

  window.addEventListener('scroll', _ => {
    if (window.scrollY == 0) {
      header.style = 'background-color: transparent; backdrop-filter: unset;';
    } else {
      header.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
      header.style.backdropFilter = 'blur(8px)';
    }
  });
});