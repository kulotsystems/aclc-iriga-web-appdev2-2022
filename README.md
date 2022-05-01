## Practice GitHub Collaboration
Hello future Web Application Developers! Welcome to our practice collaboration in GitHub.

### Installation
1. Download and Install [**XAMPP 8.1**](https://www.apachefriends.org/download.html).
2. Access your GitHub account on your web browser.
3. Download and install [**GitHub Desktop**](https://desktop.github.com/).
4. Sign in to **GitHub Desktop** using your existing account.
5. Clone this repository to your `~/xampp/htdocs` folder.

   Its final path should be `~/xampp/htdocs/aclc-iriga-web-app-dev2-2022`.
   
6. Use an Integrated Development Environment (IDE) to open the cloned project.
   
   Example of IDEs:
   * [Visual Studio Code](https://code.visualstudio.com/)
   * [Sublime Text](https://www.sublimetext.com)
   * or [Notepad++](https://notepad-plus-plus.org/downloads/) will do

### Testing
Start **Apache** in your **XAMPP** Control Panel, then access this URL on your Web browser:
```
http://localhost/aclc-iriga-web-app-dev2-2022
```

### Contributing
Open this repository in your **GitHub Desktop** then create and checkout to your own branch.

Then on your **IDE**, perform the following:

Create your personal `php` file inside the `public/members/data` folder.
        <br>
        Then, fill it up with your basic personal information as shown below:
        
```php
<?php

    array_push($members, [

        'first_name'   => 'your-first-name',
        'middle_name'  => 'your-middle-name',
        'last_name'    => 'your-last-name',
        'name_suffix'  => '(example: Jr.)',
        'birth_date'   => 'YYYY-MM-DD',
        'gender'       => 'Male or Female',
        'github' => [
            'username' => 'your-github-username',
            'avatar'   => 'your-ghithub-avatar-link'
        ]

    ]);

?>
```

You can also look at [public/members/data/arvic.php](public/members/data/arvic.php) for further reference.

After creating your own file, link it to the [public/members/index.php](public/members/index.php) by requiring it.

```php
...

<!-- Add your personal PHP file from 'data' folder -->
<!-- EXAMPLE -->
<?php require_once 'data/arvic.php'; ?>

<!-- ADD IT HERE -->

...
```

If you see your name on the list of members in your browser, you're good to go.

You then need to push your branch to the online GitHub repository using **GitHub Desktop**,
then create a new **Pull Request**.
