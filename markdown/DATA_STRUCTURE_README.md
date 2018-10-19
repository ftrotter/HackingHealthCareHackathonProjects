Regulations Comments Data ReadMe
================================

This data directory contains the raw results of docket and document queries made against the regulations.gov API. 
Data from the federal register is available in bulk, from URLS like this: 

https://www.gpo.gov/fdsys/bulkdata/

Which contain the raw contents of the Federal Register (and also things like Bills, etc etc)

However, for questionable reasons, these  bulk resources do not contain the comments that are submitted to through regulations.gov
Further, still more questionable reasons, the API is rate limited. Both of these are likely related to the drama surrounding the 

The comments are only available as structured data through the regulations.gov API. 
(If you know different please contact Fred Trotter)

The documentation for that API lives here: https://regulationsgov.github.io/developers/

This file is full of data were harvested using GeekOffTheStreet https://github.com/ftrotter/GeekOffTheStreet

The data is split into three types of files that correspond to the main endpoints in the API

* Search results https://api.data.gov/regulations/v3/documents
* Dockets https://api.data.gov/regulations/v3/docket
* Documents https://api.data.gov/regulations/v3/document

For comments that are submitted directly through regulations.gov in the web form, the docket API call will include the raw-text submitted for each comment. 
Some comments however, are only availble as uploaded PDF or word document (etc) files. For these, you must do a call to the document(singlular) API 
in order to get the url needed to download the pdf (or whatever) in question. GeekOnTheStreet only downloads the comment API data when it needs to, in order to get the comment text. 

Search result data
--------------
Files that begin with 'search' are the results of searches against the API search https://api.data.gov/regulations/v3/documents.json
The search functionality is largely equivlent to the advanced search functionality here: https://www.regulations.gov/advancedSearch
But for the most part, the automations of GeekOffTheStreet, simply throws a simple term into one end, and
generates a file called search.whatEverThatSearchPhraseWas.type_.X.json
The thing that lives after the type, is the type of search it was, which can be

* N: Notice
* PR: Proposed Rule
* FR: Rule
* O: Other
* SR: Supporting & Related Material
* PS: Public Submission

The searches will return a list of documents, with each document linking to a docket id

Docket data
----------
This data files takes the form docket.FTC-Blah-Blah-Blah-2018-XXXX.1000.json 
it always starts with docket.
Then the agency and docketid, followed by a period. 
Then the paging location, usually counting by the 1000s (the largest page size in the API). 

The vast majority of the comments will be contained in these docket files, especially for dockets where there was lots of interaction from the public. 


Document data
------------
Counterinutitively these are relatively rare. Gathered only when the docket record did not contain the comment. 
These can include json, html, and pdf/whatever data. 


Notes for GeekOnTheStreet users
================================

The contents of the data/ directory are from GeekOnTheStreet 
These should all be mirrored in google files as well. 
but they will not be included in git because of the .gitignore
