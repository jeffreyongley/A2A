# A2A
My A2A Interview Task

Database Schema:
There are three tables
Films - Contains each of the films and a release date (that I didnt use but kept in for completeness) and an id
Theaters - Contains a theater name and id
Showings - A pivot table that connects these two and contains the Revenue for each film at each theater for each date. 

My Notes:
I set the bulk of this up as a very simple laravel project. I left most if it intact includeing the home route. 

To run assuming you have laravel installed should just have to use valet park on the repo and go to 
http://movie_research.test/revenue

This is very simple app I didnt have a huge amount of time to get it pretty. I know you wanted my submission back quick and time is tight during the week. So I squeezed in as much as I could!

Obviously there isnt alot of data in the db so your only options for date entries are:
2024-11-03
2024-11-04
2024-11-05

Future Improvements I would make
- Write a use a laravel validator for the input. 
- styling obviously.
- Obviously make the return not an echo!

The Prompt Did mention Using a second language so I incldued a simple python script to query the database for the same data as well. 
