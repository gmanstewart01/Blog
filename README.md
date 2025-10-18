# Introduction
PHP: Hypertext Processor, also known as PHP, is a widely used, open source scripting language employed by many web developers because of its ability to run and store information on a server. Rather than storing sensitive information in the user’s browser which could easily be accessed and manipulated by malicious scripts and browser extensions, PHP code defends the security of the user’s data by keeping all of the information in a web server. This information can be additionally defended in PHP through password hashing, as passwords are registered directly with the server, processed by PHP code, hashed by PHP code, and then stored into the database with potential threat actors unable to access the original password.

<br>

PHP code is also useful for its ability to update data dynamically and persist across different kinds of browsers. Given that data is processed and stored manually on the server through client interactions with the PHP, users have the potential to interact with and update the same shared data. This facilitates online interactions as clients can view, modify, and share datasets which are stored internally on the web server (like social media posts). The other advantage to PHP coding is that it allows users to access their data on different devices and different browsers, a capability that local storage, which is limited to a single browser on a single device, cannot provide.

<br>

To manage and track these interactions securely across multiple pages and to ensure that each user’s data and interactions remain consistent as they navigate a website, PHP employs sessions, which store user-specific information on the server. Sessions are particularly useful for users who jump across multiple tabs on a website because they provide the necessary credentials to ensure that the user remains logged in. Picture Amazon’s webpage and imagine how frustrating it would be if every time a user clicked on a product, they were forced to enter in their username and password. PHP sessions facilitate that process. They store a user’s login state on the server and link that logged-in status to a unique session ID on the browser. As a result, when the user revisits the webpage through the same browser at a later time, the browser provides the same session ID which connects with the server’s database.

<br>
With this understanding, we can now dive into the step-by-step process of setting up and using sessions in PHP, so you can implement secure, persistent user interactions on your own website. In each step of these instructions, there will be both a specific list of instructions that the user should follow, followed by an explanation. Each is labelled as such.

# Initial Setup
Clone this repository in the directory of your choice. Click on the green <>Code button in this github repository and copy the https link. Navigate to the directory of your choice in the terminal, type git clone and then paste the link you copied before.

<br>
In your directory should now be 3 files: docker-compose-yml, Dockerfile, and hello.php. Pull up your terminal, navigate to this directory and type the following: docker-compose up. Your docker application should now be running a local host that you can visit by typing in the following: http://localhost:4000/hello.php.

# Tutorial

### Step 1: Create a basic HTML form
Instructions: 

Explanation: 


### Step 2: Initialize your session
Instructions: Type at the top of your php file the following: `<?php session_start(); ?>`

<br>

Explanation: What this is essentially doing is creating a new session or resuming an existing one. This should be called before anything is sent to the browser as an output.

### Step 3: Store your values into your session array
Instructions: 

<br>

Explanation: There is a special global session array denoted as `$_SESSION` for php code. What this means is that there is an empty special list (or storage box) of data which can be called upon by any php page after adding `session_start();`. In order to add data into the list, you must type something similar to the following: `$_SESSION['username'] = 'kate';`. In this case, the data you are storing is in the form of what is called a key-value pair. In this case, `'username'` is the key. A key is the label or name for a piece of data. In this case, it is the label/name for `'kate'`, which is the actual value we are storing.

### Step 3:
Instructions:

<br>

Explanation: 