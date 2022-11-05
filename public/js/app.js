const app = {

	init() {
		this.eventListener();
		this.listen();
	},

	listen() {
		const url = new URL('http://localhost:8181/.well-known/mercure');
		url.searchParams.append('topic', 'live_message');
		const es = new EventSourcePolyfill(url, {
			headers: {
				'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsibGl2ZV9tZXNzYWdlIl0sInN1YnNjcmliZSI6WyJsaXZlX21lc3NhZ2UiXX19.ZExNcHj3ehEyAQXbNv70JW8e_qX62KCEFLoIwQMPMwI',
			}
		});
		es.withCredentials = true;
		
		es.onmessage = message => {
			const data = JSON.parse(message.data);
			this.createBubble(data);
		}
	},

	createBubble(data) {
		let messageContainer = document.createElement('div');
		messageContainer.classList.add('message-bubble');
		messageContainer.innerHTML = `
			<div class="user">${data.username}</div>
			<div class="message">${data.message}</div>
		`;
		document.querySelector('#messages').appendChild(messageContainer);
		document.querySelector('#result').scrollTo(0, 10000);
		//document.querySelector("#button").disabled = true;
		setTimeout(_ => {
			//document.querySelector("#button").disabled = false;
		}, 5000);
	},

	fetchData() {
		const data = `username=${document.querySelector('#username').value}&message=${document.querySelector('#message').value}`;
		fetch("message", {
			method: 'POST',
			body: data,
			headers : {
				"Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",                                                                                                
				"Access-Control-Origin": "*"
			}
		});
	},

	eventListener() {

	}
}