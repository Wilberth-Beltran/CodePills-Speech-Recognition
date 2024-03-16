const btnStart = document.getElementById('btnStart');
const textArea = document.getElementById('textArea');
let recognition;
let silenceTimeout;

btnStart.addEventListener('click', () => {
    startRecognition();
});

function startRecognition() {
    recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = 'es-ES';
    recognition.interimResult = true;

    recognition.onstart = () => {
        console.log('Comenzó la transcripción de voz.');
        clearTimeout(silenceTimeout); // Reiniciar el temporizador de silencio
    };

    recognition.onresult = (event) => {
        clearTimeout(silenceTimeout); // Reiniciar el temporizador de silencio
        const texto = event.results[event.results.length - 1][0].transcript;
        textArea.value = texto;

        // Verificar si la palabra "sol" está presente en el texto reconocido
        if (texto.toLowerCase().includes('sol')) {
            window.location.href = 'index.html'; // Redireccionar a otra página HTML
        }   
    };

    recognition.onend = () => {
        console.log('La transcripción de voz se ha detenido.');
    };

    recognition.onerror = (event) => {
        console.error('Error de reconocimiento:', event.error);
    };

    recognition.start();

    // Establecer un temporizador para detener la transcripción si no hay sonido después de 10 segundos
    silenceTimeout = setTimeout(() => {
        console.log('No se detecta ningún sonido. Deteniendo la transcripción.');
        recognition.stop();
    }, 4000); // 10 segundos
}