const filter = () => {
  let params = '?';
  let name = document.getElementById('filter_name').value.trim();
  let breed = document.getElementById('filter_breed').value.trim();

  if (name) { params += `name=${name}` + ((breed)? '&' : ''); }
  if (breed) { params += `breed=${breed}`; }

  let xhr = new XMLHttpRequest();
  let url = `http://127.0.0.1:8000/api/dogs` + ((params !== '?')? params : '');

  xhr.open("GET", url);
  xhr.send();
  xhr.onload = () => {
    let response = JSON.parse(xhr.response);
    document.getElementById('m_json_url').textContent = url;
    document.getElementById('m_json').textContent = (response.length)?
      JSON.stringify(response, undefined, 2) : 'No data to show';

    let element = document.getElementById('web_preview');
    element.innerHTML = '';
    for (let i = 0; i < response.length; i++) {
      console.log(response[i]);
      element.innerHTML += 
        `<div class="m-web-preview-card">` +
          `<div class="m-card-img">` +
            `<img src="${response[i].image}" alt="">` +
          `</div>` +
          `<div class="m-card-info">` +
            `<div class="m-card-info-attributes">` +
              `<p>Name:</p>` +
              `<p>Breed:</p>` +
            `</div>` +
            `<div class="m-card-info-data">` +
              `<p>${response[i].name}</p>` +
              `<p>${response[i].breed}</p>` +
            `</div>` +
          `</div>` +
        `</div>`;
    }
  }
}
  
function switchTab(tab) {
  let tabs = document.getElementsByClassName("m-tabs");

  for (let i = 0; i < tabs.length; i++) {
    tabs[i].style.display = "none";  
  }

  document.getElementById(tab).style.display = "flex";  
}

filter();