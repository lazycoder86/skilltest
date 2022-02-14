
*******************
Release Information
*******************
I used the CodeIgniter 3 framework because is easy to demonstrate and test my PHP coding skills.
Because of the time limit, I used a third party REST Server API for Codeigniter. Please see the resources section.
The API is working.
`Short video: <https://www.loom.com/share/373219a41419429db5cddce254ba43bb>`_
I disabled API auth so that we could easily test the API endpoint. In the API controller function, the CSV path is set statically.
The API class is located in the application/controller directory. In the "application/libraries" folder, I created an ImageLibrary class that will handle reading csv data and converting it to JSON.

For CLI request:
I created a class controller/CLI.php (which has yet to be tested), but the logic is already there.

Improvements:
Implement secure API auth, proper error handling when reading csv data, and improve the API response format.

*******************
Server Requirements
*******************
PHP version 7.0 or newer is recommended.
Composer

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.


*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Third Party CI Rest Server <https://github.com/chriskacerguis/codeigniter-restserver>`_


