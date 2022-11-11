const app = {

	posted: false,

	init() {
		this.listen();
		this.getLastMessage()
		this.eventListener();
	},

	listen() {
		const url = new URL(postFlushUrl);
		url.searchParams.append('topic', 'live_message');
		const es = new EventSourcePolyfill(url, {
			headers: {
				'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsibGl2ZV9tZXNzYWdlIl0sInN1YnNjcmliZSI6WyJsaXZlX21lc3NhZ2UiXX19.ZExNcHj3ehEyAQXbNv70JW8e_qX62KCEFLoIwQMPMwI'
			}
		});
		es.withCredentials = true;
		
		es.onmessage = message => {
			const data = JSON.parse(message.data);
			this.createBubble(app.posted, data);
		}
	},

	getLastMessage() {
		fetch("/lastMessage", {
			method: 'POST',
			headers : {
				"Content-Type": "application/x-www-form-urlencoded;charset=UTF-8",
				"Access-Control-Origin": "*"
			}
		}).then(response => response.json()).then(data => {
			data.forEach(lastMessage => {
				const data = {message: lastMessage.message, username: lastMessage.username};
				this.createMessageHtml(data);
			});
		});
	},

	createMessageHtml(data) {
		let messageContainer = document.createElement('div');
		messageContainer.classList.add('message-bubble');
		messageContainer.innerHTML = `
			<div class="user">${data.username}</div>
			<div class="message">${data.message}</div>
		`;
		this.checkLimit();
		document.querySelector('#messages').appendChild(messageContainer);
		document.querySelector('#result').scrollTo(0, 10000000);
	},

	createBubble(posted, data) {
		this.createMessageHtml(data);
		if(posted === false) {
			return;
		}
		document.querySelector('#message').value = "";
		document.querySelector("#button").disabled = true;
		setTimeout(_ => {
			document.querySelector("#button").disabled = false;
			document.querySelector('#message').focus();
			app.posted = false;
		}, 3000);
	},

	checkLimit() {
		const bubbleElement = document.querySelectorAll('.message-bubble');
		if(bubbleElement.length === 100) {
			bubbleElement[0].remove();
		}
	},

	fetchData() {
		const data = `username=${document.querySelector('#username').value}&message=${document.querySelector('#message').value}`;
		fetch("message", {
			method: 'POST',
			body: data,
			headers : {
				"Content-Type": "application/x-www-form-urlencoded;charset=UTF-8",
				"Access-Control-Origin": "*"
			}
		}).then(response => response.json()).then(data => {
			app.posted = true;
		});
	},

	limitFormat(event, limit) {
		event.target.value = event.target.value.substr(0, limit);
	},

	checkInputs() {
		const messageElement = document.querySelector('#message');
		const userElement = document.querySelector('#username');
		if(userElement.value.trim().length === 0) {
			userElement.focus();
			return;
		}
		if(messageElement.value.trim().length === 0) {
			messageElement.focus();
			return;
		}
		if(userElement.value.trim().length > 0 && messageElement.value.trim().length > 0) {
			this.fetchData();
		}
	},

	eventListener() {
		document.querySelector('#username').addEventListener('keypress', event => {
			if(event.key === "Enter") {
				event.preventDefault();
				this.checkInputs();
			}
		});

		document.querySelector('#message').addEventListener('keypress', event => {
			if(event.key === "Enter") {
				event.preventDefault();
				this.checkInputs();
			}
		});

		document.querySelector('#message').addEventListener('input', event => {
			this.limitFormat(event, 80);
		});

		document.querySelector('#username').addEventListener('input', event => {
			this.limitFormat(event, 20);
		});

		document.querySelector('#button').addEventListener('click', event => {
			this.checkInputs();
		});
	}
}