Pius Khainja

Research & Project approval (Maze 2D)

MVP specification
An obstacle-based maze game would include; 

player-controlled characters that can navigate a maze; 

an algorithm for detecting collisions between them and walls; 

A random maze generator; and, most importantly, win condition when the player reaches the end of the maze.

The data flow for the 3D Maze game will resemble this:
User Input: A player uses keyboard or gamepad controls to move their character across the screen.

Character Positioning: The game engine tracks where each character currently is on screen.

Maze Generator: When the game begins or when a player reaches the end of a maze, the maze generator uses a random algorithm to generate a new maze for them to navigate using. 

Maze Data: Outputted from this generator includes information regarding walls, open spaces and start/end points as well as locations of walls/open spaces etc.

Collision detection: The game engine monitors a character's position against maze data to determine if they have collided with any walls. 

Win condition: Once they reach the endpoint, when their character reaches this condition it initiates and ends the game.

 Architecture

                      Web Client
                           |
                           |
                           V
                 ---------------
                 | API Gateway |
                 ---------------
                           |
                           V
                 ---------------
                 |   Server    |
                 ---------------
                           |
                           V
               -----------------------
               |  Snowflake Database  |
               -----------------------

In this architecture, a web client accesses the game via an API gateway. The gateway receives requests from clients and directs them to an appropriate server; then this server processes those requests and returns a response; it also interacts with Snowflake databases which store game-related data such as maze data, player profiles and leaderboard data.

These API routes could be implemented using an API gateway server and its server would be responsible for handling requests and interacting with databases to retrieve or update data as required.

Overall, this architecture provides an efficient and scalable means of managing client-server communication and data storage for the 2D maze game, while permitting easy maintenance and updates as necessary.

APIs and Methods
/create_maze: This route could be used to generate a new maze. A client would submit a request with parameters like width and height of their desired maze; in response, the server would generate one and return it back to them.
/move: This route could be used to update a player's position in the maze. A client would send an XML request with their new coordinates to the server, who would then update its game state accordingly.
/win: This route could be used to indicate when one player has won a game, such as when sending in their username/ID for verification and updating of leaderboard or game data accordingly.
/leaderboard: This route could be used to access the current leaderboard for your game. A request would be sent from client to server, with results returned as a list of usernames/IDs with their scores attached.
/users: This route will be used to get a list of all users.
/users/:id: This route will be used to get a single user by their ID.
/mazes: This route will be used to get a list of all mazes.
/mazes/:id: This route will be used to get a single maze by its ID.
/cells: This route will be used to get a list of all cells.
/cells/:id: This route will be used to get a single cell by its ID.
/items: This route will be used to get a list of all items.
/items/:id: This route will be used to get a single item by its ID.
/scores: This route will be used to get a list of all scores.
/scores/:id: This route will be used to get a single score by its ID.

These API routes will be used by the web client to communicate with the web server. The web client will send HTTP requests to the web server, and the web server will respond with JSON data. The web client will then parse the JSON data and display it to the user.

Function/methods that I will be creating:
create_user(): This function will be used to create a new user.
get_user(): This function will be used to get a single user by their ID.
update_user(): This function will be used to update a user's information.
delete_user(): This function will be used to delete a user.
create_maze(): This function will be used to create a new maze.
get_maze(): This function will be used to get a single maze by its ID.
update_maze(): This function will be used to update a maze's information.
delete_maze(): This function will be used to delete a maze.
create_cell(): This function will be used to create a new cell.
get_cell(): This function will be used to get a single cell by its ID.
update_cell(): This function will be used to update a cell's information.
delete_cell(): This function will be used to delete a cell.
create_item(): This function will be used to create a new item.
get_item(): This function will be used to get a single item by its ID.
update_item(): This function will be used to update an item's information.
delete_item(): This function will be used to delete an item.
create_score(): This function will be used to create a new score.
get_score(): This function will be used to get a single score by its ID.
update_score(): This function will be used to update a score's information.
delete_score(): This function will be used to delete a score.

These API endpoints and function/methods enable other clients to interact with my game. For example, clients could use create_maze() or get_score() functions to build new mazes, or access user scores with get_score() functions.

Data Modelling
A data model diagram to clarify how data will be stored



User Stories
As a user, my goal is to be able to create new mazes easily and create unique challenges. Additionally, being able to control my player's movement will enable me to navigate my maze more efficiently as well as interact with its surroundings more fully.

As a user, my goal is to gather items. Doing this will allow me to improve player abilities and advance through the game. Additionally, solving puzzles adds another level of challenge that makes completion more rewarding and engaging.

As a user, I wish to be able to compete against other players in my game, adding more social interaction and making it more fun to play. Its Pitfalls of creating generic user stories:

Pitfalls of creating user stories that are too general:
General user stories can be difficult to estimate; it is often challenging to accurately estimate the time and effort required to implement one, leading to scope creep and project delays.
Furthermore, these user stories can be hard to test, often leading to bugs being missed during development and production testing.

Prioritization can be challenging with user stories; therefore, general user stories may lead to features being implemented out-of-order or not at all.


