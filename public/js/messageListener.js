const url = new URL('http://localhost:8181/.well-known/mercure');
// Add topic to listen to
url.searchParams.append('topic', 'live_message');

const es = new EventSourcePolyfill(url, {
    headers: {
        'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsibGl2ZV9tZXNzYWdlIl0sInN1YnNjcmliZSI6WyJsaXZlX21lc3NhZ2UiXX19.ZExNcHj3ehEyAQXbNv70JW8e_qX62KCEFLoIwQMPMwI',
    }
});
es.withCredentials = true;

es.onmessage = message => {
    const data = JSON.parse(message.data);
    let allData = data.username + " : " + data.message;
    createBubble(allData);
}

function createBubble(test) {
    let element = document.createElement("div");
    element.classList.add('bubble');
    element.appendChild(document.createTextNode(test));
    document.querySelector('#border').appendChild(element);
    setTimeout(_ => {
        element.parentNode.removeChild(element);
    }, 8000);
    document.querySelector("#button").disabled = true;
    setTimeout(_ => {
        document.querySelector("#button").disabled = false;
    }, 5000);
}

function fetchData() {
    const data = `username=${document.querySelector('#username').value}&message=${document.querySelector('#message').value}`;
    fetch("message", {
        method: 'POST',
        body: data,
        headers : {
            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",                                                                                                
            "Access-Control-Origin": "*"
        }
    });
}