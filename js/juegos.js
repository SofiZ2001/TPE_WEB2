"use strict"

    function create_game_HTML(game) {
        let element = `${game.nombre}: ${game.plataforma}: ${game.imagen}`;
        element += `<a href="game/${game.id}">Ver</a> `;
        element += `<a href="update_game/${game.id}">Finalizar</a> `;
        element += `<a href="delete/${game.id}">Eliminar</a>`;
        element = `<li>${element}</li>`;
        return element;  
    }

    function get_games() {
        fetch("api/tareas")
        .then(response => response.json())
        .then(games => {
            let juegos_ul = document.querySelector("#games");
            juegos_ul.innerHTML = "";
            for (let game of games) {
                juegos_ul.innerHTML += create_game_HTML(game);
            }
        })
        .catch(error => console.log(error));
    }

    document.querySelector("#form-games").addEventListener('submit', add_game);

    function add_game(e) {
        e.preventDefault();
        
        let data = {
            nombre:  document.querySelector("input[name=nombre]").value,
            plataforma:  document.querySelector("input[name=plataforma]").value,
            imagen:  document.querySelector("input[name=imagen]").value
        }

        fetch('api/games', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data) 
         })
         .then(response => {
             get_games();
         })
         .catch(error => console.log(error));
    }

    get_games();
