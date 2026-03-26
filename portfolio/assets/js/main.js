// Smooth close menu on link click
document.querySelectorAll('.nav__menu a').forEach(a=>{
  a.addEventListener('click', ()=> document.body.classList.remove('menu-open'));
});

// Theme toggle + remember
const btn = document.getElementById('toggleTheme');
const saved = localStorage.getItem('theme');
if(saved === 'light') document.body.classList.add('light');

btn?.addEventListener('click', ()=>{
  document.body.classList.toggle('light');
  localStorage.setItem('theme', document.body.classList.contains('light') ? 'light':'dark');
});
