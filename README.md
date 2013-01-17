MVC Starter Kit
===============
This Starter kit is meant to give you the basic files and folder structure needed for a simple MVC project.	

[What is MVC?] (http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)
========================
Model view controller (MVC) is a software architecture pattern that separates the representation of information from the user's interaction with it. The model consists of application data and business rules, and the controller mediates input, converting it to commands for the model or view. A view can be any output representation of data, such as a chart or a diagram. Multiple views of the same data are possible, such as a pie chart for management and a tabular view for accountants. The central idea behind MVC is code reusability and separation of concerns.

## 1. Folder structure
* Controllers - This folder contains the controller class.
* Models - This folder contains the data model classes
* Views - This folder contains all the view files
* Lib - This folder contains all libraries that are needed for your project, including the bootstrap.php
* Inc - Contains any file that needs to be included in the project. (I might remove this folder and merge the contents in lib later on)

### 2. htaccess file
This file configures apache so it can handle the URL requests. Make sure you install this file on the root of your folder and add a (dot) in-front of .htaccess

### 3. URL Request
example http://localhost/controller/method/variable