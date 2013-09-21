Class Notes
=============

#### Week 2 | 9/11/13

Breakdown how the web works
--------------
As a class we went through the "round trip" - the flow a program takes from the moment a user requests data to it returning back from a server.


1. User types in a URL (google.com)
2. DNS servers out there figure out URL is an alias for an IP Address (74.125.228.99)
3. Users' computer requests information from the server - aka the computer out there.
4. That computer figures out what to do and sends back data.
	- Did the client ask for a static file? (.html, .css, .mov, etc)
	- If not, how do what do we do? (run PHP, Rails, Python, etc)
		- Get data back..
5. Web browser parses the data.

Pretty picture attached of the diagram.

Setting up an Amazon EC2 instance
--------------
We set up an Amazon instance completely from scratch. The PDF in this directory should get you throught it. There's also an addendum explaining how to the "DNS" portion of the above flow figured out, so you can use your own domain name. 

#### EC2 Updates
This area will be updated to account for errors in my documentation.


Assignment
--------------
- Kill your server and rebuild it from scratch.
- Put your assignment from Week 1 on it.