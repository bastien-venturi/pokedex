/* POPULATE TYPE */ 
INSERT INTO type (name) VALUES
('Normal'),
('Fire'),
('Water'),
('Electric'),
('Grass'),
('Ice'),
('Fighting'),
('Poison'),
('Ground'),
('Flying'),
('Psychic'),
('Bug'),
('Rock'),
('Ghost'),
('Dragon'),
('Dark'),
('Steel'),
('Fairy');

/* POPULATE USERS */ 
INSERT INTO users (name, birthday, email, password) VALUES
('Ma Challah', '1990-05-05', 'amedouxlila@example.com', 'piqueAtchoum'),
('Lara Clette', '1992-07-15', 'vivelefromage@example.com', 'trempette123');

/* POPULATE POKEMONS */ 
INSERT INTO pokemons (name, description, url_img, stats_id, type_primary, type_secondary, evolutions_id)
VALUES
    ('Bulbasaur', 'A strange seed was planted on its back at birth. The plant sprouts and grows with this Pokémon.', '/public/img/pokemon/bulbasaur.png', 1, 3, 4, 2),
    ('Ivysaur', 'When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.', '/public/img/pokemon/ivysaur.png', 2, 3, 4, 3),
    ('Venusaur', 'The plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight.', '/public/img/pokemon/venusaur.png', 3, 3, 4, NULL),
    ('Charmander', 'From the time it is born, a flame burns at the tip of its tail. Its life would end if the flame were to go out.', '/public/img/pokemon/charmander.png', 4, 1, NULL, 5),
    ('Charmeleon', 'When it swings its burning tail, it elevates the temperature to unbearably high levels.', '/public/img/pokemon/charmeleon.png', 5, 1, NULL, 6),
    ('Charizard', 'It spits fire that is hot enough to melt boulders. It may cause forest fires by blowing flames.', '/public/img/pokemon/charizard.png', 6, 1, 3, NULL),
    ('Squirtle', 'After birth, its back swells and hardens into a shell. It powerfully sprays foam from its mouth.', '/public/img/pokemon/squirtle.png', 7, 2, NULL, 8),
    ('Wartortle', 'It is recognized as a symbol of longevity. If its shell has algae on it, that Wartortle is very old.', '/public/img/pokemon/wartortle.png', 8, 2, NULL, 9),
    ('Blastoise', 'It crushes its foe under its heavy body to cause fainting. In a pinch, it will withdraw inside its shell.', '/public/img/pokemon/blastoise.png', 9, 2, NULL, NULL),
    ('Caterpie', 'Its short feet are tipped with suction pads that enable it to tirelessly climb slopes and walls.', '/public/img/pokemon/caterpie.png', 10, 4, NULL, 11),
    ('Metapod', 'This Pokémon is vulnerable to attack while its shell is soft, exposing its weak and tender body.', '/public/img/pokemon/metapod.png', 11, 4, NULL, 12),
    ('Butterfree', 'In battle, it flaps its wings at high speed to release highly toxic dust into the air.', '/public/img/pokemon/butterfree.png', 12, 4, 5, NULL),
    ('Weedle', 'Weedle has an extremely acute sense of smell. It is capable of distinguishing its favorite kinds of leaves from those it dislikes just by sniffing with its big red proboscis (nose).', '/public/img/pokemon/weedle.png', 13, 4, 7, 14),
    ('Kakuna', 'Kakuna remains virtually immobile as it clings to a tree. However, on the inside, it is extremely busy as it prepares for its coming evolution.', '/public/img/pokemon/kakuna.png', 14, 4, 7, 15),
    ('Beedrill', 'Beedrill is extremely territorial. No one should ever approach its nest - this is for their own safety. If angered, they will attack in a furious swarm.', '/public/img/pokemon/beedrill.png', 15, 4, 7, NULL),
    ('Pidgey', 'Pidgey has an extremely sharp sense of direction. It is capable of unerringly returning home to its nest, however far it may be removed from its familiar surroundings.', '/public/img/pokemon/pidgey.png', 16, 8, 9, 17),
    ('Pidgeotto', 'Pidgeotto claims a large area as its own territory. This Pokémon flies around, patrolling its living space. If its territory is violated, it shows no mercy in thoroughly punishing the foe with its sharp claws.', '/public/img/pokemon/pidgeotto.png', 17, 8, 9, 18),
    ('Pidgeot', 'This Pokémon has a dazzling plumage of beautifully glossy feathers. Many Trainers are captivated by the striking beauty of the feathers on its head, compelling them to choose Pidgeot as their Pokémon.', '/public/img/pokemon/pidgeot.png', 18, 8, 9, NULL),
    ('Rattata', 'Rattata is cautious in the extreme. Even while it is asleep, it constantly listens by moving its ears around. It is not picky about where it lives - it will make its nest anywhere.', '/public/img/pokemon/rattata.png', 19, 4, NULL, 20),
    ('Raticate', 'This Pokémons impressive vitality allows it to live anywhere. It also multiplies very quickly.', '/public/img/pokemon/raticate.png', 20, 4, NULL, NULL),
    ('Spearow', 'Spearow has a very loud cry that can be heard over half a mile away. If its high, keening cry is heard echoing all around, it is a sign that they are warning each other of danger.', '/public/img/pokemon/spearow.png', 21, 8, 9, 22),
    ('Fearow', 'Fearow is recognized by its long neck and elongated beak. They are conveniently shaped for catching prey in soil or water.', '/public/img/pokemon/fearow.png', 22, 8, 9, NULL),
    ('Ekans', 'Ekans curls itself up in a spiral while it rests. Assuming this position allows it to quickly respond to an enemy from any direction with a threat from its upraised head.', '/public/img/pokemon/ekans.png', 23, 13, NULL, 24),
    ('Arbok', 'This Pokémon is terrifically strong in order to constrict things with its body. It can even flatten steel oil drums. Once Arbok wraps its body around its foe, escaping its crunching embrace is impossible.', '/public/img/pokemon/arbok.png', 24, 13, NULL, NULL),
    ('Pikachu', 'Pikachu has a static electricity buildup that lets it store and release electricity. On top of its head are two small, horn-like structures.', '/public/img/pokemon/pikachu.png', 25, 11, NULL, 26);

    /* STATS */ 

    INSERT INTO stats (hp, attack, defense, specific_defense, specific_attack, speed)
VALUES
    (1500, 400, 350, 550, 450, 700),
    (1650, 600, 550, 750, 600, 800),
    (1800, 820, 830, 100, 800, 1000),
    (390, 520, 430, 600, 500, 650),
    (580, 640, 580, 800, 650, 800),
    (780, 840, 780, 109, 850, 1000),
    (440, 480, 650, 500, 640, 430),
    (590, 630, 800, 650, 800, 589),
    (790, 830, 100, 850, 105, 780),
    (1450, 300, 350, 200, 220, 450),
    (1600, 450, 500, 300, 330, 440),
    (1500, 200, 550, 250, 250, 300),
    (1400, 350, 300, 200, 200, 500),
    (1450, 250, 500, 250, 205, 350),
    (1650, 900, 400, 450, 800, 750),
    (1440, 450, 400, 350, 350, 560),
    (1630, 600, 550, 500, 500, 710),
    (1683, 800, 750, 700, 700, 910),
    (1330, 560, 350, 250, 350, 720),
    (1555, 810, 600, 500, 700, 970),
    (1440, 600, 300, 310, 301, 700),
    (1065, 900, 650, 610, 610, 1000),
    (1350, 600, 440, 400, 540, 550),
    (1600, 850, 690, 650, 790, 800),
    (1350, 550, 300, 500, 500, 900);

/* POPULATE EVOLUTIONS */ 
INSERT INTO evolutions (evol_1, evol_2, evol_3, evol_4, evol_5, evol_6, evol_7, evol_8, evol_9)
VALUES
    (1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL),
    (4, 5, 6, NULL, NULL, NULL, NULL, NULL, NULL),
    (7, 8, 9, NULL, NULL, NULL, NULL, NULL, NULL),
    (10, 11, 12, NULL, NULL, NULL, NULL, NULL, NULL);
    