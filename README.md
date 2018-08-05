# faq

To run the FAQ project:

1. git clone https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database/with sqlite or other (https://laravel.com/docs/5.6/database)

FAQ Epic
    Phase I - Create initial app/project.
        This entails cloning the FAQ from the professors Github
        Once this was done, and was changed to be our own, we could begin adding the extra features.
    Phase II - Setup the database.
        In this pahase we setup te database. This entails models, seeds, migrations and unit tests.
        The migrations we created were profile, questions and answers.
    Phase III - Forms and validations
        In this phase we created the forms and code for login, questions, answers, profile and logout
        This including testing the data from our created databases, and 
        testing creating new users and profiles.
    Phase IV - Adding our own additional feature.
        For this phase I chose an additional feature to add. I actually chose a couple.
        I started with adding code that show's the user's first name after 
        logging in, and show's it is their profile on the profile page. My next feature 
        was to add code to show a default profile image. This entailed 
        adding another column/data point to the profile database table.
        After that I needed to add special code to the app.php, profile.blade.php, and 
        other areas. I also needed to add a public folder Avatars to the Storage directory 
        for the Default image. When the user creates a profile or logs in, the default
        image shows with their name. An issue arose that coud not be fixed when 
        the app was uploaded to Heroku. The file is not stored on Heroku. I also updated the looks of certain areas of pages
        on the website. Last, I attempted to create a way for the user to upload their own image for a profile picture.
        I was not able to accomplish this as I would get an error. Afetr the error I would refresh the page
        and the image would show. I took 2-3 days to try and figure out and I could not.
        I removed the code BUT sent a branch to Github (final feature II) to show my efforts 
        
    Story I-A website seems better when personalized, so a good feature is 
            seeing your name when you login.        
            .5 hours to learn. .25 hours to implement-1 person
    Story II- A website should have an appealing look to it instead of white.
            .5 hours to learn. .25 hours to implement - 1 person
    Story III - A website should have an image of the user. If there isn't an 
            image, a default image like Facebook should be there for the 
            profile.
            2 hours to learn and research. 1 hour to implement and test. - 1 person
    Story IV - A good website has a profile image of the user, if they desire. It 
            should also be the user's choice of what that image is. 
            THIS WAS NOT COMPLETED EVEN THOUGH CODE WAS IMPLEMENTED AND TRIED
            AND ALTERED.
            Approximately 6-8 hours of research and learning.
            Approximately 14-16 hours of implementing, trial and retrial.