# A2A
My A2A Interview Task

Distilled Assighnment

- Pretend you are assisting a movie research company in analyzing trends in the industry. The
company wants to better understand box office performance.


- Create a rela.onal database to keep track of the necessary theater and movie
information.
• In your database, you should have at least 2 theaters and 2 movies.
• In your database, you should keep track of each movie’s sales at each theater for each
calendar day. You should have at least 2 days of data. Therefore, you will have at least 8
data points (e.g. Movie 1, Theater 2, May 9th).
• Write two programs in two different languages that prompts a user for a calendar date
(e.g. 5/9/2024) and then interacts with your database to find which movie theater
generated the most sales for that day. Be conscious of poten.al bad actors making
queries!

Deliverables
• All deliverables should be put into a GitHub repository, please share the GitHub
repository link as your final submission
• Explanation of the schema and database dump files to show data created.
• The two sets of code you wrote to accomplish the task.
• Any other information you think would be helpful for us to understand your solution.



My Notes:

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