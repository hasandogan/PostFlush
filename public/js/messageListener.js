    const url = new URL('http://localhost:8181/.well-known/mercure');
    // Add topic to listen to
    url.searchParams.append('topic', 'live_message');
    /*
    const eventSource = new EventSource(url);
    eventSource.onmessage = event => {
    console.log("Without Credential:");
    console.log(event);
    triggerElement(event)
}
    */

    const es = new EventSourcePolyfill(url, {
    headers: {
    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsibGl2ZV9tZXNzYWdlIl0sInN1YnNjcmliZSI6WyJsaXZlX21lc3NhZ2UiXX19.ZExNcHj3ehEyAQXbNv70JW8e_qX62KCEFLoIwQMPMwI' ,
}
});
    es.withCredentials = true;

    es.onmessage = message => {
    triggerElement(message)
}

    function triggerElement(message) {
    const data = JSON.parse(message.data);
    let allData =  data.username + " : "  + data.message;
    createBubble(allData)
    }
    function createBubble(test){

    var element = document.createElement("div");
    element.classList.add('bubble');
        element.style.position = "absolute";
        element.style.left = getRndInteger(0, 1600)+'px';
        element.style.top = getRndInteger(0, 500)+'px';
    element.appendChild(document.createTextNode(test));
    document.getElementById('border').appendChild(element);
    setTimeout(() => {  element.parentNode.removeChild(element); }, 4000);
    }
    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min) ) + min;
    }
