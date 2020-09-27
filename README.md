# Web_scraping_using_PHP

I have used PHP Simple HTML DOM for Web scrapping.
Few Feature Of Uing Simple HTML DOM Parser:-
1) Written in PHP5+, an HTML DOM parser is good because it enables you to access and use HTML quite easily and comfortably.
2) With it, you can find the tags on an HTML page with selectors pretty much like jQuery.

# My project is running live at https://priyalassignment.000webhostapp.com/
I have used Localhost server for running my project.
Documentation:- https://simplehtmldom.sourceforge.io/manual.htm

Regarding Project Plan:-

Project Title:- I have to display top 10 medium article that user have entered in search box.(Provide live suggestion to user in search query box and if article is not found regarding particular word then display similar word that user can search in search query box.)

Project Plan and Each file explanation:- 

•	Index.html:- Main Page where user have to enter search tag.

•	Newproject.php: - In this page user finds top 10 post w.r.t tag entered by user.
•	Final.php:- This page will display the medium post that user have clicked in newproject.php page.
•	Search_history.php:- this page will display search history.
•	Delete_history.php :-  this page contains code of deleting search history.
•	Index1.php:- when there is no result found for user tag. User will be redirected to this page where user will find suggestion for tags. (this page is similar to index.html only difference is that user will find suggestion).

1.	

•	As soon as I got this assignment, I searched about web scraping and its tools so there were different tools for different languages like python, php, selenium etc. 
•	I studied the document and the basic problem statement is to make to a website in which user can search for a tag and website is going to show medium post related to tag that user enters and when user click on particular post then my website should fetch details from medium website and display complete result.
•	Now I studied what I knew in web development. so php is primary language is chosen by me and started looking for web scraping tool in php.
•	After a while I came across that I am going to use Simple HTML DOM tool for web scraping and watched some related video on YouTube and documentation from sourcefromnet.com.
•	After this I have decided I am going to use php along with Simple HTML DOM.

2.	6th August 2020.
•	I started implementing basic structure for backend architecture. 
•	Task 1: - “To find how searching mechanism is perform in medium website”. So, I found a URL that medium website uses to find post according to the tag. So, I modified that link in such a way that it fetches post that user wants(By replacing tag element from original link). Now this modified URL fetches the posts that user wants and I fetched complete html using web scrapping tool in my file and displayed required info like author, detail etc in my file. 

•	Task 2: - After searching for a particular word user is redirected to a new page which contains top 10 post associated with the tag from medium. Now user click on any of the post he wants to see now he will be directed to new page ”final.php” and I have used get to method to pass “post link” as an argument to final.php page.

3.	 
•	Task 3: - in this I have found all the element tags that article has and displayed all the tags using web scrapper tool (Simple HTML dom). But problem that I faced after displaying tags was that for an image tag it was showing alt tag associated with it. So, I have to eliminate all this blank space along with tag. So I noticed that alt tag doesn’t have src attribute. So, I started running for loop and found those tag and add attribute as display: None and hence they were not visible.  

•	Task 4: - But what if there is no post for the tag? I have to consider this case so if there is no post then $link(in file newproject.php)  will return zero and I have added if loop in my code so, what it does is, if this case occurs then its will return “no data found” to user on page index.php.

•	Task 5: - As soon as it returns, I have used api of data muse. when this api is called with user search value and it is returning similar words that user have entered. If there is no such words then it is displaying message that search value might be wrong.

4.	 
•	Task 6: - now I have to display search history hence I have created database and added two functionalities of insert as soon as user searches and display search history when user click on search history button.
•	Task 7:- I have added one function for live suggestion when user types tags then it displays live suggestion for tag which was created using data muse api. 
