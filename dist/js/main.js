const navigationHeight = document.querySelector('.navbar').offsetHeight;

// console.log(navigationHeight);

document.documentElement.style.setProperty('--scroll-padding', navigationHeight + 14 +"px")