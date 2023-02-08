
let reset = 0;
const input = document.getElementsByClassName('m-input')[0];
const buttons = document.getElementsByClassName('m-playable-button');

Array.from(buttons).forEach(function(button) {
  button.addEventListener('click', () => {
    

    let value = button.innerHTML;
    switch (value) {
      case 'AC':
        input.innerHTML = '';
        break;
      case '=':
        const span = document.createElement("span");
        const spanText = document.createTextNode(' = ' + eval(input.innerHTML));
        span.appendChild(spanText);
        input.appendChild(span);
        reset = 1;
        break;
      default:
        if (reset === 1) {
          input.innerHTML = '';
          reset = 0;
        }
        input.append(value);
        break;
    }
    
  });
});