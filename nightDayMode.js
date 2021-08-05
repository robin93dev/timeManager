let $nightDay = document.querySelector('#nightDay');
  
const nightDay = ()=>{
 document.body.classList.toggle('night')
}

$nightDay.addEventListener('click',nightDay);