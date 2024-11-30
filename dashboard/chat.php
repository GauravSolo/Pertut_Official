<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Real-Time Video Call</title>
    <style>
        video {
            width: 50%;
            height: auto;
            border: 1px solid black;
        }
        #local-video {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>WebRTC Video Call</h1>
    <video id="local-video" autoplay muted></video>
    <video id="remote-video" autoplay></video>

    <button id="start-call">Start Call</button>
    <button id="end-call">End Call</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/adapterjs/0.14.0/adapter.min.js"></script>
    <script>
        const localVideo = document.getElementById('local-video');
        const remoteVideo = document.getElementById('remote-video');
        const startCallBtn = document.getElementById('start-call');
        const endCallBtn = document.getElementById('end-call');

        let localStream;
        let peerConnection;
        let socket;
        let remoteStream;

        const signalingServerUrl = 'ws://localhost:8080'; // WebSocket server

        // STUN server to get the public IP
        const iceServers = [
            {
                urls: 'stun:stun.l.google.com:19302'
            }
        ];

        startCallBtn.onclick = startCall;
        endCallBtn.onclick = endCall;

        // Initialize WebSocket connection
        socket = new WebSocket(signalingServerUrl);

        socket.onopen = () => {
            console.log('Connected to the signaling server');
        };

        socket.onmessage = (message) => {
            const data = JSON.parse(message.data);

            if (data.message === 'offer') {
                handleOffer(data);
            } else if (data.message === 'answer') {
                handleAnswer(data);
            } else if (data.message === 'ice-candidate') {
                handleICECandidate(data);
            }
        };

        // Start video call
        async function startCall() {
            try {
                // Get local media stream (video + audio)
                localStream = await navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: true
                });

                localVideo.srcObject = localStream;

                // Create WebRTC connection
                peerConnection = new RTCPeerConnection({ iceServers });

                // Add local media stream to peer connection
                localStream.getTracks().forEach(track => peerConnection.addTrack(track, localStream));

                // Listen for remote stream
                peerConnection.ontrack = (event) => {
                    remoteVideo.srcObject = event.streams[0];
                };

                // Handle ICE candidates
                peerConnection.onicecandidate = (event) => {
                    if (event.candidate) {
                        sendICECandidate(event.candidate);
                    }
                };

                // Create offer and send it to the other peer
                const offer = await peerConnection.createOffer();
                await peerConnection.setLocalDescription(offer);

                // Send the offer through WebSocket
                sendSignalMessage({
                    message: 'offer',
                    offer: offer
                });

            } catch (err) {
                console.error('Error starting call:', err);
            }
        }

        // Handle incoming offer
        function handleOffer(data) {
            peerConnection.setRemoteDescription(new RTCSessionDescription(data.offer));

            // Create answer and send it back to the other peer
            peerConnection.createAnswer().then((answer) => {
                return peerConnection.setLocalDescription(answer);
            }).then(() => {
                sendSignalMessage({
                    message: 'answer',
                    answer: peerConnection.localDescription
                });
            }).catch(err => console.error('Error handling offer:', err));
        }

        // Handle incoming answer
        function handleAnswer(data) {
            peerConnection.setRemoteDescription(new RTCSessionDescription(data.answer));
        }

        // Handle incoming ICE candidates
        function handleICECandidate(data) {
            peerConnection.addIceCandidate(new RTCIceCandidate(data.candidate));
        }

        // Send signaling messages to the other peer
        function sendSignalMessage(data) {
            socket.send(JSON.stringify(data));
        }

        // Send ICE candidate through WebSocket
        function sendICECandidate(candidate) {
            socket.send(JSON.stringify({
                message: 'ice-candidate',
                candidate: candidate
            }));
        }

        // End the call
        function endCall() {
            peerConnection.close();
            localStream.getTracks().forEach(track => track.stop());
            remoteVideo.srcObject = null;
            localVideo.srcObject = null;
            console.log('Call ended');
        }
    </script>
</body>
</html>
