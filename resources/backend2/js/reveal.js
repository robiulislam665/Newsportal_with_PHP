// Refs
const wrapCta = document.querySelector('#wrap-cta'),
//START Division to Districts
  //Divisions
btnCta1 = document.querySelector('#BGD1806'),
btnCta2 = document.querySelector('#BGD3255'),
  //Districts Reveal
content1 = document.querySelector('#content1'),
content2 = document.querySelector('#content2'),
  //Districts Close / Go back to Divisions
btnClose1 = document.querySelector('#close1'),
btnClose2 = document.querySelector('#close2'),
//END Division to Districts
//START Disctricts to Sub-Districts
  //Districts
btnRj1 = document.querySelector('#rjd1'),
  //Sub-Districts Reveal
contentd1 = document.querySelector('#contentd1'),
  //Sub-Districts Close / Go back to Districts
btnClosed1 = document.querySelector('#closed1');
//END Disctricts to Sub-Districts



// Anime.js Commons Values for SVG Morph
const common = {
  targets: '.polymorph',
  easing: 'easeOutQuad',
  duration: 600,
  loop: false };



// Show content1
btnCta1.addEventListener('click', () => {
  // Elements apparence
  wrapCta.classList.remove('active');
  content1.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 215,110 215,0' }] });
//215,110 0,110 186,86 215,0

});

// Show content2
btnCta2.addEventListener('click', () => {
  // Elements apparence
  wrapCta.classList.remove('active');
  content2.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 215,110 215,0' }] });
//215,110 0,110 186,86 215,0

});


// Show contentd1
btnRj1.addEventListener('click', () => {
  // Elements apparence
  wrapCta.classList.remove('active');
  contentd1.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 215,110 215,0' }] });
//215,110 0,110 186,86 215,0

});


// Hide content1 
btnClose1.addEventListener('click', () => {
  // Elements apparence
  content1.classList.remove('active');
  wrapCta.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 0,0 215,0' }] });


});

// Hide content2
btnClose2.addEventListener('click', () => {
  // Elements apparence
  content2.classList.remove('active');
  wrapCta.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 0,0 215,0' }] });


});

// Hide contentd1
btnClosed1.addEventListener('click', () => {
  // Elements apparence
  contentd1.classList.remove('active');
  //content2.classList.remove('active');
  //wrapCta.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 0,0 215,0' }] });


});