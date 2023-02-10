const getActivity = () => {
  let xhr = new XMLHttpRequest();

  let url = "https://www.boredapi.com/api/activity";

  xhr.open("GET", url);
  xhr.send();
  xhr.onload = () => {
    let response = JSON.parse(xhr.response);
    let element = document.getElementById('m_request_api_response');
    element.innerHTML = '';
    element.innerHTML += 
      `<div class="m-response-item">` +
        `<p>${response.activity}</p>` +
      `</div>` +
      `<div class="m-response-item">` +
        `<p>Activity Type: </p>` +
        `<p>${response.type}</p>` +
      `</div>` +
      `<div class="m-response-item">` +
        `<p>Participants: </p>` +
        `<p>${response.participants}</p>` +
      `</div>` + ((response.link !== "") ?
      `<div class="m-response-item">` +
        `<p>Documentaion: </p>` +
        `<a href="${response.link}" target="_blank">Link</a>` +
      `</div>` : ``);
  }
}

getActivity();