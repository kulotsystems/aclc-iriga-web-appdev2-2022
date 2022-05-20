## Activity 03

1. Create a new **CodeIgniter 4** project named `devs`.
   ```
   composer create-project codeigniter4/appstarter devs
   ```

2. [Download **members.json**](https://github.com/kulotsystems/aclc-iriga-web-app-dev2-2022/blob/master/public/members/data/json/members.json)
   and put it in `/public/data` folder of your project.
   
3. Access `/public/data/members.json` and move your data on top.

   For example, if you are [@PaulinePomasin18](https://github.com/PaulinePomasin18), your `members.json` will look like the following:
   
   ```json
   {
       "pauline-danielle": {
           "first_name": "Pauline Danielle",
           "middle_name": "Cagnayo",
           "last_name": "Pomasin",
           "name_suffix": "",
           "birth_date": "1999-10-18",
           "gender": "Female",
           "github": {
               "username": "PaulinePomasin18",
               "avatar": "https:\/\/avatars.githubusercontent.com\/u\/103513364?s=400&u=0440c0b393000c77907779332f6772d9ddb0ab0f&v=4"
           }
       },
       "arvic": {
           "first_name": "Arvic",
           "middle_name": "Salcedo",
           "last_name": "Babol",
           "name_suffix": "",
           "birth_date": "1993-03-28",
           "gender": "Male",
           "github": {
               "username": "kulotsystems",
               "avatar": "https:\/\/avatars.githubusercontent.com\/u\/78327825?v=4"
           }
       },
   
   
       ...
   }
   ```
   
4. Study [How to parse a JSON File in PHP](https://www.geeksforgeeks.org/how-to-parse-a-json-file-in-php/)
   to read your `members.json` and use its data to recreate this website:
   
   [**https://www.kulotsystems.tech/devs**](https://www.kulotsystems.tech/devs)
   
   It is equivalent to <https://localhost:8080/devs> during development.


#### TIPS
* Observe the routing and behavior of the website.
* Download and use this CSS stylesheet: <https://www.kulotsystems.tech/css/devs.css>
* Inspect Element

#### GRADING
Your work will be rated using a value from `0` to `100`.

#### SUBMISSION
Push your work into your own private GitHub repository named `devs`. Just invite me as a collaborator in your project.