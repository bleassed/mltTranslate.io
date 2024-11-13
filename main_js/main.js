function copyText(htmlElement) {
    if (!htmlElement){
        return;
    }
    let elementText = htmlElement.innerText;
    let inputElement = document.createElement('input');
    inputElement.setAttribute('value' , elementText);
    document.body.appendChild(inputElement);
    inputElement.select();
    document.execCommand('copy');
  }
  document.querySelector('#copy_text_btn').onclick =
  function ()
  {
    copyText(document.querySelector('#copy_text'));
  }


  function dark_mode(){
    const body = document.body
    const wasDarkMode = localStorage.getItem('dark_mode') === 'true'
    localStorage.setItem('dark_mode', !wasDarkMode)
    body.classList.toggle('dark_mode', !wasDarkMode)
  }

  document.querySelector('.theme_btn').addEventListener('click', dark_mode)

  function onload(){
    document.body.classList.toggle('dark_mode', localStorage.getItem('dark_mode') === 'true')
  }
  document.addEventListener('DOMContentLoaded',onload)