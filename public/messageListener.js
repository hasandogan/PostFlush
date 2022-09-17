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
    document.getElementById('live_message').innerHTML =  data.username + " : "  + data.message;
    createBubble(allData)
    }

    function createBubble(allData){
        var vw = window.innerWidth;
        var vh = window.innerHeight;

        var pad = 6;
        var minWidth = 70;
        var maxWidth = 140;
        var bubbleHeight = 70;

        var elastic = Elastic.easeOut.config(0.3, 0.3);

        var bubbles = [];


            var bubble = createBubble(allData);
            bubbles.push(bubble);
            placeBubble(bubble);


        window.addEventListener("resize", resize);

        function placeBubble(bubble) {

            bubble.placed = true;
            bubble.width  = randomInt(minWidth, maxWidth);
            bubble.left   = randomInt(pad, vw - (bubble.width + pad));
            bubble.top    = randomInt(pad, vh - (bubble.height + pad));
            bubble.right  = bubble.left + bubble.width;
            bubble.bottom = bubble.top  + bubble.height;
            // Loop through all bubbles
            for (var i = 0; i < 1; i++) {

                var b = bubbles[i];

                // Skip if b is this bubble or isn't placed
                if (b === bubble || !b.placed) {
                    continue;
                }

                // Collision detected, can't place bubble
                if (intersects(bubble, b)) {
                    bubble.placed = false;
                    break;
                }
            }

            if (bubble.placed) {

                // No collisions detected. It's place is reserved and we can animate to it
                animateBubble(bubble);

            }

        }

        function animateBubble(bubble) {
        console.log("buraya kac defa girmeli");
            TweenLite.set(bubble.element, {
                width: bubble.width,
                x: bubble.left,
                y: vh
            });

            var tl = new TimelineLite({ onComplete: placeBubble, onCompleteParams: [bubble] })
                .to(bubble.element, random(0.5, 2), { autoAlpha: 1, y: bubble.top, ease: elastic }, random(10))
                .add("leave", "+=" + random(5, 10))
                .add(function() { bubble.placed = false; }, "leave") // When bubble is leaving, it is no longer placed
                .to(bubble.element, random(0.5, 2), { autoAlpha: 0, y: -vh }, "leave");

        }

        function createBubble(index) {

            var element = document.createElement("div");
            document.body.appendChild(element);
            element.className = "bubble";
            element.style.height = bubbleHeight + "px";
            element.textContent = index;

            return {
                element: element,
                placed: false,
                width: minWidth,
                height: bubbleHeight,
                left: 0,
                top: 0,
                right: minWidth,
                bottom: bubbleHeight
            };
        }

        function intersects(a, b) {
            return !(b.left > a.right + pad ||
                b.right < a.left - pad ||
                b.top > a.bottom + pad ||
                b.bottom < a.top - pad);
        }

        function resize() {
            vw = window.innerWidth;
            vh = window.innerHeight;
        }

        function random(min, max) {
            if (max == null) { max = min; min = 0; }
            if (min > max) { var tmp = min; min = max; max = tmp; }
            return min + (max - min) * Math.random();
        }

        function randomInt(min, max) {
            if (max == null) { max = min; min = 0; }
            if (min > max) { var tmp = min; min = max; max = tmp; }
            return Math.floor(min + (max - min + 1) * Math.random());
        }

    }


