<?php

/*simuleremo la gestione di un negozio di strumenti musicali. Creare la classe astratta per il negozio. All'interno avrà una costante con il nome del negozio: MusicInstruments.nCreare una giusta gerarchie di classi e sottoclassi per i clienti e gli strumenti da vendere. Il nuovo cliente entrato deciderà quale strumento comprare.
Ogni volta che il cliente viene istanziato, la classe che si occupa dei clienti deve implementare obbligatoriamente un'interfaccia per salutare il cliente, come mostrato nello screenshot. Il cliente prova uno strumento. Se è soddisfatto, compra lo strumento e viene ringraziato del suo acquisto. Se non sceglie nulla, verrà semplicemente salutato con un altro messaggio. In base allo strumento che ha comprato il cliente, verrà aumentato sia il contatore del singolo strumento venduto (esempio: chitarra), e il contatore di tutti gli strumenti venduti nella giornata. Ogni strumento è una classe. Se l'utente sceglie di comprare più volte lo stesso strumento, verrà effettuata una copia del primo strumento. Dovranno aggiornarsi anche i rispettivi contatori. Per simulare un resoconto di fine giornata, mostrare il numero di strumenti venduti, così come la quantità della singola categoria di strumenti venduti. Mostrare anche quanti sono i clienti sono entrati in negozio.*/


abstract class MusicStore {
    const STORE_NAME = "MusicInstruments";

    abstract public function salutareCliente();
}

class strumento extends MusicStore {

    public function salutareCliente();

}











?>