Laravel echo server - чат | Realtime
======================

* ***Actions on deployment of the project***

- Making a new project
 
	`sudo chmod -R 777 /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc`

	//!!! .conf
	
	`sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/dka-develop_laravel_vue_echo_server.loc.conf`
		
	`sudo nano /etc/apache2/sites-available/dka-develop_laravel_vue_echo_server.loc.conf`

	`sudo a2ensite dka-develop_laravel_vue_echo_server.loc.conf`

	`sudo systemctl restart apache2`

	`sudo nano /etc/hosts`

	`cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc`
		
- Deploy project:

	`git init`
	
	`git clone https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server.git`
	
	_+ Сut the contents of the folder up one level and delete the empty one._
	
	`composer install`
	
- Create database, like dka-develop_laravel_vue_echo_server( `utf8mb4_general_ci` Collation )

- Configure database connection, `.env` file:

```			
DB_DATABASE=dka-develop_laravel_vue_echo_server
```	
	
- Reset cached settings:
	
	`php artisan config:clear`
	
- Run migrations:
	
	`php artisan migrate`
	
- Run Seeder: 
	
	`php artisan db:seed`
		
- !!!

	`npm install`

- !!!

	`npm run dev`
			
[(#7 3:30)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=210 )  - Start all services.
Rebuilding the code:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	npm run watch-poll
	php artisan serve

In different terminals:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	laravel-echo-server start

And listening to the queue:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	php artisan queue:work
	
[(#7 3:40)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=220 ) - Launch 2 browser windows:
!!! We go in each window under different users: !!! OPEN one window -> "Open a New Window", the second - "Open a New Private Window" !!!:
!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/
	
	Vano  
		vano_tatysho@gmail.com
		psw: vano_tatysho
												
!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR, THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/					
	
	Vaso
		vaso_nuasho@gmail.com
		psw: vaso_nuasho
							
We enter the same room(- for example, the 1st ) in both browsers:

	http://127.0.0.1:8000/room/1

Then we check variants with change rooms:	
And Ivan( Vano ) Sergey( - my second user is Vaso ) disappears from the list of active users. Ivan( Vano ) enters the same room as
and Sergey( - my second user, Vaso ). And Sergey( - my second user, Vaso ) now sees that Ivan( Vano ) is connected. We write a message -
chat also works. As you can see, each room has its own chat. Sergey( - my second user, Vaso ) returns to room #2 - EVERYTHING works.
As you can see, the prefix( in the console ) is NOT `private` now, but `presence`.

Checking the result: [#7 (3:30)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=210 )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/1.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/2.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/3.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/4.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/5.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/6.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/7.png )

#### Useful links:

<https://www.nicesnippets.com/blog/proc-open-fork-failed-cannot-allocate-memory-laravel-ubuntu>

<https://stackoverflow.com/questions/48910876/error-eacces-permission-denied-access-usr-local-lib-node-modules-react>

---

[#1 Laravel Vue Tutorials: Laravel echo server - chat | not pusher | Websocket (6:56)]( https://www.youtube.com/watch?v=m7C_YdeILqY&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk )

Description:

Let's start learning how to work properly with vue in laravel.

Actions:

	//npm run watch-poll - use 

	composer create-project laravel/laravel ./ 5.7	

Error:

<https://www.nicesnippets.com/blog/proc-open-fork-failed-cannot-allocate-memory-laravel-ubuntu>

	free -m
	sudo /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024
	sudo /sbin/mkswap /var/swap.1
	sudo /sbin/swapon /var/swap.1

In past releases, we have used `Redis`, `Node`, `Socket.io` to create `Realtime` applications. In future releases, we will use `Laravel echo` and start with a clean slate.
[(0:55)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=55 ) - To work with `Vue` in `Laravel` ALWAYS run `npm run watch-poll` compilation command. - This option of creating a `Realtime` application also requires a `Redis` SERVER:

	sudo apt install redis-server

By the way, `redis` does NOT work only on Linux, it can be used on different OS.
[(1:20)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=80 ) To check, open the `redis`-SERVER console and execute the `ping` command:
	
	redis-cli
	ping
	
IF answer: `PONG` means EVERYTHING is great.

[(1:28)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=80 ) Install using `composer` the package that will make `Laravel` work with the `redis`-SERVER. In the directory with the `laravel` project, execute the following command:

	composer require predis/predis

[(1:40)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=100 ) Let's make sure that the `.env` file contains the settings for connecting to the `redis`-SERVER:
	
```	
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```	
		
+ Change the broadcaster from `log` to `redis`:

```
BROADCAST_DRIVER=redis
...
QUEUE_CONNECTION=redis
```

[(2:00)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=120 ) Let's see if the `redis`-SERVER is listening on the given port:

	netstat -an | grep 6379
	
 - Also we will use `redis` to work with queues in `Laravel`. Queues are essentially deferred tasks with which we can postpone the execution of a task at a later time,
for example sending a message.
[(2:20)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=140 ) In our case, it is `Realtime`, so in the configuration(`.env`) it is necessary to change the system for the queues to work:
	
```	
QUEUE_DRIVER=redis
```	
 
 - And also, as we ALL the same need to use `Redis` - we specify it.
[(2:25)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=145 ) Be sure to execute the command to reset the settings cache:

	php artisan config:cache
 
[(2:40)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=160 ) Moving on to installing `laravel-echo-server`. It needs to be installed globally, which means that privileges are required for installation( - use the `sudo` command ):
	
	sudo npm install -g laravel-echo-server
	
[(3:00)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=180 ) Now, in the folder with the `laravel` project, execute the command to create a configuration file for starting `echo-server`:

	laravel-echo-server init
		
- Developer mode -Yes (Yes);
- Port (6001), leave as default;
- What type of database is used: `redis`;
- Hostname, since we use it locally for development, specify `localhost`;
- http or https - In development mode, we need http;
- HTTP API - We DO NOT need yet (N), and cross-domain requests are the same. (N)

- This ALL can be corrected manually in the configuration file.

We look - laravel-echo-server.json
[(3:40)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=220 ) To start, you need to use this command:

	laravel-echo-server start 

[(3:48)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=228 ) We also need to install 2 js libraries, use npm:
	
	npm install --save laravel-echo socket.io-client

( - `laravel-echo` and `socket.io-client` client )
	
npm install
+ npm install -g npm

Error: EACCES: permission denied, access '/usr/local/lib/node_modules/npm/node_modules/npm-registry-fetch/node_modules/safe-buffer:

<https://stackoverflow.com/questions/48910876/error-eacces-permission-denied-access-usr-local-lib-node-modules-react>
	
	sudo chown -R maximus /usr/local/lib/node_modules	
	
[(4:00)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=240 )! Also, DON'T forget IF you did NOT run the `npm install` command - you must run it.
[(4:10)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=250 ) Go to Laravel configuration - open the configuration file with application settings( `config/app.php` )

- It is necessary to uncomment the line with the `BroadcastServiceProvider` service provider;

```php
...
App\Providers\BroadcastServiceProvider::class,	
...	
```

	- In the `boot()` method, it loads the routes from the `routes/channels.php` file	
`routes/channels.php`
/*Here you can register ALL broadcast channels supported by the application. The specified channel authorization callbacks are used to check if the authenticated user can listen on the channel.*/
Call-back function, the condition is checked in it, and the equivalence operand is used, that is, the user id must match NOT only in value, BUT and in the type of the variable. That is, the id of the channel and the authorized user
matches, then it will be allowed to listen to the channel. BUT while we're talking about the public channel, it does NOT matter.( - For now, comment.)

[(5:20)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=320 ) Configure `laravel-echo` on the client side( `resources/js/bootstrap.js` )
 - As you can see, there is a template for `pusher server`, we will NOT use it. It is necessary to import the `laravel-echo` library and connect the client part of the `socket.io` library that we installed earlier. Change the broadcaster to `socket.io`,
`host` using js which will return us the hostname and be sure to specify the port( 6001 ) which was asked on the server side.

[(6:30)]( https://youtu.be/m7C_YdeILqY?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=390 ) Also DO NOT forget to run the command to rebuild the code before changing the js code:
	
	npm run watch-poll

#### useful links:

<https://www.nicesnippets.com/blog/proc-open-fork-failed-cannot-allocate-memory-laravel-ubuntu>
		
<https://stackoverflow.com/questions/48910876/error-eacces-permission-denied-access-usr-local-lib-node-modules-react>
	
---

[#2 Laravel 5.7 what has changed again and is it worth considering | the review is not complete | laravel 5.7 lessons (5:09)]( https://www.youtube.com/watch?v=vf2DCoLn9LY&list=PLD5U-C5KK50X1KcfueA73sGSjBsd8vgVG&index=2 )
	
This video is duplicated in the playlist, identical to the lesson in the larger playlist of 21 videos. It uses the transition to a newer version at that time, Laravel 5.7( - changes in the folder structure ).

---

[#3 Laravel Vue Tutorials: Laravel echo server - chat | part 2 | part 2	(8:39)]( https://www.youtube.com/watch?v=YYb-mxVk1zs&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&index=3 )
	
Description:

Let's start learning how to work properly with vue in laravel.

Actions:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc

[(0:25)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=25 ) Our first action is to create a template in which our chat will be displayed. IF you did not execute the command for authorization, it will execute it:

	php artisan make:auth

`routes/web.php`	
[(0:40)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=40 ) Change the name of the template for the route that is responsible for the main page `chat.blade.php`.
[(0:45)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=45 ) Let's create it and include the layout that was created after executing the command to create authorization `resources/views/chat.blade.php`. - This will list our Vue component that we will create.
Open the layout `resources/views/layouts/app.blade.php` - You see, this includes the `app.js` file that contains the Vue code. It must be connected.
[(1:30)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=90 ) After each change of the js code, you need to rebuild( `app.js` - it must be connected( - in `app.blade.php` ) )

	npm run watch-poll

[(1:35)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=95 ) Create an event:

	php artisan make:event Message

`Message.php`

As in the previous examples, follow the same steps. - We implement the class interface( `ShouldBroadcast` ) - create an object in the class that will be public( `$message` ) and the event that will receive
one parameter and assign its value to the class object. Channel - here the recording will be different, we will use the channel class which is a public class as in the previous videos.
[(2:30)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=150 ) Let's create a custom component from the `resources/js/components/chat.vue` example. Add a form element that will be displayed. message and a field for entering a message.

`Chat.vue`

```
...
<script>
...
```		

We add two properties, the first will be an array and store our messages, the second will store the text of the message that we want to send. We output ALL values ​​of the message array, each element of which
will start on a new line. Let's create a bi-directional connection with the message text to send and by pressing the Enter key the method for sending messages will be called.
[(3:40)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=220 ) - Create a method, use the `POST` method, route `messages`( - `routes/web.php` ) and parameters for sending: the name and value of our field. After sending, add the text to the array. We clear the field for entering messages.
[(4:10)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=250 ) Let's create this route in `routes/web.php`. It will fire an event and pass the value of the message input field (! DO NOT write the code in the route file, we will use it for a quick demo).
It remains for us to create a connection between the CLIENT and the SERVER for the Realtime to work.
Let's add code at the time of component mounting that will be responsible for listening to the channel from the user's side. We turn to the Echo js library, the channel method is passed the name of the channel `'chat'`.
Then, in the listen method, we specify the name of the events. When creating we use an arrow function. We can modify the record of the arrow function and immediately pass in the body NOT ALL parameters that come from the SERVER,
and a key which is an object in the event class. And add to the array the message text that was entered by some user.
[(5:55)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=355 )Registering our component - `resources/js/app.js`:

	npm run watch-poll

We print in the template `chat.blade.php`:
	
```	
<chat></chat>
```	

[(6:15)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=375 ) - it is better to run in the terminal so that PhpStorm does NOT hang:

	npm run watch-poll

- In different terminals:
Now, in the directory with the project, you need to run two commands, the first one:
		
	laravel-echo-server start
		
which on the SERVER side will accept the connection from the user. The second is the queue. This command will process the queues and deliver messages to the user.

	php artisan queue:work

We need to fix the code. In the route, we are already passing the element value to the event, NOT an array. Accordingly, we remove the call to the property and leave ONLY the value.
[(7:00)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=420 ) We launch 2 browser windows: we type in the 1st field - fine, the message is completed, BUT it is duplicated. There is a simple solution implemented by the standard. We open an event and class `InteractsWithSockets`.
It has a method `dontBroadcastToCurrentUser()` - it just needs to be added to our event.

[(7:15)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=435 ) `Message.php`
- To NOT duplicate the message, add to `__construct()`:

```php	
$this->dontBroadcastToCurrentUser();
```

[(7:40)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=460 )
`routes/web.php` + `Chat.vue`
  - Try again - great. IF in the route we passed ALL the values that come, then in the component it is necessary would refer to the element.
[(7:55)]( https://youtu.be/YYb-mxVk1zs?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=475 ) Let's see what is displayed in the console: who joined the channel; to which, `'left'` - means that the user has left the channel, which event was triggered. The queue displays the running and completed tasks.
- After the end of the work, an event was sent to users.

	`http://dka-develop_laravel_vue_echo_server.loc`

---

[#4 Laravel echo server - private chat (private chat and channel) | part 1 | part 1	(9:35)]( https://www.youtube.com/watch?v=epfEcW-EB_A&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&index=4 )

Actions:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	
In this release, we will start exploring private channels on laravel-echo-server. Private channels are needed so that the user to whom the message is addressed and only he can receive
transmitted data. This means that another user will NOT be able to intercept them.
[(0:30)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=30 ) 
![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/4/1.png ) - We are of course talking about a standard intercept attempt. Even by changing the channel name through the browser console, this will NOT work. The current hack remains a vulnerability
systems, BUT this is a separate topic and no one is immune from this. This topic will consist of two issues. In order for private channels to work and user code and code on
the SERVER side must be configured. When connecting, the user must indicate that he is connecting to a private channel and transmit a value or number. It will already be used here
the `channels` file in the routes folder.
[(1:20)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=80 ) `routes/channels.php` - This file is responsible for authenticating the user, whether he can connect to this channel OR NOT. The first parameter takes the name of the channel, there is a part
Immutable, it must match the part that the user is sending. And the second part is a number or value that can change, that is, where the user wants to connect.
It is used here as a variable interpolation in a string OR an entry as in routes - the value from `channels.php` will be substituted in curly braces. The second parameter in the call-back function
must match this record. `{room_id}` - The main thing is that as a result of this function, the value TRUE is returned. There may be a lot of code here that checks whether the user can
connect to this channel. - IF the return is FALSE, the user's connection to the channel is rejected. IF TRUE, then the user connects to the channel AND listens for data.
[(2:15)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=135 ) The next event is `Message.php`. There will also be changes, there is another class for private channels( `PrivateChannel` ) and the channel must also match the part that does NOT change and the part that it receives.
`Message.php`

```php
public function broadcastOn()
{
	return new Channel('chat');
}
```
	
[(2:40)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=160 )
![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/4/2.png ) Let's imagine the user connected to room 2, the matching route is checked in the route file, then the call-back function checks if the user can connect
to the channel. It returns TRUE and the user waits for the data. As soon as the event sends data via this channel, the user will receive it. By the way to the channel name when using private channels
prefix `private` is added in front of it.
[(3:05)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=185 ) Let's do it quickly for the sake of experiment, that is, it means that it is NOT necessary to do this - in the next part of the video we will do it more correctly.
[(3:15)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=195 ) - We return as it was in the state of the previous lesson. Let's do it more correctly.
[(3:25)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=205 ) Create a copy of the component from the previous `PrivateChat.vue` video. We change the channel to `private`, indicate the room number in the routes, add a new channel, add the room number, check.
We will immediately return TRUE. - This is NOT necessary. It is necessary to check whether the user can enter this channel. - We will do this in the next videos, but for now we need to show you how it works.
Add the team number to the dispatch.
[(4:10)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=250 ) Create a `PrivateChat` event:

	php artisan make:event PrivateChat 

It will transfer ALL values from the component. - We indicate the channel and the number of the team that came from the component. In the component we change the event and the key, since the class member is no longer `message`, but `data` and
Message text.
[(5:25)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=325 ) Register the component in `app.js` and output to the `chat.blade.php` template. In the file with routes, change the event that is called when a message is sent. We pass ALL values from the component to the event. There is an important note:

```
<private-chat></private-chat>
```
	
! Open the `channels.php` file. In this route, the user is authenticated, it is checked according to the route specified in the `laravel-echo-server` configuration
`channels.php`
		
```php		
Broadcast::channel('room.{room_id}', function ($user, $room_id) {
	return true;
});
```		
		
[(6:20)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=380 )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/4/3.png )

This is the route, and the host is specified. 
[(6:30)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=390 ) `laravel-echo-server.json` - We are currently using running Laravel with a SERVER for development on port 8000. And here the port is NOT specified - it must be specified.
IF you are using Apache OR nginx and port 80, then you can NOT specify it.

- Create a database. for authorization - `dka-develop_laravel_vue_echo_server`

`.env` customize:

```
DB_DATABASE=dka-develop_laravel_vue_echo_server
DB_USERNAME=root
DB_PASSWORD=root
```	
		 
	php artisan config:cache

	php artisan migrate
	
+ migrate tables for authentication.

It is necessary to have 2 users.

	Vano  
		vano_tatysho@gmail.com
		psw: vano_tatysho
	Vaso
		vaso_nuasho@gmail.com
		psw: vaso_nuasho

[(6:35)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=395 ) Launch EVERYTHING that is needed. Rebuilding the code:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	npm run watch-poll
	php artisan serve

In different terminals:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	laravel-echo-server start

And listening to the queue:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	php artisan queue:work

[(7:00)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=420 ) Launch 2 browser windows. We have two users, let's go under them. IF you DO NOT have users in the system, create them:

!!! We go in each window under different users: !!! OPEN one window -> "Open a New Window", the second - "Open a New Private Window" !!!:

!!! NECESSARILY ENTER THE ADDRESS AS THE AUTHOR, THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/
	
	Vano  
		vano_tatysho@gmail.com
		psw: vano_tatysho
		
!!! NECESSARILY ENTER THE ADDRESS AS THE AUTHOR, THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/							
	
	Vaso
		vaso_nuasho@gmail.com
		psw: vaso_nuasho
	
	http://dka-develop_laravel_vue_echo_server.loc/login

We send a message. - Perfectly, EVERYTHING works. Duplication can be eliminated as in the previous release.
[(7:25)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=445 ) Remove duplicate messages:  
`PrivateChat.php`

```php
public function __construct($data)
	{
		$this->data = $data;
		$this->dontBroadcastToCurrentUser();
	}
```			

[(7:35)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=455 ) - Both users have connected to channel OR room #2, since the route returns TRUE and ALL has access.

[(7:50)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=470 )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/4/4.png ) Two users have different id in the database. Now we will indicate in the routes like this:
[(7:55)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=475 ) Add a condition to `channels.php` IF the user's id is equal to the channel( room ) number, then he is allowed to enter:
( - Matches ONLY for Vaso id(2) = room_id(2) )
`channels.php`

```php
return (int) $user->id === (int) $room_id;
```
	
[(8:20)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=500 ) Refreshing browser windows:
In Terminal with `laravel-echo-server start`:
IF the user is allowed to connect, the connection will be displayed in the terminal in blue.
In another browser window:
IF - the user is NOT allowed to connect, the `403 connection ERROR` will be highlighted in red.

[(8:50)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=530 ) Change the condition so that only Vaso can "listen":
`channels.php`

```php
return (int) $user->id === 1;
```	

[(9:05)]( https://youtu.be/epfEcW-EB_A?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=545 ) In the next release, we will create a table with rooms, link it to the user table and tell who can connect to which room, because the check must be correct.

---

[#5 Laravel echo server - private chat (private chat and channel) create different rooms | part 2 | part 2 (12:06)]( https://www.youtube.com/watch?v=YXI16BqCP_s&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&index=5 )

Description:

Let's start learning how to work properly with vue in laravel.

Actions: 

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc

In this release, we will complete the private chat created in the previous release and will check through the database whether the user can connect to the channel OR NOT.
[(0:25)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=25 ) Create a model and migration for working with channels:
	
	php artisan make:model Room -m

The relationship between user tables and rooms will be `Many-To-Many`. - Who is NOT familiar with her - can be found in our video, hint at the top:
[Laravel many-to-many relationships | Laravel many to many relationships | Laravel 5.6 and below |]( https://www.youtube.com/watch?v=GPk3soWIP0E )
Therefore, it is necessary to create a table that
will act as an intermediary and store the Links.
[(0:45)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=45 ) We create a migration WITHOUT a model, it is NOT needed for the mediation table.
	
	php artisan make:migration create_room_user_table

Open migration with rooms and add one field in which the name of the room will be stored.
[(1:19)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=79 ) `create_rooms_table.php`

```php
$table->increments('id');
$table->string('name');
$table->timestamps();
```		
		
In the mediator table, you need to add 2 fields containing values from the table with
rooms and user tables.

[(1:39)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=99 ) `create_room_user_table.php`

```php
$table->integer('room_id');
$table->integer('user_id');
$table->timestamps();
```

[(1:45)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=105 ) Run migrations:
	
	php artisan migrate

[(2:10)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=130 ) Create a link in the models. In users( `User` ) we indicate the relationship `Many-to-Many` with the room model( `Room` ). In the rooms table in `Room.php` - the same relationship with users( `users` ).
Also, to use the bulk fill function - this is when we pass a key-value array to create a record in the database, you need to specify EITHER the filled fields( `$filled[]` ) OR those that
are prohibited from filling( `$guarded[]` ). - We will use the second method. Since you DO NOT need to fill anything, the array will be empty.
[(2:29)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=149 ) - create a link with the `User.php` model:

```php
public function rooms(){
	return $this->belongsToMany(Room::class);
}
```	
		
[(2:55)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=175 ) - create a connection with the `Room.php` model:

```php
protected $guarded = [];

public function users(){
	return $this->belongsToMany(User::class);
}
```	

[(3:12)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=192 ) Now we will be using an interactive environment, we will NOT use controllers, routes and templates to populate the database. BUT and using phpMyAdmin AND similar tools
  - this is also trivial and NOT entirely correct. + You'll also see how to use `tinker` again.
	
	`php artisan tinker`

From the last issue, you remember that we had two users Ivan( `id=1` ) and Sergey( `id=2` ). Let's fetch the string with Ivan from the database:

```php
$user = App\User::find(1);
```

Let's check the connection:

```php
$user->rooms;
```
	- That's right, empty since there is NO associated data, and there are NO rooms either.

[(3:45)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=225 ) Let's create rooms using the model with rooms, the bulk method, pass an array with the key `name` - the name of the room AND the value.
Let's create a room:

```php
App\Room::create(['name'=> 'Первая комната']);
```

We add the 2nd room.

```php
App\Room::create(['name'=> 'Вторая комната']);
```

[(4:15)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=255 ) Now we connect Ivan( Vano ) with rooms 1 and 2:

```php
$user->name 
```

Ivan( Vano )

```php
$user->rooms()->attach([1,2])
```

[(4:45)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=285 ) Let's exit and rerun the ping:

```php 
exit 
php artisan tinker
$user = App\User::find(1);
```

Checking the connection:

```php 
$user->rooms
```

	- There is a connection with the 1st and 2nd rooms.

[(5:00)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=300 ) Now Sergey( Vaso ):

```php 
$user = App\User::find(2); 
```

He will ONLY communicate with the 1st room.

```php 
$user->rooms()->attach([1])
```

Checking the connection:

```php 
$user->rooms
```

	- Great, only the first room.
	
```php 	
exit
```

[(5:30)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=330 ) Now you need to create a route that will be responsible for the pages with rooms. Method - `get`, path - room, `/rooms{room}`. To load a model when transmitting a number along a route, you need to
variable name matched( `$room` ). Now we return the template and pass the variable.
[(6:30)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=390 ) Let's create a route for a page with rooms:
`routes/web`:

```php 	
Route::get('/room/{room}', function (App\Room $room) {
   
	return view('room',['room' => $room]);
   
});
```

Make a copy of the template from the previous video and name it as indicated in the route( `room.blade.php` ).
[(6:35)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=395 ) - Dynamic property, we pass the value from the base, they will be serialized.

```
<private-chat :room="{{$room}}"></private-chat>
```

[(7:10)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=430 ) Open up our last component AND initialize the dynamic property `props: ['room']`:

`PrivateChat.vue`

```
props: ['room'],
	...
console.log(this.room)
```		

[(7:35)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=455 ) Let's show how it will look, print the value to the console. We start the development SERVER and compile the code again:
		
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	
	npm run watch-poll

[(7:40)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=460 )
	
	php artisan serve

[(7:45)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=465 )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/5/1.png )

 Open the browser along the route of room #1, and the console (F12):

	http://127.0.0.1:8000/room/1

	- See, here comes ALL the values from the table from room #1.

Now the second room

	http://127.0.0.1:8000/room/2

	- EVERYTHING is the same.
	
Let's in the component, when opening a room, we will also transmit the channel name with the room number And when sending a message, the room number will also be transmitted.
[(8:23)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=503 ) `PrivateChat.vue`

```
window.Echo.private('room.' + this.room.id)
...
axios.post('/messages', { body: this.textMessage, room_id: this.room.id })
```	

[(8:30)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=510 ) Open the routes of the channels `routes/channels.php`. Now here it is necessary to check whether the user can enter this room, we turn to the user
who tries to connect, then look for associated rooms with this user. To check, there is a function that looks for a value in the collection, pass it
parameter # of the room to which the user is trying to connect. - Ivan( Vano ) is connected, his `id = 1`, we get ALL values ​​from this linked table
with Ivan( Vano ) and check IF among them there is a # room that the UN is trying to enter. - Then TRUE will be returned to `channels.php` and the user is listening to the channel. IF
matches NO - then he will be refused connection.
[(8:55)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=535 ) `routes/channels.php` - condition, check if the user can enter this room:

```php
return $user->rooms->contains($room_id);
```
	
[(9:20)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=560 ) - Let's start everything as in the previous release:
We compile, rebuild the code:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	npm run watch-poll
	php artisan serve

In different terminals:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	laravel-echo-server start

And listening to the queue:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	php artisan queue:work

[(9:35)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=575 ) - Now let's go to the browser "under Ivan" (Vano) - he has permission to enter the first and second rooms.

	- !!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:
					
	http://127.0.0.1:8000/
						
Vano
  
	vano_tatysho@gmail.com
	psw: vano_tatysho
		
We enter first room:
	
	127.0.0.1:8000/room/1
	
	We look at the console - laravel-echo-server. - EVERYTHING is successful.

Second:

	127.0.0.1:8000/room/2
	
We look at the console - laravel-echo-server. - Also EVERYTHING is successful.

[(10:00)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=600 ) Now Sergey( second user, I have Vaso ).

Vaso:

	vaso_nuasho@gmail.com
	psw: vaso_nuasho
	
We enter first room:

	http://127.0.0.1:8000/room/1

We look at the console - laravel-echo-server. - Things are good.

Second:

	http://127.0.0.1:8000/room/2
	
We look at the console - laravel-echo-server. - Denied ( `403` ).
Remember, we created a connection between Sergei( Vaso ) with the 1st room, and did NOT indicate the 2nd.
[(10:25)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=625 ) - Let Sergey( Vaso ) add permission to enter both rooms:

	php artisan tinker

```php	
$user = App\User::find(2); 
$user->rooms
$user->rooms()->attach([2])
```

Restart:

```php
exit
php artisan tinker
$user = App\User::find(2); 
$user->rooms
```

[(11:15)]( https://youtu.be/YXI16BqCP_s?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=675 ) Checking:

	http://127.0.0.1:8000/room/2
	
	- Entry is now allowed. Let's send a message - EVERYTHING works.
    +
	- We check the sending of messages, from two windows to each other in the same rooms, first the first, then the second.
!!! We go in each window under different users: !!! OPEN one window -> "Open a New Window", the second - "Open a New Private Window" !!!:

!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/
	
---	

[#6 Laravel echo server - private chat user events | Ivan is typing a message ... | whisper (7:31)]( https://www.youtube.com/watch?v=cXeNaMOEo0U&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&index=6 )
	
Description:

Let's start learning how to work properly with vue in laravel.
Laravel echo server whisper.

Actions:

	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc

In this series, we will learn how to broadcast user events to ALL chat participants.
[(0:15)]( https://youtu.be/cXeNaMOEo0U?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=15 ) Illustrative example:

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/6/1.png )

We went under different users Ivan( Vano ) is typing a message and Sergey( - the second user Vaso ) sees who is typing it.
As soon as the dialing has stopped after a certain time, the message disappears and is hidden after receiving the message.
Now Sergei( Vaso ) is dialing - Ivan( Vano ) sees who is dialing. We open our project from the last video. Needed in the project
pass the user under which we are logged in, we pass through dynamic properties.
[(1:40)]( https://youtu.be/cXeNaMOEo0U?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=100 ) `resources/views/room.blade.php`. IF entered - the block is displayed. It is even better to use route validation for these purposes.
We transfer the data of the authorized user. Open the private chat component `PrivateChat.vue`.
We initialize the dynamic property `user`. So that the recording with the listened channel does NOT repeat itself - let's take it out separately.
 - For these purposes it is better to use `computed`, and NOT to render methods; assign a name and return this entry. - Now you can
using `this.channel` is great OOP in action, try NOT to produce code. Now, when you press any key, we will
call the method. 

We create the `actionUser()` method, listen to the channel, the `.whisper()` method will broadcast to the channel that the user types
message. The second parameter is an array. We will transfer the name. We refer to the property, one of the elements of which is
the `name` field. The event has been sent. - How do we get it? Add one more method to the listener that will listen to the event
`.listenForWhisper()`; By the way, the event name is NOT a reserved word, you can specify any and process it. You can track
any user action. An arrow function accepts data. Let's create a field that will be displayed IF the property is
display TRUE. 

We initialize, `isActive: false` - by default FALSE. Now, when the event is triggered, assign this property
the value of `this.isActive`, it will receive an array of data. Accordingly, we enter the value of the `name` key and the usual static package.
Now you need to add a timer after which this property will take on the value FALSE, and this block will be hidden,
that is, when the user stops typing, he gets distracted ... Create a timer, it will take on the value `false` after 2
seconds. And one more thing, so that there is NOT a situation when one timer is superimposed on another, that is, when one does NOT finish its work -
starts another, it is necessary to reject the execution of this code ... - add one more property `typingTimer`. IF `timer = TRUE` -
then we cancel the execution and assign the timer value to this property. Now, as soon as the message arrives, the timer is also needed
cleanse. So that there is NO situation when a message from the user came, but the fact that he is typing the text is still displayed.

[(6:25)]( https://youtu.be/cXeNaMOEo0U?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=385 ) - We start all services.
Rebuilding the code:

	`cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc`
	
	`npm run watch-poll`
	
	`php artisan serve`

In different terminals:
		
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	laravel-echo-server start

And listening to the queue:
		
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	php artisan queue:work
		
[(6:30)]( https://youtu.be/cXeNaMOEo0U?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=390 ) Checking the result. - Launch two different browser windows. - This is IMPORTANT, users must be different( Ivan( Vano ), Sergey( Vaso )):

!!! We go in each window under different users: !!! OPEN one window -> "Open a New Window", the second - "Open a New Private Window" !!!:

!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/
	
	Vano  
		vano_tatysho@gmail.com
		psw: vano_tatysho
												
!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/					
	
	Vaso
		vaso_nuasho@gmail.com
		psw: vaso_nuasho
							
We enter the preview in Both browsers:	

	127.0.0.1:8000/room/1					
	
We are typing a message, Ivan( Vano ) is typing, a "whisper" is visible - excellent. Sergei( Vaso ) - also.
    - We send messages to each other, we see a "whisper". Super, the chat has become more dynamic.
 
--- 
 
[#7 Laravel echo server - Presence Channel | Who is chatting? | joining and leaving | part 4 (5:10)]( https://www.youtube.com/watch?v=BpOu55DLQgU&list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&index=7 )

Description:

Let's start learning how to work properly with vue in laravel.

Actions:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc

We are continuing our study of `laravel-echo-server` and in this series we will talk about `presence channel`. This will be useful to us in the case when
we want to see who connected to the chat, who left the chat, and how many users are online. ALL the code in our video is based on the first episode
our `laravel-echo-server` tutorials. 
Open our component with the `PrivateChat.vue` chat. For the `presence channel` to work, you need to change the method
from `private` to `join`. Now here we can start working with online users who came in and those who left the chat. Let's create separately
a list in which we will display the chat participants, use the lists( `<li>`, `v-for` ... ) display the contents of the array, initialize our property
`ActiveUsers`. To keep track of ALL participants, use the `here()` method. This is the return value from the pipe. We assign it to our
property. Now, IF the user is connected, add the value that came from the channel to the array. And it remains to remove the user from the array
who left the chat. We use the splice method and remove the index from the array that matches the value of the logged out user.

[(2:30)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=150 ) Ok, let's go to `routes/channels.php`. - Changes need to be made here. To get data in a component, you need from
route to return them. Yes ... here you can return NOT only boolean values: TRUE or FALSE. We check if the user is allowed to enter the room,
then we return his name. And as we know, any content other than `NULL`, `false`, and an empty array is TRUE. therefore
the user will be allowed to enter the channel and get the list of participants.

```php
if ($user->rooms->contains($room_id)){
	return $user->name;
}
```

Each method has its own purpose:

- Who is here - `here()`.
- Who entered - `join()`.
- Who left - `leaving()`.

[(3:29)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=209 ) `PrivateChat.php`. It remains in the event to change `private` to `presence`.

```php
return new PresenceChannel('room.' . $this->data['room_id']);
```

Checking the result:
[(3:30)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=210 ) - Start all services.
Rebuilding the code:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	npm run watch-poll
	php artisan serve

In different terminals:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	laravel-echo-server start

And listening to the queue:
	
	cd /var/www/LARAVEL/VUE/dka-develop_laravel_vue_echo_server.loc
	php artisan queue:work

In browsers, go to the same rooms under different users.

[(3:40)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=220 ) - Launch 2 browser windows:

!!! We go in each window under different users: !!! OPEN one window -> "Open a New Window", the second - "Open a New Private Window" !!!:

!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/
	
	Ivan( Vano )
		vano_tatysho@gmail.com
		psw: vano_tatysho
												
!!! ALWAYS ENTER THE ADDRESS AS THE AUTHOR THROUGH THE DEVELOPMENT SERVER:

	http://127.0.0.1:8000/					
	
	Sergey( - my second user, Vaso )
		vaso_nuasho@gmail.com
		psw: vaso_nuasho
													
We enter the first in both browsers:
	
	http://127.0.0.1:8000/room/1
	
Great, the online users are displayed. Sergey( - my second user, Vaso ) goes to another room:

	http://127.0.0.1:8000/room/1

Then we check variants with change rooms:	
And Ivan( Vano ) Sergey( - my second user is Vaso ) disappears from the list of active users. Ivan( Vano ) enters the same room as
and Sergey( - my second user, Vaso ). And Sergey( - my second user, Vaso ) now sees that Ivan( Vano ) is connected. We write a message -
chat also works. As you can see, each room has its own chat. Sergey( - my second user, Vaso ) returns to room #2 - EVERYTHING works.
As you can see, the prefix( in the console ) is NOT `private` now, but `presence`.

Checking the result: #7 [(3:30)]( https://youtu.be/BpOu55DLQgU?list=PLD5U-C5KK50WlQNiunPPXSj5jjxVVTPtk&t=210 )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/1.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/2.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/3.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/4.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/5.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/6.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/dka-develop_laravel_vue_echo_server/blob/master/public/images/7/7.png )