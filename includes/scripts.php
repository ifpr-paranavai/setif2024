<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="bibliotecas/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
    // Define a data-alvo para a contagem regressiva (3 de Dezembro de 2024)
    const dataAlvo = new Date("December 03, 2024 00:00:00").getTime();

    // Função que atualiza o contador
    function atualizarContador() {
        // Pega a data e hora atual
        const agora = new Date().getTime();

        // Calcula a diferença entre a data-alvo e a data atual
        const distancia = dataAlvo - agora;

        // Calcula o tempo restante em dias, horas, minutos e segundos
        const dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
        const horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
        const segundos = Math.floor((distancia % (1000 * 60)) / 1000);

        document.getElementById("contador").innerHTML = 
                    dias + "d " + horas + "h " + minutos + "m " + segundos + "s ";

        // Se a contagem acabar, exibe a mensagem "Tempo esgotado!"
        if (distancia < 0) {
            clearInterval(intervalo);
            document.getElementById("contador").innerHTML = "Tempo esgotado!";
        }
    }

    // Atualiza o contador a cada segundo
    const intervalo = setInterval(atualizarContador, 1000);
</script>