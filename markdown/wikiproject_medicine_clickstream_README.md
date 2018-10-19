Wikiproject Medicine Clickstream data
============================

Wikipedia releases clickstream data:
* [Data Documentation](https://meta.wikimedia.org/wiki/Research:Wikipedia_clickstream)
* [Data Download](https://dumps.wikimedia.org/other/clickstream/)

This allows us to see how people move betweeen Wikipedia pages. 

Wikipedia also has a project specifically designed to improve Medical and Health content on Wikipedia
[WikiProject Medicine](https://en.wikipedia.org/wiki/Wikipedia:WikiProject_Medicine)

We can see the lists of pages that WikiProject Medicine concerns itself with by using the [Wikipedia API Category to Page API](https://www.mediawiki.org/wiki/API:Categorymembers)

Note that there are multiple different categories. I think it is possible to replicate the WikiProject Medicine priority grid which is the last table on this page:
https://en.wikipedia.org/wiki/Wikipedia:WikiProject_Medicine/Assessment

I also believe that it is possible to replicate the structure found here: 
https://en.wikipedia.org/wiki/Wikipedia:Vital_articles/Level/5/Biological_and_health_sciences/Health


We can also reverse the search and show all of the categories of the pages that are inside the Wikiproject Medicine project, using the [Wikipedia Page API](https://www.mediawiki.org/w/api.php?action=help&modules=query%2Bcategories)

The datasets of pages, categories and clickstream are massive datasets. 
This dataset is a narrowing of these dataset to solve a very specific problem.

Wikiproject medicine has had huge successes disseminating its information into other language in an impactful manner 

https://www.nytimes.com/2014/10/27/business/media/wikipedia-is-emerging-as-trusted-internet-source-for-information-on-ebola-.html

One of this strategies is to use Wikipedias "internet in a box" program https://meta.wikimedia.org/wiki/Internet-in-a-Box
So provide copy of the entire corpus of health information, in local languages all over the world, even in places where Internet is absent or very expensive. 

But to do this, they need to know presicely what content to provide. 

Using this dataset, we can answer the question "What pages should wikiproject medicine include" a question that can be answered by actual usage patterns. This might help WikiProject medicine to know, for instance, which Biology articles are vital to include. Further, it might be possible to advise the WikiProject Medicine editors on methods to improve their understanding of articles that are "central" from users priority but are not a high priority for the project. 

Of course, I also think it is important to simply "see" the wikipedia wikiproject medicine article as a flow-graph. 
It is entirely possible that there might be insights that a wikipedian might be immediately be able to see in the graph that might be very difficult for someone else to understand. 

At a smaller scale I think it might be interesting to create interactive graphs that reveal the "neighborhood" around a given article, especially and article that has already reached FA status. 




Whats included
----------------------

* category_to_resource.csv - How categories in wikiproject medicine relate to pages
* wikiproject_category.csv - The list of all wikiproject (which is groups of editors acting to address a specific issue) 
* wikiproject_medicine_category - The list of wikiproject medicine categories
* wikiproject_medicine_clickstream - the clickstream data filtered to include the following
	* anytime a wikiproject article appears in the 'to' or 'from' fields
	* anytime a page that is linked to by wikiproject medicine is in the 'to' or 'from' fields

Looking elsewhere
----------------------
We did not include it, or pre-filter the data, but I suspect that the page-view data (which shows how often a page was viewed) might be a good overlay for this.
https://wikitech.wikimedia.org/wiki/Analytics/AQS/Pageviews

Also, this might be a good job for Gephi..
https://gephi.org/




